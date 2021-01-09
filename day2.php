<!DOCTYPE html>
    <html>
        <head>
             <meta charset="utf-8">
            <title>
                Day2 Tasks
            </title>
            <style>
                label{padding:30px;font-weight:bold};
                input{width:300px};
               
            </style>
        </head>
        <body>
            
       
<?php
//day2



//task 1&2
 $Data =array("PHP", "Open Source", "ITI", "Day2", "Arrays") ;
 $size = count($Data);
 //first method
 for($i=0;$i<$size;$i++){
    echo $Data[$i]."<br>";
 }
 echo"<hr>";
//second method
foreach($Data as $string){
        echo $string."<br>";
}

///////////////////////////////////////

//task3&4
echo"<hr>";
$Info = [ "Name"=>"Marwa","age"=>24,"Email"=>"marwatag437@gmail.com","Collage"=>"Engineering"];
foreach($Info as $inf=>$val){
    echo "$inf "." : ". "$val"."<br>";
}

////////////////////////////////////////////////
//task5
echo"<hr>";
asort($Info); // sort associative arrays in ascending order, according to the value
 var_dump ($Info)."<br>";
 echo"<hr>";
ksort($Info); // sort associative arrays in ascending order, according to the key
 var_dump ($Info)."<br>";
 echo"<hr>";
arsort($Info); // sort associative arrays in descending order, according to the value
 var_dump ($Info)."<br>";
 echo"<hr>";
krsort($Info); //  sort associative arrays in descending order, according to the key
 var_dump ($Info)."<br>";


//////////////////////////////////////////////////
//task6
echo"<hr>";
print_r(array_keys($Info));



?>
 </body>
    </html>