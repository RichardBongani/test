<?php
        if(isset($_POST['submit'])){
            $firstname = $_POST['firstName'];
            $secondname = $_POST['SecondName'];
            $email_from = $_POST['email'];
            $clientPhone = $_POST['phone'];
            $email_subject = $_POST['subject'];
            $services_needed = $_POST['services'];
            $message = $_POST['query'];
            
            $to = "contact@dunamistech.com";
            $headers = "From:"." ".$email_from;
            
            $txt = "You Have receiveced an e-mail with the following details:\n\n\nEmail from:". "  ".$firstname. ".\n\nSecond Name:"."  ".$secondname. ".\n\nEmail address:"."  ".$email_from. ".\n\nTelphone number:"."  ".$clientPhone. ".\n\nSubject message:"."  ".$email_subject .   ".\n\nService Required:"."  ".$services_needed. ".\n\n\n"."\n".$message;
            
            mail($to,$headers,$txt);
            header("Location: contact.html?mailsend");
            
            $dbServername="localhost:3306";
            $dbUsername="dunarubq_web_enquiry";
            $dbpassword="0619301400";
            $DbName="dunarubq_dunamis_form";
        
            
        }
    ?>