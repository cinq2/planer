<?php
class Przedmiot {   
  
   function add($_przedmiot) {
    $q = "INSERT INTO Przedmiot (Przedmiot) VALUES ('".$_przedmiot."');";
    echo $q;
   }
   function save($_przedmiot,$_id) {
      $q = "UPDATE Przedmiot SET Przedmiot='".$_przedmiot."' where ID_Przedmiotu='".$_id."';";
      echo $q;
   }
   function get($_id) {
      $q = "SELECT * FROM Przedmiot WHERE ID_Przedmiotu='".$_id."';";
      echo $q;
   }
   function getall() {
      
      $q = "SELECT * FROM Przedmiot";
      echo $q;
   }
   function remove($_id) {
      $q = "DELETE FROM przedmiot WHERE ID_Przedmiotu='".$_id."';";
      echo $q;
   }
}

$nauczyciel = new Przedmiot();
$nauczyciel->add("misio");
$nauczyciel->save("misio","2");
$nauczyciel->get("2");
$nauczyciel->getall();
$nauczyciel->remove("2");

?>