<?php
class mk_artbees_products
{
    
    function __construct() {
        add_action('wp_ajax_abb_get_templates_action', array(&$this,
            'abb_get_templates_action'
        ));
        add_action('wp_ajax_abb_install_template_action', array(&$this,
            'abb_install_template_action'
        ));
        
        add_action('admin_enqueue_scripts', array(&$this,
            'enqueue'
        ));
        
        add_action('wp_ajax_abb_import_demo_action', array(&$this,
            'abb_import_demo_action'
        ));
        add_action('wp_ajax_abb_delete_template', array(&$this,
            'abb_delete_template'
        ));
        
        add_filter('upload_mimes', array(&$this,
            'mime_types'
        ));
    }
    
    /**
     *
     * Enqueue styles and scripts
     *
     */
    function enqueue() {
        
        wp_enqueue_style('importer-styles', THEME_DIR_URI . '/demo-importer/css/install-templates.css', false, false, 'all');
        wp_enqueue_script('uploader', THEME_DIR_URI . '/demo-importer/js/uploader.min.js', false, false, 'all');
    }
    
    /**
     * This hook will allow wordpress to accept .zip formats in media library
     *
     * @author      Bob Ulusoy
     */
    function mime_types($mimes) {
        $mimes['zip'] = 'application/zip';
        return $mimes;
    }
    
    /**
     *
     * Artbees API Key Verifier
     */
    function verify_artbees_apikey($apikey) {
        
        $data = array(
            'timeout' =>10,
            'httpversion' => '1.1',
            'body' => array(
                'apikey' => $apikey,
                'domain' => $_SERVER['SERVER_NAME']
            )
        );
        
        $query = wp_remote_post('https://artbees.net/api/v1/verify', $data);
        if (!is_wp_error($query)) {
            $result = json_decode($query['body'], true);
            return $result;
        } 
        else {
            return array("message"=>$query->get_error_message()  . ' Please contact Artbees Support');
        }
        
        return $result;
    }
    
    /**
     *
     *
     * Check if Current Customer is verified
     *
     *
     */
    function is_verified_artbees_customer() {
        
        $result = $this->verify_artbees_apikey(get_option('artbees_api_key', ''));
        
        return ($result['status'] == 202 ? true : false);
    }
    
    function get_unverfied_view() {
        $output = '<div class="register-product">';
        $output.= '<h1 class="wp-ui-text-primary">You need to register this product<br>to be able to install templates!</h1>';
        $output.= '<a href="' . $this->register_product_url() . '" class="button button-primary button-hero">Register Product</a>';
        $output.= '</div>';
        echo $output;
    }
    
    function register_product_url() {
        return admin_url('admin.php?page=register-product');
    }
    
    /**
     *
     *
     * Delete macos hidden folder from tempaltes directory
     *
     */
    function abb_delete_directory($dir) {
        if (!file_exists($dir)) return true;
        if (!is_dir($dir)) return unlink($dir);
        foreach (scandir($dir) as $item) {
            if ($item == '.' || $item == '..') continue;
            if (!$this->abb_delete_directory($dir . DIRECTORY_SEPARATOR . $item)) return false;
        }
        return rmdir($dir);
    }
    
    /**
     *
     *
     * Artbees Template Installer
     *
     *
     */
    function abb_install_template_action() {
        
        check_ajax_referer('abb_install_template_nonce', 'abb_install_template_security');
        
        $uploadedfile = $_FILES['file'];
        $upload_overrides = array(
            'test_form' => false
        );
        
        $movefile = wp_handle_upload($uploadedfile, $upload_overrides);
        
        if ($movefile && !isset($movefile['error'])) {
            
            // echo "File is valid, and was successfully uploaded.\n";
            // var_dump( $movefile);
            
            
        } 
        else {
            
            /**
             * Error generated by _wp_handle_upload()
             * @see _wp_handle_upload() in wp-admin/includes/file.php
             */
            echo $movefile['error'];
        }
        
        $upload_dir = wp_upload_dir();
        $file_path = $movefile['file'];
        
    
        WP_Filesystem();
        $destination = $upload_dir['basedir'];
        $destination_path = $destination . '/mk_templates';
        $this->createPath($destination_path);


        $unzipfile = unzip_file( $file_path, $destination_path);
           
       if ( $unzipfile ) {
          echo json_encode('ok');      
       } else {
          echo json_encode('Failed');      
       }

        wp_die();
    }
    
    function abb_delete_template() {
        
        check_ajax_referer('abb_install_template_nonce', 'abb_install_template_security');
        
        $upload_dir = wp_upload_dir();
        $destination = $upload_dir['basedir'];
        $destination_path = $destination . '/mk_templates/';
        $this->abb_delete_directory($destination_path . DIRECTORY_SEPARATOR . $_POST['template']);
        
        echo $this->get_list_of_templates();
        
        wp_die();
    }
    
    function createPath($path) {
        if (is_dir($path)) return true;
        $prev_path = substr($path, 0, strrpos($path, '/', -2) + 1);
        $return = $this->createPath($prev_path);
        return ($return && is_writable($prev_path)) ? mkdir($path) : false;
    }
    
