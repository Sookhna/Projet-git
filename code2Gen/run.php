<?php
require_once 'generate.php';

// Exemple d'utilisation
$inputs = [
    ['input' => 'Hello World', 'filename' => 'file1.html'],
    ['input' => '<script>alert("XSS")</script>', 'filename' => 'file2.html'],
    ['input' => 'Bienvenue sur code2Gen', 'filename' => 'file3.html'],
];

foreach ($inputs as $data) {
    generateFiles($data['input'], $data['filename']);
}
