<?php
  // gets selected size from dropdown menu 
  $size = $_POST["sizes"];
  // declares variable for the option which is selected to indicated the user has chosen no size
  $no_size = "none";
  // variable of price of current selected size
  $size_price = 0;
  // message displayed in the order summary for the selected size
  $size_message = null;

  // sets sizePrice to price of a small size, and changes message for the order summary to match description of the item
  if ($size == "small") {
    $size_price = 0.1;
    $size_message = "Crayfish left back leg";
  } 
    // sets sizePrice to price of a medium size, and changes message for the order summary to match description of the item
  else if ($size == "medium") {
    $size_price = 0.15;
    $size_message = "Crayfish left 2nd back leg";
  }
  // sets sizePrice to price of a large size, and changes message for the order summary to match description of the item
  else if ($size == "large") {
    $size_price = 0.45;
    $size_message = "Crayfish left claw";
  } 
  // sets sizePrice to price of a XL size, and changes message for the order summary to match description of the item
  else if ($size == "xl") {
    $size_price = 1;
    $size_message = "Crayfish abdomen";
  } 
  // declares variable for the price of each topping and sets it to zero
  $topping_one_price = 0;
  $topping_two_price = 0;
  $topping_three_price = 0;
  $topping_four_price = 0;
  $topping_five_price = 0;
  $topping_six_price = 0;
  // declares variables for the message to be displayed in the order summary should the user select one or more of these toppings
  $topping_one_message = "";
  $topping_two_message = "";
  $topping_three_message = "";
  $topping_four_message = "";
  $topping_five_message = "";
  $topping_six_message = "";

// if the user selects the first topping and a size (a size because otherwise nothing is displayed since the user needs to select a size first), then it changes the price of the topping to what the price of the topping is on the menu, and changes the message to match the description of the topping
  if (isset($_POST["topping1"])) {
    $topping_one_price = 1;
    $topping_one_message = "stale sun dried feta cheese, ";
  }
  // if the user selects the second topping and a size , then it changes the price of the topping to what the price of the topping is on the menu, and changes the message to match the description of the topping
if (isset($_POST["topping2"])) {
    $topping_two_price = 3;
    $topping_two_message = "incandescent glass shards, ";
  } 
  // if the user selects the third topping and a size , then it changes the price of the topping to what the price of the topping is on the menu, and changes the message to match the description of the topping
  if (isset($_POST["topping3"])) {
    $topping_three_price = 20;
    $topping_three_message = "19th century apple flavored radioactive plate chips (uranium 235), ";
  }
  // if the user selects the fourth topping and a size , then it changes the price of the topping to what the price of the topping is on the menu, and changes the message to match the description of the topping
  if (isset($_POST["topping4"])) {
    $topping_four_price = 30000;
    $topping_four_message = "small Paleo-Balkanic elves named mahmood, ";
  }
  // if the user selects the fifth topping and a size , then it changes the price of the topping to what the price of the topping is on the menu, and changes the message to match the description of the topping
  if (isset($_POST["topping5"])) {
    $topping_five_price = 45;
    $topping_five_message = "Lama’s spit from a camel that has traveled through florida for a total of 7 hours and 31 minutes (rare), ";
  }
  // if the user selects the second topping and a size , then it changes the price of the topping to what the price of the topping is on the menu, and changes the message to match the description of the topping
  if (isset($_POST["topping6"])) {
    $topping_six_price = 25;
    $topping_six_message = "Powdered pollution^2, ";
  }
  // declares variable for the price of the sides and sets it to zero
  $dirt_water_price = 0;
  $dog_water_price = 0;
  // declares variables for the message to be displayed in the order summary should the user select one of these sides
  $dirt_water_message = "";
  $dog_water_message = "";

  // if the user selects a this side, then it changes the price of the side to what the price of the side is on the menu, and changes the message to match the description of the side
  if (isset($_POST["option-1"])) {
    $dirt_water_price = 13;
    $dirt_water_message = ", and a Dirt Water beverage from a watering hole named Ernesto, who had it in bad with a yiddish garbage man and got beat up while doing the tour de france on a unicycle made from stale baguettes.";
  }
  // if the user selects a this side instead, then it changes the price of the side to what the price of the side is on the menu, and changes the message to match the description of the side
  else if (isset($_POST["option-2"])) {
    $dog_water_price = 8;
    $dog_water_message = ", and a Dog Water beverage.";
  } 
  // if the user selects this option, then it sets the prices of both sides to zero, since the option is for no side. This is only necessary if the user selects something and then decides they want to unselect it. 
  else if (isset($_POST["option-3"])) {
    $dirt_water_price = 0;
    $dog_water_price = 0;
  } else {
    $dirt_water_message = ".";
  }

  // calculates subtotal for order
  $subtotal = $size_price + $topping_one_price + $topping_two_price + $topping_three_price + $topping_four_price + $topping_five_price + $topping_six_price + $dirt_water_price + $dog_water_price;
  // calculates tax for subtotal
  $tax = $subtotal * 0.13;
  // calculates total for order
  $total = $subtotal + $tax;

  // displays the order summary
  $order_summary = "Your ordered: One " . $size_message . ", with " . $topping_one_message . $topping_two_message . $topping_three_message . $topping_four_message . $topping_five_message . $topping_six_message . "totally non harmful nitrous oxide, and hydrochloric acid on top";

  // stops unnecessary things from being displayed if the user does not select a size.
  if ($size == $no_size) {
    echo "You did not select a size.";
    $order_summary = "";
    $subtotal = 0;
    $tax = 0;
    $total = 0;
  } else {
    echo $order_summary . $dog_water_message . $dirt_water_message . "<br>Subtotal: $" . round($subtotal,2) . "<br>Tax: $" . round($tax,2) . "<br>Total: $" . round($total,2);
  }
  
?>