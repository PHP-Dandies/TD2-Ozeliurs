<?php
include 'utils.inc.php';
start_page();
?>
<?php
    if($_POST["action"] == 'mailer') {
        $message = "Voici vos identifiants d\'inscription :\n";
        $message .= "\tIdentifiant: $_POST['id']\n";
        $message .= "\tSexe: $_POST['sex']\n";
        $message .= "\tE-mèl: $_POST['email']\n";
        $message .= "\tMot de passe: $_POST['pass']\n";
        $message .= "\tVérification du Mot de passe: $_POST['pass_v']\n";
        $message .= "\tTéléphone: $_POST['tel']\n";
        $message .= "\tPays: $_POST['pays']\n";
        $message .= "\tConditions Générales: $_POST['cg']\n";
        
        echo $message

    } else {
        echo '<br/><strong>Bouton non géré !</strong><br/>';
    }
?>
<?php
end_page();
?>