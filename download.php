<?php
// Force download of image file specified in URL query string and which
// is in the same directory as the download.php script.

if(empty($_GET['path'])) {
   header("HTTP/1.0 404 Not Found");
   return;
}

$basename = basename($_GET['path']);
$filename = __DIR__ . '/reciptes/' . $basename; // don't accept other directories

if (file_exists($filename)) {
  header('Content-Description: File Transfer');
  header('Content-Type: application/octet-stream');
  header('Content-Disposition: attachment; filename='.basename($filename));
  header('Content-Transfer-Encoding: binary');
  header('Expires: 0');
  header('Cache-Control: must-revalidate');
  header('Pragma: public');
  header('Content-Length: ' . filesize($filename));
  ob_clean();
  flush();
  readfile($filename);
  exit;
}
?>