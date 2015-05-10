<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
  </head>
  <body>
	  <form action="nauczyciel.php" method="get">
		  <input type="hidden" name="tryb" value="dodaj">	  
		  Imię: <input type="text" name="imie"><br>
		  Nazwisko <input type="text" name="nazwisko"><br>
		  <input type="submit" value="Zapisz">
	  </form>
<?php
include("class/Db.class.php");
include("class/teacher.php");
$nauczyciel = new Teacher($mysqli);
if(isset($_REQUEST['tryb'])) {
	switch($_REQUEST['tryb']) {
		case "dodaj":
			$nauczyciel->add($_REQUEST['imie'], $_REQUEST['nazwisko']);
			break;
		case "edytuj":
			//wywołanie funkcji edycji
			break;
		case "usun":
			//wywolanie funkcji usuniecia
			break;
	}
}
$nauczyciel->getHTMLtable();
?>
  </body>
</html>
