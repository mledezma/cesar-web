<?php

$data = $_POST['fields'];
$stringd = '';


try {

  foreach ($data as $obj) {
    $stringd .= "<li style='font-size: 14px; line-height:22px; margin-bottom:5px;'><b style='text-transform: capitalize;'>". $obj['name'].":". $obj['value']." </b></li>";
  }


$GLOBALS['htmlEmail'] =

"<!DOCTYPE strict>
  <html xmlns='http://www.w3.org/1999/xhtml'>
  <head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
      <title> Juntas de Educación y Juntas Administrativas - MEP </title>
      <style type='text/css'>
        .main{
            background-color: #f6f6f6;
        }
        /* Client-specific Styles */
        #outlook a {padding:0;} /* Force Outlook to provide a 'view in browser' menu link. */
        body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;}
        /* Prevent Webkit and Windows Mobile platforms from changing default font sizes, while not breaking desktop design. */
        .ExternalClass {width:100%;} /* Force Hotmail to display emails at full width */
        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} /* Force Hotmail to display normal line spacing.*/
        #backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
        img {outline:none; text-decoration:none;border:none; -ms-interpolation-mode: bicubic;}
        a img {border:none;}
        .image_fix {display:block;}
        /*p {margin: 0px 0px !important;}*/
        table td {border-collapse: collapse;}
        table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }
        a {color: #0a8cce;text-decoration: none;text-decoration:none!important;}
        /*STYLES*/
        table[class=full] { width: 100%; clear: both; }
        /*IPAD STYLES*/
        @media only screen and (max-width: 640px) {
            a[href^='tel'], a[href^='sms'] {
                text-decoration: none;
                color: #0a8cce; /* or whatever your want */
                pointer-events: none;
                cursor: default;
            }
            .mobile_link a[href^='tel'], .mobile_link a[href^='sms'] {
                text-decoration: default;
                color: #0a8cce !important;
                pointer-events: auto;
                cursor: default;
            }
            table[class=devicewidth] {width: 440px!important;text-align:center!important;}
            table[class=devicewidthinner] {width: 420px!important;text-align:center!important;}
            img[class=banner] {width: 440px!important;height:220px!important;}
            img[class=colimg2] {width: 440px!important;height:220px!important;}
        }
        /*IPHONE STYLES*/
        @media only screen and (max-width: 480px) {
            a[href^='tel'], a[href^='sms'] {
                text-decoration: none;
                color: #0a8cce; /* or whatever your want */
                pointer-events: none;
                cursor: default;
            }
            .mobile_link a[href^='tel'], .mobile_link a[href^='sms'] {
                text-decoration: default;
                color: #0a8cce !important;
                pointer-events: auto;
                cursor: default;
            }
            table[class=devicewidth] {width: 280px!important;text-align:center!important;}
            table[class=devicewidthinner] {width: 260px!important;text-align:center!important;}
            img[class=banner] {width: 280px!important;height:140px!important;}
            img[class=colimg2] {width: 280px!important;height:140px!important;}
        }
      </style>
  </head>
  <body class='main'>
    <table cellpadding='0' cellspacing='0' border='0' align='center' style='background-color:#f6f6f6', width='100%'>
        <tr>
            <td width='100%'>
                <table class='devicewidth' width='600' cellpadding='0' cellspacing='0' border='0' align='center' style='border-collapse:collapse;border-radius:0.5rem;margin-top:30px;'>
                    <tbody>
                        <tr>
                            <td width='100%'>
                                <img border='0' width='200' st-image='banner' alt='' style='margin:0 auto; display:block; border:none; outline:none; text-decoration:none;' src='http://dummyimage.com/200x200'>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class='devicewidth' width='600' background='white' cellpadding='0' cellspacing='0' border='0' align='center' style='border-collapse:collapse;background:white;border-radius:0.5rem;margin:30px auto;'>
                    <tbody>
                        <tr>
                            <td width='100%' style='padding:0 30px;'>
                                <table class='devicewidth' width='600' cellpadding='0' cellspacing='0' border='0' align='center'>
                                    <tbody>
                                        <!-- Spacing -->
                                        <tr>
                                            <td height='20' style='font-size:1px; line-height:1px; mso-line-height-rule: exactly;'></td>
                                        </tr>3
                                        <!-- Spacing -->
                                        <tr>
                                            <td>
                                                <table class='devicewidthinner' width='600' align='center' cellpadding='0' cellspacing='0' border='0'>
                                                    <tbody>
                                                        <!-- Title -->
                                                        <tr>
                                                            <td st-title='fulltext-heading'>
                                                                <h1 style='color:black;font-size: 20px;text-align:center;border-bottom: 1px solid #98917d;padding-bottom: 20px;'> Juntas de Educación y Juntas Administrativas - MEP</h1>
                                                            </td>
                                                        </tr>
                                                        <!-- // End of Title -->
                                                        <!-- // spacing -->
                                                        <tr>
                                                            <td width='100%'>
                                                                <p style='font-size: 14px; color: black'> Hemos recibido la siguiente información,  </p>
                                                                <p style='font-size: 14px; color: black'> Información recibida: </p>
                                                                <ul style='text-align:left; padding-left: 10px; color: black'>".$stringd."</ul>
                                                            </td>
                                                        </tr>
                                                        <!-- End of spacing -->
                                                        <!-- content -->
                                                        <tr>
                                                          <td height='20' style='font-size:1px; line-height:1px; mso-line-height-rule: exactly;'></td>
                                                        </tr>
                                                        <tr>
                                                            <td style='font-size: 14px; color: black' st-content='fulltext-content'>
                                                              Pronto lo estaremos contactando
                                                            </td>
                                                        </tr>
                                                        <!-- End of content -->
                                                    <!-- Spacing -->
                                                    <tr>
                                                        <td height='20' style='font-size:1px; line-height:1px; mso-line-height-rule: exactly;'></td>
                                                    </tr>
                                                    <!-- Spacing -->
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </table>
  </body>
</html>";

} catch (Exception $e) {
  $response = array(
    'status' => 500,
    'data' => json_encode($e)
  );

  $response = json_encode( $response );
  echo $response;
  die();
}

?>
