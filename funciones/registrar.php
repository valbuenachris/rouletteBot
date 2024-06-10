<?php

// Definición de la función para manejar el caso del estado 'registrar'
function manejarEstadoRegistrar($pdo, $from, $message) {
    // Actualizar el estado a "registrado" para indicar que se ha recibido el nombre

    $stmt = $pdo->prepare("INSERT INTO usuarios (nombre, user_id) VALUES (?, ?)");
    $stmt->execute([$message, $from]);
    
    $stmt = $pdo->prepare("UPDATE sesiones SET status = 'inicio', perfil = 'registrado' WHERE user_id = ?");
    $stmt->execute([$from]); // Solo necesitas pasar $from para el user_id


    // Obtener todos los registros del usuario
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE user_id = ?");
    $stmt->execute([$from]);
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Construir el mensaje del menú
    $menuMessage = '';
    foreach ($menuItems as $item) {
        $menuMessage .= "¡Muy bien! *{$item['nombre']}* 🎰";
    }

    // Establecer la API utilizando la constante definida en api_key.php
    $api_key = API_KEY;

    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    // Enviar solicitud de texto
        $response = sendCurlRequestText($body);
    
    //////////////////////////////////////////////
    
    // Mensaje del  headerMenu
    $stmt = $pdo->query("SELECT * FROM headerMenu ORDER BY RAND() LIMIT 1");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Construir el mensaje del menú principal
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['mensaje']}";
    }

    // Mensaje de texto con el menú principal
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    // Enviar solicitud de texto
        $response = sendCurlRequestText($body);
        
    // Mensaje del menú principal
    $stmt = $pdo->query("SELECT * FROM menu");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Construir el mensaje del menú principal
    $menuMessage = "🏠 *MENU PRINCIPAL*\n\n";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['icono']} {$item['item']}\n";
    }

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
