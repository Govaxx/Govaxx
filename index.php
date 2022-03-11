<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="style.css" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <title>GoVax</title>
</head>

<header>
   <nav class="navbar navbar-expand-sm navbar-dark ">
      <a class="navbar-brand" href="index.php">GoVax</a>


      <!-- Right -->
      <ul class="navbar-nav ml-auto"> 
         <li class="nav-item">
            <a class="nav-link" href="account.php">Mon compte</a>
         </li>
      </ul>
   </nav>
</header>
&nbsp;

<body>
   <div class="container">
      <div class="row">
         <div class="card col-3 offset-2" style="width: 18rem;">
            <img class="card-img-top image" src="images/calendar.png" alt="">
            <div class="card-body">
               <p class="card-text text_card">
                  Vaccination COVID-19 :
                  prendre rendez-vous
               </p>
               &nbsp;&nbsp;
               <a href="vaccin.php" class="btn btn button">ME FAIRE VACCINER</a>
            </div>
         </div>
         <div class="card col-3 offset-2" style="width: 18rem;">
            <img class="card-img-top image" src="images/account.png" alt="">
            <div class="card-body">
            <p class="card-text text_card">
               Gerer mon compte : Modification de vos rendez-vous, gerer votre profil
               </p>
               <a href="account.php" class="btn btn button" >MON COMPTE</a>
            </div>
         </div>
 
      </div>
   </div>
</body>
&nbsp;&nbsp;&nbsp;

<footer class="footer">
   <div class="footerfont" style="">
      © 2022 Copyright
      <a class="text-dark" href="#">Govaxx.com</a>
   </div>
</footer>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</html>