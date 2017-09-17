<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

    </div><!-- end #main -->
</div><!-- end #container -->

<footer class="footer">
<div class="f-container">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('由 <a href="http://www.typecho.org">Typecho</a> 强力驱动'); ?>.<a href="http://my.yecaoyun.com/aff.php?aff=788" target="_blank" title="野草云">野草云</a>支持
</div>
</footer><!-- end #footer -->


<?php $this->footer(); ?>
</body>
</html>
