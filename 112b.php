<?php
// jika senin - selasa - rabu, maka mengenakan seragam osis
// jika kamis, mengenakan seragam batik
// jika jumat, mengenakan seragam olahraga
// jika sabtu, mengenakan seragam pramuka

$hari = "jumat";

if ($hari == "senin" || $hari == "selasa" || $hari == "rabu")
{
    echo "$hari mengenakan seragam osis";
} else if ($hari == "kamis") {
    echo "$hari mengenakan seragam batik merah putih";
} else if ($hari == "jumat") {
    echo "$hari mengenakan seragam olahraga";
} else if ($hari == "sabtu") {
    echo "$hari mengenakan seragam pramuka";
} else {
    echo "$hari libur boss...";
}

?>