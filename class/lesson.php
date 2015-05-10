<?php
class Lesson {
  
  
   function add($_zajecia, $_czasrozpoczecia, $_czaszakonczenia, $_sala) {
    $q = "INSERT INTO lekcja (Id_Zajec, CzasRozpoczecia, CzasZakonczenia, Sala) VALUES ('".$_zajecia."','".$_czasrozpoczecia."','".$_czaszakonczenia."','".$_sala."');";
    echo $q;
   }
   function save($_zajecia, $_czasrozpoczecia, $_czaszakonczenia, $_sala,  $_id) {
      $q = "UPDATE Lekcja SET Id_Zajec='".$_zajecia."', CzasRozpoczecia ='".$_czasrozpoczecia."', CzasZakonczenia ='".$_czaszakonczenia."', Sala ='".$_sala."' where Id_Lekcji='".$_id."';";
      echo $q;
   }
   function get($_id) {
      $q = "SELECT * FROM Lekcja WHERE Id_Lekcji='".$_id."';";
      echo $q;
   }
   function getall() {
      
      $q = "SELECT * FROM Lekcja";
      echo $q;
   }
   function remove($_id) {
      $q = "DELETE FROM Lekcja WHERE Id_Lekcji='".$_id."';";
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