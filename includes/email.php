<?php
/**
* Envio de email para contacto.
*
**/
	$name = $_POST["name"];
	$email = $_POST["email"];
	$website = $_POST["website"] ? $_POST["website"] : "";
	$message = $_POST["message"];

	$destino = "jose_alvarado17@hotmail.com";
	$asunto = $name . "quiere contactar contigo desde tu portafolio";

	$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
	$cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
	$cabeceras .= 'From:' . $asunto . ' <' . $email . '> ' . "\r\n";

	$html = "

	<!DOCTYPE html>
	<html lang=\"es\">
	<head>
		<meta charset=\"UTF-8\">
		<title>Contacto de Portafolio</title>
		<style>
			body {
				font-family: sans-serif,arial;
				color: #555;
			}
			main {
				width: 90%;
				margin: auto;
			}
			.small {
				font-size: .8rem;
			}
			.text-muted {
				color: #aaa;
			}
			.text-right {
				text-align: right;
			}
			a {
				color: #3498db;
				text-decoration: none;
			}
			a:hover {
				text-decoration: underline;
			}
		</style>
	</head>
	<body>
		<main>
			<table class=\"table\">
				<tbody>
					<tr>
						<td>
							<p>Un mensaje de <strong>" . $name . "</strong>.</p>
							<p>" . $message . "</p>
							<br>
							<p class=\"small text-right text-muted\">Email: " . $email . "</p>
							<p class=\"small text-right text-muted\">URL: <a href=\"" . $website . "\" target=\"_blank\">" . $website . "</a></p>
						</td>
					</tr>
				</tbody>
			</table>
		</main>
	</body>
	</html>

	";

	if (isset($name) AND isset($email) AND isset($message)) {
		if (!empty($name) AND !empty($email) AND !empty($message)) {
			mail($destino,$asunto,$html,$cabeceras);
			echo 1;
		} else {
			echo 0;
		}
	} else {
		echo 0;
	}
?>