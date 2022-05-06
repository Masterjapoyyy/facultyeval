<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class AdminModel extends Model{
    protected $table = 'admin';
    protected $allowedFields = ['schoolid','first_name','last_name', 'email',  'uploaded_flleinfo','password','clear_text','created_at'];
}