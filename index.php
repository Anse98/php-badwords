<?php

$text = 'Questa modalità è ambientata nella distopica città di Urzikstan. Un virus letale ha corrotto cittadini e turisti trasformandoli in famelici morti viventi affamati di carne umana. L’infezione si è diffusa rapidamente, ma molte delle zone della città sono più pericolose di altre.

Riconoscere le zone più pericolose è fondamentale per la sopravvivenza. Come potete vedere dalla mappa di Urzikstan qui sotto, sono tre i livelli di pericolosità in cui incapperete, che influenzeranno sulla difficoltà delle missioni.';


$bad_word = $_POST["bad_word"];

$chosen_text = $_POST["chosen_text"];

var_dump($chosen_text);

var_dump($bad_word);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bad Words Text</title>
  <link rel="stylesheet" href="styleText.css">
</head>

<body>
  <div class="flex-container">
    <p><?php echo $text; ?></p>
    <p>Il testo è lungo <?php echo strlen($text); ?> caratteri</p>
    <p><?php echo str_replace($bad_word, '***', $chosen_text); ?></p>
    <p>La lunghezza del nuovo paragrafo è di <?php echo strlen(str_replace($bad_word, '***', $text)); ?> caratteri</p>
  </div>
</body>

</html>