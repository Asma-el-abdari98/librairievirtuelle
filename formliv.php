
<html>
<head>
<meta charset= "UTF-8" />
<title>Interface de saisie d'un livre</title>
<link rel="stylesheet" type="text/css"  href="stylee.css" ></link></head>
<body>
<h1>Enregistrement d'un livre</h1>
<form method="POST" action="cible2.php">
  <div>
        <label for="name">Nom de l'auteur:</label>
        <input type="text" id="name" name="nom" placeholder="Nom">
  </div>
  <div>
        <label for="prenom">Prenom de l'auteur:</label>
        <input type="text" id="prenom" name="prenom" placeholder="Prenom">
   </div>
   
   <div>
        <label for="adresse">Titre:</label>
        <input type="text" id="adresse" name="titre" placeholder="Adresse">
   </div>
   <div>
        <label for="ville">Categorie :</label>
        <input type="text" id="ville" name="categorie" placeholder="Ville">
   </div>
   <div>
        <label for="code">Numéro ISBN :</label>
        <input type="text" id="code" name="num" placeholder="Code">
   </div>
   
    <div class="button">
        <button type="submit">Enregistrer</button>
    </div>
   
	
</form>
</body>
</html>
