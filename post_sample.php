<?php

$data = json_decode(file_get_contents('php://input'), true);

if (count($data) > 0) {
    echo 'POST METHOD:  you can send post data (id=' . $data['id'] . ') by javascript successfully.';
} else {
    echo 'POST METHOD:  Error: you cant send post data...';
}
