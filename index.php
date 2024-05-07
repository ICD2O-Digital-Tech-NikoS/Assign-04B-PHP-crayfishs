<!DOCTYPE html>
<html>
  <!-- contains the meta data, author, title, favicon, links to style sheets and other important information -->
  <head>
    <!-- meta data -->
    <meta charset="utf-8" />
    <meta name="description" content="Cray Cray Crayfish" />
    <meta name="keywords" content="immaculata, ics2o" />
    <meta name="author" content="Niko" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png" />
    <link rel="manifest" href="./favicon/site.webmanifest" />
    <!-- my style sheet -->
    <link rel="stylesheet" href="./css/style.css" />
    <!-- Google's MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <!-- Title for tab -->
    <title>Cray Cray Crayfish</title>
  </head>
  <body>
    <!-- mdl script file -->
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <h1 id="header">Cray Cray Crayfish</h1>
    <center><img src="./images/crayfish.jpg" alt="slug" width="600" height="300" /></center>
    <div id="backdrop">
      <h3 id="subhead">Crayfish Options:</h3>
      <p>
        <!-- form to get user input for the size of crayfish portion that they want, the toppings to go with it, and a side as well -->
        <form action="./results.php" method="post" target="results">
          <div id="crayfish-size">
            <label for="size">Order:</label>
              <!-- dropdown menu with different sizes -->
              <select name="sizes" id="sizes">
                <option value="none">-- Choose a size --</option>
                <option value="small">Crayfish left back leg (SMALL | $0.10)</option>
                <option value="medium">Crayfish left 2nd back leg (MEDIUM | $0.15)</option>
                <option value="large">Crayfish left claw (LARGE | $0.45)</option>
                <option value="xl">Crayfish abdomen (XL | $1)</option>
              </select><br><br>
          </div>
          <div id="topping-options">
          <!-- dropdown menu with different toppings as options -->
            <label name="toppings" id="toppings">Toppings:</label><br><br>
              <input type="checkbox" id="topping1" name="topping1">
            <label for="topping1">Stale, sun dried feta cheese | $1</label><br><br>
              <input type="checkbox" id="topping2" name="topping2">
            <label for="topping2">Incandescent glass shards | $3</label><br><br>
              <input type="checkbox" id="topping3" name="topping3">
            <label for="topping3">19th century apple flavored radioactive plate chips (uranium 235) | $20</label><br><br>
              <input type="checkbox" id="topping4" name="topping4">
            <label for="topping4">Small Paleo-Balkanic elves named mahmood | $30,000</label><br><br>
              <input type="checkbox" id="topping5" name="topping5">
            <label for="topping5">Lama’s spit from a camel that has traveled through florida for a total of 7 hours and 31 minutes (rare) | $45
  </label><br><br>
              <input type="checkbox" id="topping6" name="topping6">
            <label for="topping6">Powdered pollution^2 | $25</label><br><br>
          </div>
          <!-- radio buttons for the sides -->
          <div id="drinks">
            <center><label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
              <input type="radio" id="option-1" class="mdl-radio__button" name="options1" value="1">
              <span class="mdl-radio__label">Dirt Water</span>
            </label>
            <br>
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
              <input type="radio" id="option-2" class="mdl-radio__button" name="options1" value="2">
              <span class="mdl-radio__label">Dog Water</span>
            </label><br>
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">
              <input type="radio" id="option-3" class="mdl-radio__button" name="options1" value="3">
              <span class="mdl-radio__label">No Side</span>
            </label><br><br>
            <input type="submit" value="Submit Order" id="submit-button"/><br><br>
            </center>
          </div>
        </form>
      </p>
      <!-- Create a space where the user information will be displayed -->
      <iframe id="results" name="results">			

      </iframe>
    </div>
    <br>
  </body>
</html>