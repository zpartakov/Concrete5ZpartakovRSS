<?php  defined('C5_EXECUTE') or die("Access Denied.");  
$form = Loader::helper('form');
$c = Page::getCurrentPage();
?>
<div class="ccm-block-field-group">
	<h2><?php  echo t('RSS Title')?></h2>
	<?php   
	echo $form->text('FeedTitle',$FeedTitle);?>
	<br/><br/>
		<h2><?php  echo t('RSS Feed Url')?></h2>
	<?php  
	echo $form->text('FeedUrl',$FeedUrl, array('style'=>'width: 300px;'));?>
	<br/><br/>
		<h2><?php  echo t('Max feed to display?')?></h2>
	<?php  
	echo $form->text('MaxCount',$MaxCount);?>
	<br/><br/>
		<h2><?php  echo t('RSS ShowDesc')?> (true / false)</h2>
	<?php  
	echo $form->text('ShowDesc',$ShowDesc);?>
	<br/><br/>
		<h2>
	<?php  
	echo t('RSS ShowPubDate');
	?> (true / false)</h2>
	<?php  
	echo $form->text('ShowPubDate',$ShowPubDate);?>
	<br/><br/>
		<h2><?php  echo t('RSS DescCharacterLimit')?></h2>
	<?php  
	echo $form->text('DescCharacterLimit',$DescCharacterLimit);?>
	<br/><br/>
</div>

