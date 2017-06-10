<div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa fa-calendar"></i> Event Info</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="fa fa-desktop"></i>Analytics</li>
                        <li><i class="fa fa-calendar"></i>Event Info</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box blue-bg">
                        <i class="fa fa-users"></i>
                        <?php
                        include 'userJSON.php';
                        $jumlah_user=0;
                        foreach ($get_json->return as $key => $value):
                        $jumlah_user += count($value);
                    	endforeach;
                    	echo "<h2>$jumlah_user</h2>";
                        ?>
                        <div class="title">Total Users</div>                       
                    </div><!--/.info-box-->         
                </div><!--/.col-->
                
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box brown-bg">
                        <i class="fa fa-user"></i>
                        <div class="count">4</div>
                        <div class="title">User Registered This Month</div>                        
                    </div><!--/.info-box-->         
                </div><!--/.col-->  
                
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box dark-bg">
                        <i class="fa fa-calendar"></i>
                        <?php
                        include 'eventJSON.php';
                        $jumlah_event=0;
                        foreach ($get_json->return as $key => $value):
                        $jumlah_event += count($value);
                    	endforeach;
                    	echo "<h2>$jumlah_event</h2>";
                        ?>
                        <div class="title">Total Events</div>                       
                    </div><!--/.info-box-->         
                </div><!--/.col-->
                
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box green-bg">
                        <i class="fa fa-calendar-o"></i>
                        <div class="count">2</div>
                        <div class="title">Event Created This Month</div>                      
                    </div><!--/.info-box-->
                </div><!--/.col-->
                
            </div><!--/.row-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <h3>Event Info</h3>
                        </header>
                        <div class="row">
                        	<!-- <div class="col-sm-6">
                        	<label>
                        			"Show"
                        			<select name="dataTable_Table_1_length" aria-controls="dataTable_Table_1" class="form-control input-sm">
                        			<option value="10">10</option>
                        			<option value="25">25</option>
                        			<option value="50">50</option>
                        			<option value="100">100</option>
                        			</select>
                        			"entries"
                        		</label>
                        	</div> -->
                        	<div class="col-lg-4">                    
                          		<form class="navbar-form-event">
                                	<input type="search" class="form-event-control" placeholder="search">
                            	</form>
                            </div>
                        </div>
                        <table class="table table-striped table-advance table-hover">
                            <tbody>
                                <tr>
                                    <th><i class="icon_table"></i> Event Name</th>
                                    <th><i class="icon_calendar"></i> Date</th>
                                    <th><i class="icon_clock"></i> Time</th>
                                    <th><i class="icon_pushpin_alt"></i> Venue</th>
                                    <th><i class="icon_pin_alt"></i> City</th>
                                    <th><i class="icon_profile"></i> Event Creator</th>
                                    <th><i class="icon_documents_alt"></i> Status</th>
                                </tr>
                        <?php

                        include 'eventJSON.php';

                        foreach ($get_json->return as $index => $obj):

                        ?>
                            
                                <tr> 	
                                    <td><?=$obj->event_name;?></td>
                                    <td><?=$obj->event_date;?></td>
                                    <td>15.00</td>
                                    <td><?=$obj->event_venue;?></td>
                                    <td><?=$obj->event_city;?></td>
                                    <td><?=$obj->event_creator;?></td>
                                    <td><?=$obj->event_status;?></td>
                              	</tr>

                        <?php
                        endforeach;

                        ?>
                           	</tbody>
                         </table>
                      		<div>
                                <ul class="pagination pagination-sm pull-right">
                                      <li><a href="#">«</a></li>
                                      <li><a href="#">1</a></li>
                                      <li><a href="#">2</a></li>
                                      <li><a href="#">3</a></li>
                                      <li><a href="#">4</a></li>
                                      <li><a href="#">5</a></li>
                                      <li><a href="#">»</a></li>
                                </ul>
                            </div>
                      </section>
                  </div>
              </div>


            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <h3>User Info</h3>
                        </header>

                        <div class="row">
                        	<div class="col-sm-6">
                        		<label>
                        			"Show"
                        			<select name="dataTable_Table_1_length" aria-controls="dataTable_Table_1" class="form-control input-sm">
                        				<option value="10">10</option>
                        				<option value="25">25</option>
                        				<option value="50">50</option>
                        				<option value="100">100</option>
                        			</select>
                        			"entries"
                        		</label>
                        	</div>
                        	<div class="col-sm-6">
                        		<form class="navbar-form-user">
                            		<input type="search" class="form-user-control" placeholder="search">
                        		</form>
                        	</div>

                        </div>    
                          
                        <table class="table table-striped table-advance table-hover">
                            <tbody>
                                <tr>
                                    <th><i class="icon_profile"></i> Fullname</th>
                                    <th><i class="icon_profile"></i> User Name</th>
                                    <th><i class="icon_phone"></i> Phone</th>
                                    <th><i class="icon_mail_alt"></i> e-Mail</th>
                                </tr>

                                <?php

                                include 'userJSON.php';

                                foreach ($get_json->return as $index => $obj):

                                ?>

                                <tr>
                                    <td><?=$obj->fullname;?></td>
                                    <td><?=$obj->username;?></td>
                                    <td><?=$obj->phone;?></td>
                                    <td><?=$obj->email;?></td>
                                </tr>

                                <?php
                                    endforeach;
                                ?>                              
                           </tbody>
                        </table>
                        <div>
                                <ul class="pagination pagination-sm pull-right">
                                      <li><a href="#">«</a></li>
                                      <li><a href="#">1</a></li>
                                      <li><a href="#">2</a></li>
                                      <li><a href="#">3</a></li>
                                      <li><a href="#">4</a></li>
                                      <li><a href="#">5</a></li>
                                      <li><a href="#">»</a></li>
                                </ul>
                            </div>
                      </section>
                  </div>
              </div>