    /**
     *
     *
     * Get list of the imported templates from uploads/templates directory
     *
     *
     */
    function get_list_of_templates() {
        $upload_dir = wp_upload_dir();
        $base_template_dir_scan = $upload_dir['basedir'] . '/mk_templates/*';
        $base_template_dir = $upload_dir['basedir'] . '/mk_templates/';
        $base_template_url = $upload_dir['baseurl'] . '/mk_templates/';
        
        $this->createPath($base_template_dir);
        
        $templates = glob($base_template_dir_scan);
        
        if ($templates) {
            foreach ($templates as $template) {
                echo '
                    <div class="template-item">
                    <form method="post">
                        <input type="hidden" name="template" value="' . basename($template) . '">
                        <div class="template-image">
                            <img src="' . $base_template_url . basename($template) . '/preview.jpg" alt="' . basename($template) . '">
                        </div>
                        <div class="template-meta">
                            <h6>' . basename($template) . '</h6>
                            <div class="checkbox-holder">
                                <label for="contents-checkbox-' . basename($template) . '">
                                    <input type="checkbox" checked="checked" value="contents" id="contents-checkbox-' . basename($template) . '" name="contents">
                                    Contents
                                </label>
                                <label for="widgets-checkbox-' . basename($template) . '">
                                    <input type="checkbox" checked="checked" value="widgets" id="widgets-checkbox-' . basename($template) . '" name="widgets">
                                    Widgets
                                </label>
                                <label for="options-checkbox-' . basename($template) . '">
                                    <input type="checkbox" checked="checked" value="options" id="options-checkbox-' . basename($template) . '" name="options">
                                    Settings
                                </label>
                            </div>
                            <div class="button-holder">
                                <input id="import" type="submit" value="Install" class="button-primary mk-import-content-btn">
                                <a href="http://artbees.net/themes/jupiter/' . basename($template) . '" target="_blank" class="button">' . __('Preview', 'mk_framework') . '</a>
                                <a id="delete" class="button-primary mk-delete-template-btn">' . __('Delete', 'mk_framework') . '</a>
                            </div>
                        </div>
                        <i class="active-ribbon"></i>
                        </form>
                    </div>';
            }
        } 
        else {
            echo '
                <div class="template-item">
                    <div class="template-image">
                        <img src="' . THEME_DIR_URI . '/demo-importer/images/no-template.png" alt="">
                    </div>
                </div>';
        }
    }
    
    /**
     *
     *
     *
     *
     *
     */
    function abb_get_templates_action() {
        
        $this->get_list_of_templates();
        wp_die();
    }
    
    function abb_import_demo_action() {
        include_once (THEME_DIR . '/demo-importer/content_importer.php');
        parse_str($_POST["options"], $options);
        if (!empty($options['template'])) {
            
            $content_importer = new ContentImporter($_POST["options"]);
            $content_importer->import();
            
            $options['template'] = '';
            
            wp_die();
        }
    }
    
    /**
     *
     *
     *
     *
     *
     */
    function install_template_warnings() {
        
        $max_execution_time = ini_get("max_execution_time");
        $max_input_time = ini_get("max_input_time");
        $upload_max_filesize = ini_get("upload_max_filesize");
        
        if ($max_execution_time < 60 || $max_input_time < 60 || $this->nummerize(WP_MEMORY_LIMIT) < 100663296 || $this->nummerize($upload_max_filesize) < 10485760) {
            
            echo '<div class="error settings-error">';
            
            echo '<br><strong>Please resolve these issues before installing any template.</strong>';
            echo '<ol>';
            if ($max_execution_time < 60) {
                echo '<li><strong>Maximum Execution Time (max_execution_time) : </strong>' . $max_execution_time . ' seconds. <span style="color:red"> Recommended max_execution_time should be at least 60 Seconds.</span></li>';
            }
            if ($max_input_time < 60) echo '<li><strong>Maximum Input Time (max_input_time) : </strong>' . $max_input_time . ' seconds. <span style="color:red"> Recommended max_input_time should be at least 60 Seconds.</span></li>';
            if ($this->nummerize(WP_MEMORY_LIMIT) < 100663296) {
                echo '<li><strong>WordPress Memory Limit (WP_MEMORY_LIMIT) : </strong>' . WP_MEMORY_LIMIT . ' <span style="color:red"> Recommended memory limit should be at least 96MB. Please refer to : <a target="_blank" href="http://codex.wordpress.org/Editing_wp-config.php#Increasing_memory_allocated_to_PHP">Increasing memory allocated to PHP</a> for more information</span></li>';
            }
            if ($this->nummerize($upload_max_filesize) < 10485760) {
                echo '<li><strong>Maximum Upload File Size (upload_max_filesize) : </strong>' . $upload_max_filesize . ' <span style="color:red"> Recommended Maximum Upload Filesize should be at least 10MB.</li>';
            }
            
            echo '</ol>';
            
            echo '</div>';
        }
        
        echo '<div class="import_message"></div>';
    }
    
    function nummerize($size) {
        $let = substr($size, -1);
        $ret = substr($size, 0, -1);
        switch (strtoupper($let)) {
            case 'P':
                $ret*= 1024;
            case 'T':
                $ret*= 1024;
            case 'G':
                $ret*= 1024;
            case 'M':
                $ret*= 1024;
            case 'K':
                $ret*= 1024;
        }
        return $ret;
    }
}

new mk_artbees_products();
