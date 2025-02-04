<?php
use PHPUnit\Framework\TestCase;

class GenerateTest extends TestCase {
    public function testGeneratedLinksExist() {
        // Vérifie que les fichiers générés existent bien
        $expectedFiles = [
            'Chat_Like_GPT.html',
            'code_editor.html',
            'ecommerce.html',
            'pong.html',
            'Tetris_Game.html'
        ];

        foreach ($expectedFiles as $file) {
            $this->assertFileExists(__DIR__ . '/builds/' . $file, "Le fichier $file n'existe pas.");
        }
    }
}

