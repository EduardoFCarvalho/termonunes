<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$varnome    = $_POST["name"];
$varemail    = $_POST["email"];
$vartel    = $_POST["telefone"];
$varmessage        = $_POST["message"];
$varzoiao    = $_POST["zoiao"];

if ($varzoiao != "") {
    # code...
    echo '<img src="https://www.bloominprojetos.com.br/roberto/you_shall_not_pass.jpg" style=" display:block; margin:0 auto; " alt="you shall not pass!!!" title="you shall not pass!!!">';
    die();
}

if (isset($_POST['g-recaptcha-response'])) {
    $captcha_data = $_POST['g-recaptcha-response'];
}
if (!$captcha_data) {
    echo "Por favor, confirme o captcha.";
    exit;
}
$resposta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=your_site_key&response=" . $captcha_data . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
if ($resposta . success) {

    require("inc/class.phpmailer.php");
    $mail = new PHPMailer();
    $mail->IsSMTP(); // Define que a mensagem será SMTP
    $mailer->SMTPDebug = 1;
    $mail->Host = "mail.acovalentesucatas.com.br"; // Endereço do servidor SMTP
    $mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
    $mail->Username = 'site@acovalentesucatas.com.br'; // Usuário do servidor SMTP
    $mail->Port = "587";
    $mail->Password = '9C0]So+!yfOf'; // Senha do servidor SMTP
    $mail->From = 'site@acovalentesucatas.com.br'; // Seu e-mail
    $mail->FromName = '=?UTF-8?B?' . base64_encode($varnome) . '?=';
    $mail->AddReplyTo($varemail);

    $mail->AddAddress("contato@acovalentesucatas.com.br");
    // $mail->AddAddress("suporte@bloomin.com.br");


    //$mail->AddCC('teste@bloomin.com.br'); // Copia
    $mail->AddBCC('formularios@bloomin.com.br', 'Termonunes'); // Cópia Oculta

    // Define os dados técnicos da Mensagem
    $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
    $mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional)
    $mail->Subject  = '=?UTF-8?B?' . base64_encode("Contato - Termonunes") . '?=';
    $mail->Body = "<br><strong>Nome: </strong>" . $varnome;
    $mail->Body .= "<br><strong>E-mail: </strong>" . $varemail;
    $mail->Body .= "<br><strong>Telefone: </strong>" . $vartel;
    $mail->Body .= "<br><strong>Mensagem: </strong>" . $varmessage;


    $mail->AltBody = "Este é o corpo da mensagem de teste, em Texto Plano! \r\n";
    //$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo
    // Envia o e-mail
    $enviado = $mail->Send();
    // Limpa os destinatários e os anexos
    $mail->ClearAllRecipients();
    $mail->ClearAttachments();
    // Exibe uma mensagem de resultados

    if ($enviado) {
        echo ("<script>alert('Mensagem Enviada!');</script>");
        echo ("<script>window.location = 'contato'</script>");
    } else {
        echo "Não foi possível enviar o e-mail.<br /><br />";

        echo "<b>Informações do erro:</b> <br />" . $mail->ErrorInfo;
    }
}

?>