<!DOCTYPE html>
<html>
<head>
    <title>Heads or Tails!</title>
<!--CSS-->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Londrina+Solid" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<!--CSS-->
</head>
<body>
<div class="title-container">      
    <h1>Heads or Tails!</h1>
</div> 
<?php
$option = array("Heads", "Tails");
$computer = $option[array_rand($option)];
$player_input = $_POST["player_input"];
if ($_POST["player_input"]) {?>
    
    <p class='game_outcome'>Coin side: <?php echo $computer ?></p>
    
    <?php
    if ($player_input == $computer) {
        $outcome = "You Win!";
    } else {
        $outcome = "You Lose!";
    }
    ?>

    <h2><?php echo $outcome ?></h2>
<?php
}
?>


<form method="post">
    <div class="button-container">
    <button type="submit" name="player_input" value="Heads" class="buttons"><p>Heads</p></button>
    <button type="submit" name="player_input" value="Tails" class="buttons"><p>Tails</p></button>
    </div>
</form>
</body>

</html>