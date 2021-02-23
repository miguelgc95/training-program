<?php

function requestDayTable ($smartProgress){
    return $smartProgress->query("SELECT * FROM monday");
}