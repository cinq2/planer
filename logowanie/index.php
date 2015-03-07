 <?php session_start();
          require_once('db.php');
    ?>
<!DOCTYPE html>
    <html>
    <head>
    <title>Skrypt logowania z wykorzystaniem PHP i bazy MySQL</title>
    
    </head>

    <body>
    
     <?php
    /* je¿eli nie wype³niono formularza - to znaczy nie istnieje zmienna login, has³o i sesja auth
     * to wyœwietl formularz logowania
     */
    if (!isset($_POST['login']) && !isset($_POST['password']) && $_SESSION['auth'] == FALSE){
      
    
  ?>
  
      <form name="form-logowanie" action="index.php" method="post">
          Login: <input type="text" name="login"><br>
          Has³o: <input type="password" name="password">
          <input type="submit" name="zaloguj" value="Zaloguj">
      </form>
  
  <?php
  }
    /* je¿eli istnieje zmienna login oraz password i sesja z autoryzacj¹ u¿ytkownika jest FALSE to wykonaj
     * skrypt logowania
     */
    elseif (isset($_POST['login']) && isset($_POST['password']) && $_SESSION['auth'] == FALSE) {
      
        // je¿eli pole z loginem i has³em nie jest puste      
        if (!empty($_POST['login']) && !empty($_POST['password'])) {
          
        // dodaje znaki unikowe dla potrzeb poleceñ SQL
        $login = mysql_real_escape_string($_POST['login']);
        $password = mysql_real_escape_string($_POST['password']);
        
        // szyfrujê wpisane has³o za pomoc¹ funkcji md5()
        $password = md5($password);
        
        /* zapytanie do bazy danych
         * mysql_num_rows - sprawdzam ile wierszy odpowiada zapytaniu mysql_query
         * mysql_query - pobierz wszystkie dane z tabeli user gdzie login i has³o odpowiadaj¹ wpisanym danym
         */
        $sql = mysql_num_rows(mysql_query("SELECT * FROM `user` WHERE `login` = '$login' AND `password` = '$password'"));
        
            // je¿eli powy¿sze zapytanie zwraca 1, to znaczy, ¿e dane zosta³y wpisane poprawnie i rejestrujê sesjê
            if ($sql == 1) {
              
                // zmienne sesysje user (z loginem zalogowanego u¿ytkownika) oraz sesja autoryzacyjna ustawiona na TRUE
                $_SESSION['user'] = $login;
                $_SESSION['auth'] = TRUE;
                
                //przekierwujê u¿ytkownika na stronê z ukrytymi informacjami
                echo '<meta http-equiv="refresh" content="1; URL=hide.php">';
                echo '<p style="padding-top:10px;"><strong>Proszê czekaæ...</strong><br>trwa logowanie i wczytywanie danych<p></p>';
            }
            
            // je¿eli zapytanie nie zwróci 1, to wyœwietlam komunikat o b³êdzie podczas logowania
            else {
                echo '<p style="padding-top:10px;color:red" ;="">B³¹d podczas logowania do systemu<br>';
                echo '<a href="index.php" style="">Wróæ do formularza</a></p>';
            }
        }
        
        // je¿eli pole login lub has³o nie zosta³o uzupe³nione wyœwietlam b³¹d
        else {
            echo '<p style="padding-top:10px;color:red" ;="">B³¹d podczas logowania do systemu<br>';
            echo '<a href="index.php" style="">Wróæ do formularza</a></p>';    
        }
    }
     // je¿eli sesja auth jest TRUE to przekieruj na ukryt¹ podstronê
    elseif ($_SESSION['auth'] == TRUE && !isset($_GET['logout'])) {
        echo '<meta http-equiv="refresh" content="1; URL=hide.php">';
        echo '<p style="padding-top:10px;"><strong>Proszê czekaæ...</strong><br>trwa wczytywanie danych<p></p>';
    }

    // wyloguj siê
    elseif ($_SESSION['auth'] == TRUE && isset($_GET['logout'])) {
        $_SESSION['admin_user'] = '';
        $_SESSION['admin_auth'] = FALSE;
        echo '<meta http-equiv="refresh" content="1; URL=index.php">';
        echo '<p style="padding-top:10px;"><strong>Proszê czekaæ...</strong><br>trwa wylogowywanie<p></p>';
    }
 ?>
    </body>
      
    </html>