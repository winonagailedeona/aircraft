<?php
namespace App\Models;
use CodeIgniter\Model;

class NewsfeedModel extends Model
{
  protected $table = 'nf';
  protected $primaryKey = 'nf_id';
  protected $allowedFields = [
    'user_id',
    'nf_content',
    'nf_rating',
    'nf_status',
    'nf_createdon',
  ];
}
?>
