		<footer id="footer" class="inner">
			&copy; 2018 - <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
			<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? "https://" : "http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1278211958'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "v1.cnzz.com/z_stat.php%3Fid%3D1278211958%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
		</footer>
	</div>
</div>
<?php $this->footer(); ?>

<script src="<?php $this->options->themeUrl('js/functions.js'); ?>"></script>
<?php if(!empty($this->options->search_form) && in_array('Pjax', $this->options->search_form)): ?>
<script src="<?php $this->options->themeUrl('js/prism.js'); ?>" data-no-instant></script>
<script src="//cdn.staticfile.org/instantclick/3.0.1/instantclick.min.js" data-no-instant></script>
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
</body>
</html>
