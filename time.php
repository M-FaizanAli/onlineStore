
<?php
$t = date("H");
if ($t < "10") {
    echo "Good morning⏰!";
} elseif ($t >= "10" && $t < "16") {
    echo "Good afternoon🎭!";
} elseif ($t >= "17" && $t < "19") {
    echo "Good evening🌇!";
} else {
    echo "Have a good night!";
}
?>

<?php
$x = 5;
$y = 7;
echo
"<table style='border:2px solid black' >

<tr>
<td>
" . $x . "
</td>
</tr>
<tr>
<td>
" . $y . "
</td>
</tr>

</table>"
?>



