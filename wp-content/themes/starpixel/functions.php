<?php


// Incluindo os Arquivos TGM para solicitarmos aos usuarios do tema que façam download dos plugins necessários para o funcinamento do site
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/required-plugins.php';

//Requerendo o arquivo costumizer
require get_template_directory() . '/inc/costumizer.php';

// Essa funçao serve para carregar os scripts
function load_scripts(){
	// Essa funçao serve para linkar o BootStrap css e javascript
	wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array('jquery'), '4.1.1', true );
	// Essa Funçao chama o AngularJs
	wp_enqueue_script( 'angular-js', 'https://ajax.googleapis.com/ajax/libs/angularjs/1.2.32/angular.min.js', array('jquery'), '1.2.32', true );

	wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css', array(), '4.1.1', 'all' );
	// Essa funçao serve para chamar e ENFILEIRAR os arquivos css
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );
}
// Chamando a funcao acima
add_action( 'wp_enqueue_scripts', 'load_scripts' );

// Funcao de Configuraçao do Tema
function wp_starpixel_config(){
	//Registrando os menus
	register_nav_menus(
		array(
			 'my_main_menu'   => __('Main Menu', 'wpstarpixel'),
			 'my_top_menu'    => __('Top Bar Menu','wpstarpixel'),
			 'my_footer_menu' => __('Footer Menu', 'wpstarpixel')
		)
	);
	// Array para determinar o tamanho do cabeçalho
	$args = array(
		'height' => 225,
		'width'  => 1920
	);
	// adcionando a array no cabeçalho do tema
	add_theme_support('custom-header', $args );
	// Adcionando suporte dos thumbnails
	add_theme_support('post-thumbnails');
	// Adcionando suporte aos formatos de posts
	add_theme_support('post-formats', array('video', 'image'));
	// Funcao que chama a imagem destacadas dos posts/paginas
	add_theme_support('post-thumbnails');
	// Funcao que adciona o titulo do site
	add_theme_support('title-tag');
	//Adcionando suporte a Logo personalizado
	add_theme_support('custom-logo', array('height'=> 98, 'width'=> 426));
	// Habilitando Suporte a traduçao
	$textdomain = "wpstarpixel";
	load_theme_textdomain( $textdomain, get_stylesheet_directory() . '/languages/');
	load_theme_textdomain( $textdomain, get_template_directory() . '/languages/');

}

add_action('after_setup_theme', 'wp_starpixel_config', 0);


// Funcao para adcionar as sidebars
add_action('widgets_init', 'wp_starpixel_sidebar');
function wp_starpixel_sidebar(){
	register_sidebar(
		array(
			'name'          => __('Home Page Sidebar','wpstarpixel'),
			'id'            => 'sidebar-1',
			'description'   => __('Sidebar to be used Home Page', 'starpixel'),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>' 
 		)
	);
	register_sidebar(
		array(
			'name'          => __('Blog Sidebar','starpixel'),
			'id'            => 'sidebar-2',
			'description'   => __('Sidebar to be used Blog', 'starpixel'),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>' 
 		)
	);
	register_sidebar(
		array(
			'name'          => __('Services 1', 'starpixel'),
			'id'            => 'services-1',
			'description'   => __('First Service area', 'starpixel'),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>' 
 		)
	);
	register_sidebar(
		array(
			'name'          => __('Services 2', 'starpixel'),
			'id'            => 'services-2',
			'description'   => __('Second Service area', 'starpixel'),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>' 
 		)
	);
		register_sidebar(
		array(
			'name'          => __('Services 3', 'starpixel'),
			'id'            => 'services-3',
			'description'   => __('Third Service area', 'starpixel'),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>' 
 		)
	);
		register_sidebar(
		array(
			'name'          => __('Social Icons', 'starpixel'),
			'id'            => 'social-media',
			'description'   => __('Place your meida social here', 'starpixel'),
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>' 
 		)
	);
}





// define a versão do site
define('VERSAO_TEMA', 1.0);

// adiciona o CSS ná página
//function theme_style() {
	//if( !is_admin() ) {
		//wp_enqueue_style(
			//'template.css', // nome
	      //  get_stylesheet_directory_uri() . '/css/template.css', // caminho
          //  null,
	      //  VERSAO_TEMA); // versão
//	}
//}
//add_action('init', 'theme_style');

// adcionando o jquery
function register_jquery() {
	wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'register_jquery');

// adiciona o ajaxLoad.js ao tema
function register_ajaxLoad() {
	wp_register_script(
		'ajaxLoad', // Nome do arquivo
		get_stylesheet_directory_uri() . '/js/ajaxLoad.js', //onde se encontra
		array('jquery'), //Dependencias do script
		VERSAO_TEMA,
		true // se ele vai aparecer na header(false) ou no footer(true)
	);
	wp_enqueue_script('ajaxLoad');// carregando a funcao
}
add_action('wp_enqueue_scripts', 'register_ajaxLoad');// addionando a acao


// funcção que carrega os posts
function load_posts() {

	// variaveis da query
	$numPosts = (isset($_GET['numPosts']) ? $_GET['numPosts'] : 0); //Se o numero e post existir entao ele vai retornar a prorpia GET, caso ela nao exista retorna 0 vindas do ajax
	$page = (isset($_GET['page']) ? $_GET['page'] : 0); //Se o numero e page existir entao ele vai retornar a prorpia GET, caso ela nao exista retorna 0 vindas do ajax

	// modificados do loop
	query_posts(array(
		'post_por_page' => $numPosts, // numero de post
		'paged' => $page, // variavel page
		'post_status' => 'publish', // garantir que somente os posts publicados aparecam
		'post_type' => 'post'
	));

	// loop
	if(have_posts()):
		while(have_posts()) : the_post();
		?>
			<article class="artigos">
				<h1><?php the_title(); ?></h1>
				<?php the_excerpt(); ?>
			</article>
		<?php
		endwhile;
	endif;



	// limpa da memória a query
	wp_reset_query();

	// finaliza o script
	wp_die();
}
add_action('wp_ajax_load_posts', 'load_posts');
add_action('wp_ajax_nopriv_load_posts', 'load_posts');
