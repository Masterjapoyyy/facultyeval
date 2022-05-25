<?php namespace App\Models;
  
use CodeIgniter\Model;

class StudentModel extends Model{

    protected $table = 'student';
    protected $allowedFields = ['schoolid','first_name','last_name', 'email','course','uploaded_flleinfo','password','created_at'];

   
}