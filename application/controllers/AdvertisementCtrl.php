<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdvertisementCtrl extends CI_Controller
{

    //INSERT VALUES OF ADVERTISEMENT
    public function addAdvertisement()

    {
        
        $advertisementId ='0';
        $userId  = $this->session->userdata('RootID');
        
        $advertisementTitle     = $this->input->post('advtitle');
        $advertisementTitleDescription = $this->input->post('advdescription');
        $advertisementLink      =  $this->input->post('advlink');
        
       
         

        if (isset($_FILES['a_img']) && $_FILES['a_img']['size'] > 0) {

            $config_1['upload_path'] = "./uploads/";

            $config_1['allowed_types'] = 'gif|jpg|png|jpeg';

            $config_1['max_size'] = 6000;
        
            $config_1['max_width'] = 6000;

            $config_1['max_height'] = 6000;

            $config_1['encrypt_name'] = TRUE;

            $this->load->library('upload', $config_1);

            $this->upload->do_upload('a_img');

            $uploadData_1 = $this->upload->data();

            $a_img = $uploadData_1['file_name'];
            }else
            {
                $a_img=0;
            }

    // echo "<script>alert('$a_img');</script>";
                  $apiPrefix = $this->config->item('url_prefix');

                    $result = $this->ctlib->url($apiPrefix .'postManageAdvt?advertisementId='.$advertisementId.'&userId='.$userId.'&advertisementImage='.$a_img.'&advertisementTitle='.$advertisementTitle.'&advertisementTitleDescription='.$advertisementTitleDescription.'&advertisementLink='.$advertisementLink);
///print_r( $result);

      redirect(base_url() . 'Advertisement');
    }


public function viewadvertisement()
{

    $userId =$this->session->userdata('RootID');
    

    $apiPrefix = $this->config->item('url_prefix');
    $result= $this->ctlib->url($apiPrefix .'DisplayAdvertisement/'.$userId.'/0/0');
   //echo $result; 
    //print_r($result);



        $draw = intval($this->input->get("draw"));


        //Decode received data
        $viewAdvertisements = json_decode($result, true);
        $count_of_advertisement = count($viewAdvertisements['Advt']);

        $data = [];
        for ($j = 0; $j < $count_of_advertisement ; $j++) {

            $advertisementId  = $viewAdvertisements['Advt'][$j]['advertisementId'];
            $userId =  $viewAdvertisements['Advt'][$j]['userId'];

            $advertisementImage =  $viewAdvertisements['Advt'][$j]['advertisementImage'];
            $advertisementTitle =  $viewAdvertisements['Advt'][$j]['advertisementTitle'];
            $advertisementTitleDescription =  $viewAdvertisements['Advt'][$j]['advertisementTitleDescription'];
            $advertisementUpdateDate =  $viewAdvertisements['Advt'][$j]['advertisementUpdateDate'];

            $advertisementCreateDate =  $viewAdvertisements['Advt'][$j]['advertisementCreateDate'];
            $advertisementLink =  $viewAdvertisements['Advt'][$j]['advertisementLink'];
            $advertisementFreeze =  $viewAdvertisements['Advt'][$j]['advertisementFreeze'];
            
            
            $image =base_url().'uploads/'.$advertisementImage;

            $image1 ='<img src="'.$image.'" height="50" width="50"/>';

            $link = '<a href="'.$advertisementLink.'" target=_blank>'.$advertisementLink.'</a>';
            
        
       
        $operation = '<a href="'.base_url('Editadvertisement/'.$advertisementId).'" class="btn btn-icon btn-primary"><i class="fe fe-edit"></i></a><a href="'.base_url('Viewadvertisement/'.$advertisementId).'" class="btn btn-icon btn-warning"><i class="fe fe-eye"></i></a>';

        if($advertisementFreeze ==0)
        {
            $operation .= '<button type="button" class="btn btn-icon btn-purple"><i class="fe fe-zap" id="freeze_'. $advertisementId.'"  onclick="show_freeze_details(this.id)" ></i>';
        }
        else{
            $operation .= '<button type="button" class="btn btn-icon btn-success"><i class="fe fe-zap" id="freeze_'. $advertisementId.'"  onclick="show_freeze_details(this.id)"></i></button> ';
        }

        $operation .= '<button type="button" class="btn btn-icon btn-danger"><i class="fe fe-trash" id="delete_'.$advertisementId.'"  onclick="show_delete_details(this.id)"></i></button>';

        $hidden_fields ='<input type="hidden" id="adFreeze_' . $advertisementId . '" value="' . $advertisementFreeze.'">';
    
        



            $data[] = array(
                $advertisementTitle,
                $advertisementTitleDescription,
                $image1,
                $link,
                $operation,
                $hidden_fields
           
            );

         }

        $result = array(
            "draw" => $draw,
            "recordsTotal" =>  $count_of_advertisement,
            "recordsFiltered" => $count_of_advertisement,
            "data" => $data
        );
        echo json_encode($result);
        exit();



}


//INSERT VALUES OF ADVERTISEMENT
public function updateAdvertisement()

{
    
    $advertisementId =$this->input->post('advID');
    $userId  = $this->session->userdata('RootID');
    
    $advertisementTitle     = $this->input->post('title');
    $advertisementTitleDescription = $this->input->post('des');
    $advertisementLink      =  $this->input->post('link');
    
     

    if (isset($_FILES['updateimage']) && $_FILES['updateimage']['size'] > 0) {

        $config_1['upload_path'] = "./uploads/";

        $config_1['allowed_types'] = 'gif|jpg|png|jpeg';

        $config_1['max_size'] = 6000;
    
        $config_1['max_width'] = 6000;

        $config_1['max_height'] = 6000;

        $config_1['encrypt_name'] = TRUE;

        $this->load->library('upload', $config_1);

        $this->upload->do_upload('updateimage');

        $uploadData_1 = $this->upload->data();

        $updateimage = $uploadData_1['file_name'];
        }
        else
         {
         $updateimage=$this->input->post('oldimage');
         }

        //echo"<script>alert('$updateimage');</script>";
      
               $apiPrefix = $this->config->item('url_prefix');

                $result = $this->ctlib->url($apiPrefix .'postManageAdvt?advertisementId='.$advertisementId.'&userId='.$userId.'&advertisementImage='.$updateimage.'&advertisementTitle='.$advertisementTitle.'&advertisementTitleDescription='.$advertisementTitleDescription.'&advertisementLink='.$advertisementLink);
    //print_r($result);

  redirect(base_url() . 'Advertisement');
}

//freeze datas
public function freeze_test_details()
    {
        $fzValue                  = $this->input->post('fzValue');
        $advertisementId          = $this->input->post('advertisementId');
        $apiPrefix = $this->config->item('url_prefix');

        $result = $this->ctlib->url($apiPrefix .'Freeze/'.$advertisementId.'/'.$fzValue);

 
        echo $result;
    }

    
//freeze datas
public function deleteDetails()
{
    
    $advertisementId          = $this->input->post('advertisementId');
    $apiPrefix                = $this->config->item('url_prefix');

    $result = $this->ctlib->url($apiPrefix .'Delete/'.$advertisementId);


    echo $result;
}


}