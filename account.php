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


   <div class="container">
      <div class="row">
         <div class="card col-4 offset-1" style="background-color:#E5E8E8; border:none; border-radius:10px;">
            <div class="card-body">
               <p class="card-text">Prenom/Nom : <?php  ?></p>
               &nbsp;
               <p class="card-text">Adresse e-mail :<?php  ?></p>
               &nbsp;
               <p class="card-text">Né le à :<?php  ?></p>
               &nbsp;
               <p class="card-text">Adresse :<?php  ?></p>
               &nbsp;
               <p class="card-text">Injection :<?php  ?></p>
            </div>
         </div>  
         <div class="card col-4 offset-2" style="background-color:#E5E8E8; border:none; border-radius:10px;">
            <div class="card-body">
               <p class="card-text">Vos rendez-vous :</p>
               
               <p style="text-align:center;">(crénaux)<?php  ?></p>
               &nbsp;
               <a class="btn alignbutton">Supprimer </a>
               <a class="btn alignbutton">Modifier </a>
               </div>
            </div>
         </div> 
      </div>
   </div>
  
      





