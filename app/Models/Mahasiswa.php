<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Mahasiswa extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'mahasiswas';
    protected $primaryKey = 'id';
    protected $fillable = [
        "NIM",
        "nama",
        "gender",
        "alamat",
        "hp",
        "email",
        "password",
        "tahun_masuk",
    ];
}