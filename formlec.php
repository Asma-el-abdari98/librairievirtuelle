<html>
<head>
<meta charset= "UTF-8" />
<title>Interface de saisie d'un lecteur</title>
<link rel="stylesheet" type="text/css"  href="stylee.css" ></link></head>
<body>
<h1>Enregistrement d'un lecteur</h1>
<form method="POST" action="cible.php">
  <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="nom" placeholder="Nom">
  </div>
  <div>
        <label for="prenom">Prenom :</label>
        <input type="text" id="prenom" name="prenom" placeholder="Prenom">
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
