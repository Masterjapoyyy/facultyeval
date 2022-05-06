<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class SubjectModel extends Model{
    protected $table = 'subject';
    protected $allowedFields = ['subject_code','subject','description','created_at'];
}