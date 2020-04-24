<html>
<head>
<meta charset= "UTF-8" />
<title>Interface de saisie d'un lecteur</title>
<link rel="stylesheet" type="text/css"  href="stylee.css" ></link>
</head>
<body>
<h1>Gestion du lecteur</h1>
<p>
Le lecteur n'est pas reconnu<br>Cliquez ici pour tester unr nouvelle identification
</p>
<h3>Enregistrement d'un lecteur</h3>
<p>Si vous etes un nouveau lecteur, veuillez vous enregistrer en remplissant le formulaire ci dessous</p>
<form method="POST" action="cible3.php">
  <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="nom" placeholder="Nom">
  </div>
  <div>
        <label for="prenom">Prenom :</label>
        <input type="text" id="prenom" name="prenom" placeholder="Prenom">
   </div>
   <div>
        <label for="mdp">Mot de passe:</label>
        <input type="password" id="mdp" name="msp" placeholder="Mot de passe">
   </div>
   
   <div>
        <label for="adresse">Adresse :</label>
        <input type="text" id="adresse" name="adresse" placeholder="Adresse">
   </div>
   <div>
        <label for="ville">Ville :</label>
        <input type="text" id="ville" name="ville" placeholder="Ville">
   </div>
   <div>
        <label for="code">Code Postal :</label>
        <input type="text" id="code" name="code" placeholder="Code">
   </div>
   
    <div class="button">
        <button type="submit">Enregistrer</button>
    </div>
   
	
</form>
</body>
</html>
