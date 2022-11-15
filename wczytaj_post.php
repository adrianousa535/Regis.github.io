<?php



$articles = [
    [
        "tytul" => "De Mono - Póki na to czas",
        "tresc" => "Milion spraw, chwili brak
        <br>Szybkie, nie krótkie tak,
        <br>Bo juz myslisz gdzie masz iść
        <br>Numer mam, zdzwońmy się
        <br>By się spotkać, lecz wiem
        <br>Znów nie wyjdzie z tego nic
        <br>Czy to takie trudne choć raz
        <br>Zmienić rzeczy bieg
        <br>Póki na to czas"
    ],
    [
        "tytul" => "Enmy - Lost",
        "tresc" => "Is there a way to find my way back to daylight
        <br>(Take a look inside my mind, always running all the time)
        <br>If I cannot find my way back home
        <br>(Take a look inside my mind, always running all the time)
        <br>(All the time)
        <br>
        <br>Look inside now the fear has a place to
        <br>Stay with me and the pain doesn’t go away
        <br>Wait for me on the other side
        <br>Nothing’s gone til all hope has died"
    ],
    [
        "tytul" => "Eyes Set to Kill - Face The Rain [feat. Howard Jones]",
        "tresc" => "Every word I remember
        <br>I hear your voice through the hurricane
        <br>Am I falling forever?
        <br>Don’t want to face it
        <br>Don’t want to face the rain
        <br>
        <br>I know I should change
        <br>But my heart doesn’t want to
        <br>Even after all the damage
        <br>I want to let go but I still hear you calling
        <br>Can we go back to the beginning?
        <br>Can we go back?
        <br>Can we go back?"
    ]
];

include 'paginacja.php';

for ($i = $pierwszy_post; $i < min($pierwszy_post + $posty_na_strone, count($articles)); $i++) {
    print "
        <div class=post>
            <div class=tytul>" .
        $articles[$i]['tytul'] .
        "</div>
            <div class=tresc>" .
        $articles[$i]['tresc'] .
        "</div>
        </div>
    ";
}




/*
print "
<div class=post>
    <div class=tytul>";
echo $articles[$i]['tytul'];
print "</div>
    <div class=tresc>";
echo $articles[$i]['tresc'];
print "</div>
</div>
";






 foreach ($articles as $row) {
 $tytul = $row['tytul'];
 $tresc = $row['tresc'];
 print "
 <div class=post>
 <div class=tytul>    
 $tytul
 </div>
 <div class=tresc>
 $tresc
 </div>
 </div>
 ";
 }
 */
?>