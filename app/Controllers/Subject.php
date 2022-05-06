<?php

namespace App\Controllers;
use App\Models\SubjectModel;

class Subject extends BaseController
{
   /**
    * The function is called when the user clicks the submit button on the form. The function validates
    * the form data, and if the data is valid, it saves the data to the database. If the data is not
    * valid, the function displays the form again, with the error messages.
    * </code>
    * 
    * 
    * A:
    * 
    * You can use the <code>set_value()</code> function to set the value of the input field.
    * <code>&lt;input type="text" name="subject_code" value="&lt;?= set_value('subject_code')
    * ?&gt;"&gt;
    * </code>
    * 
    * @return The return value of the last statement executed in the method.
    */
    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'subject_code'          => 'required|min_length[3]|max_length[255]',
            'subject'          => 'required|min_length[3]|max_length[255]',
            'description'          => 'required|min_length[3]|max_length[255]'
        ];
          
        if($this->validate($rules)){
            $model = new SubjectModel();
            $data = [
                'subject_code'     => $this->request->getVar('subject_code'),
                'subject'     => $this->request->getVar('subject'),
                'description'     => $this->request->getVar('description'),
            ];
            $model->save($data);
            return redirect()->to('/Home/subject');
        }else{
            $data['validation'] = $this->validator;
            $model = new SubjectModel();
            helper(['form']);
            $data = [
                'subject' => $model->paginate(10),
                'pager' => $model->pager,
            ];
            echo view('tags');
            echo view('sidebar');
            echo view('subject', $data);
        }
          
    }


/**
 * It updates the subject table in the database.
 * 
 * @param id The id of the record to update.
 * 
 * @return The return value is the result of the last statement executed.
 */

   /**
    * It updates the subject table in the database
    * 
    * @param id The id of the record to update.
    * 
    * @return The return value is the result of the last statement executed.
    */
    public function updatesubject($id)
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $model = new SubjectModel();
        $Student = $model->find($id);
        $rules = [
            'subject_code'          => 'required|min_length[3]|max_length[255]',
            'subject'          => 'required|min_length[3]|max_length[255]',
            'description'          => 'required|min_length[3]|max_length[255]'
        ];
          
        if($this->validate($rules)){
            $model = new SubjectModel();
            $data = [
                'subject_code'     => $this->request->getVar('subject_code'),
                'subject'     => $this->request->getVar('subject'),
                'description'     => $this->request->getVar('description'),
            ];
            $model->update($id, $data);
            return redirect()->to('/Home/subject');
        }else{
            $data['validation'] = $this->validator;
            $model = new SubjectModel();
            helper(['form']);
            $data = [
                'subject' => $model->paginate(10),
                'pager' => $model->pager,
            ];
            helper(['form']);
            echo view('tags');
            echo view('sidebar');
            echo view('edit-subject', $data);
        }
          
    }


    public function deletesubject($id = null){
        $model = new SubjectModel();
        $data['subject'] = $model->where('id', $id)->delete();
        return redirect()->to('/Home/subject');
        }


}
