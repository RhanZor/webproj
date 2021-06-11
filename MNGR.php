<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <div class="container">

  	<?php
      include "updown/uppage.php";
    ?>


	  <?php
		include "menav.html";
	  ?>
	
    <div id="welcome">
      <div class="texto">
          <div class="condition">
            <form name="blogger" method="POST" action="index.php?pg=pg4">
               <ul>
                 <li><span>Nome: </span></li> 
                 <li><input type="text" name="usr" maxlength="50" required></li>
                 <li><span>Senha/palavra-passe: </span></li> 
                 <li><input type="password" name="pass"required></li>   
                 <li><input type="submit" value="Login"></li>
               </ul>
               <br><p><a href="index.php">Voltar</a></p>   
            </form>
           
           <br><br><br><br><br> 
            
          </div><!-- condition -->
          
      </div>

    </div>
	
	  <div class="feets">
      </div>
    </div>

  </div>
</body>S
</html>