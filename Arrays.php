<?php
//for simple arrays
$car = ["you", "abe", "ert"];
foreach ($car as $r) {
    echo $r . "<br>";
}
//for associated arrays
$student = array("Yabets" => "1040", "naol" => "0820");
foreach ($student as $key => $value) {
    echo "Name: {$key} ID: {$value} <br>";
}
echo var_dump($student);
$kekeke = array_keys($student);
foreach ($kekeke as $k) {
    echo "{$k} <br>";
}
$user = array(
    "Yabets" => array(
        "Sex" => "M",
        "Age" => "20",
        "ID" => "1040"
    ),
    "Yosan" => array(
        "Sex" => "M",
        "Age" => "20",
        "ID" => "1040"
    ),
    "Naol" => array(
        "Sex" => "M",
        "Age" => "20",
        "ID" => "1040"
    )
);
$user["Abebe"] = array(
    "Sex" => "M",
    "Age" => "20",
    "ID" => "1040"
);
asort($user["Abebe"]);
foreach (array_keys($user) as $key) {
    echo $key . ": <br>";
    foreach ($user[$key] as $k => $v) {
        echo ": " . $k . " " . $v . "<br>";
    }
}

