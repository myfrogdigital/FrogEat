<?php
    //CAPTURA A URL
    $url = (isset($_GET['page'])) ? $_GET['page'] : 'home';
    //SEPARA AS BARRAS
	$local = array_filter(explode('/', $url));
    //CAMINHO E EXTENSÃO DOS ARQUIVOS
    $views = '_main/views/';
    $ext = '.php';
    //SE ENCONTRAR O ARQUIVO NO DIRETORIO
    if(file_exists($views.$local[0].$ext)) {
        include ($views.$local[0].$ext);
        //VERIFICA SE O INDICE 0 É UM DIRETORIO
    }elseif (is_dir($views.'/'.$local[0])) {
        //VERIFICA SE O INDICE 1 FOI SETADO E INCLUE O ARQUIVO
        if(isset($local[1])) {
            include ($views.$local[0].'/'.$local[1].$ext);
            //CASO NÃO FOR ENTRADO O ARQUIVO DO INDICE 1
        }else {
            include ($views.'home'.$ext);
        }
        //SE O INDICE 0 NÃO É UM ARQUIVO NEM UM DIRETORIO
    }else {
        include ($views.'home'.$ext);
    }
?>