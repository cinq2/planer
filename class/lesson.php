<?php
class Lesson {
   private $db;
   function __construct($_db) {
      $this->db = $_db;
      }
   
  
   function add($_zajecia, $_czasrozpoczecia, $_czaszakonczenia, $_sala) {
    $q = "INSERT INTO lekcja (Id_Zajec, CzasRozpoczecia, CzasZakonczenia, Sala) VALUES ('".$_zajecia."','".$_czasrozpoczecia."','".$_czaszakonczenia."','".$_sala."');";
    if(!$this->db->query($q))
    {
      echo 'FAIL: nie udalo sie =)';
    }
   }
   function save($_zajecia, $_czasrozpoczecia, $_czaszakonczenia, $_sala,  $_id) {
      $q = "UPDATE Lekcja SET Id_Zajec='".$_zajecia."', CzasRozpoczecia ='".$_czasrozpoczecia."', CzasZakonczenia ='".$_czaszakonczenia."', Sala ='".$_sala."' where Id_Lekcji='".$_id."';";
       if(!$this->db->query($q))
    {
      echo 'FAIL: nie udalo sie =)';
    }
   }
   function get($_id) {
      $q = "SELECT * FROM Lekcja WHERE Id_Lekcji='".$_id."';";
       return $this->db->query($q);
    
    
    
   }
   function getall() {
      
      $q = "SELECT * FROM Lekcja";
      return $this->db->query($q);
    
   }
   function remove($_id) {
      $q = "DELETE FROM Lekcja WHERE Id_Lekcji='".$_id."';";
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