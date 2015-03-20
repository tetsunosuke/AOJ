<?php
error_reporting(E_ALL);

while($line=fgets(STDIN))
{
    echo trim(solve($line)) . "\n";
}

function solve($str) {
    for ($i = 0; $i < 26; $i++) {
        $decrypted = decryptString($str, $i);
        if (preg_match("/(the|this|that)/", $decrypted)) {
            return $decrypted;
        }
    }
}



function buildShiftedChar($c, $n)
{
    $str = "abcdefghijklmnopqrstuvwxyz";
    $pos = strpos($str, $c);
    if ($pos === false) {
        return $c;
    }

    if ($pos - $n < 0) {
        return $str[ strlen($str) + (($pos - $n) % strlen($str)) ];
    }

    return $str[$pos - $n];
}

function decryptString($str, $n) {
    $decryptedString = "";
    for ($i=0; $i < strlen($str); $i++) {
        $decryptedString .= buildShiftedChar($str[$i], $n);
    }
    return $decryptedString;
}
?>