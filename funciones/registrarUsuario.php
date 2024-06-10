<?php

function registrarUsuario($pdo, $from) {
    // Insertar un nuevo registro si el usuario no existe
    $stmt = $pdo->prepare("INSERT INTO sesiones (user_id, status, nombre, perfil) VALUES (?, 'registrar', 'Sin Nombre', 'invitado' )");
    $stmt->execute([$from]);

    // Obtener elementos de menú personalizado
    $stmt = $pdo->query("SELECT * FROM mensajeNuevo ORDER BY RAND() LIMIT 1");
        $menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($menuItems as $item) {
            $menuMessage .= "{$item['mensaje']}
            ";
        }

    return $menuMessage;
}

?>