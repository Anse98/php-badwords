<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Badwords Form</title>
  <link rel="stylesheet" href="styleForm.css">
</head>

<body>
  <div class="text">
    <p>Questa modalità è ambientata nella distopica città di Urzikstan. Un virus letale ha corrotto cittadini e turisti trasformandoli in famelici morti viventi affamati di carne umana. L’infezione si è diffusa rapidamente, ma molte delle zone della città sono più pericolose di altre.

      Riconoscere le zone più pericolose è fondamentale per la sopravvivenza. Come potete vedere dalla mappa di Urzikstan qui sotto, sono tre i livelli di pericolosità in cui incapperete, che influenzeranno sulla difficoltà delle missioni.</p>
  </div>

  <h3 class="title">Scegli la parola da censurare:</h3>
  <form action="text.php" method="post">
    <input type="text" name="bad_word">
    <div>
      <textarea name="chosen_text" rows="8" cols="50"></textarea>
    </div>
    <input type="submit" value="Submit">
  </form>


</body>

</html>