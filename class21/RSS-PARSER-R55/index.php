<?php
require __DIR__ . '/vendor/autoload.php';
use SimplePie\SimplePie;
$myrss = new SimplePie();
// $myrss->set_feed_url("https://prod-qt-images.s3.amazonaws.com/production/prothomalo-bangla/feed.xml")
// $myrss->set_feed_url("http://feeds.bbci.co.uk/news/technology/rss.xml");
$myrss->set_feed_url(["http://feeds.bbci.co.uk/news/technology/rss.xml","https://prod-qt-images.s3.amazonaws.com/production/prothomalo-bangla/feed.xml","https://www.gadgets360.com/rss/mobiles/feeds"]);
$myrss->init();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest News</title>
</head>
<body>
    <h1>Latest News</h1>
    <div class="header">
		<h1><a href="<?php echo $myrss->get_permalink(); ?>"><?php echo $myrss->get_title(); ?></a></h1>
		<p><?php echo $myrss->get_description(); ?></p>
        <?php
	/*
	Here, we'll loop through all of the items in the feed, and $item represents the current item in the loop.
	*/
	foreach ($myrss->get_items() as $item):
	?>
 
		<div class="item">
			<h2><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h2>
            <h4><?= $item->get_permalink() ?></h4>            
			
            <p><?php echo $item->get_description(); ?></p>
			<p><small>Posted on <?php echo $item->get_date('j F Y | g:i a'); ?></small></p>
		</div>
 
	<?php endforeach; ?>
 
	</div>
</body>
</html>