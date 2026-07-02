<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
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

    // Roles permitidos: 'admin', 'contador', 'asistente', 'cliente'
    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }

    public function isContador(): bool
    {
        return $this->role === 'contador';
    }

    public function isAsistente(): bool
    {
        return $this->role === 'asistente';
    }

    public function isCliente(): bool
    {
        return $this->role === 'cliente';
    }

    public function auditLogs()
    {
        return $this->hasMany(AuditLog::class);
    }
}
