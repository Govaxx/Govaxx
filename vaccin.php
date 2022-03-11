<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="style.css" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudispolare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

<form action='#' method='post'>
&nbsp;
<label for="name">Departement</label>
  <select type="text" id="departement" name="departement"></select><br>
  <label for="name">Ville</label>
  <select type="text" id="ville" name="ville"></select><br>
  <label for="name">Centre de vaccination</label>
  <select type="text" id="centre_vax" name="centre vax"></select><br>
  <label for="name">Disponibilité</label>
  <select type="date" id="dispo" name="dispo"></select><br>
  <label for="name">Vaccin</label>
  <select type="text" id="vax" name="vax"></select><br>
  <label for="name">Dose déjà effectuer</label>
  <select type="text" id="dose" name="dose"></select><br>


<br>
 
        <button type="submit"  class="btn button" name="creee">Valider</button>
</form> 




<style>
*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}

form {
  max-width: 300px;
  margin: 10px auto;
  pacentre vaxing: 10px 20px;
  background: #f4f7f8;
  border-radius: 8px;
}

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}

input[type="text"],
input[type="password"],
input[type="date"],
input[type="datetime"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="time"],
input[type="url"],
textarea,
select {
   background: rgba(255,255,255,0.1);
    border: none;
    font-size: 16px;
    height: 35px;
    margin: 0;
    outline: 0;
    pacentre vaxing: 15px;
    width: 80%;
    background-color: #e8eeef;
    color: #8a97a0;
    box-shadow: 0 1px 0 rgb(0 0 0 / 3%) inset;
    margin-bottom: 30px;
    border-radius: 10px;
    margin-left: 10%;
}

input[type="radio"],
input[type="checkbox"] {
  margin: 0 4px 8px 0;
}

select {
  pacentre vaxing: 6px;
  height: 32px;
  border-radius: 2px;
}

button {
  pacentre vaxing: 19px 39px 18px 39px;
  color: #FFF;
  background-color: #4bc970;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
  border: 1px solid #3ac162;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}

fieldset {
  margin-bottom: 30px;
  border: none;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label, select {
  display: block;
  margin-bottom: 8px;
  margin-left: 10%;
  border-radius: 6px;
}

label.light {
  font-weight: 300;
  display: inline;
}

.number {
  background-color: #5fcf80;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 6px;
 
}

@media screen and (min-width: 480px) {

  form {
    max-width: 480px;
  }

}


</style>