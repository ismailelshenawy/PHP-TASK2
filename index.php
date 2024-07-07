<?php
// task1
echo "question(1)<br>";
$films=array("Fast","Predestination","Pursuit","Prestige");
$keyword="hello";

$res = array_search($keyword ,$films );
if ($res !== false) {
    echo "Yes, number of index is : " . $res;
} else {
    echo "No";
}
echo "<br> ";
// =====================================
// task2
echo "question(2)<br>";
$tests=array(5,4,9,3,1,7,5,8,6);
$max_num = max($tests);
echo $max_num."<br>";
// =================================
// task3
echo "question(3)<br>";
$films2 = array("avatar", "Prestige", "avatar", "Prestige");
$keySearch = "avatar";
$numOfKeySearch = array_count_values($films2);
echo $numOfKeySearch[$keySearch];
echo "<br>";
// ========================================
// task4
echo "question(4)<br>";
$tests = array(1, "tariq", 1.5, true, 7, 's', false);

foreach ($tests as $test) {
    if (is_bool($test)) {
        if ($test  == true) {
          echo  "Yes <br>";
        } else {echo "No <br>";}
     
    } else {
        echo "$test <br>";
    }
}
    // =========================
// task5
echo "question(5)<br>";
$testsNum=array(6,4,9,3,12,8,7);
sort($testsNum);
print_r ($testsNum);
// ========================
echo "question(7)<br>";
$arr1=array('a','b','c','d');
$arr2=array('c','d','e','f');
$newArry =  array_intersect($arr1, $arr2);
foreach ($newArry as $key) {
    echo $key."<br>";
    # code...
}




?>
