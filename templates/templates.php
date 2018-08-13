<?php

$header = <<<KHEAD
<!DOCTYPE html>
<html>
 <head>
     <title>$title</title>
     <meta charset="UTF-8">
     <link rel="stylesheet" href="../css/classes.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
KHEAD;

define("KHEAD",$header);

$footer = <<<KFOOT    
    <script href="js.js" type="../text/javascript"></script>
 </body>
</html>
KFOOT;

define("KFOOT",$footer);
?>