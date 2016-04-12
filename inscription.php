 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Inscription</title>
  <!-- Bootstrap -->
  <link href="css/bootstrap.css" rel="stylesheet" media="screen">
  <?php include 'menu.php'; ?>
</head>

<body>

<div class="col-md-5 col-md-offset-3">
<div class="panel panel-default">
<div class="panel-heading">Inscription</div>
 <form role="form" method="post" action="register.php">
  <form class="form-inline" role="form">
  <div class="form-group">
  	<div class="form-group">
    <label for="email">Métier:</label>
    <select name="metier">
		<option value="Directeur">Directeur</option>
		<option value="Medecin">Medecin</option>
		<option value="Infirmier">Infirmier</option>
		<option value="Hote accueil">Hote accueil</option>
	</select>
  </div>
    <label for="email">Genre:</label>
    <input type="radio" name="genre" id="homme" value="Monsieur" /> <label for="homme">Monsieur</label>
    <input type="radio" name="genre" id="femme" value="Madame" /> <label for="femme">Madame</label>
  <div class="form-group">
    <label for="nom">Nom:</label>
    <input type="text" class="form-control" id="nom" name="nom">
  </div>
  <div class="form-group">
    <label for="prenom">Prenom:</label>
    <input type="text" class="form-control" id="prenom" name="prenom">
  </div>
  <div class="form-group">
    <label for="login">Login:</label>
    <input type="text" class="form-control" id="login" name="login">
  </div>
  <div class="form-group">
    <label for="date_naissance">Date de naissance:</label>
    <input type="text" class="form-control" id="date_naissance" name="date_naissance">
  </div>
  <div class="form-group">
    <label for="email">Adresse email:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="chambre">Chambre:</label>
    <input type="number" class="form-control" id="chambre" name="chambre">
  </div>
  <div class="form-group">
    <label for="mutuelle">Mutuelle:</label>
    <input type="text" class="form-control" id="mutuelle" name="mutuelle">
  </div>
  <div class="form-group">
    <label for="nationalité">Nationnalité:</label>
    <input type="text" class="form-control" id="nationalité" name="nationalité">
  </div>
  <div class="form-group">
    <label for="ville">Ville:</label>
    <input type="text" class="form-control" id="ville" name="ville">
  </div>
  <div class="form-group">
    <label for="adresse">Adresse:</label>
    <input type="text" class="form-control" id="adresse" name="adresse">
  </div>
  <div class="form-group">
    <label for="code_postal">Code Postal:</label>
    <input type="number" class="form-control" id="code_postal" name="code_postal">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</form>
</div>
</div>


</body>
</html>
