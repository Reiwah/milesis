<?php include("header.php"); ?> 




<h2 id="title-form">Formulaire de contact</h2>

<p class="text-form"> Si vous avez une question à nous poser, utilisez notre formulaire de contact ou alors nous contacter directement au 05 65 45 45 85 </p>


<form action="" method="post">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" />
    </div>
     <div>
        <label for="nom">Prénom :</label>
        <input type="text" id="nom" />
    </div>
    <div>
        <label for="courriel">Mail :</label>
        <input type="email" id="courriel" />
    </div>
	 <SELECT name="nom" size="1" id="select-form">
	 	<OPTION>Sélectionnez votre bijou
		<OPTION>bague
		<OPTION>bracelet
		<OPTION>collier
		<OPTION>boucle
	</SELECT>
    <div>
        <label for="message" >Message :</label>
        <textarea id="message" cols="50" rows="10"></textarea>
    </div>
    <button type="submit" id="send-form">Envoyer votre message</button>
</form>