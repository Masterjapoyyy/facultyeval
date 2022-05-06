<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class AcademicModel extends Model{
    protected $table = 'academic_year';
    protected $allowedFields = ['year','semester','created_at'];
}