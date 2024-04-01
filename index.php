<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>
    <h2>Calculator</h2>
    <form method="post">
        <label for="operand1">Operand 1:</label>
        <input type="number" name="operand1" required><br><br>
        
        <label for="operand2">Operand 2:</label>
        <input type="number" name="operand2" required><br><br>
        
        <label for="operation">Operation:</label>
        <input type="text" name="operation" required><br><br>
        
        <input type="submit" value="Calculate">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $operand1 = $_POST['operand1'];
        $operand2 = $_POST['operand2'];
        $operation = $_POST['operation'];
        
        switch ($operation) {
            case '+':
                $result = $operand1 + $operand2;
                break;
            case '-':
                $result = $operand1 - $operand2;
                break;
            case '*':
                $result = $operand1 * $operand2;
                break;
            case '/':
                $result = $operand1 / $operand2;
                break;
            default:
                echo "Invalid operation";
        }
        

        echo "<h3>Result: $result</h3>";
        
        
        if ($result <= 50) {
            echo "<p>First half</p>";
        } elseif ($result > 50 && $result <= 100) {
            echo "<p>Second half</p>";
        }else{
            echo "<p>xxxx</p>";
        }
    }
    
    ?>
</body>
</html>
