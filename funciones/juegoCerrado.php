<?php

function juegoCerrado($pdo, $from) {
    
    // Verificar si el estado es igual a 'inicio'
    $stmt = $pdo->prepare("SELECT status FROM sesiones WHERE user_id = ?");
    $stmt->execute([$from]);
    $status = $stmt->fetchColumn();

        // Incluir el archivo que contiene la API key
        require_once 'api_key.php';
        
        // Establecer la API utilizando la constante definida en api_key.php
        $api_key = API_KEY;
        
    /////////////   MENSAJE   /////////////

        // Mensaje del menú principal
    $stmt = $pdo->query("SELECT * FROM menu");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Construir el mensaje del menú principal
    $menuMessage = "En este momento el juego se encuentra 🔐 *CERRADO*";
    
    // Mensaje de texto con el menú principal
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    // Enviar solicitud de texto
        $response = sendCurlRequestText($body);

    }

?>
