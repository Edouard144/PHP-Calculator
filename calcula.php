<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
    <style>
        .calculator {
            width: 300px;
            margin: 50px auto;
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .input-field, .operation {
            margin: 10px 0;
            font-size: 16px;
        }
        .result {
            font-size: 20px;
            color: #333;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h2>Simple PHP Calculator</h2>
        <form method="post">
            
                <label>Enter first number:</label><br>
                <input type="number" name="num1" required>
            
            
                <label>Enter second number:</label><br>
                <input type="number" name="num2" required>
            
                <label>Select operation:</label><br>
                <select name="operation" required>
                    <option value="add">Addition (+)</option>
                    <option value="subtract">Subtraction (-)</option>
                    <option value="multiply">Multiplication (*)</option>
                    <option value="divide">Division (/)</option>
                </select>
           
            <button type="submit" name="submit">Calculate</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $num1 = (float)$_POST['num1'];
            $num2 = (float)$_POST['num2'];
            $operation = $_POST['operation'];
            $result = "";

            switch ($operation) {
                case 'add':
                    $result = $num1 + $num2;
                case 'subtract':
                    $result = $num1 - $num2;
                    break;
                case 'multiply':
                    $result = $num1 * $num2;
                    break;
                case 'divide':
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = "Error: Division by zero!";
                    }
                    break;
                default:
                    $result = "Invalid operation.";
            }

            echo "<div class='result'>Result: $result</div>";
        }
        ?>
    </div>
</body>
</html>
