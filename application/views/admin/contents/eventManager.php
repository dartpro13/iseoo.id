<div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa fa-calendar"></i> Event Info</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="fa fa-bars"></i>Analytics</li>
                        <li><i class="fa fa-calendar"></i>Event Info</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <h4>Event Info</h4>
                                <form class="navbar-form-event">
                                    <input class="form-event-control" placeholder="Search" type="text">
                                </form>
                        </header>                    
                          
                        <table class="table table-striped table-advance table-hover">
                            <tbody>
                                <tr>
                                    <th><i class="icon_table"></i> Event Name</th>
                                    <th><i class="icon_calendar"></i> Date</th>
                                    <th><i class="icon_pin_alt"></i> City</th>
                                    <th><i class="icon_profil"></i> Event Creator</th>
                                    <th><i class="icon_profil"></i> Status</th>
                                    <th><i class="icon_cogs"></i> Action</th>
                                </tr>

                                <?php
                                include 'eventJSON.php';
                                    foreach ($get_json->return as $index => $obj):
                                ?>

                                <tr>
                                    <td><?=$obj->event_name;?></td>
                                    <td><?=$obj->event_date;?></td>
                                    <td><?=$obj->event_venue;?></td>
                                    <td><?=$obj->event_creator;?></td>
                                    <td><?=$obj->event_status;?></td>
                                    <td>
                                <div class="btn-group">
                                    <!-- <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                    <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a> -->
                                    <a class="btn btn-danger" href="block_event.php?eid=<?= $obj->event_id;?>"><i class="icon_close_alt2"></i> Block This Event</a>
                                </div>
                                    </td>
                              </tr>

                              <?php
                                endforeach;
                              ?>
                              <!-- <tr>
                                 <td>Sung Carlson</td>
                                 <td>2011-01-10</td>
                                 <td>Robert Lee</td>
                                 <td>724-639-4784</td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i> Block This Event</a>
                                  </div>
                                  </td>
                              </tr>
                              <tr>
                                 <td>Bryon Osborne</td>
                                 <td>2006-10-29</td>
                                 <td>York</td>
                                 <td>180-456-0056</td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i> Block This Event</a>
                                  </div>
                                  </td>
                              </tr>
                              <tr>
                                 <td>Dalia Marquez</td>
                                 <td>2011-12-15</td>
                                 <td>Alton</td>
                                 <td>690-601-1922</td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i> Block This Event</a>
                                  </div>
                                  </td>
                              </tr>
                              <tr>
                                 <td>Selina Fitzgerald</td>
                                 <td>2003-01-06</td>
                                 <td>Waelder</td>
                                 <td>922-810-0915</td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i> Block This Event</a>
                                  </div>
                                  </td>
                              </tr>
                              <tr>
                                 <td>Abraham Avery</td>
                                 <td>2006-07-14</td>
                                 <td>Harker Heights</td>
                                 <td>511-175-7115</td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i> Block This Event</a>
                                  </div>
                                  </td>
                              </tr>
                              <tr>
                                 <td>Caren Mcdowell</td>
                                 <td>2002-03-29</td>
                                 <td>Blackwell</td>
                                 <td>970-147-5550</td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i> Block This Event</a>
                                  </div>
                                  </td>
                              </tr>
                              <tr>
                                 <td>Owen Bingham</td>
                                 <td>2013-04-06</td>
                                 <td>Rule</td>
                                 <td>934-118-6046</td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i> Block This EVent</a>
                                  </div>
                                  </td>
                              </tr>
                              <tr>
                                 <td>Ahmed Dean</td>
                                 <td>2008-03-19</td>
                                 <td>Darrouzett</td>
                                 <td>338-081-8817</td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i> Block This Event</a>
                                  </div>
                                  </td>
                              </tr>
                              <tr>
                                 <td>Mario Norris</td>
                                 <td>2010-02-08</td>
                                 <td>Amarillo</td>
                                 <td>945-547-5302</td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i> Block This Event</a>
                                  </div>
                                  </td> -->
                              </tr>                              
                           </tbody>
                        </table>
                      </section>
                  </div>
              </div>