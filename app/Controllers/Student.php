<?php

namespace App\Controllers;
use App\Models\StudentModel;

class Student extends BaseController
{/**
 * The function is called when the user clicks the submit button on the registration form. The
 * function checks if the form is valid, if it is, it saves the data to the database, if not, it
 * displays the form again with the errors.
 * 
 * @return The data is being returned to the view.
 */

    public function save()
    {
        //include helper form
        helper(['form']);
        
        //set rules validation form
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $password = array(); 
        $alpha_length = strlen($alphabet) - 1; 
        for ($i = 0; $i < 8; $i++) 
        {
            $n = rand(0, $alpha_length);
            $password[] = $alphabet[$n];
        }
        $newPassword = implode($password);



        


        $rules = [
            'schoolid'          => 'required|min_length[3]|max_length[20]',
            'first_name'          => 'required|min_length[3]|max_length[20]',
            'last_name'          => 'required|min_length[3]|max_length[20]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[student.email]',
            'course'          => 'required|min_length[1]|max_length[20]',
        ];
          

        



        if($this->validate($rules)){
            $model = new StudentModel();
            $data = [
                'schoolid'     => $this->request->getVar('schoolid'),
                'first_name'     => $this->request->getVar('first_name'),
                'last_name'     => $this->request->getVar('last_name'),
                'email'    => $this->request->getVar('email'),
                'course'    => $this->request->getVar('course'),
                'password' => password_hash($this->request->getVar($newPassword), PASSWORD_DEFAULT),
                'clear_text'    => $newPassword,
            ];
        
            $model->save($data);
            return redirect()->to('/Home/student');
        }else{
            $data['validation'] = $this->validator;
            helper(['form']);
            echo view('tags');
            echo view('sidebar');
            echo view('add-student', $data);
        }
          
    }



   /**
    * The function is called when the user clicks the submit button on the edit-student.php page. The
    * function validates the form data, and if the data is valid, it updates the database with the new
    * data. If the data is not valid, it displays the edit-student.php page again, with the validation
    * errors.
    * 
    * @param id The id of the student to update.
    * 
    * @return the view of the edit-student page.
    */
    public function updateStudent($id)
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $model = new StudentModel();
        $Student = $model->find($id);
        

        $rules = [
            'schoolid'          => 'required|min_length[3]|max_length[20]',
            'first_name'          => 'required|min_length[3]|max_length[20]',
            'last_name'          => 'required|min_length[3]|max_length[20]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email',
            'course'          => 'required|min_length[1]|max_length[20]',
        ];
          
        if($this->validate($rules)){
            $model = new StudentModel();
            $data = [
                'schoolid'     => $this->request->getVar('schoolid'),
                'first_name'     => $this->request->getVar('first_name'),
                'last_name'     => $this->request->getVar('last_name'),
                'email'    => $this->request->getVar('email'),
                'course'    => $this->request->getVar('course'),
                
            ];
            $model->update($id, $data);
            return redirect()->to('/Home/student');
        }else{
            $data['validation'] = $this->validator;
            $model = new StudentModel();
            helper(['form']);
            $data['student'] =$model->find($id);
            helper(['form']);
            echo view('tags');
            echo view('sidebar');
            echo view('edit-student', $data);
        }
          
    }

    
 /**
  * It deletes a student from the database.
  * 
  * @param id The id of the student you want to delete.
  * 
  * @return The return value is the result of the delete() method.
  */
    public function deleteStudent($id = null){
        $model = new StudentModel();
        $data['student'] = $model->where('id', $id)->delete();
        return redirect()->to('/Home/student');
        }


  /**
   * It takes the student's ID, generates a random password, and then updates the student's password in
   * the database.
   */
        public function studentLogout()
    {
        $model = new StudentModel();
        $student = $model->find($id);
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $password = array(); 
        $alpha_length = strlen($alphabet) - 1; 
        for ($i = 0; $i < 8; $i++) 
        {
            $n = rand(0, $alpha_length);
            $password[] = $alphabet[$n];
        }
        $newPassword = implode($password);
    
    
        $data = [
            'password' => $newPassword,
          ];
          
          $model->update($id, $data);
          return redirect()->to('/Students/StudentList');
    }


    


}
