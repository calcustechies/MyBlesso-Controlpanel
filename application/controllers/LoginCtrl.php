<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginCtrl extends CI_Controller
{
     //LOGIN
     public function login()
     {
        // echo "<script>alert('hai');</script>";
         $apiPrefix = $this->config->item('url_prefix');
 
         
         $UserName = $this->input->post('UserName');
         $Password = $this->input->post('Password');
         $result= $this->ctlib->url($apiPrefix.'userLogin?UserName='.$UserName.'&Password='.$Password);
         echo $result;
   
     }

     //SET SESSION AFTER SUCCESFUL LOGIN
    public function setSession()
    {
        $token = $this->input->post('token');
        $rootID = $this->input->post('rootID');
        $rootFirstName = $this->input->post('rootFirstName');
        $rootLastName = $this->input->post('rootLastName');
        $rootUserName = $this->input->post('rootUserName');
        $rootLastLogin = $this->input->post('rootLastLogin');
        //$sessMemberZoneID = $this->input->post('sessMemberZoneID');
        


        $this->session->set_userdata('Token', $token);
        $this->session->set_userdata('RootID', $rootID);
        //$this->session->set_userdata('FirstName', $rootFirstName);
        $this->session->set_userdata('UserName', $rootUserName);
        // $this->session->set_userdata('sessMemberSubRoleID',  $sessMemberSubRoleID);
        // $this->session->set_userdata('sessMemberRegionID',  $sessMemberRegionID);
        // $this->session->set_userdata('sessMemberZoneID',  $sessMemberZoneID);

        
        echo "True";
    }


    //to destroy the session
    function logout()
    {

        $this->session->unset_userdata('Token');
        $this->session->unset_userdata('RootID');
        $this->session->sess_destroy();
        redirect(base_url()."Index");
        //echo "LOGOUT";
    }

    //List of Groups in headerindex

}