<?php

class Message {

    // A url servirá para fazer os redirecionamentos da Message
    private $url;

    public function __construct($url) {

        $this->url = $url;

    }

    // Inserção de mensagem
    // $msg = a mensagem
    // $type = o tipo da mensagem
    // $redirect = se vai redirecionar para aluma página
    public function setMessage($msg, $type, $redirect = "index.php") {

        $_SESSION['msg'] = $msg;
        $_SESSION['type'] = $type;

        // back = voltar para para a última página
        if ($redirect != 'back') {

            // Será redirecionado para o index
            header("Location: $this->url()". $redirect);

        } else {

            // HTTP_REFERER será redirecionado para a última página acessada
            header("Location: ". $_SERVER["HTTP_REFERER"]);

        }
    }

    // Pegar mensagem
    public function getMessage() {


    }

    // Limpar a mensagem no sistema
    public function clearMessage() {


    }
}