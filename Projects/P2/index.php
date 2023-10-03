<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <center>
    <div class="calc_body">
        <h1>Basic Calculator</h1>
        <div class="display_result">
            <?php
            $result = "";
            $num1Value = "";
            $num2Value = "";
            $selectedOperator = "";

            if (isset($_POST['submit'])) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operator = $_POST['operator'];

                // Keep the entered values for displaying in the form
                $num1Value = $num1;
                $num2Value = $num2;
                $selectedOperator = $operator;

                switch ($operator) {
                    case 'add':
                        $result = $num1 + $num2;
                        break;
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
                            $result = "Cannot divide by zero";
                        }
                        break;
                    default:
                        $result = "Invalid operator";
                        break;
                }

                echo "Result: " . $result;
            }
            ?>
        </div>
        <div class="calc_buttons">
            <form action="" method="POST">
                <input type="text" name="num1" placeholder="Number 1" value="<?php echo $num1Value; ?>" required>
                <input type="text" name="num2" placeholder="Number 2" value="<?php echo $num2Value; ?>" required>
                <select name="operator" id="operator" required>
                    <option value="add" >Add</option>
                    <option value="subtract">Subtract</option>
                    <option value="multiply">Multiply</option>
                    <option value="divide">Divide</option>
                </select>
                <input type="submit" name="submit" value="Calculate">
            </form>
        </div>
    </div>
    </center>
</body>

</html>
