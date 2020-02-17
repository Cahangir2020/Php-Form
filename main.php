<?php
$userdata = [
	["Ad" => "Cahangir",
	"Soyad" => "Osmanov",
	"email" => "cahangir@mail.ru",
	"password" => "cahangir"
	],
	["Ad" => "Toğrul",
	"Soyad" => "Cəfərli",
	"email" => "togrul@mail.ru",
	"password" => "togrul123"
	],
	["Ad" => "Mirvari",
	"Soyad" => "Yusifova",
	'email' => "mirvari@mail.ru",
	"password" => "mirvari123"
	],
	["Ad" => "Samir",
	"Soyad" => "Həsrətov",
	'email' => "samir@mail.ru",
	"password" => "samir123"
	]
];



foreach($userdata as $key => $data){
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$form_email = $_POST["email"];
		$form_pass = $_POST["pass"];

		if ($data['email'] == $form_email && $data['password'] == $form_pass) 
		{
			header("Location: profile.php");
			break;				
		}
		else
		{
			echo "Daxil etdiyiniz məlumat yanlışdır!";
		}
	}
			
} 
	
?>