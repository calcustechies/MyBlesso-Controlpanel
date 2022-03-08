




				<div class="app-content">
					<div class="side-app">
						<div class="page-header">
							<h4 class="page-title">Transcations Company Details</h4>
							

						</div>
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Transcations Company Details</div>

									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class="table table-striped table-bordered" >
												<thead>
													<tr>
														<th class="wd-15p">SL NO</th>
														<th class="wd-25p">From User</th>
														<th class="wd-20p">TRANSACTION ID</th>
														<th class="wd-15p">AMOUNT</th>
														<th class="wd-25p">DATE AND TIME </th>
														<th class="wd-15p">To User</th>
														<!-- <th class="wd-15p">STATUS</th> -->
													</tr>
														
												</thead>
												<tbody>
												
												<?php
				$k=1;
				 	$AdminCashFlow=json_decode($AdminCashFlows,true);
                    $count_of_EWallet=count($AdminCashFlow['CashFlowAdmin']);
                    for($j=0;$j<$count_of_EWallet;$j++)
                     {

                        
                        $walletID=$AdminCashFlow['CashFlowAdmin'][$j]['walletID'];
                        $fromUserID=$AdminCashFlow['CashFlowAdmin'][$j]['fromUserID'];
                        $toUserID=$AdminCashFlow['CashFlowAdmin'][$j]['toUserID'];
                        $transactionID=$AdminCashFlow['CashFlowAdmin'][$j]['transactionID'];

                        $dateTime=$AdminCashFlow['CashFlowAdmin'][$j]['dateTime'];
                        $amount=$AdminCashFlow['CashFlowAdmin'][$j]['amount'];
                        $fromuserFirstName=$AdminCashFlow['CashFlowAdmin'][$j]['fromuserFirstName'];
						$fromuserLastName=$AdminCashFlow['CashFlowAdmin'][$j]['fromuserLastName'];
						
						$userfullname=$fromuserFirstName." ".$fromuserLastName;

                        $touserEmail=$AdminCashFlow['CashFlowAdmin'][$j]['touserEmail'];
                        $fromuserFirstName=$AdminCashFlow['CashFlowAdmin'][$j]['fromuserFirstName'];
						$fromuserLastName=$AdminCashFlow['CashFlowAdmin'][$j]['fromuserLastName'];

						$fromuserfullName=$fromuserFirstName." ".$fromuserLastName;

						$dateTime = new DateTime($dateTime, new DateTimeZone('Asia/Kolkata'));
						$transactionDateTime	= $dateTime->format("d/m/Y  h:i A");
						?>
														<tr>
														<td><?php echo $k;?></td>
																
																<td>
																	<?php echo $userfullname;?>
																</td>
																<td><?php echo $transactionID;?></td>
																<td><?php echo $amount;?></td>
																<td ><?php echo $transactionDateTime;?></td>
																<td><?php echo $fromuserfullName;?></td>
																<!-- <td><span class="text-warning">Pending</span></td> -->
															</tr>
															<?php 
															$k++;
					 }
															?>
															<!-- <tr>
														<td>3265</td>
																
																<td>
																	Jakes 
																</td>
																<td>11446578876874</td>
																<td>RS/-12</td>
																<td >Jan 17,2019 at 11.30pm</td>
																<td>Arun</td>
																<td><span class="text-warning">Pending</span></td>
															</tr>
															<tr>
														<td>3265</td>
																
																<td>
																	Jakes 
																</td>
																<td>11446578876874</td>
																<td>RS/-12</td>
																<td >Jan 17,2019 at 11.30pm</td>
																<td>Arun</td>
																<td><span class="text-warning">Pending</span></td>
															</tr>
															<tr>
														<td>3265</td>
																
																<td>
																	Jakes 
																</td>
																<td>11446578876874</td>
																<td>RS/-12</td>
																<td >Jan 17,2019 at 11.30pm</td>
																<td>Arun</td>
																<td><span class="text-warning">Pending</span></td>
															</tr> -->
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

















				<!--<div class="app-content">
					<div class="side-app">
						<div class="page-header">
							<h4 class="page-title"></h4>
							
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="panel panel-primary">
									<div>
										<div class="user-tabs mb-4">
											<!-- Tabs -->
											<!--<ul class="nav panel-tabs">
												<li class=""><a href="#tab1" class="active" data-toggle="tab">All (137)</a></li>
												
												<li><a href="#tab3" data-toggle="tab">Pending (10)</a></li>
												<li><a href="#tab4" data-toggle="tab">Completed (10)</a></li>
												<li><a href="#tab5" data-toggle="tab">Activated (10)</a></li>
											</ul>
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-body">
										<div class="tab-content">
											<div class="tab-pane active " id="tab1">
												<div class="mail-option">
													<div class="chk-all">
														<div class="btn-group">
															<a data-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false">
																All Dates
																<i class="fa fa-angle-down "></i>
															</a>
															<ul class="dropdown-menu">
																<li><a href="#">January, 2019</a></li>
																<li><a href="#">December, 2018</a></li>
																<li><a href="#">November, 2018</a></li>
																<li><a href="#">October, 2018</a></li>
																<li><a href="#">September, 2018</a></li>
																<li><a href="#">August, 2018</a></li>
																<li><a href="#">July, 2018</a></li>
																<li><a href="#">June, 2018</a></li>
																<li><a href="#">May, 2018</a></li>
																<li><a href="#">April, 2018</a></li>
																<li><a href="#">March, 2018</a></li>
																<li><a href="#">February, 2018</a></li>
																<li><a href="#">January, 2018</a></li>
															</ul>
														</div>
													</div>
													<div class="btn-group hidden-phone">
														<a  href="#" class="btn" aria-expanded="false">
															Filter
														</a>
													</div>

													<ul class="unstyled inbox-pagination">
														<li><span>1-10 of 137 items</span></li>
														<li>
															<a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
														</li>
													</ul>
												</div>
												<div class="table-responsive border-top">
													<table class="table card-table table-bordered table-hover table-vcenter text-nowrap">
														<tbody>
															<tr>
																<th class="w-1">
																	SL No
																</th>
																<th >Name</th>
																<th>Transaction id</th>
																<th>Amount</th>
																<th>Date and Time</th>
																<th> Refer</th>
																<th>Status</th>
															</tr>
															<tr>
																<td>
																	3265
																</td>
																
																<td>
																	<span>Jakes Peson</span>
																</td>
																<td>11446578876874</td>
																<td>RS/-12</td>
																<td >Jan 17,2019 at 11.30pm</td>
																<td>Arun</td>
																<td><span class="text-warning">Pending</span></td>
															</tr>
																<tr>
																<td>
																	3265
																</td>
																
																<td>
																	<span>Jakes Peson</span>
																</td>
																<td>11446578876874</td>
																<td>RS/-12</td>
																<td >Jan 17,2019 at 11.30pm</td>
																<td>Arun</td>
																<td><span class="text-warning">Pending</span></td>
															</tr>
																<tr>
																<td>
																	3265
																</td>
																
																<td>
																	<span>Jakes Peson</span>
																</td>
																<td>11446578876874</td>
																<td>RS/-12</td>
																<td >Jan 17,2019 at 11.30pm</td>
																<td>Arun</td>
																<td><span class="text-warning">Pending</span></td>
															</tr>
														
															
															
														</tbody>
													</table>
												</div>
											</div>
											<div class="tab-pane " id="tab5">
												<div class="mail-option">
													<div class="chk-all">
														<div class="btn-group">
															<a data-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false">
																All Dates
																<i class="fa fa-angle-down "></i>
															</a>
															<ul class="dropdown-menu">
																<li><a href="#">January, 2019</a></li>
																<li><a href="#">December, 2018</a></li>
																<li><a href="#">November, 2018</a></li>
																<li><a href="#">October, 2018</a></li>
																<li><a href="#">September, 2018</a></li>
																<li><a href="#">August, 2018</a></li>
																<li><a href="#">July, 2018</a></li>
																<li><a href="#">June, 2018</a></li>
																<li><a href="#">May, 2018</a></li>
																<li><a href="#">April, 2018</a></li>
																<li><a href="#">March, 2018</a></li>
																<li><a href="#">February, 2018</a></li>
																<li><a href="#">January, 2018</a></li>
															</ul>
														</div>
													</div>
													<div class="btn-group hidden-phone">
														<a  href="#" class="btn" aria-expanded="false">
															Filter
														</a>
													</div>

													<ul class="unstyled inbox-pagination">
														<li><span>1-10 of 10 items</span></li>
														<li>
															<a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
														</li>
													</ul>
												</div>
												<div class="table-responsive border-top">
													<table class="table card-table table-bordered table-hover table-vcenter text-nowrap">
														<tbody>
															<tr>
																<th class="w-1">
																	Order
																</th>
																<th class="w-1">Description</th>
																<th class="w-1">Author</th>
																<th>Item</th>
																<th>Price</th>
																<th>Date</th>
																<th>Payment</th>
															</tr>
															<tr>
																<td>
																	3265
																</td>
																<td>
																	<a href="#" class="btn-link">Majority have suffered alteration</a>
																</td>
																<td>
																	<span>Jakes Peson</span>
																</td>
																<td>Purchased 1 item</td>
																<td>$12</td>
																<td class="w-100">Jan 17,2019 at 11.30pm</td>
																<td><span class="text-primary">Activated</span></td>
															</tr>
															<tr>
																<td>
																	6253
																</td>
																<td>
																	<a href="#" class="btn-link">Passage of Lorem Ipsum</a>
																</td>
																<td>
																	<span>Candida Orduna</span>
																</td>
																<td>Purchased 1 item</td>
																<td>$5</td>
																<td class="w-100">Jan 13,2019 at 09.30pm</td>
																<td><span class="text-primary">Activated</span></td>
															</tr>
															<tr>
																<td>
																	3254
																</td>
																<td>
																	<a href="#" class="btn-link">Lorem Ipsum generators</a>
																</td>
																<td>
																	<span>Francisca Marvin</span>
																</td>
																<td>Purchased 1 item</td>
																<td>$8</td>
																<td class="w-100">Jan 12,2019 at 11.30am</td>
																<td><span class="text-primary">Activated</span></td>
															</tr>
															<tr>
																<td>
																	2541
																</td>
																<td>
																	<a href="#" class="btn-link">predefined chunks as necessary</a>
																</td>
																<td>
																	<span>Lynnette Nicely</span>
																</td>
																<td>Purchased 1 item</td>
																<td>$13</td>
																<td class="w-100">Jan 02,2019 at 02.53pm</td>
																<td><span class="text-primary">Activated</span></td>
															</tr>
															<tr>
																<td>
																	7854
																</td>
																<td>
																	<a href="#" class="btn-link">true generator on the Internet</a>
																</td>
																<td>
																	<span>Sandee Melle</span>
																</td>
																<td>Purchased 1 item</td>
																<td>$7</td>
																<td class="w-100">Jan 01,2019 at 02.54am</td>
																<td><span class="text-primary">Activated</span></td>
															</tr>
															<tr>
																<td>
																	4512
																</td>
																<td>
																	<a href="#" class="btn-link">Finibus Bonorum et Malorum</a>
																</td>
																<td>
																	<span>Barb Minger</span>
																</td>
																<td>Purchased 1 item</td>
																<td>$9</td>
																<td class="w-100">Dec 17,2018 at 10.15pm</td>
																<td><span class="text-primary">Activated</span></td>
															</tr>
															<tr>
																<td>
																	9654
																</td>
																<td>
																	<a href="#" class="btn-link">Various versions have evolved </a>
																</td>
																<td>
																	<span>Bethany Palmeris</span>
																</td>
																<td>Purchased 1 item</td>
																<td>$12</td>
																<td class="w-100">Dec 14,2018 at 01.14pm</td>
																<td><span class="text-primary">Activated</span></td>
															</tr>
															<tr>
																<td>
																	7542
																</td>
																<td>
																	<a href="#" class="btn-link">readable content of a page</a>
																</td>
																<td>
																	<span>Wayne Burkhard</span>
																</td>
																<td>Purchased 1 item</td>
																<td>$6</td>
																<td class="w-100">Dec 09 ,2018 at 03.15pm</td>
																<td><span class="text-primary">Activated</span></td>
															</tr>
															<tr>
																<th class="w-1">
																	Order
																</th>
																<th class="w-1">Description</th>
																<th class="w-1">Author</th>
																<th>Item</th>
																<th>Price</th>
																<th>Date</th>
																<th>Payment</th>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
								<ul class="pagination mb-5">
									<li class="page-item page-prev disabled">
										<a class="page-link" href="#" tabindex="-1">Prev</a>
									</li>
									<li class="page-item active"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">4</a></li>
									<li class="page-item"><a class="page-link" href="#">5</a></li>
									<li class="page-item page-next">
										<a class="page-link" href="#">Next</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>-->

