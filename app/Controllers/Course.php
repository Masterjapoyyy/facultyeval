<?php

namespace App\Controllers;
use App\Models\CourseModel;

class Course extends BaseController
{
  /**
   * It saves the data to the database and redirects to the course page.
   * 
   * @return The return value of the last statement executed in the method.
   */
    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'course'          => 'required|min_length[2]|max_length[255]',
            'year_level'          => 'required|min_length[1]|max_length[11]',
            'section'          => 'required|min_length[1]|max_length[255]'
        ];
          
        if($this->validate($rules)){
            $model = new CourseModel
        ();
            $data = [
                'course'     => $this->request->getVar('course'),
                'year_level'     => $this->request->getVar('year_level'),
                'section'     => $this->request->getVar('section'),
            ];
            $model->save($data);
            return redirect()->to('/Home/course');
        }else{
            $data['validation'] = $this->validator;
            $model = new CourseModel
        ();
            helper(['form']);
            $data = [
                'course' => $model->paginate(10),
                'pager' => $model->pager,
            ];
            echo view('tags');
            echo view('sidebar');
            echo view('course', $data);
        }
          
    }



  /**
   * It updates the course information in the database.
   * 
   * @param id The id of the record to update.
   * 
   * @return The return value of the last statement executed in the function.
   */
    public function updatecourse($id)
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $model = new CourseModel
    ();
        $Student = $model->find($id);
        $rules = [
            'course'          => 'required|min_length[2]|max_length[255]',
            'year_level'          => 'required|min_length[1]|max_length[11]',
            'section'          => 'required|min_length[3]|max_length[255]'
        ];
          
        if($this->validate($rules)){
            $model = new CourseModel
        ();
            $data = [
                'course'     => $this->request->getVar('course'),
                'year_level'     => $this->request->getVar('year_level'),
                'section'     => $this->request->getVar('section'),
            ];
            $model->update($id, $data);
            return redirect()->to('/Home/course');
        }else{
            $data['validation'] = $this->validator;
            $model = new CourseModel
        ();
            helper(['form']);
            $data = [
                'course' => $model->paginate(10),
                'pager' => $model->pager,
            ];
            helper(['form']);
            echo view('tags');
            echo view('sidebar');
            echo view('edit-course', $data);
        }
          
    }


  /**
   * It deletes a course from the database.
   * 
   * @param id The id of the course you want to delete.
   * 
   * @return The return value of the method is the response object.
   */
    public function deletecourse($id = null){
        $model = new CourseModel
    ();
        $data['course'] = $model->where('id', $id)->delete();
        return redirect()->to('/Home/course');
        }


}
