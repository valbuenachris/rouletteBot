<?php

function abrirJuego($pdo, $from) {
    try {
        // Actualizar todos los registros de la tabla 'sesiones' en la columna 'status' a 'cerrado'
        $stmt = $pdo->prepare("UPDATE sesiones SET status = 'apostar'");
        $stmt->execute();

        // Devolver un mensaje indicando que la actualización ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Todos los registros de sesiones han sido actualizados a "apostar".'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al actualizar los registros de sesiones: ' . $e->getMessage()
            ]
        ];
    }
}


?>