<?php
define('URL_BASE', 'http://localhost/modelos/filemenager-standalone/');
/**
 * TODOS REFERENTES A PASTAS DENTRO DO ASSETS
 * UPLOADDIR -> CAMINHO ABSOLUTO DA PASTA IMAGENS
 * 
 */
define('FILEMANAGER', [
    'UPLOAD_DIR' => '/modelos/filemenager-standalone/assets/img/images/',
    'CURRENT_PATH' => '../../../../img/images/',
    'THUMBS_BASE_PATH' => '../../../../img/thumbs/',
    'THUMBS_UPLOAD_DIR' => '../../../../img/thumbs/',
    'DIALOG' => URL_BASE . 'assets/js/libs/responsive_filemanager/filemanager/dialog.php?relative_url=1&type=0&field_id=image-input'
]);
