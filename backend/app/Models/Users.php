<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Users as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Users extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'user_id';
    public $timestamps = false; // nếu bảng không có created_at, updated_at

    protected $fillable = [
        'user_code',
        'user_name',
        'user_email',
        'user_password',
        'user_is_activated',
        'user_is_banned',
        'user_activate_at',
        'user_banned_at',
        'user_last_login',
        'user_password_reset_code',
    ];

    protected $hidden = [
        'user_password',
    ];

    // Quan hệ
    public function profile()
    {
        return $this->hasOne(UserProfile::class, 'user_id', 'user_id');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'users_roles', 'user_id', 'role_id');
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'user_permissions', 'user_id', 'permission_id');
    }
}
