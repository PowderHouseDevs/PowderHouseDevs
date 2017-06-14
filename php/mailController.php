<?php
	error_reporting(E_ALL);
	ini_set("error_reporting" , true);

class MailController {

	public function __construct($name , $email , $phone_number , $company) {
		$this->sendMail($email, $subject , $message);
		$this->ourCopy($name, $company , $phone_number, $email);
		$message = "Hello" . $name ", We are so happy that you could reach out to us! Your project is very important to us and we will be contacting you within 24 hours to learn more about how we can help make your idea a reality. Looking forward to having a productive relationship with you and ". $company", Sincerly PowderHouseDevelopment team.";
	}

	public function sendMail($email , $subject , $message) {
		if(mail($email , $subject, $message)) {
			echo "good!";
		} else {
			echo "Error";
		}
	}

	public function ourCopy($name, $company, $phone_number, $email) {
		if(mail("employgeorgie@gmail.com", $name. " has contacted us on behalf of" .  $company ", Name: " . $name "Company:" $company "Phone Number:" . $phone_number "Email:" .  $email)) {
			echo "<br>Also good.";
		} else {
			echo "<br>Bad";
		}
	}
}

//$TheMail  = new MailController($_POST['name'] , $_POST['email'] , $_POST['phone_number'] , $_POST['company']);
$TestMail = new MailController("Tester Name" , "n7georgie@gmail.com" , "2703702890" , "TestCompany");
dd($TestMail);
function dd($item) {
	var_dump($TestMail);
	die("<-------Result");
}
