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
            ),
            'createterm'=>array(
                 array(
                     'field'   => 'start_date',
                     'label'   => 'start_date',
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'end_date',
                     'label'   => 'end_date',
                     'rules'   => 'required'
                  )
            ),
            'createmonth'=>array(
                array(
                     'field'   => 'start_date',
                     'label'   => 'start_date',
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'end_date',
                     'label'   => 'end_date',
                     'rules'   => 'required'
                  ),
                array(
                     'field'   => 'deadline',
                     'label'   => 'deadline',
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'charge',
                     'label'   => 'charge',
                     'rules'   => 'required'
                  )
            ),
            'newpayment'=>array(
                array(
                     'field'   => 'studentid',
                     'label'   => 'STUDENTID',
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'scroll',
                     'label'   => 'SCROLL',
                     'rules'   => 'required'
                  ),
                array(
                     'field'   => 'amount',
                     'label'   => 'AMOUNT',
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'paydate',
                     'label'   => 'PAYDATE',
                     'rules'   => 'required'
                  )
            )
    )
?>
