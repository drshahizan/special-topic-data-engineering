<?php
$selected_theme	= $this->crud_model->get_active_theme();
include $selected_theme . '/index.php';
?>