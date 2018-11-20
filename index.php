<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Exercise</title>
  </head>
  <body>
    <p>Faire une fonction qui retourne true.</p>
    <?php
      function verifyString($example)
        {
          return is_string($example);
        }
      function verifyNumber($example)
        {
          return is_int($example);
        }
      $stringToVerify = "Test pour voir";
      $numberToVerify = "2dfgf";
    ?>
    <p>1er test</p>
    <p><?php echo verifyString($stringToVerify); ?></p>
    <p>2eme test</p>
    <p><?php echo verifyNumber($numberToVerify); ?></p>
  </body>
</html>
