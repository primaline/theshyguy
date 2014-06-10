<?php

include_once("functions.inc.php");

function insertcom($theme)
{
	$nom = "";
	$msg = "";
	
	//FORM PROCESSING
	if(count($_POST)>0)
	{
		$nom = trim( strip_tags ($_POST['nom']));
		$msg = trim( strip_tags ($_POST['msg']));
		
		$erreurs = array ();
		if($nom=="")
		{
			$erreurs['nom'] = "Tu n'as pas indiqué ton nom";
		}
			
		if($msg=="")
		{
			$erreurs['msg'] = "Tu n'as pas écrit de témoignage";
		}
		
		
		if(count($erreurs) == 0)
		{
			$db = connexion();
			if($db != null)
			{
				try
				{
					$nom = addslashes($nom);
					$msg = addslashes($msg);
					$sql = "insert into tsg_commentaires (theme,nom,msg) values ($theme,'$nom','$msg')";
					$sqlinsert = $db->exec($sql);
					return $sqlinsert;
				}
				catch(PDOException $e)
				{
					$erreurs['sql'] = 'Erreur : '.$e->getMessage();
				}
			}
			
		}
		
		return $erreurs;
		
	}
	else
	{
		return 0;
	}
}

?>