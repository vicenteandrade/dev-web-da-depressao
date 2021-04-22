<?php

$tipo = 'foto';

switch($tipo) {
    case 'foto':
        echo 'Exibindo FOTO';
        break;
    case 'video':
        echo 'Exibindo VÍDEO';
        break;
    case 'texto':
        echo 'Exibindo TEXTO';
        break;
}