<?php
  class Students {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

//.... Add teacher / Register
    public function addStudent($data){
      // Prepare Query
      $this->db->query('INSERT INTO student (name, password, sex, classesID, registerNO, username, dob, phone, religion, address,state) 
      VALUES (:name, :password, :sex, :classesID, :registerNO, :username, :dob, :phone, :religion, :address,:state)');

      // Bind Values
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':password', $data['password']);
      $this->db->bind(':sex', $data['sex']);
      $this->db->bind(':classesID', $data['classesID']);
      $this->db->bind(':registerNO', $data['reg_no']);
      $this->db->bind(':username', $data['username']);
      $this->db->bind(':dob', $data['dob']);
      $this->db->bind(':phone', $data['phone']);
      $this->db->bind(':religion', $data['religion']);
      $this->db->bind(':address', $data['address']);
      $this->db->bind(':state', $data['state']);
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }


//..... Selecting all students
    public function allStudents(){
      $this->db->query("SELECT * FROM student");

      $results = $this->db->resultset();

      return $results;
    }

    //..... Selecting students in a class
    public function students($class){
        $this->db->query("SELECT * FROM student WHERE classesID = :class");
        $this->db->bind(':class', $class);
        $results = $this->db->resultset();
  
        return $results;
      }
    //..... Selecting number students in a class
    public function num_students($class){
        $this->db->query("SELECT * FROM student WHERE classesID = :class");
        $this->db->bind(':class', $class);
        $results = $this->db->resultset();
        return $this->db->rowCount();
      }
}