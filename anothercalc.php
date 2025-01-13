<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>
    <form method="POST">
        <label>Please enter the number for its multiplication table:</label>
        <input type="number" name="num" required>
        <button type="submit">Generate Table</button>
    </form>

    <?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["num"]; // Corrected square brackets for retrieving form data

    echo "<h3>Multiplication Table for $num</h3>";
    
    for($i=0;$i<=12;$i++){
        $results= $num * $i;

        echo "$num x $i = $results <br>" ;
    }
}
    ?>
</body>
</html>