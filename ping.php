<?php
$jsonFile = 'data.json';
if (!file_exists($jsonFile)) {
    die("JSON file not found: $jsonFile\n");
}

$jsonData = file_get_contents($jsonFile);
if ($jsonData === false) {
    die("Error reading the JSON file.\n");
}

$data = json_decode($jsonData, true);

if (!isset($data['locations']) || !is_array($data['locations'])) {
    die("No locations found.\n");
}

$locations = $data['locations'];
$pingResults = [];

foreach ($locations as $location) {
    unset($output, $status); // they won't be reset automatically
    $pool = $location['pool'];

    $ping = exec("ping -c 1 -w 1 $pool 2>&1", $output, $status);

    if (!$status) {
        preg_match('/time=([0-9\.]+) ms/', implode("\n", $output), $matches);
        $pingTime = isset($matches[1]) ? floatval($matches[1]) : PHP_INT_MAX;
    } else {
        $pingTime = PHP_INT_MAX;
    }

    $pingResults[] = [
        'name' => $location['name'],
        'city' => $location['city'],
        'country' => $location['country'],
        'pool' => $pool,
        'ping_time' => $pingTime
    ];
}

usort($pingResults, function ($a, $b) {
    return $a['ping_time'] <=> $b['ping_time'];
});

echo "Locations sorted by ping:\n";
foreach ($pingResults as $result) {
    echo sprintf(
        "Name: %s, City: %s, Country: %s, Pool: %s, Ping: %.2f ms\n",
        $result['name'],
        $result['city'],
        $result['country'],
        $result['pool'],
        $result['ping_time']
    );
}