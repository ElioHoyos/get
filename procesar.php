<?php
if(isset($_GET['opcion'])){
    $opcion = $_GET['opcion'];
    switch ($opcion) {
        case 'peru':
            echo "Usted es Peruano";
            break;
        case 'brasil':
            echo "Usted es brasilero";
            break;
        case 'colombia':
            echo "Usted es colombiano";
            break;
        case 'Ecuador':
            echo "Usted es ecuatoriano";
            break;
        case 'chile':
            echo "Usted es chileno";
            break;
        default:
            echo "Opción no valida";
            break;
    }
}else{
    echo "No se ha enviado datos para mostrar";
}
?>