<?php

defined('_EXEC') or die;

class Index_controller extends Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if (Format::exist_ajax_request() == true)
		{
			if ($_POST['action'] == 'quote_now')
			{
				$errors = [];

				if (empty($_POST['service']))
					array_push($errors, ['{$lang.service}: {$lang.dont_leave_this_field_empty}']);

				if (empty($_POST['tests_number']))
					array_push($errors, ['{$lang.tests_number}: {$lang.dont_leave_this_field_empty}']);

				if (empty($_POST['place']))
					array_push($errors, ['{$lang.place}: {$lang.dont_leave_this_field_empty}']);

				if (empty($_POST['name']))
					array_push($errors, ['{$lang.name}: {$lang.dont_leave_this_field_empty}']);

				if (empty($_POST['email']))
					array_push($errors, ['{$lang.email}: {$lang.dont_leave_this_field_empty}']);

				if (empty($_POST['phone']))
					array_push($errors, ['{$lang.phone}: {$lang.dont_leave_this_field_empty}']);

				if (empty($errors))
				{
					$mail = new Mailer(true);

					try
					{
						$mail->setFrom(Configuration::$smtp_emailer, Configuration::$web_page);
						$mail->addAddress(Configuration::$vars['contact']['email'], Configuration::$web_page);
						$mail->Subject = 'Nueva cotización';
						$mail->Body =
						'Servicio: ' . $_POST['service'] . '<br>
						Número de pruebas: ' . $_POST['tests_number'] . '<br>
						Lugar: ' . $_POST['place'] . '<br>
						Nombre: ' . $_POST['name'] . '<br>
						Correo electrónico: ' . $_POST['email'] . '<br>
						Teléfono: ' . $_POST['phone'] . '<br>
						Mensaje: ' . !empty($_POST['message']) ? $_POST['message'] : 'Sin mensaje';
						$mail->send();
					}
					catch (Exception $e) {}

					echo json_encode([
						'status' => 'success',
						'message' => '{$lang.thanks_for_quote_now}'
					]);
				}
				else
				{
					echo json_encode([
						'status' => 'error',
						'errors' => $errors
					]);
				}
			}
		}
		else
		{
			define('_title', Configuration::$web_page . ' | {$lang.home}');

			$template = $this->view->render($this, 'index');

			echo $template;
		}
	}

	public function vcard()
	{
		define('_title', Configuration::$web_page . ' | {$lang.vcard}');

		$template = $this->view->render($this, 'vcard');

		echo $template;
	}

	public function privacy_notice()
	{
		define('_title', Configuration::$web_page . ' | {$lang.privacy_notice}');

		$template = $this->view->render($this, 'privacy_notice');

		echo $template;
	}
}
