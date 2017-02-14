<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
    <head>
        <title>Calculatrice en ligne</title>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    </head>
    <body>
        <!––-----------------------Code PHP -------------------------------------––>
        <?php
        if(isset($_POST["calcul"])&&isset($_POST["nb1"])&&isset($_POST["nb2"]))
        {
        switch($_POST["calcul"])
        {
        case "Addition x+y":
        $resultat= $_POST["nb1"]+$_POST["nb2"];
        break;
        case "Soustraction x-y":
        $resultat= $_POST["nb1"]-$_POST["nb2"];
        break;
        case "Division x/y":
        $resultat= $_POST["nb1"]/$_POST["nb2"];
        break;
        case "Puissance x^y":
        $resultat= pow($_POST["nb1"],$_POST["nb2"]);
        break;
        }
        }
        else
        {
        echo "<h3>Entrez deux nombres : </h3>";
        }
        ?>
        <!–– ----------------Code HTML du formulaire------ -------------------------––>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post" >
            <fieldset>
                <legend><b>Calculatrice en PHP Finis le Calcul mental dur!</b></legend>
                <table>
                    <tbody>
                        <tr>
                            <th>Nombre X</th>
                            <td> <input type="text" name="nb1" value="<?php if(isset($_POST["nb1"]))
                                        echo $_POST['nb1'];else echo'' ?>"/> 
                        </td>
                    </tr>
                    <tr>
                        <th>Nombre Y</th>
                        <td> <input type="text" name="nb2" value="<?php if(isset($_POST["nb2"]))
                                    echo $_POST['nb2'];else echo'' ?>"/>  
                    </td>
                </tr>
                <tr>
                    <th>Résultat </th>
                    <td> <input type="text" name="result" value="<?php if(isset($resultat))
                                echo $resultat;else echo''?>"/>  
                    </td>
                </tr>
                <tr>
                    <th>Choisissez!</th>
                    <td>
                        <input type="submit" name="calcul" value="Addition x+y" />  
                        <input type="submit" name="calcul" value="Soustraction x-y" />  
                        <input type="submit" name="calcul" value="Division x/y" /> ←	
                        <input type="submit" name="calcul" value="Puissance x^y" />
                    </td>
                </tr>
            </tbody>
        </table>
    </fieldset>
</form>
</body>
</html>