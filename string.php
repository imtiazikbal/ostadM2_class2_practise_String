<?php 

$string = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ipsum mollitia excepturi neque, rerum deserunt laboriosam odit recusandae expedita quasi enim optio ratione fuga voluptatibus aliquid dolore, sapiente consequuntur facilis harum saepe officiis! Cum quas quibusdam sed beatae, saepe nobis minus minima voluptas ipsam magnam quasi illum nulla. Repellendus accusamus, minus architecto facere expedita totam maxime perferendis quia quae quas doloremque illum cum tempore amet, neque harum excepturi quibusdam animi quis nesciunt corrupti! Deserunt quod maiores nesciunt animi quo delectus eveniet tempore. Neque iure unde explicabo harum, aliquam voluptas dolor impedit tempora quo, obcaecati suscipit non cumque autem quisquam ab.";
$newString = str_split($string,30);
//print_r($newString);
 for($i=0;$i<count($newString);$i++){
   // echo $newString[$i]."\n";
 }

 $newString = wordwrap($string,30);
 print_r($newString);