<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>PHP Output</title>
  </head>
  <body>
    <?php
      echo "RAVI<br>";
      // this is comment 
      #this is also a type of comment
      $txt="ravi<br>";
      echo $txt;

      echo 10+20 . "<br>" . $txt;
      print "hellow<br>";
      var_dump($txt) . "<br>";

      $a=array("Rvi",1,3);
      var_dump($a);

      print(max(0,12,22)) . "<br>";

      $t = 91;
      if($t & 1)
      {
        print("odd");
      }
      else{
        print("Even");
      }
      "<br>";

      $color = "red";
      switch($color)
      {
         case "red" : print("true") ; break;
         case "yellow" : print("false");break; 
      }
      
      for($i = 0 ; $i<=10 ; $i++)
      {
          print($i) . "<br>";
      }


      function solve(int $t ,  $x)
      {
         return($t+$x);
      }
      echo solve(10,20);
    ?>
  </body>
</html>
