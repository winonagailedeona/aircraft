<?php
namespace App\Models;
use CodeIgniter\Model;

class AddAdminModel extends Model
{
  protected $table = 'admin';
  protected $primaryKey = 'id';
  protected $allowedFields = [
    'image',
    'name',
    'email',
    'position',
    'password',
    'created_at',
    'updated_at'
  ];
}

?>
