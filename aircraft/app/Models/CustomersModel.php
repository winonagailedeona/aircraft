<?php
namespace App\Models;
use CodeIgniter\Model;

class CustomersModel extends Model
{
  protected $table = 'userll';
  protected $primaryKey = 'id';
  protected $allowedFields = [
    'name',
    'email',
    'password',
    'created_at'
  ];
}

?>
