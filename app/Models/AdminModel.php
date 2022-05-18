<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class AdminModel extends Model{
    protected $table = 'admin';
    protected $allowedFields = ['schoolid','first_name','last_name', 'email',  'uploaded_flleinfo','password','role','created_at'];
}