<?php
include("template/header.php");
 ?>

 <div class="row" style="margin-bottom: 30px; margin-top:30px;">
   <form class="col s12" method="post"action="../controleur/index.php" >
     <!-- <div class="row"> -->
       <div class="input-field col s10">
         <input id="first_name" name="pseudo" type="text" class="validate">
         <label for="first_name">Pseudo</label>
       </div>

     <!-- <div class="row"> -->
       <div class="input-field col s10">
         <input id="password" type="password" name="mdp" class="validate">
         <label for="password">Password</label>
       </div>
     <!-- </div> -->

     <!-- <div class="row"> -->
       <div class="input-field col s10">
         <input id="password" type="password" name="pass" class="validate">
         <label for="password">Confirmation Password</label>
       </div>
     <!-- </div> -->

     <!-- <div class="row"> -->
       <div class="input-field col s10">
         <input id="email" type="email" name="email" class="validate">
         <label for="email">Email</label>
       </div>
     <!-- </div> -->
     <div class="input-field col s6">
        <input class="waves-effect btn light-blue darken-1" value="Envoyer" type="submit" name="envoie">
      </div>

   </form>
 </div>



 <?php
 include("template/footer.php");
  ?>
