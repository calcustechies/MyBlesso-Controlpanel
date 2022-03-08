<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JobCtrl extends CI_Controller {

    // DISPLAY JOB DETAILS  IN DATA TABLE
    public function jobViewdetails()
    {
        
        $apiPrefix = $this->config->item('url_prefix');
        
        //$data= $this->ctlib->url($apiPrefix .'Pagination/');
       // $Paginations=json_decode($data,true);
        //$count=$Paginations['Pagination'][0]['count'];
        $result= $this->ctlib->url($apiPrefix .'JobSearch?SearchText=0&JobPostCat=0&JobPostType=0&JobPostMinSalary=0&JobPostMaxSalary=0&JobPostStateID=0&JobPostDistrictID=0&page_no=1&page_limit=1000&userpin=0');
       // print_r($result);


        $draw = intval($this->input->get("draw"));
         // $start = intval($this->input->get("start"));
         // $length = intval($this->input->get("length"));
 
         //$HNDatas = $this->hospitallib->ViewHospitalNetworks();
         $viewjobdetails = json_decode($result, true);
         $countOfjob= count($viewjobdetails['SearchJobs']);
 
         
         $data = [];
         $k=1;
 
         for ($i = 0; $i < $countOfjob; $i++) {
             $JobPostID = $viewjobdetails['SearchJobs'][$i]['JobPostID'];
             $JobPostTitle = $viewjobdetails['SearchJobs'][$i]['JobPostTitle'];
             $jobCategory = $viewjobdetails['SearchJobs'][$i]['jobCategoryName'];
             $jobTypeName = $viewjobdetails['SearchJobs'][$i]['jobTypeName'];
             
             $DistrictName = $viewjobdetails['SearchJobs'][$i]['DistrictName'];
             $JobPostLocality = $viewjobdetails['SearchJobs'][$i]['JobPostLocality'];
             $userQualification = $viewjobdetails['SearchJobs'][$i]['userQualification'];
             $JobPostHiringFor = $viewjobdetails['SearchJobs'][$i]['JobPostHiringFor'];
            //  $userFirstName = $viewjobdetails['SearchJobs'][$i]['userFirstName'];
            //  $userLastName = $viewjobdetails['SearchJobs'][$i]['userLastName'];
             //$ClubName = $viewjobdetails['Display Jobs'][$i]['ClubName'];
           
             //$eventdate=date('Y-m-d', strtotime($eventsDateTime) );
             
           
             
            $JobPostTitle ='<a href="'.base_url('viewJobDetails/').$JobPostID.'">'.$JobPostTitle.'</a>';
            
 
             $data[] = array(
                 $k,
                 $JobPostTitle,
                 $jobCategory,
                 $jobTypeName,
                 $JobPostLocality,
                 $JobPostHiringFor
              
             );
            // $data[] = array(
            //      "1",
            //      "sd",
            //      "df",
            //      "fd",
            //      "dfd",
            //      "fddf"
              
            //  );
                $k++;
         }
         $result = array(
             "draw" => $draw,
              "recordsTotal" => $countOfjob,
              "recordsFiltered" => $countOfjob,
              "data" => $data
          );
         echo json_encode($result);
         exit();
    }



         public function viewOneJobDeatils()
    {
        
        $apiPrefix = $this->config->item('url_prefix');
        
      $postID = $this->input->post('postID');
      
       $result= $this->ctlib->url($apiPrefix .'DisplayPostedJobsWithFilter/0/0/0/0/0/'.$postID.'/0/99');
       
       echo $result;
    }
}