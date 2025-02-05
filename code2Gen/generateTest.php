<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/generate.php';

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

    public static function generateCodeProvider() {
    	return [
        	["Test input", "<div>Test input</div>"],
        	["", "<div></div>"],
        	['<script>alert(\'XSS\')</script>', '<div>&lt;script&gt;alert(&#039;XSS&#039;)&lt;/script&gt;</div>'],
    	];
    }

    /**
    * @dataProvider generateCodeProvider
    */

    public function testGenerateCode($input, $expected) {
    	$result = generateCode($input);
    	$this->assertEquals($expected, $result);
    }
}

