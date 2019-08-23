<?php
//é necessario fazer a conexão com o banco de dados 
require_once "configDB.php";
  

function verificar_entrada($entrada){
    $saida = trim($entrada);// Remove espaços 
    $saida = stripslashes($saida);
    $saida = htmlspecialchars($saida);
    return $saida;
}

if(isset($_POST['action']) && $_POST['action'] == 'cadastro'){
     
   $nomeCompleto = verificar_entrada($_POST['nomeCompleto']);
   $nomeUsuario = verificar_entrada($_POST['nomeUsuário']);
   $emailUsuario = verificar_entrada($_POST['emailUsuário']);
   $senhaUsuario = verificar_entrada($_POST['senhaUsuário']);
   $senhaConfirma = verificar_entrada($_POST['senhaConfirma']);
   $concordar = $_POST['concordar'];
   $dataCriacao = date("y-m-d H:i:s");
   //Hash da senha / Codificação de senha em 40 caracteres
   $senha = sha1($senhaUsuario);
   $senhaC = sha1($senhaConfirma);



   echo"<h5>nome Completo: $nomeCompleto</h5>";

   echo"<h5>nome Usuário: $nomeUsuario</h5>";

    echo"<h5>E-mail Usuário: $emailUsuario</h5>";

   echo "<h5>Senha Usuário: $senhaUsuario</h5>";

   echo "<h5>Senha Confirma: $SenhaConfirma</h5>";

   echo "<h5>Concordar: $concordar</h5>";

   echo "<h5>Data de Criação: $dataCriacao</h5>";

   if($senha != $senhaC){
       echo "<h1>as senhas não conferem</h1>";
       exit();

   }else{
       echo "<h5> senha codificada: $senha</h5>";
   }
}else{
    echo "<h1 style='color:red'>Esta Pagina Não pode ser acessada diretamente</h1>";
}