<?php

    // STIILI- JA SKRIPTIFAILID
    function vepa_files() {
        wp_enqueue_script('js-files', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);
        wp_enqueue_style('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css');
        wp_enqueue_style('vepa_main_styles', get_stylesheet_directory_uri() . '/css/style.css');
        wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css?family=Noto+Serif+TC:200,600&display=swap', false);
        wp_enqueue_style('font-awesome','//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css');
    }

    add_action('wp_enqueue_scripts', 'vepa_files');

    // TOETATAVAD LISAFUNKTSIOONID
    function vepa_features() {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
    }

    add_action('after_setup_theme','vepa_features');

    // SIDEBAR
    function vepa_sidebar() {
        register_sidebar(array(
            'name' => 'Sidebar',
            'id' => 'main_sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        ));
    }

    add_action('widgets_init','vepa_sidebar');

    // BÄNNER
    function page_banner($args= NULL) {
        $args['title']= get_field('banner_title');
        $args['background']= get_field('banner_background_image');
        ?>

        <div class="page-banner-img" style="background-image: url(
            <?php if(is_home()) {
                echo get_theme_file_uri('/images/metoodika_pildid/kiidu_lugemine-2-2000x700.jpg');
            } else if(get_post_type() == 'post') {
                echo get_theme_file_uri('/images/metoodika_pildid/post-header.png'); 
            } else {
                echo $args['background']; 
            }?>
            );">
            <div class="page-banner-img-title">
                <?php if($args['title']) { ?>
                    <h1 class="white-uppercase"><?php echo $args['title'] ?></h1>
                <?php } ?>
            </div>
            <div class="page-banner-img-line" style="background-image: url(<?php echo get_theme_file_uri('/images/muud_elemendid/line1.svg')?>);">
            </div>
        </div>

    <?php }

    // UUDISTE ALAMLEHTEDE HIGHLIGHT MENÜÜS
    function add_custom_class($classes = array(), $menu_item = false) {
        if ( !is_page() && 'Uudised' == $menu_item->title && !in_array( 'current-menu-item', $classes ) ) {
            $classes[] = 'current-menu-item';        
        }                    
        return $classes;
    }

    add_filter('nav_menu_css_class', 'add_custom_class', 100, 2);

    // BREADCRUMBS
    function streamlineBreadcrumbs($post, $displayCurrent) {
        $count = 1;
        $postAncestors = get_post_ancestors($post);
        $sortedAncestorArray = array();
        foreach ($postAncestors as $ancestor) {
            $sortedAncestorArray[] = $ancestor;
        }
        krsort($sortedAncestorArray); // Sort an array by key in reverse order
        echo "<a href=". get_home_url() .">" . get_the_title(get_option('page_on_front')) . "</a> &nbsp; > &nbsp;"; // Lisa esilehe link
        foreach ($sortedAncestorArray as $ancestor) {
            echo "<a class='breadcrumb-link". $count ."' href='". esc_url(get_permalink($ancestor)) ."' title='". get_the_title($ancestor) ."'>". get_the_title($ancestor) ."</a> &nbsp; > &nbsp;";
            $count++;
        }
        if(is_page()) {
            if($displayCurrent){ //If TRUE - output the current page title
                echo "<span class='current-page'>". get_the_title($post) ."</span>";
            }
        }  else { // Kui tegu on postitusega, n2ita uudiste lehe linki viimase breadcrumbina
            echo "<a class='breadcrumb-link' href='". esc_url(get_permalink(get_option('page_for_posts'))) ."' title='". get_the_title(get_option('page_for_posts')) ."'>". get_the_title(get_option('page_for_posts')) . "</a>";
        }
    }

    // SEND POST
    $response = "";

    function prefix_send_email_to_admin() {

        function contact_form_response($type, $message) {
            global $response;

            if($type == "success") {
                $response = "<div class='success'>{$message}</div>";
            } else {
                $response = "<div class='error'>{$message}</div>";
            }

            //response messages
            $missing_content = "Please supply all information.";
            $email_invalid   = "Email Address Invalid.";
            $message_unsent  = "Message was not sent. Try Again.";
            $message_sent    = "Thanks! Your message has been sent.";
            
            //user posted variables
            $name = $_POST['message_name'];
            $email = $_POST['message_email'];
            $message = $_POST['message_text'];
            
            //php mailer variables
            $to = 'voldemar.pungar@gmail.com';
            $subject = "Someone sent a message from ".get_bloginfo('name');
            $headers = 'From: '. $email . "\r\n" .
            'Reply-To: ' . $email . "\r\n";

            //validate email
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                contact_form_response("error", $email_invalid);
            } else { //email is valid
                //validate presence of name and message
                if(empty($name) || empty($message)) {
                    contact_form_response("error", $missing_content);
                } else { //ready to go!
                    $sent = wp_mail($to, $subject, strip_tags($message), $headers);
                    if($sent) {
                        contact_form_response("success", $message_sent); //message sent!
                    } else {
                        contact_form_response("error", $message_unsent); //message wasn't sent
                    }
                }
            }
        }
    }

    add_action( 'admin_post_nopriv_contact_form', 'prefix_send_email_to_admin' );
    add_action( 'admin_post_contact_form', 'prefix_send_email_to_admin' );
