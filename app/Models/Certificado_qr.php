<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Certificado_qr extends Model
{
    use HasFactory;

    protected $table = "certificado_qr";
}
