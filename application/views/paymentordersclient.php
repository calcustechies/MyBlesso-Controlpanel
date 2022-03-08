




				<div class="app-content">
					<div class="side-app">
						<div class="page-header">
							<h4 class="page-title">Transcations For Client Details</h4>
							

						</div>
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Transcations For Client Details</div>

									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class="table table-striped table-bordered" >
												<thead>
													<tr>
														<th class="wd-15p">SL NO</th>
														<th class="wd-25p">NAME</th>
														<th class="wd-20p">TRANSACTION ID</th>
														<th class="wd-15p">AMOUNT</th>
														<th class="wd-25p">DATE AND TIME </th>
														<th class="wd-15p"> REFER</th>
														<!-- <th class="wd-15p">STATUS</th> -->
													</tr>
														
												</thead>
												<tbody>

				<?php
				$k=1;
				 	$cashFlowEwallet=json_decode($cashFlowEwallets,true);
                    $count_of_EWallet=count($cashFlowEwallet['EWallet']);
                    for($j=0;$j<$count_of_EWallet;$j++)
                     {

                        
                        $ID=$cashFlowEwallet['EWallet'][$j]['ID'];
                        $userID=$cashFlowEwallet['EWallet'][$j]['userID'];
                        $transactionNO=$cashFlowEwallet['EWallet'][$j]['transactionNO'];

                        $DateTime=$cashFlowEwallet['EWallet'][$j]['DateTime'];
                        $amount=$cashFlowEwallet['EWallet'][$j]['amount'];
                        $userFirstName=$cashFlowEwallet['EWallet'][$j]['userFirstName'];
						$userLastName=$cashFlowEwallet['EWallet'][$j]['userLastName'];
						
						$userfullname=$userFirstName." ".$userLastName;

                        $SponcerCode=$cashFlowEwallet['EWallet'][$j]['SponcerCode'];
                        $ReferedPersonFirstName=$cashFlowEwallet['EWallet'][$j]['ReferedPersonFirstName'];
						$ReferedPersonLastName=$cashFlowEwallet['EWallet'][$j]['ReferedPersonLastName'];

						$ReferedPersonfullname=$ReferedPersonFirstName." ".$ReferedPersonLastName;

						
						$dateTime = new DateTime($DateTime, new DateTimeZone('Asia/Kolkata'));
						$transactionDateTime	= $dateTime->format("d/m/Y  h:i A");
						
                        ?>
												
													 <tr>
														<td><?php echo $k;?></td>
																
																<td>
																	<?php echo $userfullname;?>
																</td>
																<td><?php echo $transactionNO;?></td>
																<td><?php echo $amount;?></td>
																<td ><?php echo $transactionDateTime;?></td>
																<td><?php echo $ReferedPersonfullname;?></td>
																<!-- <td><span class="text-warning">Pending</span></td> -->
															</tr>
															<?php
															$k++;
															 }
															?>
														
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
			</div>

			<input type="hidden" id="base" value="<?php echo base_url(); ?>">

			








