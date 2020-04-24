<?php
 
  $connexion= mysql_connect("localhost","root","");
  mssql_select_db("bibliotheque");
?>

<?php
 require 'connexion.php';
?>


<?php
 
  $req="SELECT * FROM Livres";
  $result=mysql_query($req);
  echo "<table><tr><th>Nom de l'auteur</th></tr><table><tr><th>Prenom de l'auteur</th></tr><table><tr><th>Titre</th></tr><table><tr><th>Categorie</th></tr><table><tr><th>Numéro</th></tr>";
  while($rov=mysql_fetch_array($result)){
	  echo "<tr>";
      echo "<td>.$rov['Nom de l auteur']."</td>";
	  echo "<td>.$rov['Nom de l auteur']."</td>";
	  echo "<td>.$rov['Titre']."</td>";
	  echo "<td>.$rov['Categorie']."</td>";
	  echo "<td>.$rov['Numéro']."</td>";
	  echo "</tr>";
  }
  echo "</table">;
 
?>


