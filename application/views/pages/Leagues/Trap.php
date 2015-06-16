<div class="row">
<div class="col-lg-12">
	<h1>Trap</h1>
</div>
</div>
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-4 pull-right">
	<b>Trap Representatives:</b><br/>
	<span></span>Mark Baugnet<br/>
	<span><span class="glyphicon glyphicon-phone-alt"></span> 920.621.9115</span><br/>
	<br/>
</div>
<div class="col-lg-9 col-md-9 col-sm-8">
	<p>So, you think you want to learn trapshooting? De Pere Sportsmen's Club offers year-round opportunities to get a chance to learn trap shooting, and has league nights on Mondays and Thursdays to offer you the chance to improve your skills. Three trap fields are available. Fields # 1 and # 2 are generally occupied by league shooting while Field # 3 is an “open” field for practice shooting. Leagues are available in summer and fall.</p>

	<p>Open shooting is available from 6:30PM to 9:00PM on regular trap nights, and there is always an experienced shooter or two available to help you get started. Register in the clubhouse for open shooting. Fees for shooting are reasonable, and shells are available for purchase. Just let the attendant know that you would like some assistance in starting out, and help will be provided.</p>

	<p>Emphasis is always placed on safety first when new shooters start out. Like all shooting sports, scores will almost always improve with practice. Please observe the club policy of not using the range for hand- or personal machine-thrown birds for safety and insurance reasons. Shot size is limited to not larger than #7 1/2 - 8 except when using the pattern board to the left of Field # 1.</p>
	
	<iframe src="https://www.google.com/calendar/embed?src=eq7gbpksc5g421ttosev7mp520%40group.calendar.google.com&ctz=America/Chicago" class="google-calendar"></iframe>

	<h3>More Info:</h3>
	<!--<iframe src="https://drive.google.com/embeddedfolderview?id=0B4darMYoCJ0mfmZtYWNva0ptWE5HYk1ac001dlhodHVUMnJ0X1hsTENKb0JKYzRkbXNjZWM#list" class="google-drive"></iframe>-->
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
$files = $service->children->listChildren('0B4darMYoCJ0mfmZtYWNva0ptWE5HYk1ac001dlhodHVUMnJ0X1hsTENKb0JKYzRkbXNjZWM');

$results = $files->getItems();
foreach($results as $fileRef){
	$id = $fileRef->getId();
	$file = $service->files->get($id);
	echo '<img src="'.$file->getIconLink().'" /> <a target="_blank" href="'.$file->getAlternateLink().'">'.$file->getTitle().'</a><br/>';
}

?>


</div>
</div>