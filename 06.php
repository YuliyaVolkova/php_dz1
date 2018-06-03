<?php
echo "<table style='border: solid 1px grey;'>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr style='height: 21px;'>";
    $rowCheck = $i % 2;
    for ($j = 1; $j <= 10; $j++) {
        $columnCheck = $j % 2;
        $item = $i * $j;
        if ($rowCheck && $columnCheck) {
            $item = "[$item]";
        } elseif ($rowCheck === 0 && $columnCheck === 0) {
            $item = "($item)";
        }
        echo "<td style='width: 21px; text-align: center'>$item</td>";
    }
    echo "</tr>";
}
echo "</table>";
