<?php
define("WP_SCSS_ALWAYS_RECOMPILE", true);
read_files();

function read_files()
{
    $file_names = glob(get_template_directory() . "/libs/*");
    foreach ($file_names as $file_name) {
        if(preg_match('/\.php$/i', basename($file_name))){
            require_once $file_name;
        }
    }
}

function theme_setup()
{
    add_theme_support("post-thumbnails");

    variable_setup();
}

function variable_setup()
{
    $GLOBALS["BL_HELPER"] = BlHelper::getInstance();

    /**
     * ヒアドキュメント内関数展開用変数
     *
     * @param $expression
     * @return $expression
     */
    $GLOBALS["CALL_HEAR_DOC_DEPLOY_FUNC"] = function ($expression) {
        return $expression;
    };
}


add_action("after_setup_theme", "theme_setup");

add_filter("show_admin_bar", "__return_false");

remove_filter("the_content", "wpautop");
