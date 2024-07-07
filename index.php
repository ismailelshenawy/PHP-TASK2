<?php
// task1
$films=array("Fast","Predestination","Pursuit","Prestige");
$keyword="hello";

$res = array_search($keyword ,$films );
if ($res !== false) {
    echo "Yes, number of index is : " . $res;
} else {
    echo "No";
}
echo "<br>";
// task2
$tests=array(5,4,9,3,1,7,5,8,6);
$max_num = max($tests);
echo $max_num;
// task3
echo "<br>";
$films=array("avatar","Prestige","avatar","Prestige");
$keySearch="avatar";

?>
