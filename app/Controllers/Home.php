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
use App\Models\UserModel;
use App\Models\CriteriaModel;
use App\Models\RestrictionModel;


class Home extends BaseController
{
    public function index()
    {
        helper(['form']);
        echo view('tags');
        echo view('login-student');
    }

    public function register()
    {
        helper(['form']);
        echo view('tags');
        echo view('register');
    }


    public function StudentEvaluation()
    {
        $model = new AcademicModel();
        $db = db_connect();
        $questionModel = new QuestionModel();
        helper(['form']);
        $coursemodel = new CourseModel();
        $subjectmodel = new SubjectModel();
        $facultymodel = new FacultyModel();
        $criteriamodel = new CriteriaModel();
        $restrictionmodel = new RestrictionModel();
        $data['course']=$coursemodel->find();
        $data['subject']=$subjectmodel->find();
        $data['faculty']=$facultymodel->find();
        $data['criteria']=$criteriamodel->find();
        $data['restriction']=$restrictionmodel->find();
        //$data['questions'] = $questionModel->find();
        //$data['academicyear'] =$model->find($id);
       //$s['criterias'] = $criteriamodel->where('criteria.id')->join('question', 'question.criteria_id = criteria.id')->get()->getResult();


  
        $builder = $db->table('criteria');
        $builder->select('*');
        $builder->join('question', 'question.criteria_id = criteria.id');
        $data['criteria1'] = $builder->get()->getResultArray();
        //$qq['questions'] = $questionModel->where("question.criteria_id",$id)->join('question', 'question.academic_id = question.criteria_id')->get()->getResult();
        // $multiClause = array('question.academic_id' => $id, 'criteria.id' => 5);
        // $data['likes'] = $model->where($multiClause)->delete();


        // $questions=$questionModel->where($multiClause)->get()->getResultArray();
        // $data['questions'] =$questions;

        $questions=$questionModel->where("question.academic_id",10)->get()->getResultArray();
       
        $data['questions'] =$questions;
        $data['questions1']=$questionModel->where("question.academic_id",10)->get()->getResultArray();
        // $builder = $db->table('question');        // 'mytablename' is the name of your table

        // $builder->select('input_type', 'id');       // names of your columns
        // $builder->where('id', '*');                // where clause
        // $query = $builder->get()->getResult();
        //$dd=$query;
       


        $data['ss'] =$questionModel->where("question.id")->get()->getResultArray();
        //$qq['questions'] = $questionModel->where("question.criteria_id",$id)->join('question', 'question.academic_id = question.criteria_id')->get()->getResult();
        // $multiClause = array('question.academic_id' => $id, 'criteria.id' => 5);
        // $data['likes'] = $model->where($multiClause)->delete();


        // $questions=$questionModel->where($multiClause)->get()->getResultArray();
        // $data['questions'] =$questions;

        //$questions=$questionModel->where("question.academic_id",$id)->get()->getResultArray();
       
        // /$data['questions'] =$questions;
        // /$data['questions1']=$questionModel->where("question.academic_id",$id)->get()->getResultArray();
        // $builder = $db->table('question');        // 'mytablename' is the name of your table

        // $builder->select('input_type', 'id');       // names of your columns
        // $builder->where('id', '*');                // where clause
        // $query = $builder->get()->getResult();
        //$dd=$query;
       


        $data['ss'] =$questionModel->where("question.id")->get()->getResultArray();
  

        helper(['form']);
        echo view('tags');
        echo view('navbar');
        echo view('student-evaluation', $data);
    }


    public function addfaculty()
    {
        // /$data['user']=$adminModel->where("superadmin.id", session("id"))->first();
        helper(['form']);
        echo view('tags');
        echo view('sidebar');
        echo view('add-faculty');
    }

    public function addadmin()
    {
        helper(['form']);
        echo view('tags');
        echo view('sidebar');
        echo view('add-admin');
    }

    public function addstudent()
    {
        $model = new CourseModel();
        $data['course']=$model->find();
        helper(['form']);
        echo view('tags');
        echo view('sidebar');
        echo view('add-student', $data);
    }

    public function faculty()
    {
        $model = new FacultyModel();
        helper('text');
        helper(['form']);
        $data = [
            'faculties' => $model->paginate(10),
            'pager' => $model->pager,
        ];

        
        echo view('tags');
        echo view('sidebar');
        echo view('faculty-list',  $data);
    }

    public function admin()
    {
        // /$data['user']=$adminModel->where("superadmin.id", session("id"))->first();
        $model = new AdminModel();
        helper('text');
        helper(['form']);
        $data = [
            'admin' => $model->paginate(10),
            'pager' => $model->pager,
        ];

        
        echo view('tags');
        echo view('sidebar');
        echo view('admin-list',  $data);
    }


