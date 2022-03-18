<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>GovaxLogin</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
.login-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
</style>
</head>
<body>
<div class="login-form">
    <form method="post">
        <h2 class="text-center">inscription</h2>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Nom" name="Nom" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Prenom" name="Prenom" required="required">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="mail" name="mail" required="required">
        </div>
        <div class="form-group">
            <input type="date" class="form-control" placeholder="date-de-naissance" name="date-de-naissance" required="required">
        </div>
        <div class="form-group">
        <select name="statut">
                <libellé>Statut vaccinal</libellé>
                     <option valeur="0">Non vacciné</option>
                     <option valeur="1">1ere dose</option>
                     <option valeur="2">2eme dose</option>
                     <option valeur="3">Rappel</option>
        </select>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="mot-de-passe" name="mot-de-passe" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Confirmer mot-de-passe" name="Confirmer mot-de-passe" required="required">
        </div> 
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">subscribe</button>
        </div>
   
<?php



        
    if(isset($_POST['mail']))
    {
                // connexion à la base de données
                $db_username = 'govaxx';
                $db_password = 'nyctalope';
                $db_name     = 'govaxx_bdd';
                $db_host     = 'mysql-govaxx.alwaysdata.net';
                $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
                or die('could not connect to database');
           $nom = mysqli_real_escape_string($db,htmlspecialchars($_POST['Nom'])); 
            $prenom = mysqli_real_escape_string($db,htmlspecialchars($_POST['Prenom']));
            $mail = mysqli_real_escape_string($db,htmlspecialchars($_POST['mail']));
           $ddn = mysqli_real_escape_string($db,htmlspecialchars($_POST['date-de-naissance']));
            $stat = mysqli_real_escape_string($db,htmlspecialchars($_POST['statut']));
            $mdp = mysqli_real_escape_string($db,htmlspecialchars($_POST['mot-de-passe']));
        
            $requete = "SELECT count(*) FROM t_utilisateur where 
            mail = '".$mail."'";
            $exec_requete = mysqli_query($db,$requete);
            
            $reponse      = mysqli_fetch_array($exec_requete);
            echo '<script type="text/javascript">window.alert("'.$reponse['count(*)'].'");</script>';
            $count = $reponse['count(*)'];
        
            if($count!=0){
                $message='nique';
                echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
        
            }elseif($count == 0){
                $message='BV';
                echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
            }
        

    }
?>
</body>
</html>