<?php

namespace App\Models;

use CodeIgniter\Model;

class CheckoutModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'checkout';

    protected $returnType       = 'array';
    protected $allowedFields    = ['user_id', 'menuid'];

}