<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="css/products.css" />
  </head>

<!-- Indication de la page dans laquelle on se trouve -->
<?php $page_en_cours = 'menu_produits'; ?>

  <!-- Ajout de l'header -->
  
  <body class="body">

    <div class="navSection"> <!-- Englobe tout sauf header et footer -->
      <nav>
        <ul>
          <li> <a href="#TitrePlate">Eaux Plates</a></li>
          <li> <a href="#TitreGazeuses">Eaux Gazeuses</a> </li>
          <li> <a href="#TitreSucree">Eaux Sucrées</a></li>
          <li> <a href="#TitreDeLuxe">Eaux de Luxe</a></li>
        </ul> 
      </nav>

       <!--
                  <div class="panier"> <input class="bouton" type="button"value="Ajouter au panier"/> </div>
                -->

      <section>

        <div id="container"> <!-- Contient 6 produits -->
          <div id="TitrePlate">
            <br><br><br>
            <h1 class="h1"> Eaux plates </h1>
            <br>
          </div>

          <div class="row">
            <div class="produit">
              <?php 
                $req=$bdd->query('SELECT * FROM products WHERE Type = \'Plate\' ');
                while($donnees=$req->fetch())
                {
              ?>
              <div class="fiche_bouteille">              
                  <a href="index.php?page=productPage&produit=<?php echo $donnees['Marque'];?> "><img class="img" src="<?php echo $donnees['Image'];?>" alt="Product" /> </a>
                  <div class=donnees>
                    <div class="legende"> <?php echo $donnees['Description']; ?></div>
                    <h4 > <?php echo $donnees['Marque'];  ?> </h4>
                    <div class="price"> <?php echo $donnees['Prix']; ?>€ </div>
                </div>
                <br><br><br>
              </div>
              <br>
              <?php 
                }
                $req->closeCursor();
              ?>
            </div>
          </div><!-- fin row1Plate -->
          <br><br>
        </div> <!-- fin containerPlates -->


        <div id="container"> <!-- Contient 3 produit= -->
          <div id="TitreGazeuses">
            <br><br><br>
            <h1 class="h1">Eaux Gazeuses</h1>
            <br>
          </div>

          <div class="row">
            <div class="produit">
              <?php 
                $req=$bdd->query('SELECT * FROM products WHERE Type = \'Gazeuse\' ');
                while($donnees=$req->fetch())
                {
              ?>
              <div class="fiche_bouteille">              
                <div class=image>
                  <a href="index.php?page=productPage&produit=<?php echo $donnees['Marque'];?> "><img class="img" src="<?php echo $donnees['Image'];?>" alt="Product" /> </a>
                   <div class=donnees>
                      <div class="legende"> <?php echo $donnees['Description']; ?> </div>
                      <h4 > <?php echo $donnees['Marque'];  ?> </h4>
                      <div class="price"> <?php echo $donnees['Prix']; ?>€ </div>
                  </div>
                  <br><br><br>
                </div>
              </div>
              <br>
              <?php 
                }
                $req->closeCursor();
              ?>
            </div>
          </div><!-- fin row -->            
          <br><br>
        </div><!-- fin containerGazeuses -->

        <div id="container"> <!-- Contient 3 produits -->
          <div id="TitreSucree">
            <br><br><br>
            <h1 class="h1">Eaux Sucrees</h1>
            <br>
          </div>

          <div class="row">

            <div class="produit">
              <?php 
                $req=$bdd->query('SELECT * FROM products WHERE Type = \'Sucrées\' ');
                while($donnees=$req->fetch())
                {
              ?>
              <div class="fiche_bouteille">              
                <div class=image>
                  <a href="index.php?page=productPage&produit=<?php echo $donnees['Marque'];?> "><img class="img" src="<?php echo $donnees['Image'];?>" alt="Product" /> </a>
                   <div class=donnees>
                      <div class="legende"> <?php echo $donnees['Description']; ?> </div>
                      <h4 > <?php echo $donnees['Marque'];  ?> </h4>
                      <div class="price"> <?php echo $donnees['Prix']; ?>€ </div>
                  </div>
                  <br><br><br>
                </div>
              </div>
              <br>
              <?php 
                }
                $req->closeCursor();
              ?>
            </div>
          </div><!-- fin row --> 
          <br><br><br>
        </div><!-- fin containerSucree -->


        <div id="container"> <!-- Contient 3 produit= -->
          <div id="TitreDeLuxe">
            <br><br><br>
            <h1 class="h1">Eaux de Luxe</h1>
            <br>
          </div>

          <div class="row">
            <div class="produit">
              <?php 
                $req=$bdd->query('SELECT * FROM products WHERE Type = \'Luxe\' ');
                while($donnees=$req->fetch())
                {
              ?>
              <div class="fiche_bouteille">              
                <div class=image>
                  <a href="index.php?page=productPage&produit=<?php echo $donnees['Marque'];?> "><img class="img" src="<?php echo $donnees['Image'];?>" alt="Product" /> </a>
                  <div class=donnees>
                    <div class="legende"> <?php echo $donnees['Description']; ?> </div>
                    <h4 > <?php echo $donnees['Marque'];  ?> </h4>
                    <div class="price"> <?php echo $donnees['Prix']; ?>€ </div>
                  </div>
                  <br><br><br>
                </div>
              </div>
              <br>
              <?php 
                }
                $req->closeCursor();
              ?>
            </div> <!-- fin produit -->
          <br><br><br>
        </div><!-- fin container de luxe -->

      </section>
    </div> <!-- fin div navSection -->
  </body>

</html>
