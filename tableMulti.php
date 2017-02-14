<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Table de multipliction avec PHP</title>
</head>
<body>

<?php
echo "<h1> Tu feras mieux de réviser ta table de multiplication de 1 à 10! </ h1>";
//Début du tableau HTML
echo "<table border=\"2\" style=\"background-color:gray; color:white\"> <th> &nbsp;X &nbsp;</th>";
//Création de la première ligne
for($i=1;$i<=10;$i++)
{
echo "<th>&nbsp;$i&nbsp;</th>"; 
}
//Fin de la boucle 1
//*****************************
//Création du corps de la table
//*****************************
//Boucles de création du contenu de la table
for($i=1;$i<=10;$i++) 
{
//Création de la première colonne
echo "<tr><th>&nbsp;$i&nbsp;</th>";
//Remplissage de la table
for($j=1;$j<=10;$j++)   
{
echo "<td style=\"background-color:red;color:white\"> &nbsp;&nbsp; <b>". $i*$j. "&nbsp;&nbsp; </td>";
}
echo "</b></tr>";
}
echo "</table>"
?>
</body>
</html>