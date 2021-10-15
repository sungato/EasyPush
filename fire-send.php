<html>
<body>
  <form action="fire-form.php">
     <input type="submit" name="my_form_submit_button" 
           value="New Message"/>
    </form>
</body>
</html>


<?php
$txt = $_POST['topic'].' '. $_POST['title']. ' ' . $_POST['body']. ' ' . $_POST['imageurl'];
$myfile = file_put_contents('logs.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);

if ($_POST['password'] != "any_passsword************") { echo("Error: The password is incorrect!"); exit; }

 $body = [
   "to" => "/topics/".$_POST['topic'], 
   "notification" => [
         "body" => $_POST['body'], 
         "title" => $_POST['title'],
		 "image" => $_POST['imageurl'],
      ] 
]; 

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));

$headers = array();
$headers[] = 'Authorization: key = ********:****************************************************';
$headers[] = 'Content-Type: application/json';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

print($result);

?>

