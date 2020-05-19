<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CV Evan Hoizey</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/resume.css" rel="stylesheet">

</head>

<body>

    <?php
    $pdo = new PDO('mysql:host=localhost;dbname=securite;charset=utf8', 'root', '');

    if(isset($_POST['pseudo'])) {
      $req = "SELECT * FROM user WHERE pseudo='" . $_POST['pseudo'] . "' AND mdp='" . $_POST['mdp'] . "'";
        foreach($pdo->query($req) as $membre) {
          if(!empty($membre)){
            header('Location: admin.php');
          }
          else{
            echo '<div class="erreur"><h1>Erreur d\'identification</h1></div>';
          }
        }
      }
    ?>
     
    <hr>
     
    <form method="post" action="">
        <label for="pseudo">Pseudo</label><br>
        <input type="text" id="pseudo" name="pseudo"><br>
         
        <label for="mdp">mdp</label><br>
        <input type="text" id="mdp" name="mdp"><br>
         
        <input type="submit" value="Se connecter">
    </form>


</body>