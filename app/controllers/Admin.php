<?php
  class Admin extends Controller{
    private $adminModel;
    private $teacherModel;
    private $student_model;

    public function __construct(){
     //Load Models
     $this->teacherModel = $this->model('Teachers');
     $this->adminModel = $this->model('Admins');
     $this->student_model = $this->model('Students');
    }

    // Load Homepage
    public function index(){
      //Set Data
      $data = [
        // 'title' => 'Welcome To SharePosts',
        // 'description' => 'Simple social network built on the TraversyMVC PHP framework'
      ];

      // Load homepage/index view
      $this->view('admin/index', $data);
    }

    // Load Student
    public function student(){

      //Set Data
      $data = [
        
      ];

      // Load student/index view
      $this->view('admin/student', $data);
    }

    // Load classes
    public function classes(){
      $all_class = $this->adminModel->allClasses();
      //Set Data
      $data = [
        'all_class' => $all_class
      ];

      // Load classes/index view
      $this->view('admin/classes', $data);
    }

    // Edit class
    public function edit_class($id){
      if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
          $data = [ 
            'id' => $id,      
            'class_name' => trim($_POST['name']),
            'class_numeric' => trim($_POST['class_numeric']),
            'class_teacher' => trim($_POST['teacher_name'])
          ];
          $edit = $this->adminModel->updateClass($data);

          if($edit){
            redirect('admin/classes');
          } else {
            die('something went wrong');
          }

        }
        else{
          //Set Data
          $thisClass  = $this->adminModel->getClassById($id);
          $teachers = $this->teacherModel->teachers($thisClass->teacher_name);
          $data = [
            'id' => $id,
            'class' => $thisClass,
            'teachers' => $teachers
          ];

          // Load homepage/index view
          $this->view('admin/edit_class', $data);
        }
    }

    // add class
    public function add_class(){

      if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
          $data = [       
            'class_name' => trim($_POST['name']),
            'class_numeric' => trim($_POST['class_numeric']),
            'class_teacher' => trim($_POST['teacher_name'])
          ];
          $add = $this->adminModel->add_class($data);

          if($add){
            redirect('admin/classes');
          } else {
            die('something went wrong');
          }

        }
        else{
          //Set Data
          $teachers = $this->teacherModel->allTeachers();
          $data = [
           'teachers' => $teachers
          ];

          // Load homepage/index view
          $this->view('admin/add_class', $data);
        }
      
    }

     // Delete class
     public function delete($id){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //Execute
        if($this->adminModel->deleteClass($id)){
          // Redirect to login
          flash('post_message', 'Post Removed');
          redirect('admin/classes');
          } else {
            die('Something went wrong');
          }
      } else {
        redirect('admin/classes');
      }
    }

    public function login(){

        // Check if logged in
        if(isLoggedIn()){
            redirect('admin');
        }
    
        // Check if POST
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {

            $data = [       
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'name_err' => '',
                'password_err' => ''        
              ];
            $checkUser = $this->adminModel->checkUsername($data['username']);
            $loggedInUser = $this->adminModel->login($data['username'], $data['password']);

            if($checkUser)
            {
             
              if($loggedInUser){
                // User Authenticated!
                createUserSession($loggedInUser);
               
              } else {
                $data['password_err'] = 'Password incorrect.';
                // Load View
                $this->view('admin/login', $data);
              }
             
            }
            else
            {
              $data['name_err'] = 'This user does not exist..';
              // Load View
              $this->view('admin/login', $data);
            }
             
        }
        else
        {
        //Set Data Not a request
            $data = [
              'username' => '',
              'password' => '',
              'password_err' => '',
              'name_err' => ''  
            ];

            // Load about view
            $this->view('admin/login', $data);
        }

      
    }

    // Logout & Destroy Session
  public function logout(){
    unset($_SESSION['user_id']);
    unset($_SESSION['user_name']);
    session_destroy();
    redirect('admin/login');
  }
  }