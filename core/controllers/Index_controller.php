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
			if ($_POST['action'] == 'schedule_an_appointment')
			{
				$errors = [];

				if (empty($_POST['test']))
					array_push($errors, ['{$lang.test_type}: {$lang.dont_leave_this_field_empty}']);

				if (empty($_POST['paxs']))
					array_push($errors, ['{$lang.tests_number}: {$lang.dont_leave_this_field_empty}']);

				if (empty($_POST['place']))
					array_push($errors, ['{$lang.test_place}: {$lang.dont_leave_this_field_empty}']);

				if ($_POST['place'] == 'i_want_to_do_in_my_hotel' OR $_POST['place'] == 'i_want_them_to_come_look_for_me')
				{
					if (empty($_POST['zone']))
						array_push($errors, ['{$lang.test_zone}: {$lang.dont_leave_this_field_empty}']);

					if (empty($_POST['hotel']))
						array_push($errors, ['{$lang.your_hotel}: {$lang.dont_leave_this_field_empty}']);
				}

				if (empty($_POST['date']))
					array_push($errors, ['{$lang.test_date}: {$lang.dont_leave_this_field_empty}']);

				if (empty($_POST['hour']))
					array_push($errors, ['{$lang.test_hour}: {$lang.dont_leave_this_field_empty}']);

				if (empty($_POST['name']))
					array_push($errors, ['{$lang.first_and_last_name}: {$lang.dont_leave_this_field_empty}']);

				if (empty($_POST['email']))
					array_push($errors, ['{$lang.email}: {$lang.dont_leave_this_field_empty}']);

				if (empty($_POST['phone']))
					array_push($errors, ['{$lang.phone}: {$lang.dont_leave_this_field_empty}']);

				if (empty($errors))
				{
					$security = new Security;

					$_POST['token'] = $security->random_string(8);

					$query = $this->model->create_appointment($_POST);

					if (!empty($query))
					{
						$mail_1 = new Mailer(true);

						try
						{
							$mail_1->setFrom(Configuration::$smtp_emailer, Configuration::$web_page);
							$mail_1->addAddress(strtolower($_POST['email']), ucwords($_POST['name']));
							$mail_1->Subject = '¡' . Languages::email('thanks_for_schedule_an_appointment_with_us') . '!';
							$mail_1->Body =
							'<html>
								<head>
									<title>' . $mail_1->Subject . '</title>
								</head>
								<body>
									<table style="width:100%;max-width:600px;margin:0px;padding:0px;border:0px;background-color:#2196F3;">
										<tr style="width:100%;margin:0px;padding:0px;border:0px;">
											<td style="width:100px;margin:0px;padding:20px 0px 20px 20px;border:0px;box-sizing:border-box;vertical-align:middle;">
												<img style="width:100px" src="https://' . Configuration::$domain . '/images/icontype.png">
											</td>
											<td style="width:auto;margin:0px;padding:20px;border:0px;box-sizing:border-box;vertical-align:middle;">
												<table style="width:100%;margin:0px;padding:0px;border:0px;">
													<tr style="width:100%;margin:0px;padding:0px;border:0px;">
														<td style="width:100%;margin:0px;padding:0px;border:0px;font-size:12px;font-weight:600;text-align:right;text-transform:uppercase;color:#fff;">' . Configuration::$web_page . '</td>
													</tr>
													<tr style="width:100%;margin:0px;padding:0px;border:0px;">
														<td style="width:100%;margin:0px;padding:0px;border:0px;font-size:12px;font-weight:400;text-align:right;color:#fff;">' . Configuration::$vars['legal']['rfc'] . '</td>
													</tr>
													<tr style="width:100%;margin:0px;padding:0px;border:0px;">
														<td style="width:100%;margin:0px;padding:0px;border:0px;font-size:12px;font-weight:400;text-align:right;color:#fff;">' . Configuration::$vars['legal']['sanitary_opinion'] . '</td>
													</tr>
													<tr style="width:100%;margin:0px;padding:0px;border:0px;">
														<td style="width:100%;margin:0px;padding:0px;border:0px;font-size:12px;font-weight:400;text-align:right;color:#fff;">' . Configuration::$vars['address'] . '</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
									<table style="width:100%;max-width:600px;margin:20px 0px;padding:0px;border:1px dashed #bdbdbd;box-sizing:border-box;background-color:#fff;">
										<tr style="width:100%;margin:0px;padding:0px;border:0px;">
											<td style="width:100%;margin:0px;padding:20px 20px 0px 20px;border:0px;box-sizing:border-box;font-size:18px;font-weight:600;text-align:center;text-transform:uppercase;color:#000;">' . Languages::email('your_appointment') . '</td>
										</tr>
										<tr style="width:100%;margin:0px;padding:0px;border:0px;">
											<td style="width:100%;margin:0px;padding:20px 20px 0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#000;"><strong>' . Languages::email('your_token') . '</strong></td>
										</tr>
										<tr style="width:100%;margin:0px;padding:0px;border:0px;">
											<td style="width:100%;margin:0px;padding:0px 20px 0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#757575;">' . $_POST['token'] . '</td>
										</tr>
										<tr style="width:100%;margin:0px;padding:0px;border:0px;">
											<td style="width:100%;margin:0px;padding:20px 20px 0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#000;"><strong>' . Languages::email('test_type') . '</strong></td>
										</tr>
										<tr style="width:100%;margin:0px;padding:0px;border:0px;">
											<td style="width:100%;margin:0px;padding:0px 20px 0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#757575;">' . Languages::email($_POST['test']) . '</td>
										</tr>
										<tr style="width:100%;margin:0px;padding:0px;border:0px;">
											<td style="width:100%;margin:0px;padding:20px 20px 0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#000;"><strong>' . Languages::email('tests_number') . '</strong></td>
										</tr>
										<tr style="width:100%;margin:0px;padding:0px;border:0px;">
											<td style="width:100%;margin:0px;padding:0px 20px 0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#757575;">' . $_POST['paxs'] . ' Paxs</td>
										</tr>
										<tr style="width:100%;margin:0px;padding:0px;border:0px;">
											<td style="width:100%;margin:0px;padding:20px 20px 0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#000;"><strong>' . Languages::email('test_place') . '</strong></td>
										</tr>
										<tr style="width:100%;margin:0px;padding:0px;border:0px;">
											<td style="width:100%;margin:0px;padding:0px 20px 0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#757575;">' . Languages::email($_POST['place']) . '</td>
										</tr>';

							if ($_POST['place'] == 'i_want_to_do_in_my_hotel' OR $_POST['place'] == 'i_want_them_to_come_look_for_me')
							{
								$mail_1->Body .=
								'<tr style="width:100%;margin:0px;padding:0px;border:0px;">
									<td style="width:100%;margin:0px;padding:20px 20px 0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#000;"><strong>' . Languages::email('test_zone') . '</strong></td>
								</tr>
								<tr style="width:100%;margin:0px;padding:0px;border:0px;">
									<td style="width:100%;margin:0px;padding:0px 20px 0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#757575;">' . Languages::email($_POST['zone']) . '</td>
								</tr>
								<tr style="width:100%;margin:0px;padding:0px;border:0px;">
									<td style="width:100%;margin:0px;padding:20px 20px 0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#000;"><strong>' . Languages::email('your_hotel') . '</strong></td>
								</tr>
								<tr style="width:100%;margin:0px;padding:0px;border:0px;">
									<td style="width:100%;margin:0px;padding:0px 20px 0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#757575;">' . $_POST['hotel'] . '</td>
								</tr>';
							}

							$mail_1->Body .=
							'			<tr style="width:100%;margin:0px;padding:0px;border:0px;">
											<td style="width:100%;margin:0px;padding:20px 20px 0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#000;"><strong>' . Languages::email('test_date') . '</strong></td>
										</tr>
										<tr style="width:100%;margin:0px;padding:0px;border:0px;">
											<td style="width:100%;margin:0px;padding:0px 20px 0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#757575;">' . $_POST['date'] . '</td>
										</tr>
										<tr style="width:100%;margin:0px;padding:0px;border:0px;">
											<td style="width:100%;margin:0px;padding:20px 20px 0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#000;"><strong>' . Languages::email('test_hour') . '</strong></td>
										</tr>
										<tr style="width:100%;margin:0px;padding:0px;border:0px;">
											<td style="width:100%;margin:0px;padding:0px 20px 0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#757575;">' . $_POST['hour'] . '</td>
										</tr>
										<tr style="width:100%;margin:0px;padding:0px;border:0px;">
											<td style="width:100%;margin:0px;padding:20px 20px 0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#000;"><strong>' . Languages::email('first_and_last_name') . '</strong></td>
										</tr>
										<tr style="width:100%;margin:0px;padding:0px;border:0px;">
											<td style="width:100%;margin:0px;padding:0px 20px 0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#757575;">' . $_POST['name'] . '</td>
										</tr>
										<tr style="width:100%;margin:0px;padding:0px;border:0px;">
											<td style="width:100%;margin:0px;padding:20px 20px 0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#000;"><strong>' . Languages::email('email') . '</strong></td>
										</tr>
										<tr style="width:100%;margin:0px;padding:0px;border:0px;">
											<td style="width:100%;margin:0px;padding:0px 20px 0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#757575;">' . $_POST['email'] . '</td>
										</tr>
										<tr style="width:100%;margin:0px;padding:0px;border:0px;">
											<td style="width:100%;margin:0px;padding:20px 20px 0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#000;"><strong>' . Languages::email('phone') . '</strong></td>
										</tr>
										<tr style="width:100%;margin:0px;padding:0px;border:0px;">
											<td style="width:100%;margin:0px;padding:0px 20px 0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#757575;">' . $_POST['phone'] . '</td>
										</tr>
										<tr style="width:100%;margin:0px;padding:0px;border:0px;">
											<td style="width:100%;margin:0px;padding:20px 20px 0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:center;color:#757575;">' . Languages::email('please_use_your_face_mask') . '</td>
										</tr>
										<tr style="width:100%;margin:0px;padding:0px;border:0px;">
											<td style="width:100%;margin:0px;padding:20px;border:0px;box-sizing:border-box;">
												<img style="width:100%;" src="https://' . Configuration::$domain . '/images/qr_vcard.png">
											</td>
										</tr>
									</table>
									<table style="width:100%;max-width:600px;margin:0px;padding:0px;border:0px;background-color:#ff5722;">
										<tr style="width:100%;margin:0px;padding:0px;border:0px;">
											<td style="width:100%;margin:0px;padding:20px 20px 0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#fff;"><a style="text-decoration:none;color:#fff;" href="tel:' . Configuration::$vars['contact']['phone'] . '">' . Configuration::$vars['contact']['phone'] . '</a></td>
										</tr>
										<tr style="width:100%;margin:0px;padding:0px;border:0px;">
											<td style="width:100%;margin:0px;padding:0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#fff;"><a style="text-decoration:none;color:#fff;" href="mailto:' . Configuration::$vars['contact']['email'] . '">' . Configuration::$vars['contact']['email'] . '</a></td>
										</tr>
										<tr style="width:100%;margin:0px;padding:0px;border:0px;">
											<td style="width:100%;margin:0px;padding:0px 20px 20px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#fff;"><a style="text-decoration:none;color:#fff;" href="https://' . Configuration::$domain . '">' . Configuration::$domain . '</a></td>
										</tr>
									</table>
									<table style="width:100%;max-width:600px;margin:0px;padding:0px;border:0px;background-color:#2196F3;">
										<tr style="width:100%;margin:0px;padding:0px;border:0px;">
											<td style="width:100%;margin:0px;padding:20px 20px 0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#fff;">' . Languages::email('power_by') . ' <a style="font-weight:600;text-decoration:none;color:#fff;" href="https://id.one-consultores.com">ID One V1</a></td>
										</tr
										<tr style="width:100%;margin:0px;padding:0px;border:0px;">
											<td style="width:100%;margin:0px;padding:0px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#fff;">Copyright (C) <a style="text-decoration:none;color:#fff;" href="https://one-consultores.com">One Consultores</a></td>
										</tr>
										<tr style="width:100%;margin:0px;padding:0px;border:0px;">
											<td style="width:100%;margin:0px;padding:0px 20px 20px 20px;border:0px;box-sizing:border-box;font-size:12px;font-weight:400;text-align:left;color:#fff;">Software ' . Languages::email('development_by') . ' <a style="text-decoration:none;color:#fff;" href="https://codemonkey.com.mx">Code Monkey</a></td>
										</tr>
									</table>
								</body>
							</html>';
							$mail_1->send();
						}
						catch (Exception $e) {}

						$mail_2 = new Mailer(true);

						try
						{
							$mail_2->setFrom(Configuration::$smtp_emailer, Configuration::$web_page);
							$mail_2->addAddress(Configuration::$vars['contact']['email'], Configuration::$web_page);
							$mail_2->Subject = 'Nuevo cita';
							$mail_2->Body =
							'Folio: ' . $_POST['token'] . '<br>
							Tipo de prueba: ' . Languages::email($_POST['test']) . '<br>
							Número de pruebas: ' . $_POST['paxs'] . ' Paxs<br>
							Lugar: ' . Languages::email($_POST['place']) . '<br>
							' . (($_POST['place'] == 'i_want_to_do_in_my_hotel' OR $_POST['place'] == 'i_want_them_to_come_look_for_me') ? 'Zona: ' . Languages::email($_POST['zone']) . '<br>' : '') . '
							' . (($_POST['place'] == 'i_want_to_do_in_my_hotel' OR $_POST['place'] == 'i_want_them_to_come_look_for_me') ? 'Hotel: ' . $_POST['hotel'] . '<br>' : '') . '
							Fecha: ' . $_POST['date'] . '<br>
							Hora: ' . $_POST['hour'] . ' Hrs<br>
							Nombre: ' . $_POST['name'] . '<br>
							Correo electrónico: ' . $_POST['email'] . '<br>
							Teléfono: ' . $_POST['phone'];
							$mail_2->send();
						}
						catch (Exception $e) {}

						echo json_encode([
							'status' => 'success',
							'message' => '{$lang.thanks_for_schedule_an_appointment_with_us_1} ' . $_POST['email'] . ' {$lang.thanks_for_schedule_an_appointment_with_us_1}'
						]);
					}
					else
					{
						echo json_encode([
							'status' => 'success',
							'message' => '{$lang.sorry_for_schedule_an_appointment_with_us}'
						]);
					}
				}
				else
				{
					echo json_encode([
						'status' => 'error',
						'errors' => $errors
					]);
				}
			}

			if ($_POST['action'] == 'contact_us')
			{
				$errors = [];

				if (empty($_POST['name']))
					array_push($errors, ['{$lang.first_and_last_name}: {$lang.dont_leave_this_field_empty}']);

				if (empty($_POST['email']))
					array_push($errors, ['{$lang.email}: {$lang.dont_leave_this_field_empty}']);

				if (empty($_POST['phone']))
					array_push($errors, ['{$lang.phone}: {$lang.dont_leave_this_field_empty}']);

				if (empty($_POST['comments']))
					array_push($errors, ['{$lang.comments}: {$lang.dont_leave_this_field_empty}']);

				if (empty($errors))
				{
					$mail = new Mailer(true);

					try
					{
						$mail->setFrom(Configuration::$smtp_emailer, Configuration::$web_page);
						$mail->addAddress(Configuration::$vars['contact']['email'], Configuration::$web_page);
						$mail->Subject = 'Nuevo contacto';
						$mail->Body =
						'Nombre: ' . $_POST['name'] . '<br>
						Correo electrónico: ' . $_POST['email'] . '<br>
						Teléfono: ' . $_POST['phone'] . '<br>
						Comentarios: ' . $_POST['comments'];
						$mail->send();
					}
					catch (Exception $e) {}

					echo json_encode([
						'status' => 'success',
						'message' => '{$lang.thanks_for_contact_us}'
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
