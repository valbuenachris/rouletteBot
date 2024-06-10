<?php


function pagarTreintaSeis($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada número entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 36
        ");
        $stmt->execute();
        
        // Llamar a la función pagaRojo
        pagaRojo($pdo);
       
        // Llamar a la función pagaPares
        pagaPares($pdo);
        
        // Llamar a la función pagaTercera
        pagaTercera($pdo);
        
        // Llamar a la función paga 19-36
        pagaPasa($pdo);
        
        // Llamar a la función paga 3-12
        pagaTresDoce($pdo);
        

        // Devolver un mensaje indicando que la eliminación ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 36*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

function pagarTreintaCinco($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada número entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 35
        ");
        $stmt->execute();
        
        
        // Llamar a la función pagaNegro
        pagaNegro($pdo);
        
        // Llamar a la función pagaImpares
        pagaImpares($pdo);
        
        // Llamar a la función pagaSegunda
        pagaSegunda($pdo);
        
        // Llamar a la función paga 19-36
        pagaPasa($pdo);
        
        // Llamar a la función paga 3-12
        pagaTresDoce($pdo);
        

        // Devolver un mensaje indicando que la eliminación ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 35*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

function pagarTreintaCuatro($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada número entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 34
        ");
        $stmt->execute();
        
        // Llamar a la función pagaRojo
        pagaRojo($pdo);
        
        // Llamar a la función pagaPares
        pagaPares($pdo);
        
        // Llamar a la función pagaPrimera
        pagaPrimera($pdo);
        
        // Llamar a la función paga 19-36
        pagaPasa($pdo);
        
        // Llamar a la función paga 3-12
        pagaTresDoce($pdo);
        

        // Devolver un mensaje indicando que la eliminación ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 34*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

function pagarTreintaTres($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada número entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 33
        ");
        $stmt->execute();
        
        
        // Llamar a la función pagaNegro
        pagaNegro($pdo);
        
        // Llamar a la función pagaImpares
        pagaImpares($pdo);
        
        // Llamar a la función pagaTercera
        pagaTercera($pdo);
        
        // Llamar a la función paga 19-36
        pagaPasa($pdo);
        
        // Llamar a la función paga 3-12
        pagaTresDoce($pdo);
        

        // Devolver un mensaje indicando que la eliminación ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 33*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

function pagarTreintaDos($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada número entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 32
        ");
        $stmt->execute();
        
        // Llamar a la función pagaRojo
        pagaRojo($pdo);
        
        // Llamar a la función pagaPares
        pagaPares($pdo);
        
        // Llamar a la función pagaSegunda
        pagaSegunda($pdo);
        
        // Llamar a la función paga 19-36
        pagaPasa($pdo);
        
        // Llamar a la función paga 3-12
        pagaTresDoce($pdo);
        

        // Devolver un mensaje indicando que la eliminación ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 32*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

function pagarTreintaUno($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada número entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 31
        ");
        $stmt->execute();
        
        
        // Llamar a la función pagaNegro
        pagaNegro($pdo);
        
        // Llamar a la función pagaImpares
        pagaImpares($pdo);
        
        // Llamar a la función pagaPrimera
        pagaPrimera($pdo);
        
        // Llamar a la funciónn paga 19-36
        pagaPasa($pdo);
        
        // Llamar a la función paga 3-12
        pagaTresDoce($pdo);
        

        // Devolver un mensaje indicando que la eliminación ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 31*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

function pagarTreinta($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada número entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 30
        ");
        $stmt->execute();
        
        // Llamar a la función pagaRojo
        pagaRojo($pdo);
        
        // Llamar a la función pagaPares
        pagaPares($pdo);
        
        // Llamar a la función pagaSegunda
        pagaSegunda($pdo);
        
        // Llamar a la función paga 19-36
        pagaPasa($pdo);
        
        // Llamar a la función paga 3-12
        pagaTresDoce($pdo);
        

        // Devolver un mensaje indicando que la eliminación ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 30*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

function pagarVeintinueve($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada número entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 29
        ");
        $stmt->execute();
        
        
        // Llamar a la función pagaNegro
        pagaNegro($pdo);
        
        // Llamar a la función pagaImpares
        pagaImpares($pdo);
        
        // Llamar a la función pagaSegunda
        pagaSegunda($pdo);
        
        // Llamar a la función paga 19-36
        pagaPasa($pdo);
        
        // Llamar a la función paga 3-12
        pagaTresDoce($pdo);
        

        // Devolver un mensaje indicando que la eliminación ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 29*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

function pagarVeintiocho($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada número entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 28
        ");
        $stmt->execute();
        
        
        // Llamar a la función pagaNegro
        pagaNegro($pdo);
        
        // Llamar a la función pagaPares
        pagaPares($pdo);
        
        // Llamar a la función pagaPrimera
        pagaPrimera($pdo);
        
        // Llamar a la función paga 19-36
        pagaPasa($pdo);
        
        // Llamar a la función paga 3-12
        pagaTresDoce($pdo);
        

        // Devolver un mensaje indicando que la eliminación ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 28*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

function pagarVeintisiete($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada número entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 27
        ");
        $stmt->execute();
        
        // Llamar a la función pagaRojo
        pagaRojo($pdo);
        
        // Llamar a la funciónn pagaImpares
        pagaImpares($pdo);
        
        // Llamar a la función pagaTercera
        pagaTercera($pdo);
        
        // Llamar a la función paga 19-36
        pagaPasa($pdo);
        
        // Llamar a la función paga 3-12
        pagaTresDoce($pdo);
        

        // Devolver un mensaje indicando que la eliminación ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 27*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

function pagarVeintiseis($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada número entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 26
        ");
        $stmt->execute();
        
        // Llamar a la función pagaNegro
        pagaNegro($pdo);
        
        // Llamar a la función pagaPares
        pagaPares($pdo);
        
        // Llamar a la función pagaSegunda
        pagaSegunda($pdo);
        
        // Llamar a la función paga 19-36
        pagaPasa($pdo);
        
        // Llamar a la función paga 3-12
        pagaTresDoce($pdo);
        

        // Devolver un mensaje indicando que la eliminación ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 26*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

function pagarVeinticinco($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada número entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 25
        ");
        $stmt->execute();
        
        // Llamar a la función pagaRojo
        pagaRojo($pdo);
        
        // Llamar a la función pagaImpares
        pagaImpares($pdo);
        
        // Llamar a la función pagaPrimera
        pagaPrimera($pdo);
        
        // Llamar a la función paga 19-36
        pagaPasa($pdo);
        
        // Llamar a la función paga 3-12
        pagaTresDoce($pdo);
        

        // Devolver un mensaje indicando que la eliminación ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 25*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

function pagarVeinticuatro($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada número entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 24
        ");
        $stmt->execute();
        
        // Llamar a la función pagaNegro
        pagaNegro($pdo);
        
        // Llamar a la función pagaPares
        pagaPares($pdo);
        
        // Llamar a la función pagaTercera
        pagaTercera($pdo);
        
        // Llamar a la función paga 19-36
        pagaPasa($pdo);
        
        // Llamar a la función paga 2-12
        pagaDosDoce($pdo);
        

        // Devolver un mensaje indicando que la eliminación ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 24*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

function pagarVeintitres($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada número entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 23
        ");
        $stmt->execute();
        
        // Llamar a la función pagaRojo
        pagaRojo($pdo);
        
        // Llamar a la función pagaImpares
        pagaImpares($pdo);
        
        // Llamar a la función pagaSegunda
        pagaSegunda($pdo);
        
        // Llamar a la función paga 19-36
        pagaPasa($pdo);
        
        // Llamar a la función paga 2-12
        pagaDosDoce($pdo);
        

        // Devolver un mensaje indicando que la eliminación ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 23*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

function pagarVeintidos($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada n��mero entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 22
        ");
        $stmt->execute();
        
        
        // Llamar a la funci��n pagaNegro
        pagaNegro($pdo);
        
        // Llamar a la funci��n pagaPares
        pagaPares($pdo);
        
        // Llamar a la funci��n pagaPrimera
        pagaPrimera($pdo);
        
        // Llamar a la funci��n paga 19-36
        pagaPasa($pdo);
        
        // Llamar a la funci��n paga 2-12
        pagaDosDoce($pdo);
        

        // Devolver un mensaje indicando que la eliminaci��n ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 22*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

function pagarVeintiuno($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada n��mero entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 21
        ");
        $stmt->execute();
        
        // Llamar a la funci��n pagaRojo
        pagaRojo($pdo);
        // Llamar a la funci��n pagaImpares
        pagaImpares($pdo);
        // Llamar a la funci��n pagaTercera
        pagaTercera($pdo);
        
        // Llamar a la funci��n paga 19-36
        pagaPasa($pdo);
        // Llamar a la funci��n paga 2-12
        pagaDosDoce($pdo);
        

        // Devolver un mensaje indicando que la eliminaci��n ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 21*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

function pagarVeinte($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada n��mero entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 20
        ");
        $stmt->execute();
        
        
        // Llamar a la funci��n pagaNegro
        pagaNegro($pdo);
        
        // Llamar a la funci��n pagaPares
        pagaPares($pdo);
        
        // Llamar a la funci��n paga 19-36
        pagaPasa($pdo);
        
        // Llamar a la funci��n pagaSegunda
        pagaSegunda($pdo);
        
        // Llamar a la funci��n paga 2-12
        pagaDosDoce($pdo);
        

        // Devolver un mensaje indicando que la eliminaci��n ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 20*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

function pagarDiecinueve($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada n��mero entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 19
        ");
        $stmt->execute();
        
        // Llamar a la funci��n pagaRojo
        pagaRojo($pdo);
        
        // Llamar a la funci��n pagaImpares
        pagaImpares($pdo);
        
        // Llamar a la funci��n paga 19-36
        pagaPasa($pdo);
        
        // Llamar a la funci��n pagaPrimera
        pagaPrimera($pdo);
        
        // Llamar a la funci��n paga 2-12
        pagaDosDoce($pdo);

        // Devolver un mensaje indicando que la eliminaci��n ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 19*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

function pagarDieciocho($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada n��mero entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 18
        ");
        $stmt->execute();
        
        // Llamar a la funci��n pagaRojo
        pagaRojo($pdo);
        
        // Llamar a la funci��n pagaPares
        pagaPares($pdo);
        
        // Llamar a la funci��n paga 1-18
        pagaFalta($pdo);
        
        // Llamar a la funci��n pagaTercera
        pagaTercera($pdo);
        
        // Llamar a la funci��n paga 2-12
        pagaDosDoce($pdo);

        // Devolver un mensaje indicando que la eliminaci��n ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 18*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

function pagarDiecisiete($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada n��mero entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 17
        ");
        $stmt->execute();
        
        
        // Llamar a la funci��n pagaNegro
        pagaNegro($pdo);
        
        // Llamar a la funci��n pagaImpares
        pagaImpares($pdo);
        
        // Llamar a la funci��n paga 1-18
        pagaFalta($pdo);
        // Llamar a la fun
        
        // Llamar a la funci��n pagaSegunda
        pagaSegunda($pdo);
        
        // Llamar a la funci��n paga 2-12
        pagaDosDoce($pdo);
        
        // Devolver un mensaje indicando que la eliminaci��n ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 17*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

function pagarDieciseis($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada n��mero entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 16
        ");
        $stmt->execute();
        
        // Llamar a la funci��n pagaRojo
        pagaRojo($pdo);
        
        // Llamar a la funci��n pagaPares
        pagaPares($pdo);
        
        // Llamar a la funci��n paga 1-18
        pagaFalta($pdo);
        
        // Llamar a la funci��n pagaPrimera
        pagaPrimera($pdo);
        
        // Llamar a la funci��n paga 2-12
        pagaDosDoce($pdo);

        // Devolver un mensaje indicando que la eliminaci��n ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 16*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

function pagarQuince($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada n��mero entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 15
        ");
        $stmt->execute();
        
        
        // Llamar a la funci��n pagaNegro
        pagaNegro($pdo);
        
        // Llamar a la funci��n pagaImpares
        pagaImpares($pdo);
        
        // Llamar a la funci��n paga 1-18
        pagaFalta($pdo);
        
        // Llamar a la funci��n pagaTercera
        pagaTercera($pdo);
        
        // Llamar a la funci��n paga 2-12
        pagaDosDoce($pdo);

        // Devolver un mensaje indicando que la eliminaci��n ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 15*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

function pagarCatorce($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada n��mero entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 14
        ");
        $stmt->execute();
        
        // Llamar a la funci��n pagaRojo
        pagaRojo($pdo);
        
        // Llamar a la funci��n pagaPares
        pagaPares($pdo);
        
        // Llamar a la funci��n paga 1-18
        pagaFalta($pdo);
        
        // Llamar a la funci��n pagaSegunda
        pagaSegunda($pdo);
        
        // Llamar a la funci��n paga 2-12
        pagaDosDoce($pdo);

        // Devolver un mensaje indicando que la eliminaci��n ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 14*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

function pagarTrece($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada n��mero entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 13
        ");
        $stmt->execute();
        
        
        // Llamar a la funci��n pagaNegro
        pagaNegro($pdo);
        
        // Llamar a la funci��n pagaImpares
        pagaImpares($pdo);
        
        // Llamar a la funci��n paga 1-18
        pagaFalta($pdo);
        
        // Llamar a la funci��n pagaPrimera
        pagaPrimera($pdo);
        
        // Llamar a la funci��n paga 2-12
        pagaDosDoce($pdo);

        // Devolver un mensaje indicando que la eliminaci��n ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 13*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

function pagarDoce($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada n��mero entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 12
        ");
        $stmt->execute();
        
        // Llamar a la funci��n pagaRojo
        pagaRojo($pdo);
        
        // Llamar a la funci��n pagaPares
        pagaPares($pdo);
        
        // Llamar a la funci��n paga 1-18
        pagaFalta($pdo);
        
        // Llamar a la funci��n pagaTercera
        pagaTercera($pdo);
        
        // Llamar a la funci��n paga 1-12
        pagaUnoDoce($pdo);

        // Devolver un mensaje indicando que la eliminaci��n ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 12*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

function pagarOnce($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada n��mero entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 11
        ");
        $stmt->execute();
        
        
        // Llamar a la funci��n pagaNegro
        pagaNegro($pdo);
       
        // Llamar a la funci��n pagaImpares
        pagaImpares($pdo);
        
        // Llamar a la funci��n paga 1-18
        pagaFalta($pdo);
       
        // Llamar a la funci��n pagaSegunda
        pagaSegunda($pdo);
        
        // Llamar a la funci��n paga 1-12
        pagaUnoDoce($pdo);
        
        // Devolver un mensaje indicando que la eliminaci��n ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 11*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

function pagarDiez($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada n��mero entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 10
        ");
        $stmt->execute();
        
        
        // Llamar a la funci��n pagaNegro
        pagaNegro($pdo);
        
        // Llamar a la funci��n pagaPares
        pagaPares($pdo);
       
        // Llamar a la funci��n paga 1-18
        pagaFalta($pdo);
        
        // Llamar a la funci��n pagaPrimera
        pagaPrimera($pdo);
        
        // Llamar a la funci��n paga 1-12
        pagaUnoDoce($pdo);

        // Devolver un mensaje indicando que la eliminaci��n ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 10*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

function pagarNueve($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada n��mero entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 9
        ");
        $stmt->execute();
        
        // Llamar a la funci��n pagaRojo
        pagaRojo($pdo);
        
        // Llamar a la funci��n pagaImpares
        pagaImpares($pdo);
        
        // Llamar a la funci��n paga 1-18
        pagaFalta($pdo);
        
        // Llamar a la funci��n pagaTercera
        pagaTercera($pdo);
        
        // Llamar a la funci��n paga 1-12
        pagaUnoDoce($pdo);

        // Devolver un mensaje indicando que la eliminaci��n ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 9*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

function pagarOcho($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada n��mero entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 8
        ");
        $stmt->execute();
        
        
        // Llamar a la funci��n pagaNegro
        pagaNegro($pdo);
        
        // Llamar a la funci��n pagaPares
        pagaPares($pdo);
        
        // Llamar a la funci��n paga 1-18
        pagaFalta($pdo);
        
        // Llamar a la funci��n pagaSegunda
        pagaSegunda($pdo);
        
        // Llamar a la funci��n paga 1-12
        pagaUnoDoce($pdo);

        // Devolver un mensaje indicando que la eliminaci��n ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 8*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

function pagarSiete($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada n��mero entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 7
        ");
        $stmt->execute();
        
        // Llamar a la funci��n pagaRojo
        pagaRojo($pdo);
        
        // Llamar a la funci��n pagaImpares
        pagaImpares($pdo);
        
        // Llamar a la funci��n paga 1-18
        pagaFalta($pdo);
        
        // Llamar a la funci��n pagaPrimera
        pagaPrimera($pdo);
        
        // Llamar a la funci��n paga 1-12
        pagaUnoDoce($pdo);

        // Devolver un mensaje indicando que la eliminaci��n ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 7*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

function pagarSeis($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada n��mero entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 6
        ");
        $stmt->execute();
        
        
        // Llamar a la funci��n pagaNegro
        pagaNegro($pdo);
        
        // Llamar a la funci��n pagaPares
        pagaPares($pdo);
        
        // Llamar a la funci��n paga 1-18
        pagaFalta($pdo);
        
        // Llamar a la funci��n pagaTercera
        pagaTercera($pdo);
        
        // Llamar a la funci��n paga 1-12
        pagaUnoDoce($pdo);

        // Devolver un mensaje indicando que la eliminaci��n ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 6*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

function pagarCinco($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada n��mero entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 5
        ");
        $stmt->execute();
        
        // Llamar a la funci��n pagaRojo
        pagaRojo($pdo);
        
        // Llamar a la funci��n pagaPrimera
        pagaImpares($pdo);
        
        // Llamar a la funci��n paga 1-12
        pagaFalta($pdo);
        
        // Llamar a la funci��n pagaPrimera
        pagaSegunda($pdo);
        
        // Llamar a la funci��n paga 1-12
        pagaUnoDoce($pdo);
        
        // Devolver un mensaje indicando que la eliminaci��n ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 5*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

function pagarCuatro($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada n��mero entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 4
        ");
        $stmt->execute();
        
        
        // Llamar a la funci��n pagaRojo
        pagaNegro($pdo);
        
        // Llamar a la funci��n pagaPrimera
        pagaPares($pdo);
       
        
        // Llamar a la funci��n paga 1-12
        pagaFalta($pdo);
        
        // Llamar a la funci��n pagaPrimera
        pagaPrimera($pdo);
        
        
        // Llamar a la funci��n paga 1-12
        pagaUnoDoce($pdo);
       
        // Devolver un mensaje indicando que la eliminaci��n ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 4*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

function pagarTres($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada n��mero entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 3
        ");
        $stmt->execute();
        
        // Llamar a la funci��n pagaRojo
        pagaRojo($pdo);
        
        // Llamar a la funci��n pagaPrimera
        pagaImpares($pdo);
        
        // Llamar a la funci��n paga 1-12
        pagaFalta($pdo);
       
        // Llamar a la funci��n pagaPrimera
        pagaTercera($pdo);
        
        // Llamar a la funci��n paga 1-12
        pagaUnoDoce($pdo);
        

        // Devolver un mensaje indicando que la eliminaci��n ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 3*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

function pagarDos($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada n��mero entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 2
        ");
        $stmt->execute();
        
        // Llamar a la funci��n pagaRojo
        pagaNegro($pdo);
        // Llamar a la funci��n pagaPrimera
        pagaPares($pdo);
        // Llamar a la funci��n paga 1-12
        pagaFalta($pdo);
        // Llamar a la funci��n pagaPrimera
        pagaSegunda($pdo);
        // Llamar a la funci��n paga 1-12
        pagaUnoDoce($pdo);

        // Devolver un mensaje indicando que la eliminaci��n ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 2*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

function pagarUno($pdo) {
    try {
        // Actualizar saldo sumando 35 por cada n��mero entre 0 y 36
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN apuestas a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + 7000
            WHERE a.apuesta = 1
        ");
        $stmt->execute();
        
        // Llamar a la funci��n pagaRojo
        pagaRojo($pdo);
        // Llamar a la funci��n pagaPrimera
        pagaImpares($pdo);
        // Llamar a la funci��n paga 1-12
        pagaFalta($pdo);
        // Llamar a la funci��n pagaPrimera
        pagaPrimera($pdo);
        // Llamar a la funci��n paga 1-12
        pagaUnoDoce($pdo);

        // Devolver un mensaje indicando que la eliminaci��n ha sido exitosa
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Ya estan  *PAGADAS LAS APUESTAS POR EL 1*.'
            ]
        ];
    } catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

///////////////////////////////////

function pagaRojo($pdo) {
    try {
        
        // Actualizar saldo sumando 200 por cada apuesta v��lida
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN (
                SELECT user_id, SUM(200) AS incremento_saldo
                FROM apuestas
                WHERE  apuesta IN ('rojo')
                GROUP BY user_id
            ) a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + a.incremento_saldo
        ");
        $stmt->execute();
    }catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}
function pagaNegro($pdo) {
    try {
        
        // Actualizar saldo sumando 200 por cada apuesta v��lida
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN (
                SELECT user_id, SUM(200) AS incremento_saldo
                FROM apuestas
                WHERE  apuesta IN ('negro')
                GROUP BY user_id
            ) a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + a.incremento_saldo
        ");
        $stmt->execute();
    }catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}


function pagaImpares($pdo) {
    try {
        
        // Actualizar saldo sumando 200 por cada apuesta v��lida
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN (
                SELECT user_id, SUM(200) AS incremento_saldo
                FROM apuestas
                WHERE  apuesta IN ('impares')
                GROUP BY user_id
            ) a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + a.incremento_saldo
        ");
        $stmt->execute();
    }catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}
function pagaPares($pdo) {
    try {
        
        // Actualizar saldo sumando 200 por cada apuesta v��lida
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN (
                SELECT user_id, SUM(200) AS incremento_saldo
                FROM apuestas
                WHERE  apuesta IN ('pares')
                GROUP BY user_id
            ) a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + a.incremento_saldo
        ");
        $stmt->execute();
    }catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}


function pagaFalta($pdo) {
    try {
        
        // Actualizar saldo sumando 1 por cada apuesta v��lida
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN (
                SELECT user_id, SUM(200) AS incremento_saldo
                FROM apuestas
                WHERE  apuesta IN ('falta')
                GROUP BY user_id
            ) a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + a.incremento_saldo
        ");
        $stmt->execute();
    }catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}
function pagaPasa($pdo) {
    try {
        
        // Actualizar saldo sumando 200 por cada apuesta v��lida
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN (
                SELECT user_id, SUM(200) AS incremento_saldo
                FROM apuestas
                WHERE  apuesta IN ('pasa')
                GROUP BY user_id
            ) a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + a.incremento_saldo
        ");
        $stmt->execute();
    }catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}


function pagaPrimera($pdo) {
    try {
        
        // Actualizar saldo sumando 400 por cada apuesta de primera, segunda o tercera
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN (
                SELECT user_id, SUM(400) AS incremento_saldo
                FROM apuestas
                WHERE  apuesta IN ('primera')
                GROUP BY user_id
            ) a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + a.incremento_saldo
        ");
        $stmt->execute();
    }catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}
function pagaSegunda($pdo) {
    try {
        
        // Actualizar saldo sumando 400 por cada apuesta de primera, segunda o tercera
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN (
                SELECT user_id, SUM(400) AS incremento_saldo
                FROM apuestas
                WHERE  apuesta IN ('segunda')
                GROUP BY user_id
            ) a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + a.incremento_saldo
        ");
        $stmt->execute();
    }catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}
function pagaTercera($pdo) {
    try {
        
        // Actualizar saldo sumando 400 por cada apuesta de primera, segunda o tercera
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN (
                SELECT user_id, SUM(400) AS incremento_saldo
                FROM apuestas
                WHERE  apuesta IN ('tercera')
                GROUP BY user_id
            ) a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + a.incremento_saldo
        ");
        $stmt->execute();
    }catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}


function pagaUnoDoce($pdo) {
    try {
        
        // Actualizar saldo sumando 400 por cada apuesta v��lida
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN (
                SELECT user_id, SUM(400) AS incremento_saldo
                FROM apuestas
                WHERE apuesta IN ('1-12')
                GROUP BY user_id
            ) a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + a.incremento_saldo
        ");
        $stmt->execute();
    }catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}
function pagaDosDoce($pdo) {
    try {
        
        // Actualizar saldo sumando 400 por cada apuesta v��lida
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN (
                SELECT user_id, SUM(400) AS incremento_saldo
                FROM apuestas
                WHERE apuesta IN ('2-12')
                GROUP BY user_id
            ) a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + a.incremento_saldo
        ");
        $stmt->execute();
    }catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}
function pagaTresDoce($pdo) {
    try {
        
        // Actualizar saldo sumando 400 por cada apuesta v��lida
        $stmt = $pdo->prepare("
            UPDATE usuarios u
            JOIN (
                SELECT user_id, SUM(400) AS incremento_saldo
                FROM apuestas
                WHERE apuesta IN ('3-12')
                GROUP BY user_id
            ) a ON u.user_id = a.user_id
            SET u.saldo = u.saldo + a.incremento_saldo
        ");
        $stmt->execute();
    }catch (PDOException $e) {
        // Manejar excepciones PDO
        return [
            'message_type' => 'text',
            'message' => [
                'message' => 'Error al eliminar los registros de apuestas: ' . $e->getMessage()
            ]
        ];
    }
}

?>

