<?php
// Child css
function my_theme_enqueue_styles() {

    $parent_style = 'shoreditch-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

// Custom Logo at login
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/site-login-logo.png);
			height:83px;
			width:83px;
			background-size: 83px 83px;
			background-repeat: no-repeat;
	        padding-bottom: 0;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


// Custom Dashboard Help
add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
  
function my_custom_dashboard_widgets() {
global $wp_meta_boxes;
 
wp_add_dashboard_widget('custom_help_widget', 'K5 Support', 'custom_dashboard_help');
wp_add_dashboard_widget('custom_popular_widget', 'Popular Links', 'custom_dashboard_popular');
}
 
function custom_dashboard_help() { 
echo '<p>Welcome to the K5 Family Backend! Need help? Contact the developer <a href="mailto:mprior@unillu.com">here</a>. For WordPress Tutorials visit: <a href="http://www.wpbeginner.com" target="_blank">WPBeginner</a></p>';
}

function custom_dashboard_popular() { 
echo '
<ul>
    <li><a href="/wp-admin/post.php?post=301&action=edit"/>Edit the FAQ Page</a></li>
    <li><a href="/wp-admin/post.php?post=102&action=edit"/>Add/Edit a customer story to the homepage</a></li>
    <li><a href="/wp-admin/admin.php?page=katb_testimonial_basics_admin_edit"/>Add/Edit an employee bio</a></li>
    <li><a href="/wp-admin/admin.php?page=wpcf7"/>Make updates to your contact forms</a></li>
    <li><a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=1&cad=rja&uact=8&ved=0ahUKEwjri4CWpsTWAhVE0mMKHTrqBagQFgg1MAA&url=https%3A%2F%2Fanalytics.google.com%2F&usg=AFQjCNFhxdo0O0J-DN4b9TzW2lyod2l9Fg" target="_blank"/>Check your Google Analytics</a></li>
</ul>
';
}

