<?php
echo "<html>";
echo "<head>";
echo "<title>Week 11 : Problem 6</title>";
echo "</head>";
echo "<body>";
echo "<table>";
$sortedStrings = sort(explode(", ", $_POST["input6"]), SORT_STRING);
foreach ($sortedStrings as $string) {
    echo "<tr>";
    echo $string;
    echo "</tr>";
}
echo "</table>";
echo "</body>";
echo "</html>";
?>
