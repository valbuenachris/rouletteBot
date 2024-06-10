<?php

function menuRegistrado($pdo, $from) {
    
    // Verificar si el estado es igual a 'inicio'
    $stmt = $pdo->prepare("SELECT status FROM sesiones WHERE user_id = ?");
    $stmt->execute([$from]);
    $status = $stmt->fetchColumn();

        // Incluir el archivo que contiene la API key
        require_once 'api_key.php';
    
    //////////////   MENSAJE IMAGEN  ////////////
        
        // Establecer la API utilizando la constante definida en api_key.php
        $api_key = API_KEY;
        
        $body = array(
            "api_key" => $api_key,
            "receiver" => "$from",
            "data" => array(
                "url" => "http://bot.tienderu.com/app/storage?url=1/roulette.jpeg",
                "media_type" => "image",
                "caption" => "Aqui toy"
            )
        );
        
        // Enviar solicitud de texto
        $response = sendCurlRequestImage($body);
        
        
    /////////////   MENSAJE   /////////////

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
