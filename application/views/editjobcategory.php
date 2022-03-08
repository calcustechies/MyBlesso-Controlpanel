
				<div class="app-content">
					<div class="side-app">

		<?php 
         $DisplayjobCategory=json_decode($DisplayjobCategories,true);
		 //$count_of_advertisement=count($viewAdvertisement['Advt']);
		 $jobCategoryID          =  $DisplayjobCategory['JobCategories'][0]['jobCategoryID'];
		 $jobCategoryName        =  $DisplayjobCategory['JobCategories'][0]['jobCategoryName'];
		 $jobCategoryAddedBY     =  $DisplayjobCategory['JobCategories'][0]['jobCategoryAddedBY'];
		 $jobCategoryAddedTS     =  $DisplayjobCategory['JobCategories'][0]['jobCategoryAddedTS'];
		 $jobCatImg              =  $DisplayjobCategory['JobCategories'][0]['jobCatImg'];
		//  $advertisementCreateDate=$viewAdvertisement['Advt'][0]['advertisementCreateDate'];
		//  $advertisementLink=$viewAdvertisement['Advt'][0]['advertisementLink'];
		//  $advertisementFreeze=$viewAdvertisement['Advt'][0]['advertisementFreeze'];

		$dateTime = new DateTime($jobCategoryAddedTS, new DateTimeZone('Asia/Kolkata'));
		$DateTime	= $dateTime->format("d/m/Y  h:i A");
         
		?>
		

						<div class="page-header">
							<h4 class="page-title">Category</h4>
							<form class="form-horizontal" enctype="multipart/form-data" action="<?php echo base_url('CategoryCtrl/updatecategory')?>" method="POST">
							<input type="submit" class="btn btn-primary" value="SAVE"> 
							
							
						</div>
					
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">EDIT Category</h3>
		

									</div>
									<div class="card-body">
										<div class="input-group mb-3">
											

											<div class="input-group mb-3">
												<label class="control-label col-md-3 col-sm-3 col-xs-3 mt-2">Category Name</label>
												<div class="col-md-9 col-sm-9 col-xs-9">
													<input type="text" class="form-control" name="catname" value="<?php echo $jobCategoryName;?>">
													<span class=" form-control-feedback right" aria-hidden="true"></span>
													<input type="hidden" name="catID" value="<?php echo $jobCategoryID;?>">
												</div>
											</div>
											<div class="input-group mb-3">
												<label class="control-label col-md-3 col-sm-3 col-xs-3 mt-2">Uploaded Time</label>
												<div class="col-md-9 col-sm-9 col-xs-9">
													<input type="text" class="form-control" name="des" value="<?php echo $DateTime;?>" readonly>
													<span class=" form-control-feedback right" aria-hidden="true"></span>
												</div>
											</div>
											<!-- <div class="input-group mb-3">
												<label class="control-label col-md-3 col-sm-3 col-xs-3 mt-2">LINK</label>
												<div class="col-md-9 col-sm-9 col-xs-9">
													<input type="text" class="form-control" name="link" value="<?php //echo $advertisementLink;?>">
													<span class="form-control-feedback right" aria-hidden="true"></span>
												</div>
											</div> -->

											<div class="input-group mb-3">
												<label class="control-label col-md-3 col-sm-3 col-xs-3 mt-2">Image</label>
												<div class="col-md-9 col-sm-9 col-xs-9">
						<img src="<?php echo base_url('uploads/category/' . $jobCatImg . ''); ?>" style="width:200px;height:200px;">
													<span class="form-control-feedback right" aria-hidden="true"></span>
												</div>
											</div>
											
											<div class="input-group mb-3">
											
											<div class="custom-file">
								<input type="file"  name="updateimage">
								<input type="hidden" name="oldimage" value="<?php echo $jobCatImg;?> ">
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
           