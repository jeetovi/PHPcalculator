<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: red;
        }

        .calculator {
            width: 200px;
            height: 400px;
            padding: 20px;
            background-color: gray;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        h2 {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h2> Calculator</h2>
        <form method="post" action="">
            <label for="num1">input 1:</label>
            <input type="number" name="num1" id="num1" required>
            <br>
            <label for="num2">input 2:</label>
            <input type="number" name="num2" id="num2" required>
            <br>
            <label for="operation">Operation:</label>
            <select name="operation" id="operation">
                <option value="add">Addition</option>
                <option value="subtract">Subtraction</option>
                <option value="multiply">Multiplication</option>
                <option value="divide">Division</option>
            </select>
            <br>
            <input type="submit" value="Calculate">
        </form>

        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operation = $_POST["operation"];

            switch ($operation) {
                case "add":
                    $result = $num1 + $num2;
                    break;
                case "subtract":
                    $result = $num1 - $num2;
                    break;
                case "multiply":
                    $result = $num1 * $num2;
                    break;
                case "divide":
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = "Cannot divide by zero";
                    }
                    break;
                default:
                    $result = "Invalid operation";
            }

            echo "<h2>Result: $result</h2>";
        }
        ?>
    </div>
</body>
</html>
