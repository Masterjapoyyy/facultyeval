<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class QuestionModel extends Model{
    protected $table = 'question';
    protected $allowedFields = ['academic_id','question', 'created_at'];
}