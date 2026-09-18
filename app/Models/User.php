<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Locker usage sessions belonging to this user.
     */
    public function lockerUsages(): HasMany
    {
        return $this->hasMany(LockerUsage::class);
    }

    /**
     * Maintenance issues this user has reported.
     */
    public function maintenanceReports(): HasMany
    {
        return $this->hasMany(Maintenance::class, 'reported_by');
    }

    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }
}