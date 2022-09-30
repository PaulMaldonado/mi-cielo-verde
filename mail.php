<?php 
  include "./phpmailer/class.phpmailer.php";
  include "./phpmailer/class.smtp.php";
  $mail = new PHPMailer;

  $email_user = "paulmaldonado73@gmail.com";
  $email_password = "mrjzjulkztykeefy";
  $the_subject = utf8_decode("Notificacion para mi cielo verde");
  $address_to = "paul_pastore10@hotmail.com";

  $from_name = utf8_decode("MICIELOVERDE: Notificación");
  $phpmailer = new PHPMailer();
  // ---------- datos de la cuenta de Gmail -------------------------------
  $phpmailer->Username = $email_user;
  $phpmailer->Password = $email_password; 
  //-----------------------------------------------------------------------
  // $phpmailer->SMTPDebug = 1;
  $phpmailer->SMTPSecure = 'ssl';
  $phpmailer->isHTML(true);
  $phpmailer->Host = "smtp.gmail.com"; // GMail
  $phpmailer->Port = 465;
  $phpmailer->IsSMTP(); // use SMTP
  $phpmailer->SMTPAuth = true;
  $phpmailer->setFrom($phpmailer->Username,$from_name);
  $phpmailer->AddAddress($address_to); // recipients email
  $phpmailer->Subject = $the_subject; 

  //MENSAJE 
  $phpmailer->Body .= utf8_decode("<br><b>Correo de mi cielo verde: </b><br>");
  
  $phpmailer->IsHTML(true);
      
    if($phpmailer->Send()){
          echo "CORREO ENVIADO";
      echo "<script>window.location='".$Kiosco."';</script>";
      }else{
          echo "CORREO NO ENVIADO";
    }
