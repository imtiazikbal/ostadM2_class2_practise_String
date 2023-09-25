<?php 
//index array 

$name = ["Rakib","Shihab","Sumon","Shohel","Razu"];


//echo $name[4]. " ".$name[2];

//Execute with for loop

$count = count($name);

for($i = 0; $i <  $count;$i++){
   // echo $name[$i];
}



//Execute with for Foreeach loop

foreach($name as $item){
    echo($item)."\n";
}
