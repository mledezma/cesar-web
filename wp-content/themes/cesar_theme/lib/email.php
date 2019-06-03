<?php

function jsforwp_send_email( $data ) {

  check_ajax_referer( 'jsforwp_nonce' );

  $mail = new PHPMailer(true);

  try {
    if (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))) {
      $emailTo = "";
    } else {
      $emailTo = "";
    }

    //TODO Cambiar
    $mail->isSMTP();
    $mail->Host = '';
    $mail->SMTPAuth = true;
    $mail->Username = '';
    $mail->Password = '';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;


    //TODO Recipients
    $mail->setFrom('', '');
    $mail->addAddress($emailTo, '');

    // Content
    $mail->isHTML(true);// Set email format to HTML
    $mail->Subject = '';

    // Set GLOBALS htmlEmail
    // get_template_part('/email/email');
    $mail->Body = $GLOBALS['htmlEmail'];
    $mail->AltBody = '';


    $resultEmail = $mail->send();
    // JSON Encode Response
    $json = json_encode($resultEmail);

    if($json) {
      $response = array(
        'status' => 200,
        'message' => 'Correo enviado con exito',
        'data' => json_encode($resultEmail)
      );
    }else{
      $response = array(
        'status' => 500,
        'code' => $json->code,
        'message' => 'Error enviando los datos',
        'data' => json_encode($resultEmail)
      );
    }

    $response = json_encode( $response );
    echo $response;
    die();

  } catch (Exception $e) {
    $response = array(
      'status' => 500,
      'message' => 'No se pudo enviar el correo. Error: '. $mail->ErrorInfo,
      'data' => json_encode($resultEmail),
      'e' => json_encode($e),
    );

    $response = json_encode( $response );
    echo $response;
    die();
  }

}
add_action( 'wp_ajax_jsforwp_send_email', 'jsforwp_send_email' );

?>
