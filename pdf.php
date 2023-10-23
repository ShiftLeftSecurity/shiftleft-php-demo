<?php

require __DIR__ . '/vendor/autoload.php';

define('DOMPDF_ENABLE_AUTOLOAD', false);

require_once __DIR__ . '/vendor/dompdf/dompdf/dompdf_config.inc.php';

$dompdf = new DOMPDF();
$dompdf->load_html($_GET["html"]);
$dompdf->set_paper($_GET["paper"], $_GET["orientation"]);
$dompdf->render();

$dompdf->stream("dompdf_out.pdf", array("Attachment" => false));

?>
