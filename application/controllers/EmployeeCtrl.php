<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeCtrl extends CI_Controller {

    // DISPLAY JOB DETAILS  IN DATA TABLE
    public function Employeedetails()
    {

        // userDetailsID 
        // $userType
        $apiPrefix = $this->config->item('url_prefix');
        $result = $this->ctlib->url($apiPrefix.'displayUserDetails/0/2');
       //print_r($result); 

        $draw = intval($this->input->get("draw"));
        // $start = intval($this->input->get("start"));
        // $length = intval($this->input->get("length"));

        //$HNDatas = $this->hospitallib->ViewHospitalNetworks();
        $usersDetail = json_decode($result, true);
        $countOfuser= count($usersDetail['UsersDetails:']);

        
        $data = [];
        //$k=1;

        for ($i = 0; $i<$countOfuser; $i++) {
            $userDetailsID = $usersDetail['UsersDetails:'][$i]['userDetailsID'];
            $userGender = $usersDetail['UsersDetails:'][$i]['userGender'];
            $userDOB = $usersDetail['UsersDetails:'][$i]['userDOB'];
            $userContactNumber = $usersDetail['UsersDetails:'][$i]['userContactNumber'];
            $userEmail = $usersDetail['UsersDetails:'][$i]['userEmail'];
            $userAddress = $usersDetail['UsersDetails:'][$i]['userAddress'];
            $userReferalCode = $usersDetail['UsersDetails:'][$i]['userReferalCode'];
            $userFirstName = $usersDetail['UsersDetails:'][$i]['userFirstName'];
            $userLastName = $usersDetail['UsersDetails:'][$i]['userLastName'];
            $userQualification = $usersDetail['UsersDetails:'][$i]['userQualification'];
            $userLastLoginDateTime = $usersDetail['UsersDetails:'][$i]['userLastLoginDateTime'];
            $userVerified = $usersDetail['UsersDetails:'][$i]['userVerified'];
            //$ClubName = $viewjobdetails['Display Jobs'][$i]['ClubName'];
            $name=$userFirstName.' '.$userLastName;
           $LastLoginDate=date('d-m-Y', strtotime($userLastLoginDateTime) );
            
          
            

           

            $data[] = array(
                $userDetailsID,
                $name,
                $userQualification,
                $userContactNumber,
                $userReferalCode,
                $userVerified,
                $LastLoginDate
             
            );
            //    $k++;
        }
        $result = array(
            "draw" => $draw,
             "recordsTotal" => $countOfuser,
             "recordsFiltered" => $countOfuser,
             "data" => $data
         );
        echo json_encode($result);
        exit();


    }
}