<?php
$badword = $_GET["badword"];
$myParagraph = "Questo è un paragrafo di prova per l'esercizio di oggi.";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php Badwords</title>
</head>

<body>
  <p style="font-size:40px;"><?php echo $myParagraph ?></p>
  <div style="font-size: 20px"><?php echo "Lunghezza paragrafo: " . strlen($myParagraph) ?></div>
  <p style="font-size: 30px;"><?php echo "Paragrafo con parola rimossa: " . str_replace($badword, "***", $myParagraph) ?></p>
</body>

</html>