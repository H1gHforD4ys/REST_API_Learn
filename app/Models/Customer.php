<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name_customer','phone_customer','address_customer','email_customer','city_customer'
    ];
    protected $primaryKey = 'id_customer'; // bắt buộc phải để tên là primaryKey
    protected $table = 'customer';
}
