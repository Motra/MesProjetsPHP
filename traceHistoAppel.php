<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title> Histogramme dynamique </title>
    </head>
    <body>
        <div>
            <h2>Résultats des ventes de la semaine</h2>
            <?php
            //Utilisation de la fonction ----/* tous les textes n'apparaissent pas!, il ya un petit souci, à revoir!*/
            include("traceHistogramme.php"); 
            $donn= array(850,2500,4050,2730,2075,2590,1450); 
            $texte = array("Lun","Mar","Mer","Jeu","Ven","Sam","Dim"); 	
            $titre = "Ventes hebdomadaires PHP 5"; 
            histo(700,450,$donn,$texte,$titre); 
            ?>
            <img src="histo.png" alt="Ventes" />  
        </div>


        
    </body>
</html>