<?php namespace App\Models;

use CodeIgniter\Model;

class userModel extends Model
{
    protected $table = 'tbl_usuarios';
    protected $primaryKey = 'idUser';

    protected $allowedFields = ['correo','nombreUser', 'contraUser'];
}