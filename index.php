<?php

include_once 'painel/bd/conexao.php';
include_once 'painel/helper/funcoes.php';



$pg = isset($_GET['pg']);


if ($pg) {


    switch ($_GET['pg']) {

        case 'inicial':
            //Página inicial do Painel Adm           
            if (verificarLogin()) {
                
                
                include_once './site/paginas/inicial.php';
                
            } else {
                echo 'página não encontrada';
            }
            break;





        case 'contato':


            include_once './site/paginas/contato.php';

            break;

        case 'sobre':


            include_once './site/paginas/sobre.php';

            break;

        case 'paginacards':


            include_once './painel/paginacards.php';

            break;

        case 'paginas':


            include_once './painel/paginas.php';

            break;

        case 'login':


            include_once './painel/paginas/acesso/login.php';

            break;



        default:


            include_once './site/paginas/inicial.php';

            break;
    }
} else {
//não existe   
    include_once './site/paginas/inicial.php';
}



        
        
        
        
        
        