<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendinq extends CI_Controller {
	public function index()
	{
	$post = $this->input->post();
        $name       = !empty($post["name"]) ? trim($post["name"]) : "";
        $email      = !empty($post["email"]) ? trim($post["email"]) : "";
        $subject    = !empty($post["subject"]) ? trim($post["subject"]) : "";
        $allmessage = !empty($post["message"]) ? trim($post["message"]) : "";
        $mobileNo   = !empty($post["mobileNo"]) ? trim($post["mobileNo"]) : "";
        $cdate      = date('Y-m-d H:i:s');
        
        $subjects = "Admission Enquire From Website ".date('Y-m-d H:i:s');
         $message="
        <html>
        <head>
        <title>Admission Enquiry Details</title>
        </head>
        <body>
        <p>Enquiry Details</p>
        <table border='1'>
        <tr>
        <th>Name</th>
        <th>Mobile No</th>
        <th>Email Id</th>
        <th>Subject</th>
        <th>Message</th>
        </tr>
        <tr>
        <th>".$name."</th>
        <th>".$mobileNo."</th>
        <th>".$email."</th>
        <th>".$subject."</th>
        <th>".$allmessage."</th>
        </tr>
        </table>
        </body>
        </html>
        ";
        $save['full_name']    = $name;
        $save['phone_no']     = $mobileNo;
        $save['email_id']     = $email;
        $save['subject']      = $subject;
        $save['message']      = $allmessage;
        $save['created_at']   = $cdate;
        
         $ok = $this->cm->saveupdate('dt_enquiry', $save);
         $FROMMAIL = 'ramaurya131994@gmail.com';
         $to = 'ramaurya131994@gmail.com';
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'From:'. $FROMMAIL . "\r\n";
            mail($to,$subjects,$message,$headers);
            if (!empty($ok)){
                $response = array('status'=>'yes','message'=>"Your inquiry has been submitted successfully!!");
                echo json_encode($response);
            }else{
                $response = array('status'=>'no','message'=>"Something went wrong!");
                echo json_encode($response);
            }
	}
}