<?php

// Definir variables PDO
$pdo = null;
$pdo2 = null;

try {
    // Incluir archivos de funciones
    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('funciones'));
    $file_list_functions = [];
    foreach ($iterator as $file) {
        if ($file->isFile() && $file->getExtension() === 'php') {
            $file_list_functions[] = $file->getPathname();
        }
    }
    foreach ($file_list_functions as $file) {
        include $file;
    }

    // Analizar datos de entrada
    $data = json_decode(file_get_contents('php://input'), true);
    file_put_contents('logwebhook.txt', '[' . date('Y-m-d H:i:s') . "]\n" . json_encode($data) . "\n\n", FILE_APPEND);

    $message = $data['message'] ?? null;
    $name = $data['name'] ?? null;
    $from = $data['from'] ?? null;
    $isGroup = $data['isGroup'] ?? null;
    $isMe = $data['isMe'] ?? null;
    $responseData = $data['responseData'] ?? null;

    // Verificar si el mensaje proviene de un grupo
    if ($isGroup) {
        die();
    }

    // Consultar el estado del pedido para el usuario dado
    $stmt = $pdo->prepare("SELECT * FROM sesiones WHERE user_id = ?");
    $stmt->execute([$from]);
    $pedido = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // Procesamiento de mensajes
    
    switch (true) {
        case ($isGroup):
            die();
            break;
                case (strtolower($message) == 'salir'):
                    $responseData = borrar($pdo, $from);
                    break;
                case (strtolower($message) == 'new'):
                    $responseData = nuevo($pdo, $from);
                    break;
                    
                case (strtolower($message) == 'cerrar'):
                    $responseData = cerrarJuego($pdo, $from);
                    break;
                case (strtolower($message) == 'abrir'):
                    $responseData = abrirJuego($pdo, $from);
                    break;
                    
                case (strtolower($message) == 'ver'):
                    $responseData = ver($pdo, $from);
                    break;
                    
                    
                case ($pedido && $pedido['status'] == 'registrar' && ($pedido['nombre'] == 'Sin Nombre')):
                    $responseData = manejarEstadoRegistrar($pdo, $from, $message);
                    break;
                case (strtolower($message) == 'x' && $pedido['status'] == 'apostar'):
                    $responseData = terminar($pdo, $from);
                    break;
                case ($pedido && $pedido['status'] == 'apostar' && ($pedido['perfil'] == 'registrado')):
                    $responseData = apostar($pdo, $from, $message);
                    break;
                
                case (strtolower($message) == 'a'):
                    $responseData = jugar($pdo, $from);
                    break;
                case (strtolower($message) == 'b'):
                    $responseData = apuestas($pdo, $from);
                    break;
                    
                case (strtolower($message) == 'pay0'):
                    $responseData = pagarCero($pdo, $from);
                    break;
                case (strtolower($message) == 'pay1'):
                    $responseData = pagarUno($pdo, $from);
                    break;
                case (strtolower($message) == 'pay2'):
                    $responseData = pagarDos($pdo, $from);
                    break;
                case (strtolower($message) == 'pay3'):
                    $responseData = pagarTres($pdo, $from);
                    break;
                case (strtolower($message) == 'pay4'):
                    $responseData = pagarCuatro($pdo, $from);
                    break;
                case (strtolower($message) == 'pay5'):
                    $responseData = pagarCinco($pdo, $from);
                    break;
                case (strtolower($message) == 'pay6'):
                    $responseData = pagarSeis($pdo, $from);
                    break;
                case (strtolower($message) == 'pay7'):
                    $responseData = pagarSiete($pdo, $from);
                    break;
                case (strtolower($message) == 'pay8'):
                    $responseData = pagarOcho($pdo, $from);
                    break;
                case (strtolower($message) == 'pay9'):
                    $responseData = pagarNueve($pdo, $from);
                    break;
                case (strtolower($message) == 'pay10'):
                    $responseData = pagarDiez($pdo, $from);
                    break;
                case (strtolower($message) == 'pay11'):
                    $responseData = pagarOnce($pdo, $from);
                    break;
                case (strtolower($message) == 'pay12'):
                    $responseData = pagarDoce($pdo, $from);
                    break;
                case (strtolower($message) == 'pay13'):
                    $responseData = pagarTrece($pdo, $from);
                    break;
                case (strtolower($message) == 'pay14'):
                    $responseData = pagarCatorce($pdo, $from);
                    break;
                case (strtolower($message) == 'pay15'):
                    $responseData = pagarQuince($pdo, $from);
                    break;
                case (strtolower($message) == 'pay16'):
                    $responseData = pagarDieciseis($pdo, $from);
                    break;
                case (strtolower($message) == 'pay17'):
                    $responseData = pagarDiecisiete($pdo, $from);
                    break;
                case (strtolower($message) == 'pay18'):
                    $responseData = pagarDieciocho($pdo, $from);
                    break;
                case (strtolower($message) == 'pay19'):
                    $responseData = pagarDiecinueve($pdo, $from);
                    break;
                case (strtolower($message) == 'pay20'):
                    $responseData = pagarVeinte($pdo, $from);
                    break;
                case (strtolower($message) == 'pay21'):
                    $responseData = pagarVeintiuno($pdo, $from);
                    break;
                case (strtolower($message) == 'pay22'):
                    $responseData = pagarVeintidos($pdo, $from);
                    break;
                case (strtolower($message) == 'pay23'):
                    $responseData = pagarVeintitres($pdo, $from);
                    break;
                case (strtolower($message) == 'pay24'):
                    $responseData = pagarVeinticuatro($pdo, $from);
                    break;
                case (strtolower($message) == 'pay25'):
                    $responseData = pagarVeinticinco($pdo, $from);
                    break;
                case (strtolower($message) == 'pay26'):
                    $responseData = pagarVeintiseis($pdo, $from);
                    break;
                case (strtolower($message) == 'pay27'):
                    $responseData = pagarVeintisiete($pdo, $from);
                    break;
                case (strtolower($message) == 'pay28'):
                    $responseData = pagarVeintiocho($pdo, $from);
                    break;
                case (strtolower($message) == 'pay29'):
                    $responseData = pagarVeintinueve($pdo, $from);
                    break;
                case (strtolower($message) == 'pay30'):
                    $responseData = pagarTreinta($pdo, $from);
                    break;
                case (strtolower($message) == 'pay31'):
                    $responseData = pagarTreintaUno($pdo, $from);
                    break;
                case (strtolower($message) == 'pay32'):
                    $responseData = pagarTreintaDos($pdo, $from);
                    break;
                case (strtolower($message) == 'pay33'):
                    $responseData = pagarTreintaTres($pdo, $from);
                    break;
                case (strtolower($message) == 'pay34'):
                    $responseData = pagarTreintaCuatro($pdo, $from);
                    break;
                case (strtolower($message) == 'pay35'):
                    $responseData = pagarTreintaCinco($pdo, $from);
                    break;
                case (strtolower($message) == 'pay36'):
                    $responseData = pagarTreintaSeis($pdo, $from);
                    break;
                case (strtolower($message) == 'recargar'):
                    $responseData = recargar($pdo, $from);
                    break;
                
                default:
                    $responseData = porDefecto($pdo, $from);
                    break;
    }
    
    // Respuesta al cliente
    print json_encode([
        'status' => 'success',
        'data' => json_encode($responseData)
    ]);
} catch (PDOException $e) {
    // Manejo de errores de base de datos
    print json_encode([
        'status' => 'error',
        'message' => 'Error en la base de datos: ' . $e->getMessage()
    ]);
} catch (Exception $e) {
    // Manejo de errores generales
    print json_encode([
        'status' => 'error',
        'message' => 'Error: ' . $e->getMessage()
    ]);
} finally {
    // Cierre de conexiones PDO
    if ($pdo) {
        $pdo = null;
    }
    if ($pdo2) {
        $pdo2 = null;
    }
}

?>
