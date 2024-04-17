<?php
$events = [
    [
        'date' => '2019-12',
        'event' => 'name1'
    ],
    [
        'date' => '2019-12',
        'event' => 'name2'
    ],
    [
        'date' => '2019-11',
        'event' => 'name3'
    ],
    [
        'date' => '2019-11',
        'event' => 'name4'
    ],
    [
        'date' => '2020-10',
        'event' => 'name5'
    ],
    [
        'date' => '2020-10',
        'event' => 'name6'
    ],
    [
        'date' => '2020-11',
        'event' => 'name5'
    ],
    [
        'date' => '2020-11',
        'event' => 'name6'
    ],
    [
        'date' => '2020-12',
        'event' => 'name7'
    ],
    [
        'date' => '2020-12',
        'event' => 'name8'
    ]
];

$eventsByYearMonth = [];

foreach ($events as $event) {
    $dateParts = explode('-', $event['date']);
    $year = $dateParts[0];
    $month = $dateParts[1];
    
    if (!isset($eventsByYearMonth[$year])) {
        $eventsByYearMonth[$year] = [];
    }
    
    if (!isset($eventsByYearMonth[$year][$month])) {
        $eventsByYearMonth[$year][$month] = [];
    }
    
    $eventsByYearMonth[$year][$month][] = $event['event'];
}

foreach ($eventsByYearMonth as $year => $months) {
    echo $year . ":\n";
    foreach ($months as $month => $events) {
        echo "  $month:\n";
        foreach ($events as $event) {
            echo "    - $event\n";
        }
    }
}
?>