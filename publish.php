<?php include("publisher_class.php");?>

<?php
//use google pubsubhubbub hub
$hub_url = "http://pubsubhubbub.appspot.com/";
$topic_url = "put your feed here";

$p = new PshbPublisher($hub_url);
if ($p->publish_update($topic_url)) {
  echo "$topic_url was successfully published to $hub_url";
} 
else {
  echo "ooops...";
  print_r($p->last_response());
}

?>