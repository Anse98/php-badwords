<?php

$text = 'Questa modalità è ambientata nella distopica città di Urzikstan. Un virus letale ha corrotto cittadini e turisti trasformandoli in famelici morti viventi affamati di carne umana. L’infezione si è diffusa rapidamente, ma molte delle zone della città sono più pericolose di altre.

Riconoscere le zone più pericolose è fondamentale per la sopravvivenza. Come potete vedere dalla mappa di Urzikstan qui sotto, sono tre i livelli di pericolosità in cui incapperete, che influenzeranno sulla difficoltà delle missioni.';


$user_name = $_POST["bad_word"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bad Words Text</title>
</head>

<body>
  <p><?php echo $text; ?></p>
  <p>Il testo è lungo <?php echo strlen($text); ?> caratteri</p>
  <p><?php echo str_replace($user_name, '***', $text); ?></p>
  <p>La lunghezza del nuovo paragrafo è di <?php echo strlen(str_replace($user_name, '***', $text)); ?> caratteri</p>
</body>

</html>