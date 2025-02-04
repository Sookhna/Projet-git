<?php

use PHPUnit\Framework\TestCase;

// Inclure le fichier à tester
require_once __DIR__ . 'generate.php';

class GenerateTest extends TestCase {
    public function testGenerateCode() {
        // Appeler la fonction de generate.php
        $result = generateCode("Test input");

        // Vérifier que le résultat est correct
        $this->assertEquals("<div>Test input</div>", $result);
    }
}
