<?php

include_once("functions.inc.php");
	
function formulaire($theme, $insert_value)
{
	$nom = "";
	$msg = "";
	
	//FORM PROCESSING
	if(count($_POST)>0)
	{
	$nom = trim( strip_tags ($_POST['nom']));
	$msg = trim( strip_tags ($_POST['msg']));
	}
	
	if(is_array($insert_value))
	{
		$erreurs = $insert_value;
	}
	else
	{
		$sqlinsert = $insert_value;
		$nom = "";
		$msg = "";
	}
//	
//	$erreurs = array ();
//	if($nom=="")
//	{
//		$erreurs['nom'] = "Tu n'as pas indiqué ton nom";
//	}
//		
//	if($msg=="")
//	{
//		$erreurs['msg'] = "Tu n'as pas écrit de témoignage";
//	}
//	
//	/*if(count($erreurs)>0)
//	{
//		
//		print_r($erreurs);
//
//	}*/
//	
//	if(count($erreurs) == 0)
//	{
//		$db = connexion();
//		if($db != null)
//		{
//			try
//			{
//				$nom = addslashes($nom);
//				$msg = addslashes($msg);
//				$sql = "insert into tsg_commentaires (theme,nom,msg) values ($theme,'$nom','$msg')";
//				$sqlinsert = $db->exec($sql);
//				$nom = "";
//				$msg = "";
//			}
//			catch(PDOException $e)
//			{
//				$erreurs['sql'] = 'Erreur : '.$e->getMessage();
//			}
//		}
//		
//	}
//		
//	}
?>


        
        	<div class="sectioncontent">
            
            <h3>Partage ta propre expérience</h3>
                
                <div id="messageinfo">
                <?php
					if(isset($erreurs) && count($erreurs) > 0)
					{
						echo "<ul>";
						foreach($erreurs as $e)
						{
							echo "<li>$e</li>";
						}
						echo"</ul>";
					}
					
					if(isset($sqlinsert) && $sqlinsert > 0)
					{
						echo 'Merci, ton témoignage a été prit en compte';
					}
				?>
                </div>
                
                <form method="POST" action="#messageinfo">
        
        	<ul>
                
                <li>  
                    <label for="nom">Quel est ton nom?</label>  
                    <?php 
						echo"<input id=\"nom\" type=\"text\" maxlength=\"30\" name=\"nom\" value=\"$nom\" >";
					?>
                </li>
                
                <li>  
                    <label for="msg">Raconte ton expérience<span> 180 caractères maximum</span></label>  
                    <?php 
						echo"<textarea id=\"msg\" name=\"msg\" maxlength=\"180\">$msg</textarea>";
					?>
                </li>
               
            </ul>
                 
            <input id="envoi" type="submit" name='soumission' value="confirmer">
    	
    	</form>
            
            </div>
        
        

<?php
}

?>
