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


class Profile extends BaseController
{




    public function updateprofile($id){
        $db = db_connect();
        
        helper('form', 'url');
        $AdminModel = new AdminModel($db);
        $session = session();
        $data['user'] =$AdminModel->find($id);
        $data = [
            'first_name'     => $this->request->getVar('first_name'),
            'last_name'     => $this->request->getVar('last_name'),
            'email'    => $this->request->getVar('email'),
        ];
        $session->set($data);
        $AdminModel->update($id, $data);
        return redirect()->to('/Home/Profile');
    } 



    public function updatepassword($id){
        $db = db_connect();
        
        helper('form', 'url');
        $AdminModel = new AdminModel($db);
        $data['user'] =$AdminModel->find($id);
        $data = [
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        ];
        $AdminModel->update($id, $data);
        $session = session();
        $session->destroy();
        return redirect()->to('/Home');
    } 
   


    public function photo($id)
{
    $db = db_connect();
        
    helper('form', 'url');
    $AdminModel = new AdminModel($db);
    $session = session();


    $img = $this->request->getFile('userfile');

    
        $imageName = $img->getRandomName();
        $file =  $img->move('uploads/profile', $imageName);
        

        $data = [
          'uploaded_flleinfo' => $imageName
        ];
       
      
        $session->set($data);
        $AdminModel->update($id, $data);
        return redirect()->to('/Home/profile');
    

    //echo $imageName;
}



}

