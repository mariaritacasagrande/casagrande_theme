<?php
/**
 * searchform.php
 * Template para exibir o formulário de pesquisa
 * Será utilizado em widgets ou get_search_form()
 */
?>

<li id="search" class="widget widget_search">
    <form method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
        <input type="search" placeholder="<?php _e('Search', 'casagrande'); ?> " value="" name="s" id="s" />
        <button type="submit" form="searchform" name="submit"><i class="icon-zoom"></i></button>
    </form>
</li>