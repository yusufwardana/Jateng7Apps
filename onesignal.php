<?PHP
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function SendOneSignalMessage($message){
      // Your code here!
$fields = array(
            'app_id' => '2d3b8c7f-1aba-4fbb-8ffa-00a712b6760f',
            'included_segments' => array(
            'Subscribed Users'
        ),
            'contents' => array("en" =>$message),
            'headings' => array("en"=>"etc"),
            'small_icon' => 'https://cdn4.iconfinder.com/data/icons/iconsimple-logotypes/512/github-512.png',
            );

 $fields = json_encode($fields);
 //print("\nJSON sent:\n");
 //print($fields);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json; charset=utf-8',
        'Authorization: Basic MzUzOWU2NzctZGVlYS00NDEwLTllZjAtM2U0MTI4OTkwYmQw'
    ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_POST, TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    
    $response = curl_exec($ch);
    curl_close($ch);
    
    return $response;
}

$text = "hahaha";
$response = SendOneSignalMessage($text);
$return["allresponses"] = $response;
$return = json_encode($return);


print("\n\nJSON received:\n");
print($return);
print("\n");
?>