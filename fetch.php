<?php
function getModules()
{
    $topDir = './modules';
    $classTree = array_flip(array_values(array_diff(scandir($topDir), array('.', '..'))));

    foreach ($classTree as $key => $value) {
        $lowDir = "$topDir/{$key}";
        $under = array_values(array_diff(scandir($lowDir), array('.', '..')));
        // if (is_dir("{$lowDir}/{$under[0]}") === false) {
        //     $classTree[$key] = $under;
        // } else {
        $list = array_flip($under);
        $classTree[$key] = $list;
        foreach ($classTree[$key] as $k => $value) {
            $lowerDir = "$lowDir/{$k}";
            $underUnder = array_values(array_diff(scandir($lowerDir), array('.', '..')));
            if (is_dir($underUnder[0]) === false) {
                $classTree[$key][$k] = $underUnder;
                // } else {

                // }
            }
        }
    }

    return json_encode($classTree);

}
