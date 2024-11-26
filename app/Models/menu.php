<?php


namespace App\Models;

use CodeIgniter\Model;

class menu extends Model
{
    protected $table = 'menu';
    protected $primaryKey = 'id_menu';
    protected $returnType = 'array';
    protected $allowedFields = ['id_kategori','foto_menu','id_menu','kalori_menu'];
}