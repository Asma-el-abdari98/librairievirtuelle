﻿<html>
<head>
<title>Validation du Formulaire</title>
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

</table>
</body>
</html>