<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientsModel extends Model
{
    use HasFactory;
    protected $table = "clients";

    protected $fillable = [
        'fullname',
        'user_id',
        'phonenumber',
        'gender',
        'address',
    ];
}
