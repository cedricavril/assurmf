<?php
require_once('Library/Entities/User.class.php');
require_once('Models/amf_usersManager_PDO.class.php');

class UserController
{
	public function __construct(array $donnees = array())
	{

if (!isset($_POST["CRUD"])) $_POST["CRUD"] = 'R';

	switch (true) {
		case $_POST["CRUD"] == 'C':
			echo json_encode(amf_userManager_PDO::add(new User(
				array(
					'pass' => 'pass PDO', 
					'description' => 'description PDO', 
					'email' => $_POST["email"], 
					'tel' => $_POST["tel"], 
					'address' => $_POST["address"], 
					'postcode' => $_POST["postcode"], 
					'city' => $_POST["city"], 
					'prenom' => $_POST["prenom"], 
					'birth_date' => date("Y-m-d H:i:s"), 
					'licence_date' => date("Y-m-d H:i:s"), 
					'nom' => $_POST["nom"])
			)));
			break;

		case $_POST["CRUD"] == 'U':
			echo json_encode(amf_userManager_PDO::edit(new User(
				array(
					'id' => $_POST["id"],
					'pass' => 'pass PDO', 
					'description' => $_POST["description"], 
					'email' => $_POST["email"], 
					'tel' => $_POST["tel"], 
					'address' => $_POST["address"], 
					'postcode' => $_POST["postcode"], 
					'city' => $_POST["city"], 
					'prenom' => $_POST["prenom"], 
					'birth_date' => $_POST["birth_date"], 
					'licence_date' => $_POST["licence_date"], 
					'nom' => $_POST["nom"])
			)));
			break;
		
		case $_POST["CRUD"] == 'G':
			echo json_encode(amf_userManager_PDO::get($_POST["id"]));
			break;
		
		case $_POST["CRUD"] == 'D':
			echo json_encode(amf_userManager_PDO::delete($_POST["id"]));
			break;
		
		case ($_POST["CRUD"] == 'R'):
		default:
			$this->executeShow();
			break;
		}
	}

	public function executeShow()
	{
		echo json_encode(amf_userManager_PDO::getList());

// if requested by AJAX request return JSON response
/*		if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
			header('Content-Type: application/json');
			echo json_encode(amf_userManager_PDO::getList());
		}*/
// else just display the message
//		else {
//    echo $responseArray['message'];
//			echo $user;
//		}
	}
}

$user = new UserController();

/*		$lang = $this->app->user()->getAttribute("lang");
		$sejour = new \Library\Entities\Sejour;
		$formBuilder = new \Library\FormBuilder\BookingFormBuilder($sejour);
		$formBuilder->build();
		$form = $formBuilder->form();

		$titrePage = array(
			"fr" => "Hôtel les pins - contact",
			"en" => "Hôtel les pins - contact",
			"de" => "Hôtel les pins - kontakt"
		);
		$this->page->addVar('form', $form->createView());
		$this->page->addVar('backgroundImage', 'images/contact/background.jpg');
		$this->page->addVar('title', $titrePage[$lang]);
		$this->page->addVar('nom', $request->postData('nom'));
		$this->page->addVar('tel', $request->postData('tel'));
		$this->page->addVar('email', $request->postData('email'));
		$this->page->addVar('message', $request->postData('message'));
		$this->page->addVar('antiBot', $request->postData('antiBot'));
		$this->page->addVar('codeAntiBot', $request->postData('codeAntiBot'));
	}*/

/*	public function executeRedir(\Library\HTTPRequest $request)
	{
		if ($_SERVER["REMOTE_ADDR"]=='127.0.0.1') 	$this->app->httpResponse()->redirect("/Hotel%20les%20pins/Web/home.html");
		$this->app->httpResponse()->redirect("/Web/home.html");
	}
}*/
?>