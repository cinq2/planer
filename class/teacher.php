<?php
class Teacher {
private $db;
   function __construct($_db) {
      $this->db = $_db;
      }
  
  
   function add($_imie, $_nazwisko) {
    $q = "INSERT INTO Nauczyciel (Imie, Nazwisko) VALUES ('".$_imie."','".$_nazwisko."');";
    if(!$this->db->query($q))
    {
      echo 'FAIL: nie udalo sie =)';
      }
   }
   function save($_imie, $_nazwisko, $_id) {
      $q = "UPDATE Nauczyciel SET Imie='".$_imie."', Nazwisko ='".$_nazwisko."' where ID_Nauczyciela='".$_id."';";
      if(!$this->db->query($q))
    {
      echo 'FAIL: nie udalo sie =)';
      }
   }
   function get($_id) {
      $q = "SELECT * FROM Nauczyciel WHERE ID_Nauczyciela='".$_id."';";
     return $this->db->query($q);
   }
   function getall() {
      
      $q = "SELECT * FROM Nauczyciel";
   return $this->db->query($q);
   }
   function remove($_id) {
      $q = "DELETE FROM nauczyciel WHERE ID_Nauczyciela='".$_id."';";
      if(!$this->db->query($q))
    {
      echo 'FAIL: nie udalo sie =)';
      }
   }
}

/*$nauczyciel = new Teacher();
$nauczyciel->add("patryk","sobol");
$nauczyciel->save("patryko","sobolo","2");
$nauczyciel->get("2");
$nauczyciel->getall();
$nauczyciel->remove("2");
*/

?>