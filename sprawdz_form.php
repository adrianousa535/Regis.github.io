<?php

$nickname = $email = $komentarz = "";

$empty_nickname = "";
$empty_email = "";
$no_match_email = "";
$empty_komentarz = "";

if (isset($_POST['submit'])) {

    $nickname = checkInput($_POST["nickname"]);
    $email = checkInput($_POST["email"]);
    $komentarz = checkInput($_POST["komentarz"]);

    if (empty($nickname)) {
        $empty_nickname = "<div class=error> 
        Imie nie może być puste 
        </div>";
        print $nickname;
    }

    if ($email == "") {
        $empty_email = "<div class=error>
        E-mail nie może być pusty
    </div>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $no_match_email = "<div class=error>
        To nie email
        </div>";
    }
    if (empty($komentarz)) {
        $empty_komentarz = "<div class=error>
            Komentarz nie może być pusty
        </div>";
    }
}
function checkInput($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
?>