<?php

namespace App\Controllers;
use App\Models\AdminModel;

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






    // public function auth(){
    //     $session = session();
    //     $model = new AdminModel();
    //     $email = $this->request->getVar('email');
    //     $password = $this->request->getVar('password');
    //    //include helper form
    //     helper(['form']);
	// 	$data = [];
	// 	helper(['form']);

		
	// 	if($this->request->getMethod()=='post'){
    //         $rules = [
        
    //             'email'=>'required|min_length[3]|max_length[30]|valid_email',
    //             'password'=>'required|min_length[3]|max_length[255]|validateUser[email,password]',
    //         ];
        
    //         $errors = [
    //             'password' => [
    //                 'validateUser' => 'Email/Password Does not Match'
    //             ]
    //         ];
              
    //         if($this->validate($rules,$errors)){
    //             $data = $model->where('user_email', $email)->first();
    //             $data['user']=$model->where("admin.id", session("id"))->first();
    //             if($data){
    //                 $pass = $data['user_password'];
    //                 $verify_pass = password_verify($password, $pass);
    //                 if($verify_pass){
    //                     $ses_data = [
    //                         'id'       => $data['id'],
    //                                         'schoolid'     => $data['schoolid'],
    //                                         'first_name'     => $data['first_name'],
    //                                         'last_name'    => $data['last_name'],
    //                                         'email'     => $data['email'],
    //                                         'role'     => $data['role'],
    //                                         'uploaded_flleinfo'    => $data['uploaded_flleinfo'],
    //                                         'logged_in'     => TRUE
    //                     ];
                      
    //                     $session->set($ses_data);
    //                     return redirect()->to('/Home');
    //                 }else{
    //                     $session->setFlashdata('msg', 'Wrong Password');
    //                     return redirect()->to('/login');
    //                 }
    //             }else{
    //                     $session->setFlashdata('msg', 'Email not Found');
    //                     return redirect()->to('/login');
    //             }
    //         }else{
                
    //             echo view('tags');
    //             print_r($data);
    //             echo 'asd';
    //             echo view('login', $data);
    //         }
	// 	}

	// 	echo view('login', $data);

	// }





    // public function auth()
    // {
    //     $session = session();
    //     $userModel = new AdminModel();
    //     $email = $this->request->getVar('email');
    //     $password = $this->request->getVar('password');
    //     $data = $userModel->where('email', $email)->first();
    //     //$admin = $userModel->where('email', $email)->first();
    //     //$data['user']=$userModel->where("admin-users.id", session("id"))->first();
    //     // print_r($data);
    //     // echo $password;
    //     if(TRUE){
    //         $pass = $data['password'];
            
    //         $authenticatePassword = password_verify($password, $pass);
            
    //         if($authenticatePassword){
    //             $ses_data = [
    //                 'id'       => $data['id'],
    //                 'schoolid'     => $data['schoolid'],
    //                 'first_name'     => $data['first_name'],
    //                 'last_name'    => $data['last_name'],
    //                 'email'     => $data['email'],
    //                 'role'     => $data['role'],
    //                 'uploaded_flleinfo'    => $data['uploaded_flleinfo'],
    //                 'logged_in'     => TRUE
    //             ];
    //             $session->set($ses_data);
    //             return redirect()->to('/Home/profile');
    //         }else{
    //             $session->setFlashdata('msg', 'Password is incorrect.');
    //             $k = 'qwerty';
    //             $h = password_hash($k, PASSWORD_DEFAULT);
    //             $q = password_verify($k, 'qwerty');
    //             $pass = $data['password'];
    //             $password = $this->request->getVar('password');
    //             $authenticatePassword = password_verify($password, $pass);
    //             print_r($data);
    //             // $w = $data['password'];
    //             // $q = $this->request->getVar('password');
    //             // print_r($password);
    //             // echo '<br>';
    //             // print_r($pass);
    //             // echo '<br>';
    //             // echo password_verify($q, $q);
    //         }
    //     }else{
    //         $session->setFlashdata('msg', 'Email does not exist.');
    //         echo view('tags');
    //         echo view('login', $data);
    //     }
    // }



    public function auth(){
        $session = session();
        $model = new AdminModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        helper(['form']);
		$data = [];
		helper(['form']);

		
		if($this->request->getMethod()=='post'){
            $rules = [
        
                'email'=>'required|min_length[1]|max_length[255]|valid_email',
                'password'=>'required|min_length[1]|max_length[255]|validateUser[email,password]',
            ];
        
            $errors = [
                'password' => [
                    'validateUser' => 'Email/Password Does not Match'
                ]
            ];
            //$this->validate($rules,$errors)
            if($this->validate($rules,$errors)){
                $data = $model->where('email', $email)->first();
                $data['user']=$model->where("admin.id", session("id"))->first();
                if($data){
                    $pass = $data['password'];
                    $verify_pass = password_verify($password, $pass);
                    if($verify_pass){
                        $ses_data = [                                   
                            'id'       => $data['id'],
                            'schoolid'     => $data['schoolid'],
                            'first_name'     => $data['first_name'],
                            'last_name'    => $data['last_name'],
                            'email'     => $data['email'],
                            'role'     => $data['role'],
                            'uploaded_flleinfo'    => $data['uploaded_flleinfo'],
                            'logged_in'     => TRUE
                        ];
                      
                        $session->set($ses_data);
                        return redirect()->to('/Home/profile');
                    }else{
                        $session->setFlashdata('msg', 'Wrong Password');
                        echo 'asdasdsa';
                        echo view('login', $data);
                    }
                }else{
                        $session->setFlashdata('msg', 'Email not Found');
                        return redirect()->to('/login');
                }
            }else{
                
                echo view('tags');
                echo '1';
                echo view('login', $data);
            }
		}
                echo view('tags');
                echo '2';
		echo view('login', $data);

	}





    public function loginAuth()
    {
        $session = session();
        $userModel = new AdminModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        $data = $userModel->where('email', $email)->first();
        
        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($password == $pass){
                $ses_data = [
                    'id'       => $data['id'],
                    'schoolid'     => $data['schoolid'],
                    'first_name'     => $data['first_name'],
                    'last_name'    => $data['last_name'],
                    'email'     => $data['email'],
                    'role'     => $data['role'],
                    'uploaded_flleinfo'    => $data['uploaded_flleinfo'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/Home/profile');
            
            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                print_r($data);
                echo view('login', $data);
            }
        }else{
            $session->setFlashdata('msg', 'Email does not exist.');
            echo view('login', $data);
        }
    }




    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/Home');
    }
}
