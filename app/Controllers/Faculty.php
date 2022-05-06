<?php

namespace App\Controllers;
use App\Models\FacultyModel;

class Faculty extends BaseController
{
  /**
   * The function is called when the user clicks the submit button on the form. The function validates
   * the form data, if the data is valid, it saves the data to the database and redirects the user to
   * the faculty page. If the data is not valid, it displays the form again with the validation errors.
   * 
   * @return The password is being returned as a hash.
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
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[faculty.email]',
        ];
          
        if($this->validate($rules)){
            $model = new FacultyModel();
            $data = [
                'schoolid'     => $this->request->getVar('schoolid'),
                'first_name'     => $this->request->getVar('first_name'),
                'last_name'     => $this->request->getVar('last_name'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar($newPassword), PASSWORD_DEFAULT),
                'clear_text'    => $newPassword,
            ];
            $model->save($data);
            return redirect()->to('/Home/faculty');
        }else{
            $data['validation'] = $this->validator;
            helper(['form']);
            echo view('tags');
            echo view('sidebar');
            echo view('add-faculty', $data);
        }
          
    }



    /**
     * The function is called when the user clicks the submit button on the edit-faculty.php page. The
     * function checks the validation rules and if the validation passes, the function updates the
     * database with the new data. If the validation fails, the function returns the user to the
     * edit-faculty.php page with the validation errors
     * 
     * @param id The id of the record to update.
     * 
     * @return The validation object.
     */
    public function updatefaculty($id)
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $model = new FacultyModel();
        $faculty = $model->find($id);
        $rules = [
            'schoolid'          => 'required|min_length[3]|max_length[20]',
            'first_name'          => 'required|min_length[3]|max_length[20]',
            'last_name'          => 'required|min_length[3]|max_length[20]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email',
        ];
          
        if($this->validate($rules)){
            $model = new FacultyModel();
            $data = [
                'schoolid'     => $this->request->getVar('schoolid'),
                'first_name'     => $this->request->getVar('first_name'),
                'last_name'     => $this->request->getVar('last_name'),
                'email'    => $this->request->getVar('email'),
            ];
            $model->update($id, $data);
            return redirect()->to('/Home/faculty');
        }else{
            $data['validation'] = $this->validator;
            $model = new FacultyModel();
            helper(['form']);
            $data['faculty'] =$model->find($id);
            helper(['form']);
            echo view('tags');
            echo view('sidebar');
            echo view('edit-faculty', $data);
        }
          
    }

/**
 * It deletes a faculty member from the database.
 * 
 * @param id The id of the faculty you want to delete.
 * 
 * @return The return value is the result of the redirect() method.
 */

    public function deletefaculty($id = null){
        $model = new FacultyModel();
        $data['faculty'] = $model->where('id', $id)->delete();
        return redirect()->to('/Home/faculty');
        }


}
