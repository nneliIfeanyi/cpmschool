<?php
  class Student extends Controller{
    public $student_model;
    private $adminModel;
    private $teacherModel;

    public function __construct(){
     //load models
     $this->student_model = $this->model('Students');
     $this->adminModel = $this->model('Admins');
     $this->teacherModel = $this->model('Teachers');
    }

    // Load Homepage
    public function index(){
      $students = $this->student_model->allStudents();
      $classes = $this->adminModel->allClasses();
      //Set Data
      $data = [
        'all_students' => $students,
        'classes' => $classes,
      ];

      // Load homepage/index view
      $this->view('student/index', $data);
    }

    // Load Homepage
    public function class($class){
      $students = $this->student_model->students($class);
      $classes = $this->adminModel->allClasses();
      //Set Data
      $data = [ 
        'students' => $students,
        'classes' => $classes,
      ];

      // Load homepage/index view
      $this->view('student/class', $data);
    }


  //....Add teacher method
  public function add_student(){ 
    // Check if POST
   if($_SERVER['REQUEST_METHOD'] == 'POST')
   {

    $fullname = trim($_POST['surname']).trim($_POST['other_names']);

   $data = [       
     'name' => $fullname,
     'dob' => trim($_POST['dob']),
     'sex' => trim($_POST['sex']),
     'religion' => trim($_POST['religion']),
     'phone' => trim($_POST['phone']),
     'address' => trim($_POST['address']),
     'state' => trim($_POST['state']),
     'classesID' => trim($_POST['class']),
     'reg_no' => trim($_POST['reg_no']),
     'username' => trim($_POST['surname']),
     'password' => trim($_POST['reg_no']),     
   ];
   $this->student_model->addStudent($data);  
   flash('add_student_success','Student Added Successfull...');
   redirect('student');
   }
   else
   {
   //Set Data Not a post request
    $classes = $this->adminModel->allClasses();
     $data = [
      'classes'=> $classes, 
     ];

     // Load about view
     $this->view('student/add_student', $data);
   }
 }

}