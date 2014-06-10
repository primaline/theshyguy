<!DOCTYPE html>
<html lang="fr">


	<head>
		<title>Les témoignages - The Shy Guy</title>
		<meta charset="utf-8" />
        
        <link rel="icon" type="img/png" href="img/favicon.png" />
        
        <link rel="stylesheet" type="text/css" href="css/reset.css" />
        <link rel="stylesheet" type="text/css" href="fonts/fontsheet.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
    
    
		<body>
        
		
        <header>
        <div class="sectioncontent_alt">
			<h1><a href="index.html">the shy guy</a></h1>
			<a class="button" href="temoignages.php" >Les témoignages</a>
            </div>
        </header>
        
        <section class="temoignagescreen">
			<div class="sectioncontent">
				<h2>Les élèves et professionnels témoignent<br>sur leur expérience de l'oral</h2>
			</div>
		</section>
        
        
        <section class="whitesection">
        
        	
            
         <?php
			include('insertcom.inc.php');
			$insert_value = insertcom(1);
			
			include('commentaires.inc.php');
			affichecommentaires(1);
        ?>
        
        </section>
        
        
        <section class="redsection">
        
        
        
        <?php
        include('formulaire.inc.php');
        formulaire(1, $insert_value);
        ?>
        
        </section>
        
        
        <footer>
			<div class="sectioncontent">
				<p class="footertext"><a href="credits.html">Credits</a> - 2014 &copy;<a href="http://hubert-design.be/" target="_blank">Maxime-Emilien Hubert</a> @ <a href="http://www.infographie-sup.be/" target="_blank">ESIAJ</a></p>
			</div>
		</footer>


        </body>
        
        
</html>