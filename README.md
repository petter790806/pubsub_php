pubsub_php
======guide======
1.Code should be run on Apache server, and we use google pubsubhubbub hub as example.
2.The publisher_class/subscriber_class respectively define the implement function of publish/subscribe
3.The callback is specified by subscriber, it will be informed when subscriber ssubscribe to a feed or when a RSS feed update is published.
4.The testfeed is a RSS feed for test.
===implement instruction===
1.Start up the code with subscribe.php, and set up your own callback url and RSS feed. Choose either of subscribe and unsubscribe function.
2.Update your RSS feed, and run publish.php. If everything goes will, you should see output.txt, header.txt, and data.txt.
3.The update content will be record in data.txt file, and header.txt shows the headers that have been sent.
4.The ouput.txt is just for use to test whether it is informed by the hub, it will record the time when callback is informed by the hub.
5.Note that the hub will inform callback only when the RSS feed is updated, so make sure to update the RSS feed when runnung publsih.php.
