<?php
if ( ! defined('BASEPATH'))
exit('No direct script access allowed');

	class Blog extends CI_Controller {
		function __construct(){
			parent::__construct();
		}

		function index(){
			echo "blogoblog";
		}
    }
    
?>
