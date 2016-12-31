# MesProjetsPHP

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Formulaire traité par PHP</title>
        <style type="text/css">
            fieldset {border-width: 3px; border-style: double; border: #993300}
        </style>
    </head>
    <body>
        <form action="cible.php" method="post" enctype="application/x-www-form-urlencoded">
            <!–– -------------------1er groupe de composants––-------------------------------------->
            <fieldset>
                <legend><b>Vos coordonnées</b></legend>
                <label>Nom : </label><input type="text" name="nom" size="40" maxlength="256" value="votre nom" /><br /> 
                <label>Prénom : </label><input type="text" name="prenom" size="40" maxlength="256" value="votre prénom" /><br /> 
                <label>Mail : </label><input type="text" name="mail" size="40" maxlength="256" value="votre mail" /><br />  
                <label>Code : </label><input type="password" name="code" size="40" maxlength="6" /> <br /> 
                <input type="radio" name="sexe" value="homme" /> Homme<br /> 
                <input type="radio" name="sexe" value="femme" /> Femme<br />
                <select name="pays" size="1"> 
                    <option value="France"> France</option>
                    <option value="Belgique"> Belgique</option>
                    <option value="Suisse"> Suisse</option>
                    <option value="Canada"> Canada</option>
                </select>
                <br />
            </fieldset>
            <!–– ----------------------2ème groupe de composants-------------------------------------------––>
            <fieldset>
                <legend><b>Vos goûts</b></legend>
                <input type="checkbox" name="pomme" value="pomme" /> Pommes<br /> 
                <input type="checkbox" name="poire" value="poire" /> Poires<br />
                <input type="checkbox" name="scoubidou" value="scoubidou" /> Scoubidous<br />
                <textarea name="gouts" cols="50" rows="5" onclick="this.value = ''"> 
                Décrivez vos goûts en détail
                </textarea>
                <br /><br />
            </fieldset>
            <!–– ---------------------3ème groupe de composants-----------------------------------------------––>
            <fieldset>
                <legend><b>Envoyez nous votre photo</b></legend>
                <input type="file" name="fichier" accept="image/jpeg" /> 

                <input type="hidden" name="MAX_FILE_SIZE" value="10000" />
                <br /><br />
                <input type="reset" value="Effacer" /> 
                &nbsp;&nbsp;&nbsp;<input type="submit" value="Envoyer" /> 
                <br /><br />
            </fieldset>
        </form>
    </body>
</html>
