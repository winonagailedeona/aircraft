<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model{
    
    protected $table = 'users';

    protected $allowedFields = [
        'name',
        'email',
        'password',
        'contactno',
        'address',
        'state',
        'created_at',
    ];
}
