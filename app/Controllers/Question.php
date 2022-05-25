<?php

namespace App\Controllers;
use App\Models\QuestionModel;
use App\Models\AcademicModel;
use App\Models\CriteriaModel;
use App\Models\RestrictionModel;

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
                'criteria_id'    => $this->request->getVar('criteria_id'),
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



    public function savecriteria($id)
    {
        $academicModel = new AcademicModel();
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'academic_id'          => 'required|min_length[1]|max_length[20]',
            'criteria'         => 'required|min_length[1]|max_length[63555]',
        ];
          
        $linkId=$academicModel->where("academic_year.id", $id)->first();

        if($this->validate($rules)){
            $model = new CriteriaModel();
            $data = [
                'academic_id'     => $this->request->getVar('academic_id'),
                'criteria'    => $this->request->getVar('criteria'),
            ];
            $model->save($data);
            
            return redirect()->to('/Home/managequestion/'.$linkId['id']);
        }else{
            $data['validation'] = $this->validator;
            $model = new CriteriaModel();
            helper(['form']);
          
            echo view('tags');
            echo view('sidebar');
            echo view('/Home/managequestion/'.$linkId['id'], $data);
        }
          
    }

  

    public function saverestrictions($id)
    {
        $academicModel = new AcademicModel();
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'faculty_id'         => 'required|min_length[1]|max_length[20]',
            'class_id'         => 'required|min_length[1]|max_length[20]',
            'subject_id'         => 'required|min_length[1]|max_length[20]',
        ];
          
        $linkId=$academicModel->where("academic_year.id", $id)->first();

        if($this->validate($rules)){
            $model = new RestrictionModel();
            $data = [
                'academic_id'     => $id,
                'faculty_id'     => $this->request->getVar('faculty_id'),
                'class_id'     => $this->request->getVar('class_id'),
                'subject_id'     => $this->request->getVar('subject_id'),
            ];
            $model->save($data);
            
            return redirect()->to('/Home/managequestion/'.$linkId['id']);
        }else{
            $data['validation'] = $this->validator;
            $model = new RestrictionModel();
            helper(['form']);
          
            echo view('tags');
            echo view('sidebar');
            echo view('/Home/managequestion/'.$linkId['id'], $data);
        }
          
    }



}
