<?php
namespace App\Models;
use CodeIgniter\Model;

class CustomersModel extends Model
{
  protected $table = 'users';
  protected $primaryKey = 'id';
  protected $allowedFields = [
    'name',
    'email',
    'password',
    'created_at'
  ];
}

?>
