<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class CriteriaModel extends Model{
    protected $table = 'criteria';
    protected $allowedFields = ['academic_id','criteria'];
}