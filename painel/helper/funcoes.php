<?php

function verificarLogin() {
    //No futuro as informações são 
    //trazidos do banco de dados

    $usuario = 'pw_manha';
    $senha = 'pw_manha';
    
    //Verificar se as informações passados 
    //pelo usuário é igual a que estão no banco.

    if ($_POST) {
        if ($_POST['usuario'] == $usuario &&
                $_POST['senha'] == $senha) {
            //Cria dados na SESSION
            $_SESSION['usuario'] = $usuario;
            return TRUE;
        } else {
            return FALSE;
        }
    } else {
        if (isset($_SESSION['usuario'])) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
