<?php
// Check if form is submitted
if (isset($_GET['calculate'])) {
    $num1 = $_GET['num1'];
    $operator = $_GET['operator'];
    $num2 = $_GET['num2'];

    // Check if the inputs are numeric
    if (is_numeric($num1) && is_numeric($num2)) {
        // Perform the calculation based on the operator
        if ($operator == '+') {
            $result = $num1 + $num2;
        } elseif ($operator == '-') {
            $result = $num1 - $num2;
        } elseif ($operator == '*') {
            $result = $num1 * $num2;
        } elseif ($operator == '/') {
            if ($num2 == 0) {
                $result = "Error: Division by zero!";
            } else {
                $result = $num1 / $num2;
            }
        } else {
            $result = "Error: Invalid operator!";
        }
    } else {
        $result = "Error: Please enter valid numbers!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>

<h2>Calculator</h2>
<form method="get" action="">
    <input type="number" name="num1" placeholder="Enter first number" required>
    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="number" name="num2" placeholder="Enter second number" required>
    <input type="submit" name="calculate" value="=">
</form>

<?php
// Display the result if set
if (isset($result)) {
    echo "<h3>Result: $result</h3>";
}
?>

</body>
</html>
