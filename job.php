<?php
#1. we want to count the number of adults and children
#2. we want to make a list of people between 22 and 30 years for them to apply for the job.




$people = [

['name' => 'John', 'age' => 25],

['name' => 'Doe', 'age' => 18],

['name' => 'Jane', 'age' => 26],

['name' => 'Peter', 'age' => 30],

['name' => 'Mary', 'age' => 32],

['name' => 'moha', 'age' => 33],

['name' => 'Mamu', 'age' => 9 ],

['name' => 'Muhib', 'age' => 3 ],

];

$adultCount =0;

$childCount =0;

$jobApplicants = array();
foreach ($people  as $person) {
$age = $person['age'];
if($age >= 18){
    $adultCount++;
    // number of adults in the population
    if($age >= 22 && $age <= 30){
     $jobApplicants[] = $person;
    }
}else{
    $childCount++;
    // number of children in the population
}
echo "Children in the population are $childCount<br/>";
echo "adults in the population are $adultCount<br/>";
echo "Here is the list of number of people who can aplly for the job<br/>";
print_r($jobApplicants);

}

?>