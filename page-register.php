global $pageRegister;
$pageRegister = true;
$filePath = get_template_directory() . '/page-login.php';
if (file_exists($filePath)) {
	include_once $filePath;
} ?>