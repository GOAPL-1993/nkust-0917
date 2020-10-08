<?php
    $names = array(
        "1",
        "2",
        "3",
        "4",
        "5",
        "6",
        "7"
    );
    function echo_all($data){
        for ($i = 0; $i < count($data); $i++) {
            echo $data[$i] . ",";
        }
    }
    echo "<br>";
    function aa($names){   
        $x = rand(0, count($names) - 1);
        $y = rand(0, count($names) - 1);
        if ($x != $y) {
            $temp = $names[$x];
            $names[$x] = $names[$y];
            $names[$y] = $temp;
        }
    }
    for ($i = 0; $i < 50; $i++) {
        aa($names);
    }
    for ($i = 0; $i < count($names); $i++) {
        echo $names[$i] . ",";
    }
        // shuffle($names);//用來打亂順序
?>