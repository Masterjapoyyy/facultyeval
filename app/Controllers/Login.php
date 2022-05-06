<?php

namespace App\Controllers;
use App\Models\UserModel;

class Login extends BaseController
{
    /**
     * It checks if the form has been submitted, if it has, it validates the form, if the form is
     * valid, it checks if the email exists in the database, if it does, it checks if the password
     * matches the one in the database, if it does, it sets the session data and redirects to the home
     * page, if it doesn't, it sets a flash message and redirects to the login page, if the email
     * doesn't exist, it sets a flash message and redirects to the login page, if the form is not
     * valid, it displays the form with the errors.
     * 
     * @return The return value of the method is the last statement executed in the method.
     */
    public function auth(){
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
       //include helper form
        helper(['form']);
		$data = [];
		helper(['form']);

		
		if($this->request->getMethod()=='post'){
            $rules = [
        
                'email'=>'required|min_length[3]|max_length[30]|valid_email',
                'password'=>'required|min_length[3]|max_length[255]|validateUser[email,password]',
            ];
        
            $errors = [
                'password' => [
                    'validateUser' => 'Email/Password Does not Match'
                ]
            ];
              
            if($this->validate($rules,$errors)){
                $data = $model->where('email', $email)->first();
                $data['user']=$model->where("superadmin.id", session("id"))->first();
                if($data){
                    $pass = $data['password'];
                    $verify_pass = password_verify($password, $pass);
                    if($verify_pass){
                        $ses_data = [
                            'id'       => $data['id'],
                            'name'     => $data['name'],
                            'email'    => $data['email'],
                            'uploaded_flleinfo'    => $data['uploaded_flleinfo'],
                            'logged_in'     => TRUE
                        ];
                      
                        $session->set($ses_data);
                        echo view('tags');
                        return redirect()->to('/Home/faculty');
                    }else{
                        $session->setFlashdata('msg', 'Wrong Password');
                        return redirect()->to('/login');
                    }
                }else{
                        $session->setFlashdata('msg', 'Email not Found');
                        return redirect()->to('/login');
                }
            }else{
                
                echo view('tags');
                echo view('/login', $data);
            }
		}

		echo view('login', $data);

	}


    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/Home');
    }
}
