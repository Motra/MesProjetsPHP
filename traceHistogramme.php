
        <?php
        function histo($x,$y,$donn,$texte,$titre) 
        {
        $image=imagecreate($x,$y); 
        //la première couleur déclarée est la couleur de fond
        $ocre=imagecolorallocate($image,195,155,125);
        $blanc=imagecolorallocate($image,255,255,255);
        $bleu =imagecolorallocate($image,50,0,255);
        $noir =imagecolorallocate($image,0,0,0);
        $jaune=imagecolorallocate($image,255,255,00);
        $nbcol=count($donn); 
        $maxi=0;
        //Recherche de la valeur maxi
        for($i=0;$i<$nbcol;$i++)
        {
        $maxi = max($maxi,$donn[$i]); 
        }
        //Recherche d'échelle============>coefficient d'échelle
        $coeff = ($y*0.8)/ $maxi; 
        $XO = 10;
        $YO = $y-50;
        $larg = ($x-20)/$nbcol; 
        //coordonnées des sommets des rectangles
        for($i=0;$i<$nbcol;$i++) 
        {
        $tabX[$i] = $XO + $larg*$i;
        $tabY[$i] = $YO - $coeff*$donn[$i];
        }
        //tracé des rectangles
        for($i=0;$i<$nbcol;$i++) 
        {
        //tracés des rectangles en noir
        imagerectangle($image,$tabX[$i],$tabY[$i],$tabX[$i]+$larg,$YO,$noir);
        //remplissage des rectangles en jaune
        imagefill($image,$tabX[$i]+5,$YO-5,$jaune);
        //Écriture des données au dessus des rectangles
        imagettftext($image,15,0,$tabX[$i]+20,$tabY[$i]-5,$noir,"vivaldii.ttf", $donn[$i]);
        //Écriture des jours en bas des rectangles
        imagettftext($image,15,0,$tabX[$i]+20,$y-55,$bleu,"elephnti.ttf",$texte[$i]);
        }
        //Écriture du titre de l'histogramme en bas
        imagettftext($image,20,0,200,$y-23, $blanc, "elephnti.ttf",$titre); 

        //enregistre l'image
        imagepng($image,"histo.png");
        //Libère la mémoire
        imagedestroy($image);
        }
        ?> 

    