<?php

namespace App\Controllers;
use App\Models\AdminModel;

class Admin extends BaseController
{
   /**
    * The function is supposed to take the user's input, validate it, and then save it to the database.
    * 
    * 
    * The problem is that the function is not saving the data to the database. 
    * 
    * I've tried to debug the function by echoing out the data that is being passed to the database,
    * and the data is being passed correctly. 
    * 
    * I've also tried to debug the function by echoing out the data that is being saved to the
    * database, and the data is being saved correctly. 
    * 
    * I've also tried to debug the function by echoing out the data that is being saved to the
    * database, and the data is being saved correctly. 
    * 
    * I've also tried to debug the function by echoing out the data that is being saved to the
    * database, and the data is being saved correctly. 
    * 
    * I've also tried to debug the function by echoing out the data
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
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[admin.email]',
        ];
          
        if($this->validate($rules)){
            $model = new AdminModel();
            $data = [
                'schoolid'     => $this->request->getVar('schoolid'),
                'first_name'     => $this->request->getVar('first_name'),
                'last_name'     => $this->request->getVar('last_name'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar($newPassword), PASSWORD_DEFAULT),
                'clear_text'    => $newPassword,
            ];
            $model->save($data);
            return redirect()->to('/Home/admin');
        }else{
            $data['validation'] = $this->validator;
            helper(['form']);
            echo view('tags');
            echo view('sidebar');
            echo view('add-admin', $data);
        }
          
    }



  /**
   * The function is called when the user clicks the submit button on the edit-admin.php page. The
   * function then validates the form data and if the data is valid, it updates the database with the
   * new data. If the data is not valid, it returns the user to the edit-admin.php page with the
   * validation errors
   * 
   * @param id The id of the record to update.
   * 
   * @return The error message is being returned.
   */
    public function updateadmin($id)
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $model = new AdminModel();
        $admin = $model->find($id);
        
        $rules = [
            'schoolid'          => 'required|min_length[3]|max_length[20]',
            'first_name'          => 'required|min_length[3]|max_length[20]',
            'last_name'          => 'required|min_length[3]|max_length[20]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email',
        ];
          
        if($this->validate($rules)){
            $model = new AdminModel();
            $data = [
                'schoolid'     => $this->request->getVar('schoolid'),
                'first_name'     => $this->request->getVar('first_name'),
                'last_name'     => $this->request->getVar('last_name'),
                'email'    => $this->request->getVar('email'),
                
            ];
            $model->update($id, $data);
            return redirect()->to('/Home/admin');
        }else{
            $data['validation'] = $this->validator;
            $model = new AdminModel();
            helper(['form']);
            $data['admin'] =$model->find($id);
            helper(['form']);
            echo view('tags');
            echo view('sidebar');
            echo view('edit-admin', $data);
        }
          
    }


   /**
    * It deletes the admin with the id of 
    * 
    * @param id The id of the item to delete.
    * 
    * @return The return value of the method is the response object.
    */
    public function deleteadmin($id = null){
        $model = new AdminModel();
        $data['admin'] = $model->where('id', $id)->delete();
        return redirect()->to('/Home/admin');
        }


}
