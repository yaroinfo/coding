<?php

$data = json_decode(file_get_contents(__DIR__ . '/standings.json'));

$string = [];
foreach ($data as $item) {
    // $string[] = sprintf(
    //     '%s (%s) - %d',
    //     $item->team,
    //     $item->group,
    //     $item->points
    // );

    $string[] = "{$item->team} ({$item->group}) - {$item->points}";
}

$string = implode("\n", $string);

print($string);