    public function sendemail()
    {
        $db = db_connect();
        $model = new StudentModel($db);
        //$customModel = new CustomModel($db);
        $courseModel = new CourseModel($db);
        helper('text');
        helper(['form']);
        
       
        $data = [
            'student' => $model->paginate(10),
            'pager' => $model->pager,
        ];
        $data['studmail'] = $model->find();
        // $course = $courseModel->find();
        // $student = $model->find();
        // $builder = $db->table('student');        // 'mytablename' is the name of your table
        // $builder->select('SELECT email FROM student');
        // $builder->orderBy('student', 'email');
        // $query = $builder->get()->getResult();
       
       
        echo view('tags');
        echo view('sidebar');
        echo view('student-email', $data);
    }


    public function student()
    {
        $db = db_connect();
        $model = new StudentModel($db);
        //$customModel = new CustomModel($db);
        $courseModel = new CourseModel($db);
        helper('text');
        helper(['form']);
        
       
        $data = [
            'student' => $model->paginate(10),
            'pager' => $model->pager,
        ];

        // $course = $courseModel->find();
        // $student = $model->find();
        // $builder = $db->table('student');        // 'mytablename' is the name of your table
        // $builder->select('SELECT email FROM student');
        // $builder->orderBy('student', 'email');
        // $query = $builder->get()->getResult();
       
       
        echo view('tags');
        echo view('sidebar');
        echo view('student-list', $data);
    }

    public function editfaculty($id){
        $model = new FacultyModel();
        helper(['form']);
        $data['faculty'] =$model->find($id);
        echo view('tags');
        echo view('sidebar');
        echo view('edit-faculty',$data);
    }

    public function editadmin($id){
        $model = new AdminModel();
        helper(['form']);
        $data['admin'] =$model->find($id);
        echo view('tags');
        echo view('sidebar');
        echo view('edit-admin',$data);
    }

    public function editstudent($id){
        $model = new StudentModel();
        $courseModel = new CourseModel();
        helper(['form']);
        $data['course']=$courseModel->find();
        $data['student'] =$model->find($id);
        
        echo view('tags');
        echo view('sidebar');
        echo view('edit-student',$data);
    }


    public function subject()
    {
        $model = new SubjectModel();
        helper('text');
        helper(['form']);
        $data = [
            'subject' => $model->paginate(10),
            'pager' => $model->pager,
        ];

        
        echo view('tags');
        echo view('sidebar');
        echo view('subject',  $data);
    }


    public function editsubject($id){
        $model = new SubjectModel();
        helper(['form']);
        $data['subject'] =$model->find($id);
        echo view('tags');
        echo view('sidebar');
        echo view('edit-subject',$data);
    }


    public function course()
    {
        $model = new CourseModel();
        helper('text');
        helper(['form']);
        $data = [
            'course' => $model->paginate(10),
            'pager' => $model->pager,
        ];

        
        echo view('tags');
        echo view('sidebar');
        echo view('course',  $data);
    }


    public function editcourse($id){
        $model = new CourseModel();
        helper(['form']);
        $data['course'] =$model->find($id);
        echo view('tags');
        echo view('sidebar');
        echo view('edit-course',$data);
    }


    public function academicyear()
    {
        $model = new AcademicModel();
        helper('text');
        helper(['form']);
        $data = [
            'academicyear' => $model->paginate(10),
            'pager' => $model->pager,
        ];

        
        echo view('tags');
        echo view('sidebar');
        echo view('academicyear',  $data);
    }


    public function editacademicyear($id){
        $model = new AcademicModel();
        helper(['form']);
        $data['academicyear'] =$model->find($id);
        echo view('tags');
        echo view('sidebar');
        echo view('edit-academicyear',$data);
    }


    public function questions()
    {
        $model = new AcademicModel();
        $questionModel = new QuestionModel();
        helper('text');
        helper(['form']);
        $data = [
            'academicyear' => $model->paginate(10),
            'pager' => $model->pager,
        ];

        $academic = $model->find();
        // $linkId['link']=$model->where("academicyear.id")->get()->getResult();
        //$sd['num_row'] = json_decode(json_encode($questionModel->where("question.academic_id",4)->get()->getResult()), true);
       
        // $comment_num = json_decode(json_encode($model->select("*")->join('question', 'question.academic_id = academic_year.id')
        // ->get()->getResult()), true);	
        
        
        // $data['num_row'] = $comment_num;
        
        echo view('tags');
        echo view('sidebar');
        echo view('questions', $data);
    }
    

