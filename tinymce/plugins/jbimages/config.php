<?php
	$config['img_path'] = '/images'; 
	$config['upload_path'] = $_SERVER['DOCUMENT_ROOT'] . $config['img_path']; 
	$config['allowed_types'] = 'gif|jpg|png';
	$config['max_size'] = 0;
	$config['max_width'] = 0;
	$config['max_height'] = 0;
	$config['allow_resize'] = TRUE;
	$config['encrypt_name'] = FALSE;
	$config['overwrite'] = FALSE;
?>