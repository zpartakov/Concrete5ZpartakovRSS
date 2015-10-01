<?php 
defined('C5_EXECUTE') or die("Access Denied.");
?>

<h1><?php echo $FeedTitle;?></h1>
<fieldset class="rsslib">
<?php
	require_once("rsslib.php");
	echo RSS_Display($FeedUrl, $MaxCount, false, $ShowPubDate, $DescCharacterLimit);
?>
</fieldset>

 