    public function managequestion($id){
        $model = new AcademicModel();
        $db = db_connect();
        $questionModel = new QuestionModel();
        helper(['form']);
        $coursemodel = new CourseModel();
        $subjectmodel = new SubjectModel();
        $facultymodel = new FacultyModel();
        $criteriamodel = new CriteriaModel();
        $data['course']=$coursemodel->find();
        $data['subject']=$subjectmodel->find();
        $data['faculty']=$facultymodel->find();
        $data['criteria']=$criteriamodel->find();
        //$data['questions'] = $questionModel->find();
        $data['academicyear'] =$model->find($id);
       //$s['criterias'] = $criteriamodel->where('criteria.id')->join('question', 'question.criteria_id = criteria.id')->get()->getResult();


       $builder = $db->table('criteria');
        $builder->select('*');
        $builder->join('question', 'question.criteria_id = criteria.id');
        $data['criteria1'] = $builder->get()->getResultArray();
        //$qq['questions'] = $questionModel->where("question.criteria_id",$id)->join('question', 'question.academic_id = question.criteria_id')->get()->getResult();
        // $multiClause = array('question.academic_id' => $id, 'criteria.id' => 5);
        // $data['likes'] = $model->where($multiClause)->delete();


        // $questions=$questionModel->where($multiClause)->get()->getResultArray();
        // $data['questions'] =$questions;

        $questions=$questionModel->where("question.academic_id",$id)->get()->getResultArray();
       
        $data['questions'] =$questions;
        $data['questions1']=$questionModel->where("question.academic_id",$id)->get()->getResultArray();
        // $builder = $db->table('question');        // 'mytablename' is the name of your table

        // $builder->select('input_type', 'id');       // names of your columns
        // $builder->where('id', '*');                // where clause
        // $query = $builder->get()->getResult();
        //$dd=$query;
       


        $data['ss'] =$questionModel->where("question.id")->get()->getResultArray();
  
        // foreach($questions as  $item){
            // print_r($s);
        //     echo '<br>';
        // }
        //$data['inputs'] = $questionModel->select('input_type')->get()->getResultArray();	
        
        echo view('tags');
        echo view('sidebar');
        echo view('add-question',$data);
    }





    // public function answer(){
    //     $model = new AcademicModel();
    //     $db = db_connect();
    //     $questionModel = new QuestionModel();


    //     helper(['form']);
        
    //     //$data['questions'] = $questionModel->find();
    //     // $data['academicyear'] =$model->find($id);

    //     $questions=$questionModel->where("question.academic_id",4)->get()->getResultArray();
       
    //     $data['questions'] =$questions;

    //     // $builder = $db->table('question');        // 'mytablename' is the name of your table

    //     // $builder->select('input_type', 'id');       // names of your columns
    //     // $builder->where('id', '*');                // where clause
    //     // $query = $builder->get()->getResult();
    //     //$dd=$query;
       
      
    //     $data['ss'] =$questionModel->where("question.id")->get()->getResultArray();
  
    //   $data['ss'] =$questionModel->where("question.id")->get()->getResultArray();
    //     //$data['inputs'] = $questionModel->select('input_type')->get()->getResultArray();	
        
    //     echo view('tags');
    //     echo view('answer',$data);
    // }
    

/**
 * It sends an email to a single student
 * 
 * @param id The id of the student
 * 
 * @return the email of the student.
 */
    public function singleemailstudent($id){
        $model = new StudentModel($db);
        $student =$model->where("student.id", $id)->first();

        $email = \Config\Services::email();
        $to =$student['email'];
                
        $subject = 'Faculty Evaluation';
        $message = 'Please Login using your credentials which is your email<br>'
        . $student['email'].'<br>and your password<br>'
        . $student['clear_text']. '<br>to access the faculty evaluation website';
        
     
        $email->setTo($to);
        $email->setFrom('johndoe@gmail.com', 'Philippine Public Safety College');
        
        $email->setSubject($subject);
        $email->setMessage($message);

        if($email->send()){
            return redirect()->to('/Home/student');
            
        }
    }


 /**
  * It sends an email to the admin with the email and password of the admin
  * 
  * @param id the id of the admin
  * 
  * @return the email of the admin
  */
    public function singleemailadmin($id){
        $model = new AdminModel($db);
        $admin =$model->where("admin.id", $id)->first();

        $email = \Config\Services::email();
        $to =$admin['email'];
                
        $subject = 'Password Change';
        $message = 'Please Login using your credentials which is your email<br>'
        . $admin['email'].'<br>and your password<br>'
        . $admin['clear_text']. '<br>to access the faculty evaluation website and Change your password to a more secure one';
        
     
        $email->setTo($to);
        $email->setFrom('johndoe@gmail.com', 'Philippine Public Safety College');
        
        $email->setSubject($subject);
        $email->setMessage($message);

        if($email->send()){
            return redirect()->to('/Home/admin');
        }
    }



    public function profiwle(){
        $db = db_connect();
        
        helper('form', 'url');
        $adminModel = new UserModel($db);
        $data['user']=$adminModel->where("superadmin.id", session("id"))->first();
        // echo '<pre>';
        // print_r($user);
        // echo '<pre>';
        echo view('tags');
        echo view('sidebar');
        echo view('profile2', $data);
    }


    public function profile()
    {
        $db = db_connect();
        //$model = new StudentModel($db);
        //$customModel = new CustomModel($db);
        $courseModel = new CourseModel($db);
        helper('text');
        helper(['form']);
        $adminModel = new AdminModel($db);
        $data['user']=$adminModel->where("admin.id", session("id"))->first();
       
   

        // $course = $courseModel->find();
        // $student = $model->find();
        // $builder = $db->table('student');        // 'mytablename' is the name of your table
        // $builder->select('SELECT email FROM student');
        // $builder->orderBy('student', 'email');
        // $query = $builder->get()->getResult();
       
       
        echo view('tags');
        echo view('sidebar');
        echo view('profile', $data);
    }
}

