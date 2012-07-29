<?php

if (!defined('BASEPATH'))
    exit('No direct script allowed!');


/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user
 *
 * @author satriaprayoga
 */
class User extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('doctrine');
    }

    function index() {
        $users=$this->doctrine->em->getRepository('models\User')->findAll();
        $this->load->view('user', array('user' => $users)); 
       /**
        * $user = new models\User();
        $user->setUsername('juned');
        $user->setPassword('asdqwe123');
        $user->setEmail('juned@gmail.com');
        $this->doctrine->em->persist($user);
        $this->doctrine->em->flush();
        $this->load->view('user', array('user' => $user)); 
        */
    }
    
    function add(){
        $user=new models\User();
        $this->doctrine->em->persist($user);
        $this->doctrine->em->flush();
    }

}