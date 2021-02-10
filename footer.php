<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 */
?>
		</div><!-- #content -->
<?php $language = isset($_GET['lang']) ? $_GET['lang'] : '';
global $hideFooter; if (!$hideFooter) {
$translations = '';
if ($language) {
    if (file_exists(get_stylesheet_directory() . '/' . 'template-parts/' . '/translations/' . $language .'/footer-content' . '.php')) {
        $translations = '/translations/' . $language;
    }
	</div><!-- .site-inner -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php back_to_top(); ?>
</body>
</html>
<?php $footer = ob_get_clean();
if (function_exists('renderTemplate')) {
    renderTemplate($footer, '', 'echo', 'footer');
} else {
    echo $footer;
} ?>