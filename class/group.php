<?php
class Group {
  
  
   function add($_kierunek, $_rok, $_semestr) {
    $q = "INSERT INTO grupa (Kierunek, Rok, Semestr) VALUES ('".$_kierunek."','".$_rok."','".$_semestr."');";
    echo $q;
   }
   function save($_kierunek, $_rok, $_semestr, $_id) {
      $q = "UPDATE Grupa SET Kierunek='".$_kierunek."',Rok='".$_rok."',Semestr='".$_semestr."' WHERE Id_Grupa='".$_id."';";
      echo $q;
   }
   function get($_id) {
      $q = "SELECT * FROM Grupa WHERE ID_Grupa='".$_id."';";  
      echo $q;
   }
   function getall() {
      
      $q = "SELECT * FROM Grupa ;";
      echo $q;
   }
   function remove($_id) {
      $q = "DELETE FROM Grupa WHERE ID_Grupa='".$_id."';";
      echo $q;
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