<?php
require_once '../src/config.php';

header('Content-Type: application/json');

$city = isset($_GET['city']) ? $_GET['city'] : '';

if (empty($city)) {
    echo json_encode(['error' => 'Por favor, insira o nome de uma cidade.']);
    exit;
}

$apiUrl = "https://api.openweathermap.org/data/2.5/weather?appid={$apiKey}&q=" . urlencode($city);

$response = file_get_contents($apiUrl);

if ($response === FALSE) {
    echo json_encode(['error' => 'Erro ao se conectar à API.']);
    exit;
}

$data = json_decode($response, true);

if (isset($data['cod']) && $data['cod'] != 200) {
    echo json_encode(['error' => $data['message']]);
    exit;
}

$tempCelsius = $data['main']['temp'] - 273.15;

echo json_encode([
    'full_response' => $data,
    'location' => [
        'name' => $data['name'],
        'country' => $data['sys']['country']
    ],
    'current' => [
        'temperature' => round($tempCelsius, 1),
        'condition' => $data['weather'][0]['description']
    ]
]);
