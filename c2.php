<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Une page PHP</title>
</head>
<body>
<?php
echo "<h3> Aujourd'hui le ". date('d / M / Y H:m:s')."</h3><hr />";
echo "<h2>Bienvenue sur le site PHP 5</h2>";

for ($i=1; $i<=3; $i++){
	echo "<h$i> Titre de niveau $i </h$i>";	
}
echo "<table border=\"2\" style=\"background-color:gray; color:white\"> <th> &nbsp;X &nbsp;</th>";
?>
</body>