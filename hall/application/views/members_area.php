<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
echo "members area";
echo print_r($this->session->all_userdata());
echo anchor('sites/log_out','logout');

?>

