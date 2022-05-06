<?php

namespace App\Controllers;
use App\Models\AnswerModel;
use App\Models\QuestionModel;

class Answers extends BaseController
{
    // public function save()
    // {
    //     //include helper form
    //     helper(['form']);
    //     //set rules validation form
    //     $rules = [
    //         'year'          => 'required|min_length[3]|max_length[255]',
    //         'semester'          => 'required|min_length[1]|max_length[255]',
    //     ];
          
    //     if($this->validate($rules)){
    //         $model = new AnswerModel
    //     ();
    //         $data = [
    //             'year'     => $this->request->getVar('year'),
    //             'semester'     => $this->request->getVar('semester'),
    //         ];
    //         $model->save($data);
    //         return redirect()->to('/Home/academicyear');
    //     }else{
    //         $data['validation'] = $this->validator;
    //         $model = new AnswerModel
    //     ();
    //         helper(['form']);
    //         $data = [
    //             'academicyear' => $model->paginate(10),
    //             'pager' => $model->pager,
    //         ];
    //         echo view('tags');
    //         echo view('sidebar');
    //         echo view('academicyear', $data);
    //     }
          
    // }





    // public function saveanswers()
    // {
    //     $model = new AnswerModel();
    //     //include helper form
    //     helper(['form']);
    //     //set rules validation form
     
          
    //         $data = [
    //             'answers'     => $this->request->getVar('answers'),
    //         ];
    //         $model->save($data);
    //         return redirect()->to('/Home/faculty');
    
          
    // }

    // foreach($questions as  $item){
    //     print_r($item['id']);
    //     echo '<br>';
    // }

    public function saveanswers($id){

        $questionModel = new QuestionModel();
        $model = new AnswerModel();
        $questions=$questionModel->where("question.academic_id",$id)->get()->getResultArray();
    
       
        foreach($questions as  $item){
            $data = [
                'name' =>$this->request->getVar('name'),
                'email' =>$this->request->getVar('email'),
                'age' =>$this->request->getVar('age'),
                'gender' =>$this->request->getVar('gender'),
                'bureau' =>$this->request->getVar('bureau'),
                'answers' =>$this->request->getVar('answers'.$item['id']),
                'textarea' =>$this->request->getVar('textarea'),
            ];
            //$this->db->insert('tbl_survey_answers', $data);
        
            $model->save($data);
            }
            
            return redirect()->to('/Home/faculty');

        }
    

}