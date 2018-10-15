<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
	    <title>Water Life</title>
	    <link rel="stylesheet" type="text/css" href="css/fonts.css">
	    <link rel="stylesheet" type="text/css" href="css/header.css">
	     <link rel="stylesheet"  href="css/productPage.css">
	    <link rel="stylesheet" href="css/footer.css">
	</head>

	<!-- Indication de la page dans laquelle on se trouve -->
	<?php $page_en_cours = 'none'; ?>

	<?php include("header.php"); ?> 

	<body class="bodyProduct">
		<!-------------------connexion sql-------------------------->
		<?php // On se connecte à MySQL
	      try{
	        $bdd = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', '');
	      }
	      catch(Exception $e){
	        // En cas d'erreur, on affiche un message et on arrête tout
	        die('Erreur : '.$e->getMessage());
	      }
	    ?>
	    <!-------------------FIN connexion sql-------------------------->

		<?php  // on va chercher les infos dans la bdd
		$req = $bdd->prepare('SELECT * FROM products WHERE Marque = ?');
		$req -> execute(array($_GET['produit']));

		while($donnees=$req->fetch())
            {
		?>  
		<!-------------------bloc produit-------------------------->
		<div class="containerProduit"> 
			<div class="englobe"></div>
			<div class="image">
				<img class="img" src="<?php echo $donnees['Image'];?>" alt="Product" /> 
			</div>

			<div class="infos">
				<div class="titrePrix">
					<p>
					<h1 class="h1"> <?php echo $donnees['Marque']; ?></h1>
					<h2 class="h2"> <?php echo $donnees['Type']; ?> </h2>
					</p>
				</div>
				<div class="panierPresentation">
					<div class="presentation"> 
						<div class=description>
							<h3 class="h3"> DESCRIPTION </h3>
						    <p class="paragraphe"><?php echo $donnees['Description']; ?></p>
						</div>
						<div class=materiau>
							<h3 class="h3"> MATIERE </h3>
						    <p class="paragraphe">Contenant fait en <?php echo $donnees['Materiau']; ?></p>
						</div>
						<br><br>
						<div class="stock">
							<?php
								if ( $donnees['Quantite']==0) {
	    							echo "<h3 class='h3'>Stocks épuisés</h3>";
	   							} else {
	   								echo "<h3 class='h3'>En stock</h3>";
								}
							?>
						</div>
					</div> <!-- fin div presentation-->

					<div class = "panier"> 
						<h2 class="prix"> € <?php echo $donnees['Prix']; ?> </h2>
						<h5 class="ttc"> T.T.C </h5>
						<br><br><br>
						<div class = quantite>
							<h3 class="h3"> Quantité </h3>
						</div>
						<div class="number-input">
							<button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ></button>
							<input class="quantity" step="1" max="10" min="0" name="quantity" value="0" type="number">
							<button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
						</div>
						<br><br>
						<div>
							<input class="bouton" type="submit" name="submit"  value="Ajouter au Panier"  /> 
						</div>

					</div><!-- fin div ppanier-->
				</div>
			</div><!-- fin div infos-->
			</div>
		</div><!-- fin div containerProduit-->
		<!-------------------fin bloc produit-------------------------->

        <?php 
            }
            $req->closeCursor();
        ?>

          <?php include('footer.php') ?>
	</body>

	


</html>