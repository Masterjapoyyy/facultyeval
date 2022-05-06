<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class UserModel extends Model{
    protected $table = 'superadmin';
    protected $allowedFields = ['email','name', 'uploaded_flleinfo','password','clear_text','created_at'];
}