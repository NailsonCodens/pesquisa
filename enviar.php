<?php
require_once('email/class.phpmailer.php');
require_once('email/class.smtp.php');

// incluir a funcionalidade do recaptcha
require_once "recaptchalib.php";

// definir a chave secreta
$secret = "6LeKN1kUAAAAAN05YqLrx6UJOoXHtFozxHKD66gf";

// verificar a chave secreta
$response = null;
$reCaptcha = new ReCaptcha($secret);

if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse($_SERVER["REMOTE_ADDR"], $_POST["g-recaptcha-response"]);
}

// deu tudo certo?
if ($response != null && $response->success) {
	
}else{
	 $nome = $_POST['nome'];
	 $email = $_POST['email'];
	 $oquevende = $_POST['oquevende'];
	 $qualmarca = $_POST['qualmarca'];
	 $controledevendas = $_POST['controledevendas'];
	 $algumapp = $_POST['algumapp'];
	 $quantoinvestir = $_POST['quantoinvestir'];

	if(!$nome || !$email || !$oquevende || !$qualmarca || !$controledevendas || !$algumapp || !$quantoinvestir){
			echo"<script>alert('Verifique se não está faltando nenhum campo e preencha novamente!'); top.location.href='../index.php'</script>";  
	}else{

		$mensagem = 'Recebemos mais uma pesquisa
        Nome: <b>'.$nome.'</b><br>;
        Email: <b>'.$email.'</b><br>;
        O que vende?: <b>'.$oquevende.'</b><br>;
        Qual marca?: <b>'.$qualmarca.'</b><br>;
        Como controlam as vendas?: <b>'.$controledevendas.'</b><br>;
        Quais apps ou sistemas?: <b>'.$algumapp.'</b><br>;
        Quanto investiria?: <b>'.$quantoinvestir.'</b><br>;
		';

			$mailer = new PHPMailer();
		    $mailer->IsHTML(true);
		    $mailer->CharSet = "UTF-8";    
		    $mailer->IsSMTP();
		    $mailer->SMTPDebug = 1;
		    $mailer->Port = 587; //Indica a porta de conexão para a saída de e-mails. Utilize obrigatoriamente a porta 587.
		     
		    $mailer->Host = 'mail.qosit.com.br'; //Onde em 'servidor_de_saida' deve ser alterado por um dos hosts abaixo:
		    //$mailer->Host = 'localhost';

		    //Para cPanel: 'mail.dominio.com.br';
		    //Para Plesk 11 / 11.5: 'smtp.dominio.com.br';
		     
		    //Descomente a linha abaixo caso revenda seja 'Plesk 11.5 Linux'
		    $mailer->SMTPSecure = 'tls';
		     
		    $from = 'naoresponder@codens.com.br';

		    $mailer->SMTPAuth = true; //Define se haverá ou não autenticação no SMTP
		   $mailer->Username = 'naoresponder@codens.com.br'; //Informe o e-mai o completo
		    $mailer->Password = 'C09D01#16'; //Senha da caixa postal
		    $mailer->FromName = $nome;  //Nome que será exibido para o destinatário
		    $mailer->From = 'naoresponder@codens.com.br'; //Obrigatório ser a mesma caixa postal indicada em "username"

		    $mailer->AddAddress('nailson.ivs@codens.com.br');
		    $mailer->AddReplyTo('nailson.ivs@codens.com.br');
		    //$mailer->AddAddress('naoresponder@codens.com.br');
		    //$mailer->AddReplyTo($email);
		    //$mailer->SetFrom($email, $name);
		    //$mailer->AddAddress('contato@megacleanservicos.com.br'); //Destinatários
		    
		    $mailer->Subject = 'Pesquisa App Revendi';
		    $mailer->Body = $mensagem;

		    $enviado = $mailer->Send();

		    if ($enviado) {
		      echo"<script>top.location.href='success.php'</script>";
		     
		    } else {

		      echo"<script>top.location.href='index.php'</script>";
		      
		      echo "<script> javascript: window.history. go( -1 );</script>";
		    }

	}
}