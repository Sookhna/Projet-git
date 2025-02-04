<?php
// config.php

/**
 * Ce fichier de configuration retourne un tableau associatif
 * avec les paramètres utilisés par generate.php.
 *
 * - 'ia_used' : définit le fournisseur d'intelligence artificielle utilisé.
 *   Choisissez entre 'openai' et 'gemini' (ou une autre valeur de votre choix).
 *
 * - 'api_key_open_ai' : votre clé API pour OpenAI.
 *
 * - 'AIzaSyCsjfsgwuSoeAXXztvSVXuvnQkuPLyhNx0' : votre clé API pour Gemini.
 *   Le nom de cette clé est utilisé tel quel dans votre code.
 */

return [
    'ia_used' => 'gemini', // Remplacez par 'gemini' si vous utilisez Gemini
    'api_key_gemini' => 'AIzaSyCsjfsgwuSoeAXXztvSVXuvnQkuPLyhNx0', // Mettez ici votre clé API Gemini
];
