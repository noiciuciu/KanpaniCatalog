<?php

function getJsonArrayText($arr) {
    $result = "";
    for($i=0;$i<count($arr);$i++) {
        $result .= $arr[$i].($i < count($arr)-1 ? "," : "");
    }
    return "[".$result."]";
}