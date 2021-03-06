<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Notifications\Notifiable;


class siswa extends Model implements
    AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword, HasFactory, Notifiable;
    protected $table = 'siswa';
    protected $guard = 'siswa';
    protected $fillable = [
        'nama',
        'kelamin',
        'password',
        'tanggal_lahir',
        'password',
        'nipd',
        'foto',
        'id_kelas',
    ];
    protected $guarded = [];
    protected $hidden = ['password'];
    protected $casts = [
        'created_at' => 'datetime:d M Y',
        'updated_at' => 'datetime:d M Y',
        'tanggal_lahir' => 'datetime:d M Y'
    ];
    public function idKelas()
    {
        return $this->belongsTo(kelas::class, 'id_kelas');
    }
    public function idTagJam()
    {
        return $this->hasMany(tagjam::class, 'id_kelas', 'id_kelas');
    }
}
