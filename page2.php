<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $cake_qty = isset($_POST['chocolate_cake']) ? $_POST['chocolate_cake'] : 0;
    $biscuit_qty = isset($_POST['qbiscuit_roll']) ? $_POST['qbiscuit_roll'] : 0;
    $macarons_qty = isset($_POST['macarons']) ? $_POST['macarons'] : 0;
    $truffies_qty = isset($_POST['truffies']) ? $_POST['truffies'] : 0;
    $nutella_qty = isset($_POST['nutella']) ? $_POST['nutella'] : 0;
    $churros_qty = isset($_POST['churros']) ? $_POST['churros'] : 0;

    
    echo "<h2>Your Orders are:</h2>";

if ($cake_qty > 0) {
    echo "Chocolate Cake: " . $cake_qty . "<br>";
}

if ($biscuit_qty > 0) {
    echo "Biscuit Roll: " . $biscuit_qty . "<br>";
}

if ($macarons_qty > 0) {
    echo "Macarons: " . $macarons_qty . "<br>";
}
if ($truffies_qty > 0) {    
    echo "Truffies: " . $truffies_qty . "<br>";
}
if ($nutella_qty > 0) {
    echo "Nutella: " . $nutella_qty . "<br>";
}
if ($churros_qty > 0) { 
    echo "Churros: " . $churros_qty . "<br>";
}
}
?>
</body>
</html>