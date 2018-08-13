<?php
$header1 = <<<KHEAD1
<!DOCTYPE html>
<html>
 <head>
     <title>
KHEAD1;
$header2 = <<<KHEAD2
     </title>
     <meta charset="UTF-8">
     <link rel="stylesheet" href="../../css/style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
KHEAD2;

define("KHEAD1",$header1);
define("KHEAD2",$header2);

$footer = <<<KFOOT
    <script href="../../js/js.js" type="text/javascript"></script>
 </body>
</html>
KFOOT;

define("KFOOT",$footer);
?>