<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class RestrictionModel extends Model{
    protected $table = 'restrictions';
    protected $allowedFields = ['academic_id','faculty_id', 'class_id', 'subject_id'];
}