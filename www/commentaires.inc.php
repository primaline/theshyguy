<?php

include_once("functions.inc.php");

function affichecommentaires($theme)
{

	$db=connexion();
	if($db!=null)
	{
		try
		{
			$sql="select * from tsg_commentaires where theme=$theme order by id desc";
			$res=$db->query($sql); 
			$tab=$res->fetchAll(PDO::FETCH_ASSOC);
			foreach($tab as $valeur){
				?>
                
				<div class="commentscontent">
            
            	<span class="quote">quote style</span>
            
            	<p><?php echo nl2br(stripslashes($valeur['msg']));?></p>

				<span class="nompersonne"><?php echo stripslashes($valeur['nom']);?></span>
            
            </div>
            
            <?php
			}
		}
		catch(PDOException $e)
		{
			echo 'Erreur : '.$e->getMessage();
		}
	}
	
}

?>