<?php
include 'utils.inc.php';
start_page();

    $dbLink = mysqli_connect("localhost:3306", "root") or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
    mysqli_select_db($dbLink , "mysql") or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink));
?>

    <form method="POST" action="login.php">
        <label for="id">ID: </label>
        <input type="text" name="id">
        <label for="pass">Password: </label>
        <input type="password" name="pass">
        <input type="submit" >
    </form>
    <div class="card">
        <?php
            if ($_POST["action"] == "login") {
                $id = $_POST['id'];
                $ps = $_POST['pass'];
                $query = 'SELECT * FROM USER WHERE ID='.$id;
                if(!($dbResult = mysqli_query($dbLink, $query))) {
                    echo 'Erreur de requête<br/>';
                    
                    echo 'Requête : ' . $query . '<br/>';
                    exit();
                }
                $dbRow = mysqli_fetch_assoc($dbResult);
                if ($dbRow["PASS"] == $ps) {
                    echo 'Bienvenue '.$dbRow["ID"].'.';
                } else {
                    echo "Mauvais mot de passe !!!";
                }
            }
        ?>
    </div>
<?php
end_page();
?>