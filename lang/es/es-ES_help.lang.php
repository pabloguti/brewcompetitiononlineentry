<?php
$list_help_title = "Ayuda de Mi Cuenta";
$list_help_body = "<p>Esta es una vista general completa de la información de tu cuenta.</p>";
$list_help_body .= "<p>Aquí puedes ver tu información personal, incluyendo nombre, dirección, número(s) de teléfono, clubes, número de miembro de la AHA, ID del BJCP, rango de juez del BJCP, preferencias de evaluación y preferencias de servicio.</p>";
$list_help_body .= "<ul>";
$list_help_body .= "<li>Selecciona el botón &ldquo;Editar Cuenta&rdquo; para actualizar tu información personal.</li>";
$list_help_body .= "<li>Selecciona el botón &ldquo;Cambiar Correo Electrónico&rdquo; para actualizar tu dirección de correo electrónico. <strong>Nota:</strong> tu dirección de correo electrónico también es tu nombre de usuario.</li>";
$list_help_body .= "<li>Selecciona el botón &ldquo;Cambiar Contraseña&rdquo; para actualizar la contraseña de tu cuenta.</li>";
$list_help_body .= "</ul>";
$list_help_body .= "<p>Al final de la página se encuentra tu lista de inscripciones.</p>";
$list_help_body .= "<ul>";
$list_help_body .= "<li>Selecciona el ícono de impresora <span class=\"fa fa-print\"></span> para imprimir la documentación necesaria para cada inscripción (etiquetas de botellas, etc.).</li>";
$list_help_body .= "<li>Selecciona el ícono de lápiz <span class=\"fa fa-pencil\"></span> para editar la inscripción.</li>";
$list_help_body .= "<li>Selecciona el ícono de papelera <span class=\"fa fa-trash-o\"></span> para eliminar la inscripción.</li>";
$list_help_body .= "</ul>";

$brewer_acct_edit_help_title = "Ayuda para Editar la Cuenta";
$brewer_acct_edit_help_body = "<p>Aquí puedes actualizar la información de tu cuenta, incluyendo dirección/teléfono, número de miembro de la AHA, ID del BJCP, rango de juez del BJCP, disponibilidad y preferencias de evaluación o servicio, y más.</p>";

$username_help_title = "Ayuda para Cambiar la Dirección de Correo Electrónico";
$username_help_body = "<p>Aquí puedes cambiar tu dirección de correo electrónico.</p>";
$username_help_body .= "<p><strong>Por favor toma nota:</strong> tu dirección de correo electrónico también sirve como tu nombre de usuario para acceder a tu cuenta en este sitio.</p>";

$password_help_title = "Ayuda para Cambiar la Contraseña";
$password_help_body = "<p>Aquí puedes cambiar la contraseña de acceso a este sitio. Cuanto más segura, mejor &ndash; incluye caracteres especiales y/o números.</p>";

$pay_help_title = "Ayuda para Pagar Tarifas de Inscripción";
$pay_help_body = "<p>Esta pantalla detalla tus inscripciones no pagadas y las tarifas asociadas. Si los organizadores del concurso han designado un descuento para los participantes con un código, puedes ingresar el código antes de pagar tus inscripciones.</p>";
$pay_help_body .= "<p>Para el ".$_SESSION['contestName'].", los métodos de pago aceptados son:</p>";
$pay_help_body .= "<ul>";
if ($_SESSION['prefsCash'] == "Y") $pay_help_body .= "<li><strong>Efectivo.</strong> Coloca el efectivo en un sobre y adhiérelo a una de tus botellas. Por favor, por la cordura del equipo organizador, no pagues con monedas.</li>";
if ($_SESSION['prefsCheck'] == "Y") $pay_help_body .= "<li><strong>Cheque.</strong> Haz el cheque a nombre de ".$_SESSION['prefsCheckPayee']." por el monto total de tus tarifas de inscripción, colócalo en un sobre y adhiérelo a una de tus botellas. Sería de gran ayuda para el equipo organizador que escribas los números de tus inscripciones en la sección de notas.</li>";
if ($_SESSION['prefsPaypal'] == "Y") $pay_help_body .= "<li><strong>Tarjeta de Crédito/Débito vía PayPal.</strong> Para pagar tus tarifas de inscripción con una tarjeta de crédito o débito, selecciona el botón &ldquo;Pagar con PayPal&rdquo;. No es necesario tener una cuenta de PayPal. Después de haber pagado, asegúrate de hacer clic en el enlace &ldquo;Volver a...&rdquo; en la pantalla de confirmación de PayPal. Esto asegurará que tus inscripciones se marquen como pagadas para este concurso.</li>";
$pay_help_body .= "</ul>";

?>