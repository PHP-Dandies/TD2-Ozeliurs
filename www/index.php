<?php
include 'utils.inc.php';
start_page();
?>
    
    <form action="data-processing.php" method="POST">
        <div>
            <label for="id">Identifant:</label>
            <input type="text" name="id">
        </div>
        <div>
            <label for="sex">Sexe:</label>
            <input type="radio" name="sex">Masculin</input>
            <input type="radio" name="sex">Féminin</input>
            <input type="radio" name="sex">Autre</input>
            <input type="radio" name="sex">Hélicoptère de Combat</input>
        </div>
        <div>
            <label for="email">E-mèl:</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="pass">Mot de passe:</label>
            <input type="password" name="pass">
        </div>
        <div>
            <label for="pass_v">Vérification du Mot de passe:</label>
            <input type="password" name="pass_v">
        </div>

        <div>
            <label for="tel">Téléphone:</label>
            <input type="text" name="tel">
        </div>
        <div>
            <label for="pays">Pays:</label>
            <select name="pays">
                <option value="fr">France</option>
                <option value="en">Angleterre</option>
                <option value="en">USA</option>
            </select>
        </div>
        <div>
            <label for="cg">Conditions Générales:</label>
            <input type="checkbox" name="cg">
        </div>

        <input type="submit" name="action" value="mailer">
    </post>

<?php
    end_page();
?>