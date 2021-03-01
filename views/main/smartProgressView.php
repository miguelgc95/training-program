<?php

while ($exercise = $monday->fetch_assoc()) {
    echo "<li class='" . $exercise['color'] . "'>" . $exercise['exercise'] . "</li>";
}