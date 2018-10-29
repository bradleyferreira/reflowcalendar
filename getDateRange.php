<?php
$myDatesObject = $_POST['myDatesObject'];
foreach ($myDatesObject as $row) {
    echo "<div class='dateBox'>" . $row . "<br><span class='boxDivider' style='background:lightslategray; margin-left:-5px;margin-right:-5px;margin-bottom:35px;height:2px;display:block;'></div>";
}