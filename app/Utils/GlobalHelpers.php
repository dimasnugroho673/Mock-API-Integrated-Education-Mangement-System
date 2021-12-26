<?php

function transformScoreToGrade($score)
{
    if ($score > 90) {
        $grade = "A+";
    } elseif($score > 80){
        $grade = "A";
    } elseif($score > 70){
        $grade = "B+";
    } elseif($score > 60){
        $grade = "B";
    } elseif($score > 50){
        $grade = "C+";
    } elseif($score > 40){
        $grade = "C";
    } elseif($score > 30){
        $grade = "D";
    } elseif($score > 20){
        $grade = "E";
    } else {
        $grade = "F";
    }

    return $grade;
}
