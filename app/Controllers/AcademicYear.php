<?php

namespace App\Controllers;
use App\Models\AcademicModel;

class AcademicYear extends BaseController
{
/**
 * It saves the data to the database, but if the validation fails, it doesn't return the error
 * messages.
 * 
 * @return The return value of the last statement executed in the method.
 */
    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'year'          => 'required|min_length[3]|max_length[255]',
            'semester'          => 'required|min_length[1]|max_length[255]',
        ];
          
        if($this->validate($rules)){
            $model = new AcademicModel
        ();
            $data = [
                'year'     => $this->request->getVar('year'),
                'semester'     => $this->request->getVar('semester'),
            ];
            $model->save($data);
            return redirect()->to('/Home/academicyear');
        }else{
            $data['validation'] = $this->validator;
            $model = new AcademicModel
        ();
            helper(['form']);
            $data = [
                'academicyear' => $model->paginate(10),
                'pager' => $model->pager,
            ];
            echo view('tags');
            echo view('sidebar');
            echo view('academicyear', $data);
        }
          
    }



  /**
   * The function is called when the user clicks the submit button on the form. The function validates
   * the form data, and if the data is valid, it updates the database with the new data. If the data is
   * not valid, it displays the form again with the validation errors
   * 
   * @param id The id of the record to update.
   * 
   * @return The return value is the result of the last statement executed.
   */
    public function updateacademicyear($id)
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $model = new AcademicModel
    ();
        $Student = $model->find($id);
        $rules = [
            'year'          => 'required|min_length[3]|max_length[255]',
            'semester'          => 'required|min_length[1]|max_length[255]',
        ];
        
          
        if($this->validate($rules)){
            $model = new AcademicModel
        ();
            $data = [
                'year'     => $this->request->getVar('year'),
                'semester'     => $this->request->getVar('semester'),
            ];
            $model->update($id, $data);
            return redirect()->to('/Home/academicyear');
        }else{
            $data['validation'] = $this->validator;
            $model = new AcademicModel
        ();
            helper(['form']);
            $data = [
                'academicyear' => $model->paginate(10),
                'pager' => $model->pager,
            ];
            helper(['form']);
            echo view('tags');
            echo view('sidebar');
            echo view('edit-academicyear', $data);
        }
          
    }
    
    /**
     * It deletes the academic year with the id of 
     * 
     * @param id The id of the record you want to delete.
     * 
     * @return The return value of the last statement executed in the method.
     */
    public function deleteacademicyear($id = null){
        $model = new AcademicModel
    ();
        $data['academicyear'] = $model->where('id', $id)->delete();
        return redirect()->to('/Home/academicyear');
        }


}
