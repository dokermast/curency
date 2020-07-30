<?php

require_once ('functions.php');

$params = include "config/config.php";

$cur = getCurList($params['api_url']);

foreach($cur as $el){
    echo('<option>' . $el . '</option>');
}

