<form method="post">
	<input type="text" name="title" id="title" value="<?php echo $item->title; ?>" />
	<?php error($item, 'title');?>
	<input type="submit" name="submit" value="Submit --&gt;" />
</form>