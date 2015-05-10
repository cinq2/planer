<?php
class Group {

private $db;
   function __construct($_db) {
      $this->db = $_db;
      }
  
  
   function add($_kierunek, $_rok, $_semestr) {
    $q = "INSERT INTO grupa (Kierunek, Rok, Semestr) VALUES ('".$_kierunek."','".$_rok."','".$_semestr."');";
    if(!$this->db->query($q))
    {
      echo 'FAIL: nie udalo sie =)';
    }
   function save($_kierunek, $_rok, $_semestr, $_id) {
      $q = "UPDATE Grupa SET Kierunek='".$_kierunek."',Rok='".$_rok."',Semestr='".$_semestr."' WHERE Id_Grupa='".$_id."';";
      if(!$this->db->query($q))
    {
      echo 'FAIL: nie udalo sie =)';
    }
   function get($_id) {
      $q = "SELECT * FROM Grupa WHERE ID_Grupa='".$_id."';";  
      return $this->db->query($q);
    
    
    
   }
   function getall() {
      
      $q = "SELECT * FROM Grupa ;";
      return $this->db->query($q);
    
    
    
   }
   function remove($_id) {
      $q = "DELETE FROM Grupa WHERE ID_Grupa='".$_id."';";
      return $this->db->query($q);
    
    
    
   }
}
/*
$nauczyciel = new Group();
$nauczyciel->add("informatyk","2013","pierwszy");
$nauczyciel->save("informatyk","2014","trzeci","1");
$nauczyciel->get("1");
$nauczyciel->getall();
$nauczyciel->remove("1");
/*

?>