<!DOCTYPE html>
<!-- ICD2O-Assignment-06-PHP -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="A Random Useless Fact, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Olivia TD" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link
    rel="stylesheet"
    href="https://code.getmdl.io/1.3.0/material.deep_purple-pink.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="./apple-touch-icon.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="./favicon-32x32.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>A Random Useless Fact, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">A Random Useless Fact, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/FUNFACT.png" alt="Image of a light bulb with the words 'FUN FACT' on top of it." />
      </div>
      <div class=" page-content-php">
        <div id="randomFact">

          <?php
          try {
            $factsJSON = "https://uselessfacts.jsph.pl/api/v2/facts/random?language=en";
            $jsonRandomFact = file_get_contents($factsJSON);
            $randomFact = json_decode($jsonRandomFact);
            $funFact = $randomFact->text;
            echo "<h4> Your random fact is: </h4><h4>" . $funFact . " </h4>";
          } catch (error) {
            "<p> Sorry, the information source for these Fun Facts is not working at this moment. Try again later. </p>";
          }
          ?>

        </div>
        <br />
        <div class="page-content-answer">
          <a href="./index.php">Return ...</a>
        </div>
    </main>
  </div>
</body>

</html>