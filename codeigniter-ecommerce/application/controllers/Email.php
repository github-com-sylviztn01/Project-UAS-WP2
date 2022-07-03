<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Email extends CI_Controller
{

    public function index()
    {
        $config['protocol']  = 'smtp';
        $config['smtp_host'] = 'sylviztn@.gmail.com';
        $config['smtp_port'] = 587;
        $config['smtp_user'] = 'sylvi@gmail.com';
        $config['smtp_pass'] = 'hellokitty';

        // Load email library and passing configured values to email library
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");

        // Sender email address
        $this->email->from('xxx@gmail.com', 'ss');
        // Receiver email address
        $this->email->to('sylviztn@gmail.com');
        // Subject of email
        $this->email->subject('subject');
        // Message in email
        $this->email->message('Message Send Here');
        $this->email->send();
        $this->email->print_debugger(array('headers'));
    }

}
