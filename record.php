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

$students = [
    ['name'=>'musa','adm_no'=>1610720020,'assignment'=>12,'test'=>20,'exam'=>38],
    ['name'=>'Adeola','adm_no'=>1610720021,'assignment'=>12,'test'=>20,'exam'=>48],
    ['name'=>'Isah','adm_no'=>1610720022,'assignment'=>12,'test'=>20,'exam'=>45],
    ['name'=>'Taiwo','adm_no'=>1610720023,'assignment'=>12,'test'=>20,'exam'=>35],
    ['name'=>'Khafilat','adm_no'=>1610720024,'assignment'=>12,'test'=>20,'exam'=>33],
    ['name'=>'Bilikis','adm_no'=>1610720025,'assignment'=>12,'test'=>20,'exam'=>58],
    ['name'=>'Faidat','adm_no'=>1610720026,'assignment'=>12,'test'=>20,'exam'=>39],
    ['name'=>'Labbo','adm_no'=>1610720027,'assignment'=>12,'test'=>20,'exam'=>37],
    ['name'=>'Eunice','adm_no'=>1610720028,'assignment'=>12,'test'=>20,'exam'=>58],
    ['name'=>'Emmanuel','adm_no'=>1610720029,'assignment'=>12,'test'=>20,'exam'=>48],
    ['name'=>'Sunday','adm_no'=>1610720030,'assignment'=>12,'test'=>20,'exam'=>38],
    ['name'=>'Christiana','adm_no'=>1610720031,'assignment'=>12,'test'=>20,'exam'=>48],
    ['name'=>'Samson','adm_no'=>1610720032,'assignment'=>12,'test'=>20,'exam'=>30],
    ['name'=>'Hannah','adm_no'=>1610720033,'assignment'=>12,'test'=>20,'exam'=>32],
    ['name'=>'Tope','adm_no'=>1610720034,'assignment'=>12,'test'=>20,'exam'=>18],
    ['name'=>'Bose','adm_no'=>1610720035,'assignment'=>12,'test'=>20,'exam'=>25],
    ['name'=>'Peace','adm_no'=>1610720036,'assignment'=>12,'test'=>20,'exam'=>8],
    ['name'=>'Rashidat','adm_no'=>1610720037,'assignment'=>12,'test'=>20,'exam'=>41],
    ['name'=>'Rukayat','adm_no'=>1610720038,'assignment'=>12,'test'=>20,'exam'=>39],
    ['name'=>'Priciliar','adm_no'=>1610720039,'assignment'=>12,'test'=>20,'exam'=>40],
    ['name'=>'Abigeal','adm_no'=>1610720040,'assignment'=>12,'test'=>20,'exam'=>50],
    ['name'=>'Muinat','adm_no'=>1610720041,'assignment'=>12,'test'=>20,'exam'=>33],
    ['name'=>'Barakat','adm_no'=>1610720042,'assignment'=>12,'test'=>20,'exam'=>28],
    ['name'=>'Malik','adm_no'=>1610720043,'assignment'=>12,'test'=>20,'exam'=>29],
    ['name'=>'John','adm_no'=>1610720044,'assignment'=>12,'test'=>20,'exam'=>47],
    ['name'=>'Seun','adm_no'=>1610720045,'assignment'=>12,'test'=>20,'exam'=>48],
    ['name'=>'Haminat','adm_no'=>1610720046,'assignment'=>12,'test'=>20,'exam'=>37],
    ['name'=>'Fatimoh','adm_no'=>1610720047,'assignment'=>12,'test'=>20,'exam'=>18],
    ['name'=>'Sahidat','adm_no'=>1610720048,'assignment'=>12,'test'=>20,'exam'=>48],
    ['name'=>'Kudirat','adm_no'=>1610720049,'assignment'=>12,'test'=>20,'exam'=>8],
    ['name'=>'Comfort','adm_no'=>1610720050,'assignment'=>12,'test'=>20,'exam'=>5],
    ['name'=>'Caleb','adm_no'=>1610720051,'assignment'=>12,'test'=>20,'exam'=>48],
    ['name'=>'Ezekiel','adm_no'=>1610720052,'assignment'=>12,'test'=>20,'exam'=>38],
    ['name'=>'Yonke','adm_no'=>1610720053,'assignment'=>12,'test'=>20,'exam'=>58],
];
foreach($students as $student){
    $grade = new CalculateGrade;
    $my_grade = $grade->grade($student['assignment'],$student['test'],$student['exam']);
    echo 'Name : '.$student['name'].'<br>';
    echo 'Admission No : '.$student['adm_no'].'<br>';
    echo 'Grade : '.$my_grade.'<br><br>';
};
?>