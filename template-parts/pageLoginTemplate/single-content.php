  <div class="u-clearfix u-sheet u-sheet-1">
    <div class="u-form u-login-control u-form-1">
      <?php global $pageLogin_custom_template;
	    $pathToTemplates = get_template_directory() . '/template-parts/' . $pageLogin_custom_template;
	    $pathToFormsTemplates = $pathToTemplates . '/forms/';
	    if (file_exists($pathToFormsTemplates . 'form.php')) {
		    include_once $pathToFormsTemplates . 'form.php';
	    } ?>
    </div>
    
    
  </div>
</section><?php if ($skip_min_height) { echo "<style> .u-section-1, .u-section-1 .u-sheet {min-height: auto;}</style>"; } ?>
