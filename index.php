<?php

include_once 'painel/bd/conexao.php';
include_once 'painel/helper/funcoes.php';




$pg = isset($_GET['pg']);


if ($pg) {

//PÁGINA INDEX DO SITE

    switch ($_GET['pg']) {

//        Responsável Laura - paginacards
        case 'inicial':

            include_once 'site/paginas/includes/header.php';
            include_once 'site/paginas/includes/menus.php';
            include_once 'site/paginas/pagina-cards.php';
            include_once 'site/paginas/includes/footer.php';

            break;

        case 'pagina-artigos':
            $id = $_GET ['id'];

            $resultDados = new conexao();
            $dados = $resultDados->selecionaDados('SELECT *  FROM artigos WHERE id = ' . $id);
            include_once 'site/paginas/includes/header.php';
            include_once 'site/paginas/includes/menus.php';
            include_once 'site/paginas/pagina-artigos.php';
            include_once 'site/paginas/includes/footer.php';

            break;


//        Responsável Juliana
        case 'contato':
            include_once 'site/paginas/includes/header.php';
            include_once 'site/paginas/includes/menus.php';
            include_once 'site/paginas/contato.php';
            include_once 'site/paginas/includes/footer.php';

            break;

//        Responsável Manu
        case 'sobre':
            include_once 'site/paginas/includes/header.php';
            include_once 'site/paginas/includes/menus.php';
            include_once 'site/paginas/sobre.php';
            include_once 'site/paginas/includes/footer.php';

            break;

        case 'faca-voce-mesmo':
            include_once 'site/paginas/includes/header.php';
            include_once 'site/paginas/includes/menus.php';
            include_once 'site/paginas/faca-voce-mesmo.php';
            include_once 'site/paginas/includes/footer.php';

            break;

     case 'login':
            include_once 'site/paginas/includes/header.php';
            include_once 'site/paginas/includes/menus.php';
            include_once 'painel/paginas/acesso/login.php';
            include_once 'site/paginas/includes/footer.php';
            break;        

//        Responsavel Hermes
        case 'pesquisar':

            //Nome da pesquisa do usuario 
            $consulta = $_POST["consulta"];

            //Instanciando uma classe, criando o objeto para consulta no banco de dados 
            $resultDados = new conexao();

            //Parametros da consulta
//            $parametros = array(
//                ':consulta' => $consulta
//            );
            //Carregando o resultado em uma variável
            $dados = $resultDados->selecionaDados("SELECT * FROM facavocemesmo"
                    . " WHERE "
                    . "mensagem LIKE '%$consulta%' or sobrenome LIKE '%$consulta%'");

            include_once 'site/paginas/includes/header.php';
            include_once 'site/paginas/includes/menus.php';

            include_once 'site/paginas/result-pesquisar.php';
            include_once 'site/paginas/includes/footer.php';
            break;
        
        
        
        
// FIM PÁGINA INDEX DO SITE
        default:

            include_once 'site/paginas/includes/header.php';
            include_once 'site/paginas/includes/menus.php';
            include_once 'site/paginas/pagina-cards.php';
            include_once 'site/paginas/includes/footer.php';
            break;
    }
} else {
//não existe   
    include_once 'site/paginas/includes/header.php';
    include_once 'site/paginas/includes/menus.php';
    include_once 'site/paginas/erro.php';
    include_once 'site/paginas/includes/footer.php';
}





        
        
        
        
        
        
