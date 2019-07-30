<?php
/**
 * Arrow.Down 是 Typecho 的一套主题模板，来源于 Junichi  
 *
 * @package Arrow.Down Theme
 * @author Arrow.Down
 * @version 1.2.2
 * @link https://uefeng.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

	<div class="mid-col">
		<div class="mid-col-container">
        <?php while($this->next()): ?>
            <article class="post post-list">
                <div class="meta">
                    <div class="date">
						<time><?php $this->date('M j, Y'); ?></time>
					</div>
					<div class="comment">
						<a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum(_t(' No Comments '), _t(' %d Comments ')); ?></a>
					</div>
				</div>
				<h1 class="title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
				<div class="entry-content">
					<div class="post-item-warp">
						<p><?php showThumbnail($this); ?><?php $this->excerpt(500);?></p>
					</div>
					<p><a href="<?php $this->permalink() ?>" class="more-link">继续阅读 »</a></p>
				</div>
            </article>
        <?php endwhile; ?>
            <nav class="page-navi"><?php $this->pageLink('<i class="icon icon-left"></i> 上一页','prev');?><?php $this->pageLink('<i class="icon icon-right"></i>下一页','next');?></nav>
		</div>
<?php $this->need('footer.php'); ?>