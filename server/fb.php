
<?
require_once __DIR__."../../Facebook/autoload.php";

    session_start();

$fb = new Facebook\Facebook([
  'app_id' => '2012433569051977',
  'app_secret' => 'edaabf6cd97247501a0b75309b453802',
  'default_graph_version' => 'v3.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
