<?php

class SimpleSpintaxController
{

    /** @var bool $initiated */
    private static $initiated = false;

    /**
     * init() function
     * <br/>
     */
    public static function init()
    {
        if ( ! self::$initiated ) {
            self::initHooks();
        }
    }

    /**
     * initHooks() function
     * <br/>
     */
    private static function initHooks()
    {
        self::$initiated = true;
    }

    /**
     * activation() function
     * <br/>
     */
    public static function activation()
    {
    }

    /**
     * setup() function
     * <br/>
     */
    public static function setup()
    {
    }

    /**
     * deactivation() function
     * <br/>
     */
    public static function deactivation( )
    {
    }

    /**
     * view() function
     * <br/>
     *
     * @param $template
     * @param array $args
     */
    public static function view( $template, array $args = array() )
    {
        if ( !current_user_can( 'manage_options' ) )  {
            wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
        }

        foreach ( $args AS $key => $val ) {
            $$key = $val;
        }

        $file = SIMPLE_SPINTAX__VIEWS_DIR. $template . '.php';

        include($file);
    }

}