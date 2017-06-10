<div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa fa-globe"></i> Demographics</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="fa fa-desktop"></i>Analytics</li>
                        <li><i class="fa fa-globe"></i>Demographics</li>
                    </ol>
                </div>
            </div>
          <div class="row">
            <div class="col-lg-12 col-md-12">
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2><i class="fa fa-map-marker red"></i><strong>Countries</strong></h2>
                            <div class="panel-actions">
                                <a href="index.html#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                            </div>  
                        </div>
                        <div class="panel-body-map">
                            <div id="map" style="height:380px;"></div>  
                        </div>
                    </div>
            </div>
        </div>
        <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Demographics
                          </header>
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>City</th>
                                  <th>Total Event</th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php
                                include 'eventLocation.php';
                                $no=1;
                                foreach ($get_json->return as $key => $value):
                               
                              ?>
                                <tr>
                                  <td><?=$no++?></td>
                                  <td><?=$value->event_city?></td>
                                  <td><?=$value->total_event?></td>
                                </tr>
                           <?php
                            endforeach;
                           ?>
                                <!-- <tr>
                                  <td>2</td>
                                  <td>Table cell</td>
                                  <td>Table cell</td>
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td>Table cell</td>
                                  <td>Table cell</td>
                                </tr> -->
                              </tbody>
                            </table>
                          </div>

                      </section>
                  </div>
              </div>