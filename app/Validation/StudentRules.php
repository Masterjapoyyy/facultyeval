<?php
namespace App\Validation;
use App\Models\StudentModel;

class StudentRules
{

  public function validateStudent(string $str, string $fields, array $data){
    $model = new StudentModel();
    $user = $model->where('email', $data['email'])
                  ->first();

    if(!$user)
      return false;
      $password_verify = $data['password'] == $user['password'];
    return $password_verify;
  }

  
}