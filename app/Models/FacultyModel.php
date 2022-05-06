<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class FacultyModel extends Model{
    protected $table = 'faculty';
    protected $allowedFields = ['schoolid','first_name','last_name', 'email',  'uploaded_flleinfo','password','clear_text','created_at'];
}