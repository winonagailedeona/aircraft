<?php
namespace App\Models;
use CodeIgniter\Model;

class MenuModel extends Model
{
  protected $table = 'product';
  protected $primaryKey = 'id';
  protected $allowedFields = [
    'productname',
    'description',
    'price',
    'quantity',
    'image',
    'size',
    'category',
    'created_at',
    'updated_at',
  ];
}
?>
