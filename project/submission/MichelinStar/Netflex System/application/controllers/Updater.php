<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 *  @author   : Creativeitem
 *  date    : 14 september, 2017
 *  http://codecanyon.net/user/Creativeitem
 *  http://support.creativeitem.com
 */

class Updater extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');

        /*cache control*/
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');

    }

    /***default functin, redirects to login page if no admin logged in yet***/
    public function index()
    {
        if ($this->session->userdata('login_type') != 1)
            redirect(base_url().'index.php?home/signin' , 'refresh');
        if ($this->session->userdata('login_type') == 1)
            redirect(base_url().'index.php?admin/dashboard' , 'refresh');
    }

    /***** UPDATE PRODUCT *****/

    function update($task = '', $purchase_code = '')
    {
        if ($this->session->userdata('login_type') != 1)
            redirect(base_url(), 'refresh');

        // Create update directory.
        $dir = 'update';
        if (!is_dir($dir))
            mkdir($dir, 0777, true);

        $zipped_file_name = $_FILES["file_name"]["name"];
        $path = 'update/' . $zipped_file_name;

        move_uploaded_file($_FILES["file_name"]["tmp_name"], $path);

        // Unzip uploaded update file and remove zip file.
        $zip = new ZipArchive;
        $res = $zip->open($path);
        if ($res === TRUE) {
            $zip->extractTo('update');
            $zip->close();
            unlink($path);
        }

        $unzipped_file_name = substr($zipped_file_name, 0, -4);
        $str = file_get_contents('./update/' . $unzipped_file_name . '/update_config.json');
        $json = json_decode($str, true);


        // Run php modifications
        require './update/' . $unzipped_file_name . '/update_script.php';

        // Create new directories.
        if (!empty($json['directory'])) {
            foreach ($json['directory'] as $directory) {
                if (!is_dir($directory['name']))
                    mkdir($directory['name'], 0777, true);
            }
        }

        // Create/Replace new files.
        if (!empty($json['files'])) {
            foreach ($json['files'] as $file)
                copy($file['root_directory'], $file['update_directory']);
        }

        $this->session->set_flashdata('flash_message', get_phrase('product_updated_successfully'));
        redirect(site_url('index.php?admin/settings'));
    }

}
