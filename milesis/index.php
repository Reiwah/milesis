<?php include("header.php"); ?>

			<div class="slideshow">
				<ul>
						<li><a href="" title=""><img src="images/bague1.jpg" alt=""></a></li>
						<li><a href="" title=""><img src="images/bague2.jpg" alt=""></a></li>
						<li><a href="" title=""><img src="images/bague3.jpg" alt=""></a></li>
				</ul>
			</div>

			<section id="presentation">
				<p><div id="title">Le milesis</div><br><br>
				Milesis est une marque de bijoux faits main par un artisan bijoutier. Toutes les créations sont réalisées en séries limitées.
Nous vous proposons également de créer des bijoux sur-mesure pour répondre à vos envies.</p>
				
				<article class="block_article">
					<figure>
						<img src="images/maquette_grille_Accueil_03.jpg" alt="">
							<figcaption>
							<a href="" title"">Sublime broche</a>
							<p>150€</p>
							<p>En stock</p>	
						</figaption>
					</figure>
				</article>

				<article class="block_article">
					<figure>
						<img src="images/maquette_grille_Accueil_05.jpg" alt="">
						<figcaption>
							<a href="" title"">Bague argent torsadé</a>
							<p>150€</p>
							<p>En stock</p>
						</figaption>
					</figure>
				</article>

				<article class="block_article">
					<figure>
						<img src="images/maquette_grille_Accueil_09.jpg" alt="">
							<figcaption>
							<a href="fiche_produit.php" title"">Bague or femme</a>
							<p>150€</p>
							<p>En stock</p>							
						</figaption>
					</figure>
				</article>

				<article class="block_article">
					<figure>
						<img src="images/maquette_grille_Accueil_10.jpg" alt="">
							<figcaption>
							<a href="" title"">Bague en or blanc 150€</a>
							<p>150€</p>
							<p>En stock</p>	
						</figaption>
					</figure>
				</article>
			</section>
</main>
	</div>


<!-- Script -->

<!-- On récupère la librairie jquery sur google pour pouvoir faire le code jquery -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
 
<!-- 
- Fonction setInterval() : prend en paramètres une fonction anonyme, le délai en milliseconde entre chaque exécution de la fonction. 
- Fonction animate() : permet d’exécuter une fonction de callback, il s’agit d’une fonction exécutée lorsque animate() retourne « complete »
- AppendTo : ajoute ce que nous voulons aux paramètres passés précédemment. 
Dans notre cas, nous définissons une fonction anonyme avec function(){} et définissons la répétition à 3,5 secondes.
Nous commençons par cibler notre ul que nous allons faire bouger vers la gauche grâce à une animation qui va appliquer une marge négative de 800px en 0,8 secondes
Nous supprimons la marge négative récemment attribuée par l’animation
-->
<script type="text/javascript">
	(function($){  
	  setInterval(function(){  
	    $(".slideshow ul li:first-child").animate({"margin-left": -800}, 800, function(){  
	        $(this).css("margin-left",0).appendTo(".slideshow ul");  
	    });  
	  }, 3500);  
	})(jQuery);
</script>

</body>


<?php include("footer.php"); ?>

</html>
