$json_string = file_get_contents("http://codeivate.com/users/ppowis.json"); 
$parsed_json = json_decode($json_string);

$name = $parsed_json->{'name'};
$level = $parsed_json->{'level'};