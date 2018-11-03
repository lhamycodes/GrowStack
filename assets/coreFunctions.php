<?php

    $todaysDate = date('d/m/Y');

    require 'phpmailer/PHPMailerAutoload.php';

    function createArray($status, $response){
        return array('status' => $status,
                     'response' => $response);
    }

    function encodeJSON($dataToEncode){
        $encoded = json_encode($dataToEncode);
        return $encoded;
    }

    function decodeJSON($jsonEncoded){
        $decoded = json_decode($jsonEncoded);
        $status = $decoded->{'status'};
        $response = $decoded->{'response'};
        return array($status, $response);
    }

    function dateFormatter($unformatted){
        $frmtDueDate = substr($unformatted, 0, 2);
        $frmtDueMonth = substr($unformatted, 3, 2);
        $frmtDueYear = substr($unformatted, 6, 4);

        $formattedDate = $frmtDueDate."-".$frmtDueMonth."-".$frmtDueYear;
        $formattedDate = strtotime($formattedDate);
        $currentDate = strtotime(date('d-m-Y'));

        $output = createArray(200, array('formattedDate' => $formattedDate,
                                         'currentDate' => $currentDate));
        return json_encode($output);
    }

    function sendPHPMail($to, $subject, $body){
        $mail = new PHPMailer;

        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host = 'mail.rccgyp1.com';                           // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                                     // Enable SMTP authentication
        $mail->Username = 'no-reply@rccgyp1.com';                   // SMTP username
        $mail->Password = 'noreply4rccgyp1';                        // SMTP password
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 26;                                          // TCP port to connect to

        $mail->setFrom('no-reply@rccgyp1.com', 'RCCG YP1');
        $mail->addAddress($to);                                     // Add a recipient

        $mail->isHTML(true);                                        // Set email format to HTML

        $mail->Subject = $subject;
        $mail->Body    = $body;

        if(!$mail->send()) {
            return 0;
        } else {
            return 1;
        }
    }

    $skillsToLearn = array('Ushering', 'Cashier', 'Cleaning', 'Sales Representative');
?>