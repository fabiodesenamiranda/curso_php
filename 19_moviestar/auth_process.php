<?php   

    require_once("globals.php");
    require_once("db.php");
    require_once("models/User.php");
    require_once("models/Message.php");
    require_once("dao/UserDao.php");

    $message = new Message($BASE_URL);

    $userDao = new UserDao($conn, $BASE_URL);

// Resgata o tipo de formulario

    $type = filter_input(INPUT_POST, "type");

    // verifica tipo de formulario

    if($type === "register") {
        
        $name = filter_input(INPUT_POST, "name");
        $lastname = filter_input(INPUT_POST, "lastname");
        $email = filter_input(INPUT_POST, "email");
        $password = filter_input(INPUT_POST, "password");
        $confirmpassword = filter_input(INPUT_POST, "confirmpassword");

        // Verificação de dados minimos
        if($name && $lastname && $email && $password ) {

        //verificar se as senhas batem
        if($password === $confirmpassword) {

        // Verifficar se o e-mail já está cadastrado no sistema

        if($userDao->findByEmail($email) ===  false) {
            echo "nwnhum usuário foi encontrado";
        } else {

        }
            // Enviar uma msg de erro, usuario já existe
            $message->setMessage("Usuário já cadastrado, tente outro e-mail.", "error", "back");


        } else {

            // Enviar uma msg de erro de senhas nao batem
            $message->setMessage("As senhas não são iguais.", "error", "back");


            }

        } else {
            // Enviar uma msg de erro de dados faltantes
            $message->setMessage("Por favor preencha todos os campos.", "error", "back");
        }

    } else if($type === "login") {

    }
