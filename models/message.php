<?php


class Message {


   

   public function setMessage($msg, $redirect = 'index.php'){
    $_SESSION["msg"] = $msg;
    
    if($redirect != "back") {
        header("Location:" . $redirect);
      } else {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
      }

    }


    public function getMessage(){
        if(!empty($_SESSION["msg"])) {
       return  ['msg'=> $_SESSION["msg"]];
        }

    }

    public function clearMessage(){

        $_SESSION['msg'] ="";


    }


}