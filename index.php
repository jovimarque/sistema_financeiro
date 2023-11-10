<?php

require 'template/header.php';
require 'models/message.php';

$message = new Message();
$flassMessage = $message->getMessage();

if(!empty($flassMessage["msg"])){
    $message->clearMessage();
}

?>

<div id="corpo">
    <form action="processo.php" method="POST">
    
    <label for="Login"> Painel</label>
    
    <input type="text" name="login" placeholder="Login">
    <input type="text" name="senha" placeholder="Senha">
    <button type="submit" name="entrar" >Entrar</button>

    </form>

<?php if(!empty($flassMessage['msg'])):?>

<p><?= $flassMessage["msg"]?></p>

<?php endif; ?>

</div>
 


<?php

require 'template/footer.php';

?>