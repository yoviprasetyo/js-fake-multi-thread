<?php

sleep(mt_rand(0, 5));

header('Content-Type: application/json');

echo json_encode([
    'ok' => true,
]);

exit();