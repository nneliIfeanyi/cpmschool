<?php
  class Teacher extends Controller{
    private $teacherModel;

    public function __construct(){
     //Load Models
     $this->teacherModel = $this->model('Teachers');
    }

//....Load Homepage
    public function index(){
      $all_teachers = $this->teacherModel->allTeachers();
      //Set Data
        $data = [
          'all_teachers' => $all_teachers
        ];

      // Load homepage/index view
      $this->view('teacher/index', $data);
    }

//....Load Homepage
    public function view_teacher($id){
        $all_teachers = $this->teacherModel->allTeachers();
        //Set Data
          $data = [
            'all_teachers' => $all_teachers
          ];
  
        // Load homepage/index view
        $this->view('teacher/view_teacher', $data);
    }

//....Edit Teacher Method
    public function edit_teacher($id){
      if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
          $data = [ 
            'id' => $id,      
            'name' => trim($_POST['name']),
            'dob' => trim($_POST['dob']),
            'gender' => trim($_POST['gender']),
            'religion' => trim($_POST['religion']),
            'phone' => trim($_POST['phone']),
            'address' => trim($_POST['address']),
            'joining_date' => trim($_POST['joining_date']),
            'photo' => trim($_POST['photo']),
            'username' => trim($_POST['username']),
            'password' => trim($_POST['password']),
            'username_err' => '',
          ];
          $edit = $this->teacherModel->updateClass($data);

          if($edit){
            redirect('admin/classes');
          } else {
            die('something went wrong');
          }

        }
        else{
          //Set Data
          $teacher  = $this->teacherModel->getTeacherById($id);
          $data = [
            'id' => $id,
            'teacher' => $teacher
          ];

          // Load homepage/index view
          $this->view('teacher/edit_teacher', $data);
        }
    }

//....Add teacher method
    public function add_teacher(){ 
       // Check if POST
      if($_SERVER['REQUEST_METHOD'] == 'POST')
      {
      $data = [       
        'name' => trim($_POST['name']),
        'dob' => trim($_POST['dob']),
        'gender' => trim($_POST['gender']),
        'religion' => trim($_POST['religion']),
        'phone' => trim($_POST['phone']),
        'address' => trim($_POST['address']),
        'joining_date' => trim($_POST['joining_date']),
        'photo' => trim($_POST['photo']),
        'username' => trim($_POST['username']),
        'password' => trim($_POST['password']),
        'username_err' => '',       
      ];
      $this->teacherModel->addTeacher($data);  
      flash('add_teacher_success','Teacher Added Successfull...');
      redirect('teacher');
      }
      else
      {
      //Set Data Not a post request
        $data = [
          'username_err' => ''  
        ];

        // Load about view
        $this->view('teacher/add_teacher', $data);
      }
    }

//....Delete teacher
    public function delete($id){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //Execute
        if($this->teacherModel->deleteTeacher($id)){
          // Redirect to login
          flash('delete_teacher_success', 'Teacher Removed Successfull...', 'alert alert-danger');
          redirect('teacher');
          } else {
            die('Something went wrong');
          }
      } else {
        redirect('teacher');
      }
    }




  }