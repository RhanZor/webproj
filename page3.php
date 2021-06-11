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
      <div class="texto"><!--texto-->
        <p>Antes de mais nada, é de suam importãncia que você mulher, ou casal, já tenham familiaridade com seu ciclo e estarem bem cientes e em dia com suas anotações diárias. De modo qeu a utilização desse ferramenta de cálculo venha a ser apenas mais um parâmetro para comparação.</p>
        <p>Então, vamos lá? Vamos calcular seus dias de fertilidade? Informe abaixo no formulário o que se pede. Lembre-se de que você mulher, ou casal tem que saber se o cilco de ovulação é de 28 dias, menor que 22 dias, mais de 30 dias, ou se se trata de ovulação poli-cíclica.</p>

      <div class="condition">
        <form name="calculo" method="POST" action="index.php?pg=pg3">
           <ul>
             <li><span>Nome: </span></li> 
             <li><input type="text" name="name" maxlength="50" required></li>
             <li><span>Data do início do ultimo ciclo: </span></li> 
             <li><input type="date" name="data"required></li>   
             <li><input type="submit" value="calcular"></li>
           </ul>
                  <br><br>
        </form>
        <img src="Imgs/monitor.png">
                  <br><br>

      <?php
      include "Content/calc.php";
      ?>
     <p><a href="index.php">Voltar</a></p>
      </div><!-- condition -->

    </div><!--texto-->
    
    <div class="graphic"><!--graphic-->
      <img src="Imgs/giphy.gif">
    </div><!--graphic-->
  
  </div><!--welcome-->
  
    <div class="feets">
      </div>
    </div>

  </div>
</body>
</html>