<!DOCTYPE html>
<html>
<head>
    <title>Frequency Generator</title>
</head>
<body>
<form method="post">
    Start Frequency: <input type="number" name="start" step="any" required><br>
    End Frequency:   <input type="number" name="end" step="any" required><br>
    Step Size beginning with decimal i.e .0125 for a 12.5 step size or .0625 for 6.25: <input type="number" name="step" step="any" required><br>
    <input type="submit" value="Generate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve input values
    $start = isset($_POST["start"]) ? floatval($_POST["start"]) : 0;
    $end = isset($_POST["end"]) ? floatval($_POST["end"]) : 0;
    $step = isset($_POST["step"]) ? floatval($_POST["step"]) : 0;

    // Validate input
    if ($step == 0) {
        echo "Step value cannot be zero!";
    } elseif ($end < $start) {
        echo "End value must be greater than start value!";
    } else {
        // Generate sequence of numbers
        $current = $start;
        while ($current <= $end) {
            echo number_format($current, 4) . "<br>"; // Output each number
            $current += $step;
        }
    }
}
?>
</html>
</body>