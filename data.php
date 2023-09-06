<?php
  //Variáveis
  $nome = $_POST['nome'];
  $telefone = $_POST ['telefone'];
  $email = $_POST['email'];
  $endereco = $_POST['endereco'];
  $orcamento = $_POST['orcamento'];
  $data_envio = date('d/m/Y');
  $hora_envio = date('H:i:s');

  //Compo E-mail
  $arquivo = "
    <html>
      <p><b>Nome: </b>$nome</p>
      <p><b>telefone: </b>$telefone</p>
      <p><b>E-mail: </b>$email</p>
      <p><b>Endereço: </b>$endereco</p>
      <p><b>Orçamento: </b>$orcamento</p>
      <p>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></p>
    </html>
  ";
  
  //Emails para quem será enviado o formulário
  $destino = "vidrocentertest@gmail.com";
  $assunto = "Contato pelo Site";

  //Este sempre deverá existir para garantir a exibição correta dos caracteres
  $headers  = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $nome <$email>";

  //Enviar
  mail($destino, $assunto, $arquivo, $headers);
  
  echo "<meta http-equiv='refresh' content='10;URL=../index.html'>";
?>