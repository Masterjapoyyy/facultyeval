<?php namespace App\Models;
  

use Codeigniter\Database\ConnectionInterface;

class CustomModel{

    protected $db;


    public function __construct(ConnectionInterface &$db){
        $this->db =& $db;
    }


    function paginate(int $nb_page){
        return json_decode(json_encode($this->db->table('student')
                        ->select('*')
                        ->join('course', 'course.id = student.course_id')
                        ->get()
                        ->getResult()), true);
    }

   
}