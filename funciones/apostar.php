<?php

// Definición de la función para manejar el caso del estado 'registrar'
function apostar($pdo, $from, $message) {
    // Validar la apuesta antes de insertarla
    $apuestas_validas = array_merge(range(0, 36), ['pares', 'impares', 'negro', 'rojo', 'falta', 'pasa', 'primera', 'segunda', 'tercera', '1-12', '2-12', '3-12']);

    // Verificar si la apuesta es válida
    if (!in_array(strtolower($message), $apuestas_validas)) {
        // La apuesta no es válida, enviar mensaje de error
        $menuMessage = 'La apuesta ingresada no es válida. Por favor, ingresa una apuesta válida.';
        
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

        return $response;
    }

 
    // Obtener el saldo del usuario
    $stmt = $pdo->prepare("SELECT saldo FROM usuarios WHERE user_id = ?");
    $stmt->execute([$from]);
    $saldo = $stmt->fetchColumn();

    // Verificar si el saldo es mayor a 0
    if ($saldo <= 0) {
        // El saldo es insuficiente, enviar mensaje de error
        $menuMessage = 'Saldo insuficiente para realizar la apuesta. Si desea agregar saldo escriba *"recargar"* ó para terminar la apuesta envía *X* ';
        
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

        return $response;
    }

    // Restar 200 al saldo del usuario
    $stmt = $pdo->prepare("UPDATE usuarios SET saldo = saldo - 200 WHERE user_id = ?");
    $stmt->execute([$from]);

    // Insertar la apuesta en la tabla apuestas
    $stmt = $pdo->prepare("INSERT INTO apuestas (user_id, apuesta) VALUES (?, ?)");
    $stmt->execute([$from, $message]);

    // Obtener todas las apuestas del usuario
    $stmt = $pdo->prepare("SELECT * FROM apuestas WHERE user_id = ?");
    $stmt->execute([$from]);
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Construir el mensaje del menú
    $menuMessage = '';
    foreach ($menuItems as $item) {
        $menuMessage .= "¡Tu apuesta ha sido registrada! *{$item['apuesta']}*\n";
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

    return $response;

}

?>
