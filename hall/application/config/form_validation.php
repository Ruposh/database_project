<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$config = array(
               'signup'=>array(
                   array(
                     'field'   => 'studentid',
                     'label'   => 'Studentid',
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'password',
                     'label'   => 'Password',
                     'rules'   => 'required|min_length[6]'
                  ),
               array(
                     'field'   => 'messno',
                     'label'   => 'Messno',
                     'rules'   => 'required|min_length[4]'
                  ),   
               array(
                     'field'   => 'email',
                     'label'   => 'Email',
                     'rules'   => 'required|valid_email'
                  )
            )
    )
?>
