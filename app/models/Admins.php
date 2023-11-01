<?php
  class Admins {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    // Find USer BY username
    public function checkUsername($username){
      $this->db->query("SELECT * FROM admin WHERE username = :username");
      $this->db->bind(':username', $username);

      $row = $this->db->single();

      //Check Rows
      if($this->db->rowCount() > 0){
        return true;
      } else {
        return false;
      }
    }

    // Get class By ID
    public function getClassById($id){
      $this->db->query("SELECT * FROM classes WHERE id = :id");

      $this->db->bind(':id', $id);
      
      $row = $this->db->single();

      return $row;
    }

    // Classes
    public function allClasses(){
      $this->db->query("SELECT * FROM classes");

      $results = $this->db->resultset();

      return $results;
    }

    // Add class
    public function add_class($data){
      // Prepare Query
      $this->db->query('INSERT INTO classes (name, class_numeric,teacher_name) 
      VALUES (:name, :class_numeric, :teacher_name)');

      // Bind Values
      $this->db->bind(':name', $data['class_name']);
      $this->db->bind(':class_numeric', $data['class_numeric']);
      $this->db->bind(':teacher_name', $data['class_teacher']);
      
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    // Update Post
    public function updateClass($data){
      // Prepare Query
      $this->db->query('UPDATE classes SET name = :name, class_numeric = :class_numeric, teacher_name = :teacher_name WHERE id = :id');

      // Bind Values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':name', $data['class_name']);
      $this->db->bind(':class_numeric', $data['class_numeric']);
      $this->db->bind(':teacher_name', $data['class_teacher']);
      
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    
 // Delete class
 public function deleteClass($id){
  // Prepare Query
  $this->db->query('DELETE FROM classes WHERE id = :id');

  // Bind Values
  $this->db->bind(':id', $id);
  
  //Execute
  if($this->db->execute()){
    return true;
  } else {
    return false;
  }
}

    // Login / Authenticate Admin
    public function login($username, $password){
      $this->db->query("SELECT * FROM admin WHERE username = :username");
      $this->db->bind(':username', $username);

      $row = $this->db->single();
      
      //$hashed_password = $row->password;
      if($password == $row->password){
        return $row;
      } else {
        return false;
      }
    }

    
  }