<?php
class zajecia {
private $db;
   function __construct($_db) {
      $this->db = $_db;
      }
  
  
   function add($_nauczyciel, $_grupa, $_przedmiot) {
    $q = "INSERT INTO zajecia (Nauczyciel, Grupa, Przedmiot) VALUES ('".$_nauczyciel."','".$_grupa."','".$_przedmiot."');";
    if(!$this->db->query($q))
    {
      echo 'FAIL: nie udalo sie =)';
   
   }
   function save($_nauczyciel, $_grupa, $_przedmiot, $_id) {
      $q = "UPDATE Zajecia SET Nauczyciel='".$_nauczyciel."',Grupa='".$_grupa."',przedmiot='".$_przedmiot."' WHERE Id_Zajec='".$_id."';";
      if(!$this->db->query($q))
    {
      echo 'FAIL: nie udalo sie =)';
   
   }
   function get($_id) {
      $q = "SELECT * FROM zajecia WHERE ID_Zajec='".$_id."';";  
      return $this->db->query($q);
    
    
    
   }
   function getall() {
      
      $q = "SELECT * FROM zajecia ;";
      return $this->db->query($q);
    
    
    
   }
   function remove($_id) {
      $q = "DELETE FROM zajecia WHERE ID_Zajec='".$_id."';";
      return $this->db->query($q);
    
    
    
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