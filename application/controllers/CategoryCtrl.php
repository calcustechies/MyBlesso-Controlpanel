<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CategoryCtrl extends CI_Controller
{

    //VIEW CATEGORY
    public function viewcategory()
{

    $userId =$this->session->userdata('RootID');
    

    $apiPrefix = $this->config->item('url_prefix');
    $result= $this->ctlib->url($apiPrefix .'DisplayjobCategories/0');
   //echo $result; 
    //print_r($result);



        $draw = intval($this->input->get("draw"));


        //Decode received data
        $viewcategory = json_decode($result, true);
        $count_of_category = count($viewcategory['JobCategories']);

        $data = [];
        for ($j = 0; $j < $count_of_category ; $j++) {

            $jobCategoryID  = $viewcategory['JobCategories'][$j]['jobCategoryID'];
            $jobCategoryName =  $viewcategory['JobCategories'][$j]['jobCategoryName'];

            $jobCategoryAddedBY =  $viewcategory['JobCategories'][$j]['jobCategoryAddedBY'];
            $jobCategoryAddedTS =  $viewcategory['JobCategories'][$j]['jobCategoryAddedTS'];
            $jobCatImg =  $viewcategory['JobCategories'][$j]['jobCatImg'];
            $freeze =  $viewcategory['JobCategories'][$j]['freeze'];
            // $advertisementUpdateDate =  $viewcategory['Advt'][$j]['advertisementUpdateDate'];

            // $advertisementCreateDate =  $viewcategory['Advt'][$j]['advertisementCreateDate'];
            // $advertisementLink =  $viewcategory['Advt'][$j]['advertisementLink'];
            // $advertisementFreeze =  $viewcategory['Advt'][$j]['advertisementFreeze'];
            
            
            $image =base_url().'uploads/category/'.$jobCatImg;

            $image1 ='<img src="'.$image.'" height="50" width="50"/>';

           // $link = '<a href="'.$advertisementLink.'" target=_blank>'.$advertisementLink.'</a>';
            
        
       
        // $operation = '<a href="'.base_url('Editadvertisement/'.$advertisementId).'" class="btn btn-icon btn-primary"><i class="fe fe-edit"></i></a><a href="'.base_url('Viewadvertisement/'.$advertisementId).'" class="btn btn-icon btn-warning"><i class="fe fe-eye"></i></a>';

        $operation = '<a href="'.base_url('Editcategory/'.$jobCategoryID).'" class="btn btn-icon btn-primary"><i class="fe fe-edit"></i></a>';

        if($freeze ==0)
        {
            $operation .= '<button type="button" class="btn btn-icon btn-purple"><i class="fe fe-zap" id="freeze_'. $jobCategoryID.'"  onclick="show_freeze_details(this.id)" ></i>';
        }
        else{
            $operation .= '<button type="button" class="btn btn-icon btn-success"><i class="fe fe-zap" id="freeze_'. $jobCategoryID.'"  onclick="show_freeze_details(this.id)"></i></button> ';
        }

        // $operation .= '<button type="button" class="btn btn-icon btn-danger"><i class="fe fe-trash" id="delete_'.$jobCategoryID.'"  onclick="show_delete_details(this.id)"></i></button>';

        $hidden_fields ='<input type="hidden" id="Freeze_' . $jobCategoryID . '" value="'. $freeze.'">';
    
        



            $data[] = array(
                $jobCategoryID,
                $jobCategoryName,
                $image1,
                // $link,
                $operation,
                $hidden_fields
           
            );

         }

        $result = array(
            "draw" => $draw,
            "recordsTotal" =>  $count_of_category,
            "recordsFiltered" => $count_of_category,
            "data" => $data
        );
        echo json_encode($result);
        exit();



}


//INSERT VALUES OF category
public function addcategory()

{
    
    $jobCategoryID ='0';
    $jobCategoryAddedBY  = $this->session->userdata('RootID');
    
    $jobCategoryName     = $this->input->post('catname');



    if (isset($_FILES['c_img']) && $_FILES['c_img']['size'] > 0) {

        $config_1['upload_path'] = "./uploads/category/";

        $config_1['allowed_types'] = 'gif|jpg|png|jpeg';

        $config_1['max_size'] = 6000;
    
        $config_1['max_width'] = 6000;

        $config_1['max_height'] = 6000;

        $config_1['encrypt_name'] = TRUE;

        $this->load->library('upload', $config_1);

        $this->upload->do_upload('c_img');

        $uploadData_1 = $this->upload->data();

        $c_img = $uploadData_1['file_name'];
        }else
        {
            $c_img=0;
        }

       // echo "<script>alert('$c_img');</script>";
              $apiPrefix = $this->config->item('url_prefix');

                $result = $this->ctlib->url($apiPrefix .'jobCatUpsert?jobCategoryName='.$jobCategoryName.'&jobCategoryAddedBY='.$jobCategoryAddedBY.'&jobCatImg='.$c_img.'&jobCategoryID='.$jobCategoryID);


  redirect(base_url() . 'Category');
}


//Update VALUES OF category
public function updatecategory()

{
    
    $jobCategoryID =    $this->input->post('catID');
    $jobCategoryAddedBY  = $this->session->userdata('RootID');
    
    $jobCategoryName     = $this->input->post('catname');



    if (isset($_FILES['updateimage']) && $_FILES['updateimage']['size'] > 0) {

        $config_1['upload_path'] = "./uploads/category/";

        $config_1['allowed_types'] = 'gif|jpg|png|jpeg';

        $config_1['max_size'] = 6000;
    
        $config_1['max_width'] = 6000;

        $config_1['max_height'] = 6000;

        $config_1['encrypt_name'] = TRUE;

        $this->load->library('upload', $config_1);

        $this->upload->do_upload('updateimage');

        $uploadData_1 = $this->upload->data();

        $updateimage = $uploadData_1['file_name'];
        }else
        {
            $updateimage=$this->input->post('oldimage');
        }

        //echo "<script>alert('$updateimage');</script>";
              $apiPrefix = $this->config->item('url_prefix');

                $result = $this->ctlib->url($apiPrefix .'jobCatUpsert?jobCategoryName='.$jobCategoryName.'&jobCategoryAddedBY='.$jobCategoryAddedBY.'&jobCatImg='.$updateimage.'&jobCategoryID='.$jobCategoryID);


 redirect(base_url() . 'Category');
}


//freeze datas
public function freeze_details()
    {
        $fzValue                  = $this->input->post('fzValue');
        $categoryID               = $this->input->post('categoryID');
        $apiPrefix = $this->config->item('url_prefix');

        $result = $this->ctlib->url($apiPrefix .'freezeOrUnfreeze/'.$categoryID.'/'.$fzValue);

 
         echo $result;
    }





}