<strong>pubsub_php</strong><p>
======guide======<br>
1.Code should be run on Apache server, and we use google pubsubhubbub hub as example.<br>
2.The publisher_class/subscriber_class respectively define the implement function of publish/subscribe<br>
3.The callback is specified by subscriber, it will be informed when subscriber subscribe to a feed or when a RSS feed update is published.<br>
4.The testfeed is a RSS feed for test.<br>
===implement instruction===<br>
1.Start up the code with subscribe.php, and set up your own callback url and RSS feed. Choose either of subscribe and unsubscribe function.<br>
2.Update your RSS feed, and run publish.php. If everything goes will, you should see output.txt, header.txt, and data.txt.<br>
3.The update content will be record in data.txt file, and header.txt shows the headers that have been sent.<br>
4.The ouput.txt is just for use to test whether it is informed by the hub, it will record the time when callback is informed by the hub.<br>
5.Note that the hub will inform callback only when the RSS feed is updated, so make sure to update the RSS feed when runnung publsih.php.<br>
