<?php

class SimpleSpintaxAdminController
{
    /** @var bool $initiated */
    private static $initiated = false;

    /** @var  $spin */
    private static $spin;

    /**
     * init() function
     * </br>
     */
    public static function init()
    {
        if ( ! self::$initiated ) {
            self::initHooks();
        }

        self::$spin = new Spintax();
    }

    /**
     * initHooks() function
     * </br>
     */
    public static function initHooks()
    {
        self::$initiated = true;

        add_action('admin_menu', ['SimpleSpintaxAdminController', 'renderMenu']);
        add_action('admin_enqueue_scripts', ['SimpleSpintaxAdminController', 'loadResources']);
        add_action('wp_ajax_simple_go_spin', ['SimpleSpintaxAdminController', 'goSpin']);
	    add_action('wp_ajax_nopriv_simple_go_spin', ['SimpleSpintaxAdminController', 'goSpin']);
    }

    /**
     * renderMenu() function
     * </br>
     */
    public static function renderMenu()
    {
        $icon = sprintf('data:image/svg+xml;base64,%s', base64_encode('<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g><path d="M498.221,24.653C444.711,7.126,368.649-1.751,289.542,0.296C215.284,2.218,145.266,13.275,92.384,31.429 C15.772,57.731-0.141,90.375,0.001,113.127c0.062,9.909,3.378,24.861,18.823,39.819c18.123,17.55,49.832,31.873,90.684,42.017 c-24.242,10.791-36.509,24.871-36.509,42.035c0,22.472,21.001,39.664,62.418,51.098c32.472,8.964,75.294,13.901,120.58,13.901 c56.058,0,90.215,12.551,100.019,20c-8.184,6.219-33.353,15.986-74.051,19.046c-4.495,0.092-8.946,0.336-13.327,0.727 c-4.086,0.143-8.29,0.227-12.641,0.227c-58.449,0-93.478-13.303-101.826-21.688c-7.795-7.828-20.457-7.854-28.285-0.061 c-7.827,7.794-7.854,20.457-0.061,28.284c13.788,13.847,38.354,22.69,65.533,27.786c-5.172,7.957-6.361,15.475-6.361,20.678 c0,10.324,4.649,29.652,35.791,43.108c12.772,5.519,28.345,9.253,45.132,10.914c-0.998,3.523-1.522,7.195-1.522,10.979 c0,28.038,28.814,50,65.599,50c11.046,0,20-8.954,20-20c0-11.046-8.954-20-20-20c-17.067,0-25.6-8.09-25.6-10 c0-1.91,8.532-10,25.6-10c11.046,0,20-8.954,20-20c0-11.046-8.954-20-20-20h-44c-34.188,0-54.851-9.679-60.169-15.077 c4.416-4.689,20.033-12.764,45.061-15.203c4.325-0.162,8.632-0.394,12.907-0.699c0.73-0.01,1.459-0.021,2.202-0.021 c1.533,0,3.019-0.188,4.452-0.515c57.668-5.178,107.546-23.824,107.546-58.484c0-13.79-7.902-25.042-21.041-33.923 c18.372-5.101,34.147-11.777,45.077-20.315c8.705-6.799,10.25-19.368,3.45-28.073c-6.8-8.705-19.367-10.25-28.073-3.451 c-16.39,12.802-70.227,25.762-141.412,25.762c-36.985,0-72.714-3.583-100.605-10.091c-22.752-5.308-34.619-11.205-39.854-14.909 c5.235-3.704,17.103-9.601,39.854-14.909c27.892-6.508,63.62-10.091,100.605-10.091c0.429,0,0.848-0.038,1.269-0.064 c3.667,0.046,7.353,0.07,11.059,0.07c7.689,0,15.473-0.101,23.317-0.304c1.102-0.029,2.173-0.169,3.222-0.368 c39.933-1.35,77.624-7.481,106.351-17.343c46.896-16.1,56.624-37.826,56.529-53.222c-0.047-7.147-2.347-17.84-13.041-28.194 c-28.648-27.732-99.037-36.06-155.363-34.598c-34.028,0.88-73.582,6.71-105.807,15.594c-10.648,2.936-16.901,13.948-13.966,24.596 c2.935,10.648,13.946,16.9,24.597,13.965c10.968-3.023,50.319-12.981,96.211-14.169c64.435-1.664,113.021,10.653,126.305,23.159 c-3.03,3.151-11.249,9.131-28.452,15.038c-25.576,8.779-59.968,14.205-96.843,15.277c-1.007,0.029-1.985,0.156-2.948,0.328 c-123.525,2.89-215.046-21.655-241.787-47.55c-3.021-2.925-6.626-7.265-6.65-11.333c-0.046-7.308,13.559-25.829,65.371-43.617 c49.135-16.868,114.908-27.16,185.205-28.98c74.703-1.932,145.858,6.224,195.192,22.383c10.498,3.439,21.794-2.284,25.232-12.781 C514.439,39.387,508.718,28.09,498.221,24.653z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>'));

        add_menu_page(
            'Simple Spintax',
            'Simple Spintax',
            'manage_options',
            'simple-spintax',
            ['SimpleSpintaxAdminController', 'homeAction'],
            $icon,
            20
        );
    }

