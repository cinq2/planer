<?php
class Teacher {
  
  
   function add($_imie, $_nazwisko) {
    $q = "INSERT INTO Nauczyciel (Imie, Nazwisko) VALUES ('".$_imie."','".$_nazwisko."');";
    echo $q;
   }
   function save($_imie, $_nazwisko, $_id) {
      $q = "UPDATE Nauczyciel SET Imie='".$_imie."', Nazwisko ='".$_nazwisko."' where ID_Nauczyciela='".$_id."';";
      echo $q;
   }
   function get($_id) {
      $q = "SELECT * FROM Nauczyciel WHERE ID_Nauczyciela='".$_id."';";
      echo $q;
   }
   function getall() {
      
      $q = "SELECT * FROM Nauczyciel";
      echo $q;
   }
   function remove($_id) {
      $q = "DELETE FROM nauczyciel WHERE ID_Nauczyciela='".$_id."';";
      echo $q;
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