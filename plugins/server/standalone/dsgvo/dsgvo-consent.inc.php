<?php

$consent['info']             = "Um unsere Webseite für Sie optimal zu gestalten und fortlaufend verbessern zu können, verwenden wir Cookies. Durch die weitere Nutzung der Webseite stimmen Sie der Verwendung von Cookies zu. Weitere Informationen zu Cookies erhalten Sie in unserer";
$consent['more']             = "Datenschutzerklärung.";
$consent['dismiss']          = "OK";
$consent['dismiss_callback'] = "";  // bzw. Funktion übergeben "meine_callback_funktion()";
$consent['url']              = "/datenschutz.php";
$consent['html_padding']     = "Bottom";

echo getDsgvoConsent($consent);
?>
