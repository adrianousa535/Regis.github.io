<?php

if (!isset ($_GET['page']) || !is_numeric($_GET['page'])) {  
    $page = 1;  
} else {  
    $page = $_GET['page'];  
}

$posty_na_strone = 2;
$pierwszy_post = ($page - 1) *$posty_na_strone;
$ilosc_stron = ceil(count($articles)/ $posty_na_strone);

?>