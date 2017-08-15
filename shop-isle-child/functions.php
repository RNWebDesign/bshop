<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

add_action('woocommerce_before_add_to_cart_form','print_something_below_short_description');

function print_something_below_short_description() {
	
	echo '<ul id="order-benefits" class="checkmarks">
	<li><strong>Gratis</strong> levering binnen de 1 tot 2&nbsp;werkdagen (vanaf € 100)</li>
	<li>Retour online of omruilen in de winkel</li>
	</ul>';
	
	
}

//enqueues our locally supplied font awesome stylesheet
function enqueue_our_required_stylesheets(){
	wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.css'); 
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');