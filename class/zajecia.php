<?php
class zajecia {
  
  
   function add($_nauczyciel, $_grupa, $_przedmiot) {
    $q = "INSERT INTO zajecia (Nauczyciel, Grupa, Przedmiot) VALUES ('".$_nauczyciel."','".$_grupa."','".$_przedmiot."');";
    echo $q;
   }
   function save($_nauczyciel, $_grupa, $_przedmiot, $_id) {
      $q = "UPDATE Zajecia SET Nauczyciel='".$_nauczyciel."',Grupa='".$_grupa."',przedmiot='".$_przedmiot."' WHERE Id_Zajec='".$_id."';";
      echo $q;
   }
   function get($_id) {
      $q = "SELECT * FROM zajecia WHERE ID_Zajec='".$_id."';";  
      echo $q;
   }
   function getall() {
      
      $q = "SELECT * FROM zajecia ;";
      echo $q;
   }
   function remove($_id) {
      $q = "DELETE FROM zajecia WHERE ID_Zajec='".$_id."';";
      echo $q;
   }
}
/*
$nauczyciel = new zajecia();
$nauczyciel->add("pawel","informatycy","informatyka");
$nauczyciel->save("adolf","kucharze","gastrono","1");
$nauczyciel->get("1");
$nauczyciel->getall();
$nauczyciel->remove("1");
*/

?>