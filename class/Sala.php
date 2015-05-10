<?php
class Sala {
  
  
   function add($_Sala) {
    $q = "INSERT INTO Sala (Sala) VALUES ('".$_Sala."');";
    echo $q;
   }
   function save($_Sala, $_id) {
      $q = "UPDATE Sala SET Sala='".$_Sala."' where ID_Sali='".$_id."';";
      echo $q;
   }
   function get($_id) {
      $q = "SELECT * FROM Sala WHERE ID_Sali='".$_id."';";
      echo $q;
   }
   function getall() {
      
      $q = "SELECT * FROM Sala";
      echo $q;
   }
   function remove($_id) {
      $q = "DELETE FROM Sala WHERE ID_Sali='".$_id."';";
      echo $q;
   }
}

$nauczyciel = new Sala();
$nauczyciel->add("203");
$nauczyciel->save("207","2");
$nauczyciel->get("2");
$nauczyciel->getall();
$nauczyciel->remove("2");


?>