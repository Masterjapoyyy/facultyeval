<?php namespace App\Models;
  
use CodeIgniter\Model;
  
class AnswerModel extends Model{
    protected $table = 'answers';
    protected $allowedFields = ['answers','email','name','age','gender','bureau','textarea'];
}