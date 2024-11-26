<?php


namespace App\Models;

use CodeIgniter\Model;

class user_login extends Model
{
    protected $table = 'user_login';
    protected $primaryKey = 'username';
    protected $returnType = 'array';
    protected $allowedFields = ['email','password','username','nickname'];
}