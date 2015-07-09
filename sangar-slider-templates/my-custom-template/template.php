<?php
	/** 
	 * load ssliderGenerate class
	 */
	$slider = new ssliderGenerate($id,$data,$config,$args);
	$template_dir = plugins_url('/',__FILE__);
?>

<style type="text/css">
	.sslider-imac-top,
	.sslider-imac-bottom {
		margin-left:auto;
		margin-right:auto;
		line-height: 0;
		display: none;
	}

	.sslider-imac-top > img,
	.sslider-imac-bottom > img {
		width: 100%;
		box-shadow: none;
		border: none;
		border-radius: 0;
	}
</style>

<script type="text/javascript">
	function sslider_imac_onReset(width,height) {
		jQuery('.sslider-imac-top').width(width).show();
		jQuery('.sslider-imac-bottom').width(width).show();
	}
</script>

<?php echo $slider->javascript(); ?>


<div class="sslider-imac-top">
	<img src="<?php echo $template_dir ?>imac_top.png">
</div>
<?php echo $slider->html(); ?>
<div class="sslider-imac-bottom">
	<img src="<?php echo $template_dir ?>imac_bottom.png">
</div>