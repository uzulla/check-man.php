<?php

// > http://example.jp/index.php
// < 127.0.0.1

// > http://example.jp/index.php?json
// < 
// {
//     "ip": "127.0.0.1",
//     "host": "localhost",
//     "REMOTE_ADDR": "127.0.0.1",
//     "REMOTE_HOST": "",
//     "HTTP_X_FORWARDED_FOR": "",
//     "HTTP_CLIENT_IP": ""
// }

if (isset($_GET['json'])) {
    echo json_encode([
        'ip'=> $_SERVER['REMOTE_ADDR'] ?? "",
        'host' => gethostbyaddr($_SERVER['REMOTE_ADDR']) ?? "",
        'REMOTE_ADDR'=> $_SERVER['REMOTE_ADDR'] ?? "",
        'REMOTE_HOST' => $_SERVER['REMOTE_HOST'] ?? "",
        'HTTP_X_FORWARDED_FOR' => $_SERVER['HTTP_X_FORWARDED_FOR'] ?? "",
        'HTTP_CLIENT_IP' => $_SERVER['HTTP_CLIENT_IP'] ?? "",
    ], JSON_PRETTY_PRINT);
} else {
    echo $_SERVER['REMOTE_ADDR'];
}
