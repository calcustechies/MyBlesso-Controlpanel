
				<div class="app-content">
					<div class="side-app">

		<?php 
         $viewAdvertisement=json_decode($viewAdvertisements,true);
		 //$count_of_advertisement=count($viewAdvertisement['Advt']);
		 $advertisementId=$viewAdvertisement['Advt'][0]['advertisementId'];
		 $advertisementImage=$viewAdvertisement['Advt'][0]['advertisementImage'];
		 $advertisementTitle=$viewAdvertisement['Advt'][0]['advertisementTitle'];
		 $advertisementTitleDescription=$viewAdvertisement['Advt'][0]['advertisementTitleDescription'];
		 $advertisementUpdateDate=$viewAdvertisement['Advt'][0]['advertisementUpdateDate'];
		 $advertisementCreateDate=$viewAdvertisement['Advt'][0]['advertisementCreateDate'];
		 $advertisementLink=$viewAdvertisement['Advt'][0]['advertisementLink'];
		 $advertisementFreeze=$viewAdvertisement['Advt'][0]['advertisementFreeze'];
         
		?>
		

						<div class="page-header">
							<h4 class="page-title">ADVERTISEMENT</h4>
							<form class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url('UpdateAdvertisement')?>" method="POST">
							<input type="submit" class="btn btn-primary" value="SAVE"> 
							
							
						</div>
					
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">EDIT ADVERTISEMENT</h3>
		

									</div>
									<div class="card-body">
										<div class="input-group mb-3">
											

											<div class="input-group mb-3">
												<label class="control-label col-md-3 col-sm-3 col-xs-3 mt-2">TITLE</label>
												<div class="col-md-9 col-sm-9 col-xs-9">
													<input type="text" class="form-control" name="title" value="<?php echo $advertisementTitle;?>">
													<span class=" form-control-feedback right" aria-hidden="true"></span>
													<input type="hidden" name="advID" value="<?php echo $advertisementId;?>">
												</div>
											</div>
											<div class="input-group mb-3">
												<label class="control-label col-md-3 col-sm-3 col-xs-3 mt-2">DESCRIPTION</label>
												<div class="col-md-9 col-sm-9 col-xs-9">
													<input type="text" class="form-control" name="des" value="<?php echo $advertisementTitleDescription;?>">
													<span class=" form-control-feedback right" aria-hidden="true"></span>
												</div>
											</div>
											<div class="input-group mb-3">
												<label class="control-label col-md-3 col-sm-3 col-xs-3 mt-2">LINK</label>
												<div class="col-md-9 col-sm-9 col-xs-9">
													<input type="text" class="form-control" name="link" value="<?php echo $advertisementLink;?>">
													<span class="form-control-feedback right" aria-hidden="true"></span>
												</div>
											</div>

											<div class="input-group mb-3">
												<label class="control-label col-md-3 col-sm-3 col-xs-3 mt-2">Image</label>
												<div class="col-md-9 col-sm-9 col-xs-9">
						<img src="<?php echo base_url('uploads/' . $advertisementImage . ''); ?>" style="width:200px;height:200px;">
													<span class="form-control-feedback right" aria-hidden="true"></span>
												</div>
											</div>
											
											<div class="input-group mb-3">
											
											<div class="custom-file">
								<input type="file"  name="updateimage">
								<input type="hidden" name="oldimage" value="<?php echo $advertisementImage;?> ">
												<!-- <label class="custom-file-label">Choose file</label> -->
											</div>
									
									</div>
		
									</div>
								</div>
								
								
						</form>
								
								
						</div>
					</div>
				</div>
			</div>
           