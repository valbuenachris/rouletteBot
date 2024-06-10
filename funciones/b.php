<?php

function apuestas($pdo, $from) {
    // Verificar si el estado es igual a 'inicio'
    $stmt = $pdo->prepare("SELECT status FROM sesiones WHERE user_id = ?");
    $stmt->execute([$from]);
    $status = $stmt->fetchColumn();
    
    // La primera condicion es solo una puerta. Se debe cambiar al terminar
    if ($status = 'inicio') {

    // Incluir el archivo que contiene la API key
        require_once 'api_key.php';

        // Construir el mensaje del menú
        $menuMessage = "*OPCIONES PARA JUGAR RULETA*";
        
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
        
    //////////////   MENSAJE IMAGEN  ////////////
        
        // Establecer la API utilizando la constante definida en api_key.php
        $api_key = API_KEY;
        
        $body = array(
            "api_key" => $api_key,
            "receiver" => "$from",
            "data" => array(
                "url" => "http://bot.tienderu.com/app/storage?url=1/pleno.png",
                "media_type" => "image",
                "caption" => "*PLENO* \nEscribe un numero del *0* al *36* \n*GANANCIA: 35*"
            )
        );
        
        // Enviar solicitud de texto
        $response = sendCurlRequestImage($body);
        
    //////////////   MENSAJE IMAGEN  ////////////
        
        // Establecer la API utilizando la constante definida en api_key.php
        $api_key = API_KEY;
        
        $body = array(
            "api_key" => $api_key,
            "receiver" => "$from",
            "data" => array(
                "url" => "http://bot.tienderu.com/app/storage?url=1/color.png",
                "media_type" => "image",
                "caption" => "*COLOR* \nEnvía *rojo* o *negro* para apostar por un color \n*GANANCIA: 1*"
            )
        );
        
        // Enviar solicitud de texto
        $response = sendCurlRequestImage($body);
        
    //////////////   MENSAJE IMAGEN  ////////////
        
        // Establecer la API utilizando la constante definida en api_key.php
        $api_key = API_KEY;
        
        $body = array(
            "api_key" => $api_key,
            "receiver" => "$from",
            "data" => array(
                "url" => "http://bot.tienderu.com/app/storage?url=1/fila.png",
                "media_type" => "image",
                "caption" => "*FILA* \nApuesta a toda una fila así:\nPara la fila del 1 escribe *primera* \nPara la línea del 2 escribe *segunda* \nPara la línea del 3 escribe *tercera* \n*GANANCIA: 2*"
            )
        );
        
        // Enviar solicitud de texto
        $response = sendCurlRequestImage($body);
    
    //////////////   MENSAJE IMAGEN  ////////////
        
        // Establecer la API utilizando la constante definida en api_key.php
        $api_key = API_KEY;
        
        $body = array(
            "api_key" => $api_key,
            "receiver" => "$from",
            "data" => array(
                "url" => "http://bot.tienderu.com/app/storage?url=1/docena.png",
                "media_type" => "image",
                "caption" => "*DOCENA* \nTambién puedes seleccionar las docenas escribiendo\nPara la primera docena *1-12*\nPara la segunda docena *2-12*\nPara la tercera docena *3-12* \n*GANANCIA: 2*"
            )
        );
        
        // Enviar solicitud de texto
        $response = sendCurlRequestImage($body);
    
    //////////////   MENSAJE IMAGEN  ////////////
        
        // Establecer la API utilizando la constante definida en api_key.php
        $api_key = API_KEY;
        
        $body = array(
            "api_key" => $api_key,
            "receiver" => "$from",
            "data" => array(
                "url" => "http://bot.tienderu.com/app/storage?url=1/falta_pasa.png",
                "media_type" => "image",
                "caption" => "*FALTA Y PASA* \nSi prefieres apostar a los primeros 18 números escribe *falta* \nsi prefieres los últimos escribe *pasa* \n*GANANCIA: 1*"
            )
        );
        
        // Enviar solicitud de texto
        $response = sendCurlRequestImage($body);
    
    //////////////   MENSAJE IMAGEN  ////////////
        
        // Establecer la API utilizando la constante definida en api_key.php
        $api_key = API_KEY;
        
        $body = array(
            "api_key" => $api_key,
            "receiver" => "$from",
            "data" => array(
                "url" => "http://bot.tienderu.com/app/storage?url=1/pares_impares.png",
                "media_type" => "image",
                "caption" => "*PARES / IMPARES* \nRecuerda que también puedes escribir *pares* o *impares* \n*GANANCIA: 1*"
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

    
    
    // Actualizar el estado 
        update_status($pdo, $from, 'inicio');

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

        // Enviar solicitud de texto
        $response = sendCurlRequestText($body);
    }
    
}

?>
