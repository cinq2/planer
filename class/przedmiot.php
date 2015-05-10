<?php
class Przedmiot { 
private $db;
   function __construct($_db) {
      $this->db = $_db;
      }  
  
   function add($_przedmiot) {
    $q = "INSERT INTO Przedmiot (Przedmiot) VALUES ('".$_przedmiot."');";
    if(!$this->db->query($q))
    {
      echo 'FAIL: nie udalo sie =)';
   }
   function save($_przedmiot,$_id) {
      $q = "UPDATE Przedmiot SET Przedmiot='".$_przedmiot."' where ID_Przedmiotu='".$_id."';";
      if(!$this->db->query($q))
    {
      echo 'FAIL: nie udalo sie =)';
   }
   function get($_id) {
      $q = "SELECT * FROM Przedmiot WHERE ID_Przedmiotu='".$_id."';";
      return $this->db->query($q);
    
    
    
   }
   function getall() {
      
      $q = "SELECT * FROM Przedmiot";
      return $this->db->query($q);
    
    
    
   }
   function remove($_id) {
      $q = "DELETE FROM przedmiot WHERE ID_Przedmiotu='".$_id."';";
      return $this->db->query($q);
    
    
    
   }
}
/*
$nauczyciel = new Przedmiot();
$nauczyciel->add("misio");
$nauczyciel->save("misio","2");
$nauczyciel->get("2");
$nauczyciel->getall();
$nauczyciel->remove("2");
*/
?>