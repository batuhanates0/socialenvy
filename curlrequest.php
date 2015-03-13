<? include('dbconn.php');

$_SESSION['login_user'];
// database connection


$cookie="InstagramCookie.txt";
$useragent = "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.43 Safari/537.31"; // Yes cause that's the way I roll
extract($_POST);

//set POST variables
$url = 'https://instagram.com/accounts/login/ajax/';
$fields = array(



    'username' => 'pzmlsfhirk18959',//$_POST['IGuname'],
    'password' => 'K7Vf7VRrc11',//$_POST['IGpassword'],
    'intent'=>''


);
//echo $_POST['IGuname'];
//echo $_POST['IGpassword'];
//url-ify the data for the POST
//$field_string = http_build_query($fields);

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch, CURLOPT_COOKIESESSION, 1);
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_COOKIEJAR, '/tmp/'.$cookie);
curl_setopt($ch, CURLOPT_COOKIEFILE, '/tmp/'.$cookie);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2.13) Gecko/20101206 Ubuntu/10.10 (maverick) Firefox/3.6.13');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_HEADER, 1);
//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch,CURLOPT_POST, 1);
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields);



//execute post
//$page = curl_exec($ch);
$result = curl_exec($ch);
$err    = curl_errno( $ch );
print_r($err);
//print_r($result);

//close connection
curl_close($ch);
var_dump($_POST);
//echo $result;