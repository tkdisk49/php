<?php
function total($score1, $score2, $score3)
{
    $totalScore = $score1 + $score2 + $score3;
    if ($totalScore >= 210) {
        echo "合計点は" . $totalScore . "なので合格です";
    }else {
        echo "合計点は" . $totalScore . "なので不合格です";
    }
}

total(70, 80, 50);
