<?php

function dos($pdo, $from) {
    // Verificar si el estado es igual a 'inicio'
    $stmt = $pdo->prepare("SELECT status FROM sesiones WHERE user_id = ?");
    $stmt->execute([$from]);
    $status = $stmt->fetchColumn();

    
    if ($status === 'calzado') {
        // Si el estado no es 'inicio', retornar un mensaje indicando que la acción no es válida
        
    // Incluir el archivo que contiene la API key
    require_once 'api_key.php';

    $stmt = $pdo->query("SELECT * FROM headerTennis ORDER BY RAND() LIMIT 1");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Construir el mensaje del menú
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['mensaje']}\n";
    }

    // Establecer la API utilizando la constante definida en api_key.php
    $api_key = API_KEY;

    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
    

    if ($err) {
        return "cURL Error #:" . $err;
    }

    /*/////////////   MENSAJE IMAGEN 1 ////////////*/

    $body = array(
        "api_key" => $api_key,
        "receiver" => "$from",
        "data" => array(
            "url" => "https://bot.educol.club/app/storage?url=2/Captura-de-Pantalla-2024-02-01-a-las-9.20.45-a.m..png",
            "media_type" => "image",
            "caption" => "*GLAMPING CRS* \n📝: 3143181438\n📍: Km 3 Vía Restrepo"
        )
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-media",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    }

    /*/////////////   MENSAJE 2   ////////////*/

    $stmt = $pdo->query("SELECT * FROM subHeaderResultados ORDER BY RAND() LIMIT 1");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Construir el mensaje del menú
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['mensaje']}\n";
    }

    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    }

    /*/////////////   MENSAJE 2   ////////////*/

    // Consultar un establecimiento aleatorio con la clave 'perros calientes'
    $stmt = $pdo->query("SELECT * FROM establecimientos  ");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Construir el mensaje del menú
    $menuMessage = "*HOTELES URBANOS*\n";
    foreach ($menuItems as $item) {
        $menuMessage .= "_______________________\n{$item['nombre']}\n{$item['telefono']}\n{$item['website']}\n";
    }

    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    }
    
    /*/////////////   MENSAJE 2   ////////////*/

    // Consultar un establecimiento aleatorio con la clave 'perros calientes'
    $stmt = $pdo->query("SELECT * FROM footerResultados ORDER BY RAND() LIMIT 1");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Construir el mensaje del menú
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['mensaje']}\n";
    }

    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    }
    
    /*/////////////   MENSAJE 2   ////////////*/

    // Consultar un establecimiento aleatorio con la clave 'perros calientes'
    $stmt = $pdo->query("SELECT * FROM menuCalzado");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Construir el mensaje del menú
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['icono']} {$item['item']}\n";
    }

    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    }
    
    // Actualizar el estado a 'calzado'
        update_status($pdo, $from, 'calzado');
    
    return $response;
        
    }
    
    elseif ($status === 'alojamientos') {
        // Si el estado no es 'inicio', retornar un mensaje indicando que la acción no es válida
        
    // Incluir el archivo que contiene la API key
    require_once 'api_key.php';

    $stmt = $pdo->query("SELECT * FROM headerCabanas ORDER BY RAND() LIMIT 1");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Construir el mensaje del menú
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['mensaje']}\n";
    }

    // Establecer la API utilizando la constante definida en api_key.php
    $api_key = API_KEY;

    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
    

    if ($err) {
        return "cURL Error #:" . $err;
    }

    /*/////////////   MENSAJE IMAGEN 1 ////////////*/

    $body = array(
        "api_key" => $api_key,
        "receiver" => "$from",
        "data" => array(
            "url" => "https://bot.educol.club/app/storage?url=2/Captura-de-Pantalla-2024-02-01-a-las-9.20.45-a.m..png",
            "media_type" => "image",
            "caption" => "*GLAMPING CRS* \n📝: 3143181438\n📍: Km 3 Vía Restrepo"
        )
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-media",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    }

    /*/////////////   MENSAJE 2   ////////////*/

    $stmt = $pdo->query("SELECT * FROM subHeaderResultados ORDER BY RAND() LIMIT 1");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Construir el mensaje del menú
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['mensaje']}\n";
    }

    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    }

    /*/////////////   MENSAJE 2   ////////////*/

    // Consultar un establecimiento aleatorio con la clave 'perros calientes'
    $stmt = $pdo->query("SELECT * FROM establecimientos  ");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Construir el mensaje del menú
    $menuMessage = "*HOTELES URBANOS*\n";
    foreach ($menuItems as $item) {
        $menuMessage .= "_______________________\n{$item['nombre']}\n{$item['telefono']}\n{$item['website']}\n";
    }

    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    }
    
    /*/////////////   MENSAJE 2   ////////////*/

    // Consultar un establecimiento aleatorio con la clave 'perros calientes'
    $stmt = $pdo->query("SELECT * FROM footerCabanas ORDER BY RAND() LIMIT 1");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Construir el mensaje del menú
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['mensaje']}\n";
    }

    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    }
    
    /*/////////////   MENSAJE 2   ////////////*/

    // Consultar un establecimiento aleatorio con la clave 'perros calientes'
    $stmt = $pdo->query("SELECT * FROM menuAlojamientos");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Construir el mensaje del menú
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['icono']} {$item['item']}\n";
    }

    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    }

        // Actualizar el estado a 'alojamientos'
        update_status($pdo, $from, 'alojamientos');
        
    return $response;

    }
    
    elseif ($status === 'hoteles') {
        // Si el estado no es 'inicio', retornar un mensaje indicando que la acción no es válida
        
    // Incluir el archivo que contiene la API key
    require_once 'api_key.php';

    $stmt = $pdo->query("SELECT * FROM headerHotelesPiscina ORDER BY RAND() LIMIT 1");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Construir el mensaje del menú
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['mensaje']}\n";
    }

    // Establecer la API utilizando la constante definida en api_key.php
    $api_key = API_KEY;

    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
    

    if ($err) {
        return "cURL Error #:" . $err;
    }

    /*/////////////   MENSAJE IMAGEN 1 ////////////*/

    $body = array(
        "api_key" => $api_key,
        "receiver" => "$from",
        "data" => array(
            "url" => "https://bot.educol.club/app/storage?url=2/Captura-de-Pantalla-2024-02-01-a-las-9.20.45-a.m..png",
            "media_type" => "image",
            "caption" => "*GLAMPING CRS* \n📝: 3143181438\n📍: Km 3 Vía Restrepo"
        )
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-media",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    }

    /*/////////////   MENSAJE 2   ////////////*/

    $stmt = $pdo->query("SELECT * FROM subHeaderResultados ORDER BY RAND() LIMIT 1");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Construir el mensaje del menú
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['mensaje']}\n";
    }

    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    }

    /*/////////////   MENSAJE 2   ////////////*/

    // Consultar un establecimiento aleatorio con la clave 'perros calientes'
    $stmt = $pdo->query("SELECT * FROM establecimientos  ");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Construir el mensaje del menú
    $menuMessage = "*HOTELES URBANOS*\n";
    foreach ($menuItems as $item) {
        $menuMessage .= "_______________________\n{$item['nombre']}\n{$item['telefono']}\n{$item['website']}\n";
    }

    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    }
    
    /*/////////////   MENSAJE 2   ////////////*/

    // Consultar un establecimiento aleatorio con la clave 'perros calientes'
    $stmt = $pdo->query("SELECT * FROM footerCabanas ORDER BY RAND() LIMIT 1");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Construir el mensaje del menú
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['mensaje']}\n";
    }

    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    }
    
    /*/////////////   MENSAJE 2   ////////////*/

    // Consultar un establecimiento aleatorio con la clave 'perros calientes'
    $stmt = $pdo->query("SELECT * FROM menuHoteles");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Construir el mensaje del menú
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['icono']} {$item['item']}\n";
    }

    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    }

        // Actualizar el estado a 'hoteles'
        update_status($pdo, $from, 'hoteles');
    return $response;
        
    }

    elseif ($status === 'restaurantes') {
        // Si el estado no es 'inicio', retornar un mensaje indicando que la acción no es válida
        
    // Incluir el archivo que contiene la API key
    require_once 'api_key.php';

    $stmt = $pdo->query("SELECT * FROM headerRestaurantesMexicanos ORDER BY RAND() LIMIT 1");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Construir el mensaje del menú
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['mensaje']}\n";
    }

    // Establecer la API utilizando la constante definida en api_key.php
    $api_key = API_KEY;

    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
    

    if ($err) {
        return "cURL Error #:" . $err;
    }

    /*/////////////   MENSAJE IMAGEN 1 ////////////*/

    $body = array(
        "api_key" => $api_key,
        "receiver" => "$from",
        "data" => array(
            "url" => "https://bot.educol.club/app/storage?url=2/Captura-de-Pantalla-2024-02-01-a-las-9.20.45-a.m..png",
            "media_type" => "image",
            "caption" => "*GLAMPING CRS* \n📝: 3143181438\n📍: Km 3 Vía Restrepo"
        )
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-media",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    }

    /*/////////////   MENSAJE 2   ////////////*/

    $stmt = $pdo->query("SELECT * FROM subHeaderResultados ORDER BY RAND() LIMIT 1");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Construir el mensaje del menú
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['mensaje']}\n";
    }

    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    }

    /*/////////////   MENSAJE 2   ////////////*/

    // Consultar un establecimiento aleatorio con la clave 'perros calientes'
    $stmt = $pdo->query("SELECT * FROM establecimientos  ");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Construir el mensaje del menú
    $menuMessage = "*HOTELES URBANOS*\n";
    foreach ($menuItems as $item) {
        $menuMessage .= "_______________________\n{$item['nombre']}\n{$item['telefono']}\n{$item['website']}\n";
    }

    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    }
    
    /*/////////////   MENSAJE 2   ////////////*/

    // Consultar un establecimiento aleatorio con la clave 'perros calientes'
    $stmt = $pdo->query("SELECT * FROM footerResultados ORDER BY RAND() LIMIT 1");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Construir el mensaje del menú
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['mensaje']}\n";
    }

    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    }
    
    /*/////////////   MENSAJE 2   ////////////*/

    // Consultar un establecimiento aleatorio con la clave 'perros calientes'
    $stmt = $pdo->query("SELECT * FROM menuRestaurantes");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Construir el mensaje del menú
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['icono']} {$item['item']}\n";
    }

    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    }
    
        update_status($pdo, $from, 'restaurantes');
    
    return $response;
    }
    
    elseif ($status === 'turismo') {

    // Incluir el archivo que contiene la API key
    require_once 'api_key.php';

    /*/////////////   HEADER   ////////////*/

    $stmt = $pdo->query("SELECT * FROM headerTurismoPlanes ORDER BY RAND() LIMIT 1");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Construir el mensaje del menú
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['mensaje']}\n";
    }

    // Establecer la API utilizando la constante definida en api_key.php
    $api_key = API_KEY;

    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
    

    if ($err) {
        return "cURL Error #:" . $err;
    }
    
    /*/////////////    SUBHEADER   ////////////*/

    $stmt = $pdo->query("SELECT * FROM subHeader ORDER BY RAND() LIMIT 1");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Construir el mensaje del menú
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['mensaje']}\n";
    }

    // Establecer la API utilizando la constante definida en api_key.php
    $api_key = API_KEY;

    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
    

    if ($err) {
        return "cURL Error #:" . $err;
    }

    

    /*/////////////   MENU   ////////////*/

    $stmt = $pdo->query("SELECT * FROM menuTurismoPlanes ");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Construir el mensaje del menú
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['icono']} {$item['item']}\n";
    }
    
    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    }
        /*/////////////   FOOTER    ////////////*/

    $stmt = $pdo->query("SELECT * FROM footerMenu ORDER BY RAND() LIMIT 1 ");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Construir el mensaje del menú
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['mensaje']} ";
    }
    
    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    }
    
    // Actualizar el estado a 'turismoPlanes'
        $stmt = $pdo->prepare("UPDATE sesiones SET status = 'turismoPlanes' WHERE user_id = ?");
        $stmt->execute([$from]);

        // Eliminar registros duplicados más antiguos para el mismo usuario
        $stmt = $pdo->prepare("DELETE s1 FROM sesiones s1 
                               INNER JOIN sesiones s2 
                               ON s1.user_id = s2.user_id 
                               AND s1.status = s2.status 
                               AND s1.id > s2.id 
                               WHERE s1.user_id = ?");
        $stmt->execute([$from]);

    return $response;
    }
    
    elseif ($status === 'modaHombres') {

    // Incluir el archivo que contiene la API key
    require_once 'api_key.php';

    /*/////////////   HEADER   ////////////*/

    $stmt = $pdo->query("SELECT * FROM headerPantalones ORDER BY RAND() LIMIT 1");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Construir el mensaje del menú
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['mensaje']}\n";
    }

    // Establecer la API utilizando la constante definida en api_key.php
    $api_key = API_KEY;

    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
    

    if ($err) {
        return "cURL Error #:" . $err;
    }
    
    /*/////////////    SUBHEADER   ////////////*/

    $stmt = $pdo->query("SELECT * FROM subHeader ORDER BY RAND() LIMIT 1");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Construir el mensaje del menú
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['mensaje']}\n";
    }

    // Establecer la API utilizando la constante definida en api_key.php
    $api_key = API_KEY;

    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
    

    if ($err) {
        return "cURL Error #:" . $err;
    }

    

    /*/////////////   MENU   ////////////*/

    $stmt = $pdo->query("SELECT * FROM menuPantalones ");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Construir el mensaje del menú
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['icono']} {$item['item']}\n";
    }
    
    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    }
        /*/////////////   FOOTER    ////////////*/

    $stmt = $pdo->query("SELECT * FROM footerMenu ORDER BY RAND() LIMIT 1 ");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Construir el mensaje del menú
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['mensaje']} ";
    }
    
    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    }
    
    // Actualizar el estado a 'pantalones'
        $stmt = $pdo->prepare("UPDATE sesiones SET status = 'pantalones' WHERE user_id = ?");
        $stmt->execute([$from]);

        // Eliminar registros duplicados más antiguos para el mismo usuario
        $stmt = $pdo->prepare("DELETE s1 FROM sesiones s1 
                               INNER JOIN sesiones s2 
                               ON s1.user_id = s2.user_id 
                               AND s1.status = s2.status 
                               AND s1.id > s2.id 
                               WHERE s1.user_id = ?");
        $stmt->execute([$from]);

    return $response;
    }
    
    elseif ($status === 'moda') {

    // Incluir el archivo que contiene la API key
    require_once 'api_key.php';

    /*/////////////   HEADER   ////////////*/

    $stmt = $pdo->query("SELECT * FROM headerModaHombres ORDER BY RAND() LIMIT 1");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Construir el mensaje del menú
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['mensaje']}\n";
    }

    // Establecer la API utilizando la constante definida en api_key.php
    $api_key = API_KEY;

    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
    

    if ($err) {
        return "cURL Error #:" . $err;
    }
    
    /*/////////////    SUBHEADER   ////////////*/

    $stmt = $pdo->query("SELECT * FROM subHeader ORDER BY RAND() LIMIT 1");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Construir el mensaje del menú
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['mensaje']}\n";
    }

    // Establecer la API utilizando la constante definida en api_key.php
    $api_key = API_KEY;

    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
    

    if ($err) {
        return "cURL Error #:" . $err;
    }

    

    /*/////////////   MENU   ////////////*/

    $stmt = $pdo->query("SELECT * FROM menuModaHombres ");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Construir el mensaje del menú
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['icono']} {$item['item']}\n";
    }
    
    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    }
        /*/////////////   FOOTER    ////////////*/

    $stmt = $pdo->query("SELECT * FROM footerMenu ORDER BY RAND() LIMIT 1 ");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Construir el mensaje del menú
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['mensaje']} ";
    }
    
    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    }
    
    // Actualizar el estado a 'modaHombre'
        $stmt = $pdo->prepare("UPDATE sesiones SET status = 'modaHombres' WHERE user_id = ?");
        $stmt->execute([$from]);

        // Eliminar registros duplicados más antiguos para el mismo usuario
        $stmt = $pdo->prepare("DELETE s1 FROM sesiones s1 
                               INNER JOIN sesiones s2 
                               ON s1.user_id = s2.user_id 
                               AND s1.status = s2.status 
                               AND s1.id > s2.id 
                               WHERE s1.user_id = ?");
        $stmt->execute([$from]);

    return $response;
    }
    
    elseif ($status === 'inicio') {

    // Incluir el archivo que contiene la API key
    require_once 'api_key.php';

    /*/////////////   HEADER   ////////////*/

    $stmt = $pdo->query("SELECT * FROM headerModa ORDER BY RAND() LIMIT 1");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Construir el mensaje del menú
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['mensaje']}\n";
    }

    // Establecer la API utilizando la constante definida en api_key.php
    $api_key = API_KEY;

    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
    

    if ($err) {
        return "cURL Error #:" . $err;
    }
    
    /*/////////////    SUBHEADER   ////////////*/

    $stmt = $pdo->query("SELECT * FROM subHeader ORDER BY RAND() LIMIT 1");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Construir el mensaje del menú
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['mensaje']}\n";
    }

    // Establecer la API utilizando la constante definida en api_key.php
    $api_key = API_KEY;

    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
    

    if ($err) {
        return "cURL Error #:" . $err;
    }

    

    /*/////////////   MENU   ////////////*/

    $stmt = $pdo->query("SELECT * FROM menuModa ");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Construir el mensaje del menú
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['icono']} {$item['item']}\n";
    }
    
    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    }
        /*/////////////   FOOTER    ////////////*/

    $stmt = $pdo->query("SELECT * FROM footerMenu ORDER BY RAND() LIMIT 1 ");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Construir el mensaje del menú
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['mensaje']} ";
    }
    
    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    }
    
    // Actualizar el estado a 'moda'
        $stmt = $pdo->prepare("UPDATE sesiones SET status = 'moda' WHERE user_id = ?");
        $stmt->execute([$from]);

        // Eliminar registros duplicados más antiguos para el mismo usuario
        $stmt = $pdo->prepare("DELETE s1 FROM sesiones s1 
                               INNER JOIN sesiones s2 
                               ON s1.user_id = s2.user_id 
                               AND s1.status = s2.status 
                               AND s1.id > s2.id 
                               WHERE s1.user_id = ?");
        $stmt->execute([$from]);

    return $response;
    }
    
    elseif ($status === 'desconocido') {

    // Incluir el archivo que contiene la API key
    require_once 'api_key.php';

    /*/////////////   MENSAJE   ////////////*/

    $stmt = $pdo->query("SELECT * FROM headerMenu ORDER BY RAND() LIMIT 1");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Construir el mensaje del menú
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['mensaje']}\n";
    }

    // Establecer la API utilizando la constante definida en api_key.php
    $api_key = API_KEY;

    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
    

    if ($err) {
        return "cURL Error #:" . $err;
    }
    
    /*/////////////   MENSAJE subheader   ////////////*/

    $stmt = $pdo->query("SELECT * FROM subHeader ORDER BY RAND() LIMIT 1");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Construir el mensaje del menú
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['mensaje']}\n";
    }

    // Establecer la API utilizando la constante definida en api_key.php
    $api_key = API_KEY;

    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);
    

    if ($err) {
        return "cURL Error #:" . $err;
    }

    

    /*/////////////   MENSAJE 2   ////////////*/

    $stmt = $pdo->query("SELECT * FROM menu ");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Construir el mensaje del menú
    $menuMessage = "🏠 *MENU PRINCIAL*\n\n";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['icono']} {$item['item']}\n";
    }
    
    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    }
        /*/////////////   MENSAJE 2   ////////////*/

    $stmt = $pdo->query("SELECT * FROM footerMenu ORDER BY RAND() LIMIT 1 ");
    $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Construir el mensaje del menú
    $menuMessage = "";
    foreach ($menuItems as $item) {
        $menuMessage .= "{$item['mensaje']} ";
    }
    
    // Mensaje de texto con el menú
    $body = array(
        "api_key" => $api_key,
        "receiver" => $from,
        "data" => array("message" => $menuMessage)
    );

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://bot.educol.club/api/send-message",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($body),
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ],
    ]);

    sleep(1.5);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return "cURL Error #:" . $err;
    }
    
    // Actualizar el estado a 'inicio'
        $stmt = $pdo->prepare("UPDATE sesiones SET status = 'inicio' WHERE user_id = ?");
        $stmt->execute([$from]);

        // Eliminar registros duplicados más antiguos para el mismo usuario
        $stmt = $pdo->prepare("DELETE s1 FROM sesiones s1 
                               INNER JOIN sesiones s2 
                               ON s1.user_id = s2.user_id 
                               AND s1.status = s2.status 
                               AND s1.id > s2.id 
                               WHERE s1.user_id = ?");
        $stmt->execute([$from]);

    return $response;
    }
    
    else  {

        // Incluir el archivo que contiene la API key
        require_once 'api_key.php';

        // Construir el mensaje del menú
        $menuMessage = "*OPCION NO VALIDA*";
        
        // Establecer la API utilizando la constante definida en api_key.php
        $api_key = API_KEY;

        // Mensaje de texto con el menú
        $body = array(
            "api_key" => $api_key,
            "receiver" => $from,
            "data" => array("message" => $menuMessage)
        );

        sleep(1.5);
        $response = sendCurlRequest($body);
    }
}

?>
