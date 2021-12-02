<?php
include 'utils.inc.php';
start_page();
?>
<?php
    if($_POST["action"] == 'mailer') {
        $message = 'Voici vos identifiants d\'inscription :'.PHP_EOL;
        $message .= '    Identifiant: '.$_POST['id'].PHP_EOL;
        $message .= '    Sexe: '.$_POST['sex'].PHP_EOL;
        $message .= '    E-mèl: '.$_POST['email'].PHP_EOL;
        $message .= '    Mot de passe: '.$_POST['pass'].PHP_EOL;
        $message .= '    Vérification du Mot de passe: '.$_POST['pass_v'].PHP_EOL;
        $message .= '    Téléphone: '.$_POST['tel'].PHP_EOL;
        $message .= '    Pays: '.$_POST['pays'].PHP_EOL;
        $message .= '    Conditions Générales: '.$_POST['cg'].PHP_EOL;
        
        //echo "<pre>".$message."</pre>";
        if (mail("ozeliurs@gmail.com", "Votre formulaire.", $message)) {
            echo '<h1>Votre mail à bien été envoyé.</h1>'.PHP_EOL.'<a href="/">Page d\'acceuil</a>';
        } else {
            echo 'Mail non envoyé !!!!';
        }
        

    } else {
        echo '<br/><strong>Bouton non géré !</strong><br/>';
    }
?>
<?php
end_page();
?>