    /**
     * homeAction() function
     * </br>
     */
    public static function homeAction()
    {
        if(!current_user_can('manage_options')){
            wp_die( 'You are not allowed to be on this page.' );
        }

        SimpleSpintaxController::view('simple/home');
    }

    /**
     * goSpin() function
     * </br>
     */
    public static function goSpin()
    {
        global $user_ID;
        
        if(!current_user_can('manage_options')){
            wp_die( 'You are not allowed to be on this page.' );
        }

        if(!isset($_POST['kw'])) {
            throw new Exception('Missing parameter', 500);
        }
        
        if(!isset($_POST['title'])) {
            throw new Exception('Missing parameter', 500);
        }
        
        if(!isset($_POST['excerpt'])) {
            throw new Exception('Missing parameter', 500);
        }
        
        if(!isset($_POST['spintemplate'])) {
            throw new Exception('Missing parameter', 500);
        }
        
        if(!isset($_POST['make'])) {
            throw new Exception('Missing parameter', 500);
        }
        
        if(!isset($_POST['capitalize'])) {
            throw new Exception('Missing parameter', 500);
        }
        
        if(!isset($_POST['ctrsymbol'])) {
            throw new Exception('Missing parameter', 500);
        }
        
        if(!isset($_POST['kwasslug'])) {
            throw new Exception('Missing parameter', 500);
        }
        
        try {                    
            $keywords = sanitize_text_field($_POST['kw']);
            $title = sanitize_text_field($_POST['title']);
            $excerpt = sanitize_text_field($_POST['excerpt']);
            $template = $_POST['spintemplate'];
            $make = $_POST['make'];
            $ctrsymbol = $_POST['ctrsymbol'];
            
            $kws = explode(",", $keywords);
            $count = 0;            
            
            foreach($kws as $kw) {
                $spinnedTitle = self::$spin->process($title);
                $spinnedExcerpt = self::$spin->process($excerpt);
                $spinnedTemplate = self::$spin->process($template);
                
                $kw = strtolower($kw);
                if($_POST['capitalize'] === "true") {
                    $kw = ucfirst($kw);
                }
                
                $_title = str_replace("%KW%", $kw, $spinnedTitle);
                $_excerpt = str_replace("%KW%", $kw, $spinnedExcerpt);
                $_excerpt = substr($_excerpt, 0,150). "...";
                $_body = str_replace("%KW%", $kw, $spinnedTemplate);
                
                $slug = str_replace(" ", "-", $_title);
                if($_POST['kwasslug'] === "true") {
                    $slug = str_replace(" ", "-", $kw);
                }                            
                
                $postdate = date('Y-m-d H:i:s');
                $postdate_gmt = gmdate('Y-m-d H:i:s',strtotime($postdate));
                
                $insert = false;
                $type = null;
                
                if('posts' === $make) {
                    $myp = get_posts([
                        'name' => strtolower($slug),
                        'post_type' => 'post',
                        'numberposts' => 1,
                        'post_status' => ['future','publish']
                    ]);

                    if(0 === sizeof($myp)) {
                        $insert = true;
                        $type = 'post';                        
                    }
                }else if('pages' === $make) {
                    $page = get_page_by_path($slug);
                    if(!$page) {
                        $insert = true;
                        $type = 'page';                                            
                    }                    
                } 
                
                if($insert) {
                    $new_post = [
                        'post_title' => $_title,
                        'post_name' => strtolower($slug),
                        'post_content' => $_body,
                        'post_status' => 'draft',
                        'post_date' => $postdate,
                        'post_date_gmt' => $postdate_gmt,
                        'post_author' => $user_ID,
                        'post_type' => $type,
                        'post_excerpt' => $_excerpt
                    ];    

                    $post_id = wp_insert_post($new_post);
                    if($ctrsymbol !== ""){
                        $ctrsymbol = $ctrsymbol." ";
                    }
                    
                    update_post_meta( $post_id, '_yoast_wpseo_title', $ctrsymbol.ucfirst($_title));
                    update_post_meta( $post_id, '_yoast_wpseo_focuskw', $kw );
                    update_post_meta( $post_id, '_yoast_wpseo_metadesc', $_excerpt);

                    $count++;
                }
            };            

            $result = [
                'action' => 'simple_go_spin',
                'data' => [
                    'count' => $count,
                    'type' => $type
                ],
                'success' => true,
                'code' => 200
            ];
        } catch (Exception $e) {
            $result = [
                'action' => 'simple_go_spin',
                'succes' => false,
                'message' => $e->getMessage(),
                'code' => $e->getCode()
            ];
        }

        wp_send_json($result);
    }

	

    /**
     * loadResources()
     * </br>
     *
     * Function to load assets
     */
    public static function loadResources()
    {
        wp_register_script('bootstrap_js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
        wp_enqueue_script('bootstrap_js');
        wp_register_style('bootstrap_css', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
        wp_enqueue_style('bootstrap_css');

        wp_register_script('jquery_ui_js', '//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js');
        wp_enqueue_script('jquery_ui_js');
        wp_register_style('jquery_ui_css', '//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css');
        wp_enqueue_style('jquery_ui_css');

        wp_enqueue_script('simple-spintax-js', plugins_url( 'views/assets/js/simple.js' , dirname(__FILE__) ), [], SIMPLE_SPINTAX__VERSION, true );
    }
}
