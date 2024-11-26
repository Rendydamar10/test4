<?php


namespace App\Models;

use CodeIgniter\Model;

class admin_login extends Model
{
    protected $table = 'admin_login';
    protected $primaryKey = 'username';
    protected $returnType = 'array';
    protected $allowedFields = ['password'];
}