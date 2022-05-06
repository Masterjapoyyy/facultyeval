<?php

namespace App\Controllers;
use App\Models\QuestionModel;
use App\Models\AcademicModel;

class Question extends BaseController
{
 




    public function save($id)
    {
        $academicModel = new AcademicModel();
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'academic_id'          => 'required|min_length[1]|max_length[20]',
            'question'         => 'required|min_length[1]|max_length[63555]',
        ];
          
        $linkId=$academicModel->where("academic_year.id", $id)->first();

        if($this->validate($rules)){
            $model = new QuestionModel();
            $data = [
                'academic_id'     => $this->request->getVar('academic_id'),
                'question'    => $this->request->getVar('question'),
            ];
            $model->save($data);
            
            return redirect()->to('/Home/managequestion/'.$linkId['id']);
        }else{
            $data['validation'] = $this->validator;
            $model = new QuestionModel();
            helper(['form']);
          
            echo view('tags');
            echo view('sidebar');
            echo view('/Home/managequestion/'.$linkId['id'], $data);
        }
          
    }



}
