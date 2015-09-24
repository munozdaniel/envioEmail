<?php

class IndexController extends ControllerBase
{
    public function indexAction()
    {

    }
    public function sendAction()
    {
        $this->mail->From  = "munozda87@hotmail.com";
        $this->mail->FromName   =  "munozda87@hotmail.com";

        $this->mail->addReplyTo("munozda87@hotmail.com", "user");

        $this->mail->Subject = "email test !";

        $this->mail->Body    = "success!";
        $this->mail->send();
        $this->view->pick('index/index');

    }

}

