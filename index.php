<?php
/**
 *  Xmcer博客皮肤，html+css+js学习使用
 * 
 * @package Xmcer-For-Typecho 
 * @author Xmcer
 * @version 0.1
 * @link http://xmcer.com/blog
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

    <div class="mmp">
	<?php while($this->next()): ?>
        <div class="mmp-p">
			<br>
			<h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2><br>
			<ul>
				<li <?php _e('作者: '); ?>><a href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
				<li><?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>"><?php $this->date('F j, Y'); ?></time></li>
				<li><?php _e('分类: '); ?><?php $this->category(','); ?></li>
				<li itemprop="interactionCount"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></li><br>
			</ul>
			
            <div class="mmp-p-c">
    			<?php $this->content('- 阅读剩余部分 -'); ?>
            </div><br>
        </div><!-- end #mmp-p -->
	<?php endwhile; ?>
	
		
    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
	</div><!-- end #mmp -->


<?php $this->need('footer.php'); ?>
