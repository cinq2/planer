<?php
class Sala {
private $db;
   function __construct($_db) {
      $this->db = $_db;
      }
  
  
   function add($_Sala) {
    $q = "INSERT INTO Sala (Sala) VALUES ('".$_Sala."');";
    if(!$this->db->query($q))
    {
      echo 'FAIL: nie udalo sie =)';
   }
   function save($_Sala, $_id) {
      $q = "UPDATE Sala SET Sala='".$_Sala."' where ID_Sali='".$_id."';";
      if(!$this->db->query($q))
    {
      echo 'FAIL: nie udalo sie =)';
   }
   function get($_id) {
      $q = "SELECT * FROM Sala WHERE ID_Sali='".$_id."';";
      return $this->db->query($q);
    
    
    
   }
   function getall() {
      
      $q = "SELECT * FROM Sala";
      return $this->db->query($q);
    
    
    
   }
   function remove($_id) {
      $q = "DELETE FROM Sala WHERE ID_Sali='".$_id."';";
      return $this->db->query($q);
    
    
    
   }
}
/*
$nauczyciel = new Sala();
$nauczyciel->add("203");
$nauczyciel->save("207","2");
$nauczyciel->get("2");
$nauczyciel->getall();
$nauczyciel->remove("2");
*/

?>