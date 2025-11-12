<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>Arithmetic Operations</title>
  <style>

body {
    background-color: black;
    display: flex;               
    justify-content: center;     
    align-items: center;        
    height: 100vh;               
    margin: 0;                   
}

.box {
    color: yellow;
    text-align: center;
    border: 3px solid wheat;
    border-radius: 10px;
    width: 400px;
    height: 300px;
    padding: 20px;
    box-sizing: border-box;
}
</style>
</head>

<body>
  <div class="box">
    <h2>Arithmetic Operations</h2>
<?php
    $x = 50;
    $y = 30;

    $add = $x + $y;
    $diff = $x - $y;
    $mul = $x * $y;
    $div = $x / $y;

    echo "<div class='operation-card'>Addition<span>$add</span></div> <br>";
    echo "<div class='operation-card'>Subtraction<span>$diff</span></div> <br>";
    echo "<div class='operation-card'>Multiplication<span>$mul</span></div> <br>";
    echo "<div class='operation-card'>Division<span>$div</span></div>";
    ?>
  </div>
</body>

</html>
