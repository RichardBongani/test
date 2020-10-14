<?php
        if(isset($_POST['submit'])){
            $employeename = $_POST['employee-name'];
            $companyname = $_POST['company-name'];
            $email_from = $_POST['company-email'];
            $companyphone = $_POST['company-telphone'];
            $connect = $_POST['connect'];
            $title_employee = $_POST['title-employee'];
            $prices = $_POST['prices'];
            $time = $_POST['time'];
            $tell_us = $_POST['tell-us'];
            
            $to = "contact@dunamistech.com";
            $headers = "From:"." ".$email_from;
            
            $txt = "You Have receiveced an e-mail with the following details:\n\n\nEmail from:". "  ".$employeename. ".\n\nCompany Name:"."  ".$companyname. ".\n\nEmail address:"."  ".$email_from. ".\n\nCompany number:"."  ".$companyphone. ".\n\nConnect Online using:"."  ".$connect . ".\n\nPrice Estimation:"."  ".$prices. ".\n\nProject must take approx:"."  ".$time.  ".\n\nPosition of Employee:"."  ".$title_employee. ".\n\n\n"."\n".$tell_us;
            
            mail($to,$headers,$txt);
            header("Location: contact.html?mailsend");
            
            $dbServername="localhost:3306";
            $dbUsername="dunarubq_web_enquiry";
            $dbpassword="0619301400";
            $DbName="dunarubq_dunamis_form";
        
            
        }
    ?>