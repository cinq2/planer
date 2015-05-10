<?php
class Przedmiot { 
private $db;
   function __construct($_db) {
      $this->db = $_db;
      }  
  
   function add($_przedmiot) {
    $q = "INSERT INTO Przedmiot (Przedmiot) VALUES ('".$_przedmiot."');";
    if(!$this->db->query($q))
    {
      echo 'FAIL: nie udalo sie =)';
   }
   function save($_przedmiot,$_id) {
      $q = "UPDATE Przedmiot SET Przedmiot='".$_przedmiot."' where ID_Przedmiotu='".$_id."';";
      if(!$this->db->query($q))
    {
      echo 'FAIL: nie udalo sie =)';
   }
   function get($_id) {
      $q = "SELECT * FROM Przedmiot WHERE ID_Przedmiotu='".$_id."';";
      return $this->db->query($q);
    
    
    
   }
   function getall() {
      
      $q = "SELECT * FROM Przedmiot";
      return $this->db->query($q);
   }
   function getHTMLtable() {
		$q = "SELECT * FROM Przedmiot";
		$result = $this->db->query($q);
		if ($result->num_rows > 0) {
		// output data of each row
		echo "<table>";
		while($row = $result->fetch_assoc()) {
		echo "<tr>";
        echo '<td>'.$row["Id_Przedmiotu"].'</td><td>'.$row["Przedmiot"].'</td>;
        echo '<td><a href="przedmiot.php?tryb=edytuj&id='.$row["Id_Przedmiotu"].'">Edytuj</a></td>';
        echo '<td><a href="przedmiot.php?tryb=usun&id='.$row["Id_Przedmiotu"].'">Usuń</a></td>';
        echo "</tr>";
		}
		echo "</table>";
		}	 else {
			echo "0 results";
		}
   }
    
    
    
   }
   function remove($_id) {
      $q = "DELETE FROM przedmiot WHERE ID_Przedmiotu='".$_id."';";
      return $this->db->query($q);
    
    
    
   }
}
/*
$nauczyciel = new Przedmiot();
$nauczyciel->add("misio");
$nauczyciel->save("misio","2");
$nauczyciel->get("2");
$nauczyciel->getall();
$nauczyciel->remove("2");
*/
?>
