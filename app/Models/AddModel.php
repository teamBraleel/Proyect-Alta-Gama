<?php namespace App\Models;

use CodeIgniter\Model;

class AddModel extends Model
{
    protected $table = 'tbl_productos';
    protected $primaryKey = 'idproduct';

    protected $allowedFields = ['idproduct','nombreProducto', 'precio', 'imagen'];
}
