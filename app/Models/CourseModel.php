<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class CourseModel extends Model{
    protected $table = 'course';
    protected $allowedFields = ['course','year_level','section','created_at'];
}