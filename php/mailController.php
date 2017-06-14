<?php

class MailController {

	protected $name;
	protected $email;
	protected $phone_number;
	protected $company;
	protected $from;
	protected $subject;

	public function __construct($name , $email , $phone_number , $company) {
		$this->name = $name;
		$this->email = $email;
		$this->phone_number = $phone_number;
		$this->company = $company;
		$this->from = "hello@powderhousedevs.com";
		$this->subject = "Thank you for contacting us!";
		$this->message = "Hello $this->name, We are so happy that you could reach out to us! Your project is very important to us and we will be contacting you within 24 hours to learn more about how we can help make your idea a reality. Looking forward to having a productive relationship with you and $this->company, Sincerly PowderHouseDevelopment team.";
		$this->sendMail($this->email, $this->subject , $this->message);
		$this->ourCopy();
	}

	public function sendMail($email , $subject , $message) {
		if(mail($email , $subject, $message)) {
			echo "good!";
		} else {
			echo "Error";
		}
	}

	public function ourCopy() {
		if(mail("employgeorgie@gmail.com", "$this->name has contacted us on behalf of $this->company", "Name: $this->name\n Company: $this->company\n Phone Number: $this->phone_number\n Email: $this->email")) {
			echo "<br>Also good.";
		} else {
			echo "<br>Bad";
		}
	}
}

//$TheMail  = new MailController($_POST['name'] , $_POST['email'] , $_POST['phone_number'] , $_POST['company']);
$TestMail = new MailController("Tester account" , "n7georgie" , 270-370-2890 , "TestCompany");