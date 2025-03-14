<?php
$IndeArr = array("yabets","tinsae","Dube","Qalkidan","Sisay");
//Access by giveing the number
echo $IndeArr[2];
echo "<br>";
// Show it by the loop
for($i = 0; $i < count($IndeArr);$i++){
    echo $IndeArr[$i]."<br>";
    if($IndeArr[$i] ==="yabets"){
        echo "<br>This is the yabets text<br>";
    }
}
//Access by the while loop
echo "Accessed by the while loop<br>";
$i = 0;
while($i!=count($IndeArr)){
    echo $IndeArr[$i]."<br>";
    $i++;
}
echo "Accessed by the Do - while loop<br>";
$t = 0;
do{
    echo $IndeArr[$t]."<br";
    $t++;
}while($t !=count($IndeArr));
//for each loop
echo "<br> For each loops to access the arrays<br>";
foreach($IndeArr as $k){
    echo $k . "<br>";
}
//Array Built in functions
array_unshift($IndeArr,"Titos");
echo "<br>";
print_r($IndeArr);
array_shift($IndeArr);
echo "<br>";
print_r($IndeArr);
array_push($IndeArr,"LastOne");
echo "<br>";
print_r($IndeArr);
array_pop($IndeArr);
echo "<br>";
print_r($IndeArr);
sort($IndeArr);
echo "<br>";
print_r($IndeArr);

$number = [1,2,1,1,3,4,3,3,4,5,6];
//array search
echo "<br>";
echo array_search(2,$number);
echo "<br>";
echo in_array(2,$number);
echo "<br>";
print_r(array_unique($number)); 
echo "<br>";
print_r(array_filter($number,function($num){
    return $num%2 == 0;
}));
echo "<br>";
print_r(array_map(fn($ne)=>$ne*$ne,$number));
$num2 = [10,20,30,40,50,60,70,]
;
print_r(array_merge($num2,$number,$IndeArr));
print_r(array_sum($number));
print_r(array_product($num2));
print_r(array_slice($num2,2,5));
print_r(array_splice($num2,1,2,100));
print_r($num2);
print_r(array_rand($num2));
