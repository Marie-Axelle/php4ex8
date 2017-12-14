<!DOCTYPE html>
<html>
    <head>
        <title>title</title>
    </head>
    <body>
       <?php
       $one= 18;
       $two= 16;
       $three= 87;
       
      function combine($one, $two, $three){
          $addi = $one + $two + $three;
          return $addi;
      }
      echo combine($one, $two, $three);
       ?>
    </body>
</html>
