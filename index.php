<?php
class CalculateScore
{
    public function totalscore($assignment,$test,$exam)
    {
        return ($assignment + $test + $exam);
    }
    
}
class CalculateGrade extends CalculateScore
{
    public function grade($assignment,$test,$exam)
    {
        $score = $this->totalscore($assignment,$test,$exam);
        if($score >= 75){
            $grade = 'A';
        }elseif($score <= 74 && $score >= 70){
            $grade = 'AB';
        }elseif ($score <= 69 && $score >= 65) {
            $grade = 'B';
        }elseif($score <= 64 && $score >= 60){
            $grade = 'BC';
        }elseif($score <= 59 && $score >= 55){
            $grade = 'C';
        }elseif($score <= 54 && $score >= 50){
            $grade = 'CD';
        }elseif($score <= 49 && $score >= 45){
            $grade = 'D';
        }elseif($score <= 44 && $score >= 40){
            $grade = 'E';
        }else{
            $grade = 'F';
        }

        return $grade;
    }
}

$grade = new CalculateGrade();
echo $grade->grade(10,15,35);

