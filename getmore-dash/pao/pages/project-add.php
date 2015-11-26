<div class="container-fluid" id="pcont">
  <div class="message">
    <div class="head">
      <h3>Add New Property</h3>
      <form action="" class="form-inline" role="form">
        <div class="form-group no-margin-top">
          <input type="text" class="input-lg form-control" style="width: 550px;" placeholder="Enter Property/Condominium Name" autofocus>
        </div>
        <div class="form-group no-margin-top">
          <button type="button" class="btn btn-success btn-lg">Create</button>
        </div>
      </form>
    </div>  <!-- end head -->
    <div class="mail">
      <div class="panel-group accordion accordion-alt" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOverview">Property Info</a>
            </h4>
          </div>
          <div id="collapseOverview" class="panel-collapse in">
            <!-- start panel-body -->
            <div class="panel-body">
              <div class="col-md-4">
                <div class="content">
                 <form role="form">
                  <div class="form-group spacer2">
                  <label class="required">Project Name</label>
                  <input type=text list=project-names class="form-control">
                    <datalist id="project-names">
                    <option value="Eastwood Le Grand 1 & 2">
                    <option value="Eastwood Parkview Tower 1 & 2">
                    <option value="One Central Park">
                    <option value="Grand Eastwood Palazzo">
                    <option value="Olympic Heights">
                    <option value="One Orchard Road">
                    </datalist>
                  </div>
                  <div class="form-group">
                  <label class="required">Developer</label>
                    <input type=text list=project-developer class="form-control">
                    <datalist id="project-developer">
                    <option value="Acropolis">
                    <option value="JKSI Properties">
                    <option value="Jaski Properties">
                    <option value="Filinvest">
                    <option value="Primary Homes">
                    </datalist>
                  </div>
                  <div class="form-group">
                    <label for="">Turnover Date</label>
                    <input type="text" class="form-control">
                  </div>
                    <div class="form-group">
                    <label class="required">Location</label>
                    <textarea name="" id="" cols="30" rows="10" class="form-control note-area"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="">Vicinity Map</label>
                    <input type="file" class="form-control">
                  </div>
                  <div class="form-group">
                  <label class="required">Amenities & Building Features</label>
                    <input type="text" class="tags">
                  </div>
                  <button class="btn btn-primary btn-rad btn-flat no-margin" type="submit">Continue &raquo;</button>
                </form>
               </div>
              </div>
          </div>
          <!-- end panel-body -->
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseUnitTypes">Unit Types</a></h4>
        </div>
        <div id="collapseUnitTypes" class="panel-collapse collapse"> <!-- change in to collapse -->
          <!-- start panel-body -->
          <div class="panel-body">
            <div class="col-md-4">
              <div class="content">
                <form role="form">
                  <div class="form-group">
                    <label>Unit Type</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Area</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Unit Price</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Reservation Fee</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Use</label>
                    <input type="text" class="form-control">
                    <span class="help-block">eg. Residential, Office use only, Residential / Office</span>
                  </div>
                  <div class="form-group">
                    <label for="">Unit Deliverables</label>
                     <input class="tag-unitDeliverables" type="hidden" value="" />
                  </div>
                  <button class="btn btn-success btn-flat btn-rad no-margin pull-left" type="submit">Add Another Unit Type</button>
                  <button class="btn btn-primary btn-flat btn-rad no-margin pull-right" type="submit">Next &raquo;</button>
                </form>
              </div>
            </div>
          </div>
          <!-- end panel-body -->
        </div>
      </div> <!-- end panel -->

      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseBldgPlan">Building Plan</a></h4>
        </div>
        <div id="collapseBldgPlan" class="panel-collapse collapse"> <!-- change in to collapse -->
          <!-- start panel-body -->
          <div class="panel-body">
            <div class="col-md-3">
              <div class="content">
                <form role="form">
                  <div class="form-group">
                    <label>Floors</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Max. unit in a floor</label>
                    <input type="text" class="form-control">
                  </div>
                  <button class="btn btn-primary btn-flat no-margin" type="submit">Generate Sketch</button>
                </form>
              </div>
            </div>
            <div class="clearfix"></div>
            <hr>
            <div class="col-md-12 spacer2">
              <form role="form">
                <div class="input-group" style="width: 200px;">
                  <select name="" id="" class="form-control">
                    <option value="" selected="" disabled="">Mark Selected as..</option>
                    <optgroup label="Unit Type">
                      <option value="">Studio</option>
                      <option value="">Loft</option>
                      <option value="">1 BR</option>
                      <option value="">2 BR</option>
                      <option value="">Empty Space</option>
                    </optgroup>
                    <optgroup label="Unit Availability">
                      <option value="">Sold</option>
                      <option value="">Reserved</option>
                      <option value="">Paid to Developer</option>
                    </optgroup>
                  </select>
                  <span class="input-group-btn">
                    <button class="btn btn-flat btn-success" type="button">Go!</button>
                  </span>
                </div>
              </form>

              <table class="bldg-plan no-strip ">
                <thead>
                  <tr>
                  <th style="width: 50px;"></th>
                  <?php for($i=1; $i < 19; $i++): ?>
                  <th style="width: 50px;">Unit <?php echo $i; ?></th>
                   <?php endfor; ?>
                  </tr>
                </thead>
                <tbody>
                 <?php for($i=1; $i < 4; $i++): ?>
                  <tr class="bldg-unit">
                    <td>Floor <?php echo 10-$i; ?></td>
                    <td class="empty"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="sold"><span class="check-alt"><i class="fa fa-check"></i></span></td>
                     <td class="reserved"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="executiveOffice"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="homeOffice"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="br1"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="reserved"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="studio"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="br2"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="premierOffice"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="br3"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="sold"><span class="check-alt"><i class="fa fa-check"></i></span></td>
                    <td class="studio"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="loft"><span class="check"><i class="fa fa-check"></i></span></td>
                     <td class="marked available"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="loft"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="empty"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="paidToDeveloper"><span class="check"><i class="fa fa-check"></i></span></td>
                  </tr>
                  <?php endfor; ?>
                 <?php for($i=1; $i < 4; $i++): ?>
                  <tr class="bldg-unit">
                    <td>Floor <?php echo 7-$i; ?></td>
                    <td class="empty"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="sold"><span class="check-alt"><i class="fa fa-check"></i></span></td>
                    <td class="executiveOffice"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="homeOffice"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="marked available"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="br2"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="premierOffice"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="br3"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="reserved"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="marked available"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="marked available"><span class="check"><i class="fa fa-check"></i></span></td>
                     <td class="marked available"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="reserved"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="studio"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="loft"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="empty"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="sold"><span class="check-alt"><i class="fa fa-check"></i></span></td>
                    <td class="paidToDeveloper"><span class="check"><i class="fa fa-check"></i></span></td>
                  </tr>
                  <?php endfor; ?>
                  <?php for($i=1; $i < 4; $i++): ?>
                  <tr class="bldg-unit">
                    <td>Floor <?php echo 4-$i; ?></td>
                    <td class="br1"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="br2"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="br3"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="reserved"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="studio"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="loft"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="empty"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="sold"><span class="check-alt"><i class="fa fa-check"></i></span></td>
                    <td class="paidToDeveloper"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="empty"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="sold"><span class="check-alt"><i class="fa fa-check"></i></span></td>
                    <td class="marked available"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="reserved"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="studio"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="loft"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="premierOffice"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="executiveOffice"><span class="check"><i class="fa fa-check"></i></span></td>
                    <td class="homeOffice"><span class="check"><i class="fa fa-check"></i></span></td>
                  </tr>
                  <?php endfor; ?>
                </tbody>
              </table>
               <ul class="legend-list list-unstyled list-inline spacer2">
                <li>Legend:</li>
                <li><span class="legend empty"></span> Empty</li>
                <li><span class="legend sold"></span> Sold</li>
                <li><span class="legend paidToDeveloper"></span> Sold by Developer</li>
                <li c><span class="legend available"></span> Available</li>
              </ul>
              <ul class="legend-list list-unstyled list-inline ">
                <li><span class="legend studio"></span> Studio (17sqm)</li>
                <li><span class="legend loft"></span> Loft (14sqm)</li>
                <li><span class="legend premierOffice"></span> Premier Office (198.10 - 796.70 sqm)</li>
                <li><span class="legend executiveOffice"></span> Executive Office (25.20 - 53.50sqm)</li>
                <li><span class="legend homeOffice"></span> Home Office (25.20 - 60.30 sqm)</li>
                <li><span class="legend br1"></span> 1BR (25.20 - 60.30 sqm)</li>
                <li><span class="legend br2"></span> 2BR (25.20 - 60.30 sqm)</li>
                <li><span class="legend br3"></span> 3BR (25.20 - 60.30 sqm)</li>
              </ul>
              <br>
               <button class="btn btn-primary btn-rad btn-flat no-margin" type="submit">Next &raquo;</button>
            </div>
          </div>
          <!-- end panel-body -->
        </div>
      </div> <!-- end panel -->


      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsePayment">Payment/Reservation Procedure</a></h4>
        </div>
        <div id="collapsePayment" class="panel-collapse collapse"> <!-- change in to collapse -->
          <!-- start panel-body -->
          <div class="panel-body">
            <div class="col-md-4">
              <div class="content">
                <form role="form">
                  <div class="form-group">
                    <label>Reservation Fee</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Terms</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Minimum down payment</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Pay Thru</label>
                    <input type="text" class="tags">
                    <span class="help-block">eg. Cheque, Cash, Credit Card, Bank Transfer</span>
                  </div>

                  <div class="form-group">
                    <label>Financing Options</label>
                    <input type="text" class="tags">
                  </div>

                  <button class="btn btn-primary btn-flat btn-rad no-margin pull-right" type="submit">Next &raquo;</button>
                </form>
              </div>
            </div>
          </div>
          <!-- end panel-body -->
        </div>
      </div> <!-- end panel -->

        <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsePromo">Promo Program</a></h4>
        </div>
        <div id="collapsePromo" class="panel-collapse collapse"> <!-- change in to collapse -->
          <!-- start panel-body -->
          <div class="panel-body">
            <div class="col-md-4">
              <div class="content">
                <form role="form">
                  <div class="form-group">
                    <label>Promo Program</label>
                    <select name="" id="" class="form-control">
                      <option value="">Discount</option>
                      <option value="">Deferred</option>
                      <option value="">Others</option>
                      <option value="">None</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Name of Promo</label><input type="text" class="form-control">
                  </div>
                  <div class="form-group"><label for="">Mechanics</label><textarea name="" id="" rows="5" class="note-area form-control"></textarea></div>
                  <div class="form-group"><label for="">Available to:</label><input type="text" class="form-control"></div>
<div class="form-group"><label for="">Validity</label><input type="text" class="form-control"></div>
                  <button class="btn btn-success btn-flat btn-rad no-margin pull-left" type="submit">Add Another Promo</button>
                  <button class="btn btn-primary btn-flat btn-rad no-margin pull-right" type="submit">Done</button>
                </form>
              </div>
            </div>
          </div>
          <!-- end panel-body -->
        </div>
      </div> <!-- end panel -->



    </div>
    <!-- end mail -->
  </div>
</div>
<!-- end message -->
<!-- end container-fluid -->
