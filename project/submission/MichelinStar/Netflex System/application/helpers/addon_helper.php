<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* CodeIgniter
*
* An open source application development framework for PHP 5.1.6 or newer
*
* @package		CodeIgniter
* @author		ExpressionEngine Dev Team
* @copyright	Copyright (c) 2008 - 2011, EllisLab, Inc.
* @license		http://codeigniter.com/user_guide/license.html
* @link		http://codeigniter.com
* @since		Version 1.0
* @filesource
*/

/* CHECK THE ADDON STATUS */
if (! function_exists('addon_status')) {
    function addon_status($unique_identifier = '') {
        $CI	=&	get_instance();
        $CI->load->database();
        $result = $CI->db->get_where('addons', array('unique_identifier' => $unique_identifier));
        if ($result->num_rows() > 0) {
            $result = $result->row_array();
            return $result['status'];
        }else{
            return 0;
        }
    }
}

// ------------------------------------------------------------------------
/* End of file addon_helper.php */
/* Location: ./system/helpers/common.php */
