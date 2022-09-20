<?php namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
      protected $table = 'users';
    
    protected $allowedFields = [
        'username',
        'email',
        'user_image',
        'password',
        'created_at'
    ];
}