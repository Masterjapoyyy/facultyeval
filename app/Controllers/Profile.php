<?php

namespace App\Controllers;
use App\Models\FacultyModel;
use App\Models\AdminModel;
use App\Models\StudentModel;
use App\Models\SubjectModel;
use App\Models\CourseModel;
use App\Models\AcademicModel;
use App\Models\CustomModel;
use App\Models\QuestionModel;
use App\Models\UserModel;


class Profile extends BaseController
{




    public function updateprofile($id){
        $db = db_connect();
        
        helper('form', 'url');
        $usermodel = new UserModel($db);
        $session = session();
        $data['user'] =$usermodel->find($id);
        $data = [
            'name'     => $this->request->getVar('name'),
            'email'    => $this->request->getVar('email'),
        ];
        $session->set($data);
        $usermodel->update($id, $data);
        return redirect()->to('/Home/Profile');
    } 



    public function updatepassword($id){
        $db = db_connect();
        
        helper('form', 'url');
        $usermodel = new UserModel($db);
        $data['user'] =$usermodel->find($id);
        $data = [
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'clear_text'    => $this->request->getVar('password'),
        ];
        $usermodel->update($id, $data);
        $session = session();
        $session->destroy();
        return redirect()->to('/Home');
    } 
   


    public function photo($id)
{
    $db = db_connect();
        
    helper('form', 'url');
    $usermodel = new UserModel($db);
    $session = session();


    $img = $this->request->getFile('userfile');

    
        $imageName = $img->getRandomName();
        $file =  $img->move('uploads/profile', $imageName);
        

        $data = [
          'uploaded_flleinfo' => $imageName
        ];
       
      
        $session->set($data);
        $usermodel->update($id, $data);
        return redirect()->to('/Home/profile');
    

    //echo $imageName;
}



}

