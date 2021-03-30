
          </div>
          <?php $sidebar_html = theme_sidebar(array(
            'id' => 'primary',
            'template' => <<<WIDGET_TEMPLATE
                <div class="u-block u-indent-30">
        <div class="u-block-container u-clearfix">
            <h5 class="u-block-header u-text" style="font-size: 1.125rem; line-height: 2;">{block_header}</h5>
            <div class="u-block-content u-text" style="font-size: 0.875rem; line-height: 2;">{block_content}</div>
        </div>
    </div> <?php } ?></aside>
        </div></div>