

				<div class="app-content">
					<div class="side-app">
						<div class="page-header">
							<h4 class="page-title">ADVERTISEMENT</h4>
							<a href="<?php echo base_url('Addadvertisement');?>" class="btn btn-primary"  ><i class="fe fe-plus mr-2"></i> ADD NEW
                            </a>
							

						</div>
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Advertisement</div>

									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="viewadvertisement" class="table table-striped table-bordered" >
												<thead>
													<tr>
														<th class="wd-15p">TITLE</th>
														<th class="wd-15p">DESCRIPTION</th>
														<th class="wd-20p">IMAGE</th>
														<th class="wd-15p">LINK</th>
														<th class="wd-25p">OPERATIONS</th>
														<th style="visibility:hidden;">data</th>
													</tr>
												
												</thead>
												<tbody>
												
												</tbody>
											</table>
										</div>
									</div>
									<!-- table-wrapper -->
								</div>
								<!-- section-wrapper -->
							</div>
							
					</div>
				</div>
				<input type="hidden" id="base" value="<?php echo base_url(); ?>">
			</div>
			<!--MAIN ENDS-->

			
				
		<script src="<?php echo base_url(); ?>assets/js/general/advertisement.js"></script>		
			

         <!-- The Freeze Modal -->
		 <div class="modal" id="myfreeze">
                           
                                <div class="modal-dialog">
                                <div class="modal-content">
                                
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                    <h4 class="modal-title">Freeze/Unfreeze</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body" id="textchnge">
                                    <input type="hidden" id="freezevalue" name="freezevalue">
                                    <input type="hidden" id="advertiseID" name="advertiseID">
                                    <p class="lead text-center" id="f_msg">&nbsp;</p>
                                    </div>
                                    
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                    <Input type="submit" class="btn btn-primary" onclick="freeze_details();" name="add" value="CONTINUE">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                    
                                </div>
                                </div>
							</div>
							


	<!-- The Delete Modal -->
		 <div class="modal" id="delete">
                           
						   <div class="modal-dialog">
						   <div class="modal-content">
						   
							   <!-- Modal Header -->
							   <div class="modal-header">
							   <h4 class="modal-title">Delete</h4>
							   <button type="button" class="close" data-dismiss="modal">&times;</button>
							   </div>
							   
							   <!-- Modal body -->
							   <div class="modal-body">
							   <!-- <input type="hidden" id="deletevalue" name="deletevalue"> -->
							   <input type="hidden" id="advertiseID" name="advertiseID">
							   <p><b>Are You Sure Want To Delete ?</b></p>
							   </div>
							   
							   <!-- Modal footer -->
							   <div class="modal-footer">
							   <Input type="submit" class="btn btn-primary" onclick="deleteDetails();" name="add" value="DELETE">
							   <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							   </div>
							   
						   </div>
						   </div>
					   </div>