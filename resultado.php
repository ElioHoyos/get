<?php
if(isset($_GET['opcionSelect']) && isset($_GET['metodoPago'])){
    $opcionSelect = $_GET['opcionSelect'];
    $metodoPago = $_GET['metodoPago'];
    
    switch ($opcionSelect) {
        case 'completo':
            echo "Usted es trabajor de jornada completa";
            break;
        case 'parcial':
            echo "Usted es trabajor de jornada parcial";
            break;
        case 'nombrado':
            echo "Usted es trabajador nombrado";
            break;
        
        default:
            echo "Opción no válida del select.<br>";
            break;
    }

    switch ($metodoPago) {
        case 'tarjeta':
            echo "Pago con tarjeta";
            break;
        case 'efectivo':
            echo "Pago en efectivo";
            break;
        case 'aplicativo':
            echo "Pago con aplicativo";
            break;
        
        default:
            echo "Opción no válida";
            break;
    }

}else{
    echo "No se ha podido enviar información";
}
?>