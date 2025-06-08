<!DOCTYPE html>
<!-- ICD2O-Assignment-06-PHP -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Today's Weather, in PHP" />
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
  <title>Today's Weather, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Today's Weather, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <div id="weather-image"></div>
      </div>
      <div class=" page-content-php">
        <div id="weather">

          <!--
          const weatherJSON = await fetch(
          "https://api.openweathermap.org/data/2.5/weather?lat=45.4211435&lon=-75.6900574&appid=fe1d80e1e103cff8c6afd190cad23fa5"
          )
          const jsonWeatherData = await weatherJSON.json()
          const icon = jsonWeatherData.weather[0].icon
          const kelvinTemperature = jsonWeatherData.main.temp
          const celsuisTemperature = kelvinTemperature - 273.15
          const celsuisTemperatureRounded = Math.round(celsuisTemperature)
          -->
          <?php
          try {
            $weatherJSON = "https://api.openweathermap.org/data/2.5/weather?lat=45.4211435&lon=-75.6900574&appid=fe1d80e1e103cff8c6afd190cad23fa5";
            $jsonWeatherData = file_get_contents($weatherJSON);
            $phpWeatherData = json_decode($jsonWeatherData);
            $icon = $phpWeatherData->weather[0]->icon;
            $iconImage = "https://openweathermap.org/img/wn/" . $icon . "@2x.png";
            $kelvinTemperature = $phpWeatherData->main->temp;
            $celsuisTemperature = $kelvinTemperature - 273.15;
            $celsuisTemperatureRounded = round($celsuisTemperature);
            echo "<img src = $iconImage >";
            echo "<p> The current temperature is " . $celsuisTemperatureRounded . " °C.</p>";
          }
          catch (error) {
            "<p> The weather information source is not working at this moment. </p>";
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