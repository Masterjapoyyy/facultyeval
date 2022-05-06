<?php

namespace App\Controllers;
use App\Models\UserModel;
class Register extends BaseController
{
    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'name'          => 'required|min_length[3]|max_length[20]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[superadmin.email]',
            'password'      => 'required|min_length[6]|max_length[200]',
            'confpassword'  => 'matches[password]'
        ];
          
        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'name'     => $this->request->getVar('name'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'clear_text'    => $this->request->getVar('password'),
            ];
            $model->save($data);
            return redirect()->to('/Home');
        }else{
            $data['validation'] = $this->validator;
            echo view('tags');
            echo view('/register', $data);
        }
          
    }
}
/**
 * It destroys the session and redirects the user to the home page.
 * 
 * @return The logout function is returning the redirect to the home page.
 */
