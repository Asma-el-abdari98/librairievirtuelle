<html>
<head>
<title>Validation duFormulaire</title>
</head>
<body>
<h1>Validation d'un lecteur</h1>
<table>
<tr>
<td>Nom:</td>
<td><FONT color="green"><?php echo $_POST['nom'];
echo "<br>";
?></td>
</tr>

<tr>
<td>Prenom:</td>
<td><FONT color="green"><?php echo $_POST['prenom'];
echo "<br>";
?></td>
</tr>

<tr>
<td>Adresse:</td>
<td> <FONT color="green"><?php echo $_POST['adresse'];
echo "<br>";
?> </td>
</tr>

<tr>
<td>Ville:</td>
<td><FONT color="green"> <?php echo $_POST['ville'];
echo "<br>";
?></td>
</tr>

<tr>
<td>Code postal:</td>
<td> <FONT color="green"><?php echo $_POST['code'];
echo "<br>";
?></tr>
</tr>

<tr>
<td>Numéro:</td>
<td> <FONT color="green"><?php echo $_POST['code'];
echo "<br>";
?></tr>
</tr>

<p>Vous etes enregistré dans la base de la bibliotheque <br> Vous avez maintenant la possibilité  de reserver des livres ou vous</p>
<p>identifiant ici</p>

</table>
</body>
</html>