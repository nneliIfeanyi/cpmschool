<?php
  class Teachers {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

//.... check if teacher exist
    public function checkTeacher($username){
      $this->db->query("SELECT * FROM teachers WHERE username = :username");
      $this->db->bind(':username', $username);

      $row = $this->db->resultset();

      //Check Rows
      if($this->db->rowCount() > 0){
        return true;
      } else {
        return false;
      }
    }

//.... Add teacher / Register
    public function addTeacher($data){
      // Prepare Query
      $this->db->query('INSERT INTO teachers (name, dob,gender, religion,phone, address,joining_date, photo,username,password) 
      VALUES (:name, :dob,:gender, :religion,:phone, :address,:joining_date, :photo,:username, :password)');

      // Bind Values
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':dob', $data['dob']);
      $this->db->bind(':gender', $data['gender']);
      $this->db->bind(':religion', $data['religion']);
      $this->db->bind(':phone', $data['phone']);
      $this->db->bind(':address', $data['address']);
      $this->db->bind(':joining_date', $data['joining_date']);
      $this->db->bind(':photo', $data['photo']);
      $this->db->bind(':username', $data['username']);
      $this->db->bind(':password', $data['password']);
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }


//..... Selecting all teachers
    public function allTeachers(){
      $this->db->query("SELECT * FROM teachers");

      $results = $this->db->resultset();

      return $results;
    }
    
//..... Select teacher by $id
    public function getTeacherById($id){
      $this->db->query("SELECT * FROM teachers WHERE id = :id");

      $this->db->bind(':id', $id);
      
      $row = $this->db->single();

      return $row;
    }

//.... Selecting all teachers except...
    public function teachers($teacher_name){
      $this->db->query("SELECT * FROM teachers WHERE name != :teacher_name");
      $this->db->bind(':teacher_name', $teacher_name);
      $results = $this->db->resultset();

      return $results;
    }

//.... Delete Teacher
    public function deleteTeacher($id){
      // Prepare Query
      $this->db->query('DELETE FROM teachers WHERE id = :id');

      // Bind Values
      $this->db->bind(':id', $id);
      
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }


  }//Ends Admin class 