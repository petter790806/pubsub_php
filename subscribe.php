<?php include("subscriber_class.php");?>

<?php
//use google pubsubhubbub hub
$hub_url = "http://pubsubhubbub.appspot.com/";
$callback_url = "set your callback url here";

$feed = "put your feed here";

// create a new subscriber
$s = new PshbSubscriber($hub_url, $callback_url);


// subscribe to a feed
$s->subscribe($feed);

// unsubscribe from a feed
$s->unsubscribe($feed);
?>