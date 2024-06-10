<?php

function ver($pdo, $from) {
    try {
        // Consultar el nombre y saldo del usuario desde la tabla usuarios
        $stmt = $pdo->prepare("SELECT u.nombre, u.saldo FROM usuarios u WHERE u.user_id = ?");
        $stmt->execute([$from]); // Ejecutar la consulta
        $userInfo = $stmt->fetch(PDO::FETCH_ASSOC); // Obtener los resultados de la consulta

        // Consultar las apuestas del usuario desde la tabla apuestas
        $stmt = $pdo->prepare("SELECT a.apuesta FROM apuestas a WHERE a.user_id = ?");
        $stmt->execute([$from]); // Ejecutar la consulta
        $apuestas = $stmt->fetchAll(PDO::FETCH_COLUMN); // Obtener las apuestas del usuario

        // Construir el mensaje con los datos del usuario y sus apuestas
        $menuMessage = "*DATOS DEL USUARIO*\n";
        $menuMessage .= "Nombre: {$userInfo['nombre']}\n";
        $menuMessage .= "Saldo: {$userInfo['saldo']}\n";

        if (!empty($apuestas)) {
            $menuMessage .= "*APUESTAS REALIZADAS*\n";
            foreach ($apuestas as $apuesta) {
                $menuMessage .= "- {$apuesta}\n";
            }
        } else {
            $menuMessage .= "El usuario no ha realizado ninguna apuesta.";
        }

        // Crear el array de respuesta con el mensaje construido
        $responseData = [
            'message_type' => 'text',
            'message' => [
                'message' => $menuMessage
            ]
        ];

        // Devolver los datos de respuesta
        return $responseData;
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error en la base de datos: ' . $e->getMessage()
            ]
        ];
    } catch (Exception $e) {
        // Manejar otras excepciones
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error: ' . $e->getMessage()
            ]
        ];
    }
}


?>
