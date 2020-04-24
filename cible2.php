<html>
<head>
<title>Validation du Formulaire</title>
</head>
<body>
<h1>Validation d'un livre</h1>
<table>
<tr>
<td>Nom de l'auteur:</td>
<td><FONT color="green"><?php echo $_POST['nom'];
echo "<br>";
?></td>
</tr>

<tr>
<td>Prenom de l'auteur:</td>
<td><FONT color="green"><?php echo $_POST['prenom'];
echo "<br>";
?></td>
</tr>

<tr>
<td>Titre:</td>
<td> <FONT color="green"><?php echo $_POST['titre'];
echo "<br>";
?> </td>
</tr>

<tr>
<td>Categorie:</td>
<td><FONT color="green"> <?php echo $_POST['categorie'];
echo "<br>";
?></td>
</tr>

<tr>
<td>Numéro ISBN:</td>
<td> <FONT color="green"><?php echo $_POST['num'];
echo "<br>";
?></tr>
</tr>

</table>
</body>
</html>