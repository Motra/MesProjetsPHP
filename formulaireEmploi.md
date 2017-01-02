
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Listes à choix multiples</title>
    </head>
    <body>
        <form method="post" action="form2.php" >
            <fieldset>
                <legend>Recherche d'emploi: complétez la fiche </legend>
                <div>
                    <span>Nom<input type="text" name="ident[]" />
                        Prénom<input type="text" name="ident[]" />
                        Age<input type="text" name="ident[]" />
                        <br /><br />
                        Langues pratiquées<br />
                        <select name="lang[]" multiple="multiple">
                            <option value="français"> Français</option>
                            <option value="anglais"> Anglais</option>
                            <option value="allemand"> Allemand</option>
                            <option value="espagnol"> Espagnol</option>
                        </select><br /><br />
                        Compétences informatiques<br />
                        XHTML<input type="checkbox" name="competent[]" value="XHTML" />
                        PHP<input type="checkbox" name="competent[]" value="PHP" />
                        MySQL<input type="checkbox" name="competent[]" value="MySQL" />
                        ASP.Net<input type="checkbox" name="competent[]" value="ASP.Net" />
                        Java<input type="checkbox" name="competent[]" value="Java" />
                        C<input type="checkbox" name="competent[]" value="C" />
                        Angular<input type="checkbox" name="competent[]" value="Angular" />
                        Node<input type="checkbox" name="competent[]" value="Node" /> <br /><br />
                        <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
                        CV<input type="file" name="fich[]" accept="image/gif" size="50"/> <br />
                        Lettre de motivation<input type="file" name="fich[]" accept="image/gif" size="50"/>
                    </span><br /><br />
                    <input type="reset" value="EFFACER"/>
                    <input type="submit" value="ENVOYER"/>
                </div>
            </fieldset>
        </form>
    </body>
</html>

<---!--------------------s'éxecute avec le fichier le fichier inclus form2.php (idéalement dans le meme dossier----->
