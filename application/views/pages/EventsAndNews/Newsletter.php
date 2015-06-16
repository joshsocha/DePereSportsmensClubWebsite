<div class="row">
<div class="col-lg-12">
<h1>Newsletter</h1>
<!--<iframe src="https://drive.google.com/embeddedfolderview?id=0B4darMYoCJ0mfkRTSU9FaEhDczZEbmN6SHNLMHhzS3p0QUZDLTlLRW1GVW0xNmpiMDJES3M#list" class="google-drive" style="height:600px;"></iframe>-->


<?php
require_once 'C:\xampp\htdocs\deperesportsmens.club\application\third_party\Google\autoload.php';

$client_email = '406583389830-7p14t1hrav2hoomjpnqtura54rt8urrn@developer.gserviceaccount.com';
$private_key = file_get_contents('C:\xampp\htdocs\deperesportsmens.club\application\third_party\DePereSportsmensClub-key.json');

$scopes = array('https://www.googleapis.com/auth/drive',
	'https://www.googleapis.com/auth/drive.file',
	'https://www.googleapis.com/auth/drive.readonly',
	'https://www.googleapis.com/auth/drive.metadata.readonly',
	'https://www.googleapis.com/auth/drive.appdata',
	'https://www.googleapis.com/auth/drive.apps.readonly',
	'https://www.googleapis.com/auth/drive.metadata');
$credentials = new Google_Auth_AssertionCredentials(
    $client_email,
    $scopes,
    $private_key
);

$client = new Google_Client();
$client->setAssertionCredentials($credentials);
if ($client->getAuth()->isAccessTokenExpired()) {
  $client->getAuth()->refreshTokenWithAssertion();
}

$service = new Google_Service_Drive($client);
$result=array();
$files = $service->children->listChildren('0B4darMYoCJ0mfkRTSU9FaEhDczZEbmN6SHNLMHhzS3p0QUZDLTlLRW1GVW0xNmpiMDJES3M');

$results = $files->getItems();
$myFiles =[];
foreach($results as $fileRef){
	$id = $fileRef->getId();
	$file = $service->files->get($id);
	$myFile = [];
	$myFile["icon"] = $file->getIconLink();
	$myFile["link"] = $file->getAlternateLink();
	$myFile["name"] = $file->getTitle();
	$myFiles[$myFile["name"]] = $myFile;
	//echo '<img src="'.$file->getIconLink().'" /> <a target="_blank" href="'.$file->getAlternateLink().'">'.$file->getTitle().'</a><br/>';
}
krsort($myFiles);
foreach($myFiles as $myFile){
	echo '<img src="'.$myFile["icon"].'" /><a target="_blank" href="'.$myFile["link"].'">'.$myFile["name"]."</a><br/>\n";
}
?>
</div>
</div>