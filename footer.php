		<footer id="footer" class="inner">
			&copy; 2018 - <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a> 
		</footer>
	</div>
</div>
<?php $this->footer(); ?>

<script src="<?php $this->options->themeUrl('js/functions.js'); ?>"></script>
<?php if(!empty($this->options->search_form) && in_array('Pjax', $this->options->search_form)): ?>
<script src="<?php $this->options->themeUrl('js/prism.js'); ?>" data-no-instant></script>
<script src="<?php $this->options->themeUrl('js/instantclick.min.js');?>" data-no-instant></script>
<script data-no-instant>
	InstantClick.on('change', function(isInitialLoad) {
		if (isInitialLoad === false) {
			if (typeof Prism !== 'undefined') Prism.highlightAll(true,null);
			if (typeof ga !== 'undefined') ga('send', 'pageview', location.pathname + location.search);
		}
	});
	InstantClick.init();
</script>
<?php else : ?>
<script src="<?php $this->options->themeUrl('js/prism.js'); ?>"></script>
<?php endif; ?>


<style type="text/css">
#landlord {
	position: fixed;
	left: 30px;
	bottom: 0px;
	width: 280px;
	height: 250px;
}
</style>
<script src="<?php $this->options->themeUrl('js/live2d.js');?>"></script>
<div id="landlord">
    <canvas id="live2d" width="280" height="250"></canvas>
</div>
<script>
	loadlive2d("live2d","<?php $this->options->themeUrl('model/tororo.model.json');?>");
</script>
</body>
</html>
