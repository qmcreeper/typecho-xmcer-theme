<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="mmp">
	<div class="mmp-p">
			<br>
			<h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2><br>
			<ul>
				<li <?php _e('作者: '); ?>><a href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
				<li><?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>"><?php $this->date('F j, Y'); ?></time></li>
				<li><?php _e('分类: '); ?><?php $this->category(','); ?></li>
				<br>
			</ul>
			
            <div class="mmp-p-c">
    			<?php $this->content('- 阅读剩余部分 -'); ?>
            </div>
			<p itemprop="keywords" class="tags"><?php _e('标签: '); ?><?php $this->tags(', ', true, 'none'); ?></p><br>
    </div><!-- end #mmp-p -->
		

    <?php $this->need('comments.php'); ?>

    <ul class="post-near">
        <li>上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
        <li>下一篇: <?php $this->theNext('%s','没有了'); ?></li>
    </ul>
</div><!-- end #main-->

<?php $this->need('footer.php'); ?>
