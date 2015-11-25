<div class="container-fluid" id="pcont">
  <div class="message">
    <div class="head clearfix">
    <h3 class="pull-left no-margin-bottom">8 Newtown Boulevard  <small><a href="project-add.php" class="text-ucase"> Edit</a></small></h3>
    <h4 class="pull-right">Availability: <strong>150 of 250</strong></h4>
    </div>
    <div class="cl-mcont">
      <div class="row">
        <div class="col-md-12">
          <div class="tab-container">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#overview" data-toggle="tab">Property Info</a></li>
              <li><a href="#availability" data-toggle="tab">Available Units</a></li>
              <li><a href="#notes" data-toggle="tab">Notes</a></li>
            </ul>
            <div class="tab-content clearfix">
              <div class="tab-pane active cont" id="overview">
                <div class="col-sm-8">
                  <dl class="dl-horizontal">
                    <dt>Property Name:</dt>
                    <dd>8 Newtown Boulevard</dd>
                    <dt>Project Name:</dt>
                    <dd>The Mactan Newtown</dd>
                    <dt>Developer:</dt>
                    <dd>Megaworld</dd>
                    <dt>Turnover Date:</dt>
                    <dd>Second Half of 2016</dd>
                    <dt>Location</dt>
                    <dd>Cebu's major commercial establishments and government institutions
                      <br>- Approximately 5-minute walk (400 Meters) away from Cebu IT Park
                      <br>- Approximately 3-minute walk (280 Meters) away from Waterfront Cebu City
                      <br>- Approximately 10-minute walk (1000 Meters) away from Cebu Business Park
                    </dd>
                    <dt>Vicinity Map:</dt>
                    <dd> <img src="images/Linear_Map2.jpg" alt="" class="img-responsive"></dd>
                    <dt>Building Features:</dt>
                    <dd>
                      <span class="label label-primary">24-hour security</span>
                      <span class="label label-primary">Fire sprinkler system </span>
                      <span class="label label-primary">LED Lighting in Elevator Lobbies and Hallway</span>
                      <span class="label label-primary">American Standard Low-flow Plumbing Fixtures</span>
                      <span class="label label-primary">Gym</span>
                      <span class="label label-primary">Function Room/Reception Hall</span>
                      <span class="label label-primary">Roof Deck with Lounge</span>
                      <span class="label label-primary">Passenger Elevator</span>
                      <span class="label label-primary">Generator Backup System</span>
                      <span class="label label-primary">Facility for Phone, Internet, and Cable</span>
                      <span class="label label-primary">Elevated Grand lobby</span>
                      <span class="label label-primary">Free Wi-Fi in the Lobby and Roof Deck</span>
                      <span class="label label-primary">Parking Slot: For Sale 89 slots(Php700k/lot)</span>
                      <span class="label label-primary">Parking Slot: Pay Parking  38 slots (Php20.00/hr)</span>
                    </dd>
                  </dl>
                </div>
              </div>
              <div class="tab-pane cont" id="availability">
                <div class="col-sm-12">
                  <ul class="legend-list list-unstyled list-inline">
                    <li>Legend:</li>
                    <li><span class="legend sold"></span> Sold</li>
                    <li><span class="legend paidToDeveloper"></span> Sold by Developer</li>
                    <li><span class="legend reserved"></span> Reserved</li>
                  </ul>
                  <ul class="legend-list list-unstyled list-inline ">
                    <li><span class="legend empty"></span> Empty</li>
                    <li><span class="legend studio"></span> Studio (17sqm)</li>
                    <li><span class="legend loft"></span> Loft (14sqm)</li>
                    <li><span class="legend premierOffice"></span> Premier Office (198.10 - 796.70 sqm)</li>
                    <li><span class="legend executiveOffice"></span> Executive Office (25.20 - 53.50sqm)</li>
                    <li><span class="legend homeOffice"></span> Home Office (25.20 - 60.30 sqm)</li>
                    <li><span class="legend br1"></span> 1BR (25.20 - 60.30 sqm)</li>
                    <li><span class="legend br2"></span> 2BR (25.20 - 60.30 sqm)</li>
                    <li><span class="legend br3"></span> 3BR (25.20 - 60.30 sqm)</li>
                  </ul>
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
                        <td class="empty"></td>
                        <td class="sold md-trigger" data-modal="md-soldUnit"></td>
                        <td class="executiveOffice"></td>
                        <td class="reserved md-trigger" data-modal="md-reservedUnit"></td>
                        <td class="executiveOffice"></td>
                        <td class="homeOffice"></td>
                        <td class="empty"></td>
                        <td class="loft"></td>
                        <td class="loft"></td>
                        <td class="paidToDeveloper"></td>
                        <td class="br1"></td>
                        <td class="reserved"></td>
                        <td class="studio"></td>
                        <td class="sold"></td>
                        <td class="studio"></td>
                        <td class="br2"></td>
                        <td class="premierOffice"></td>
                        <td class="br3"></td>
                      </tr>
                    <?php endfor; ?>
                    <?php for($i=1; $i < 4; $i++): ?>
                      <tr class="bldg-unit">
                        <td>Floor <?php echo 10-$i; ?></td>
                        <td class="studio"></td>
                        <td class="br2"></td>
                        <td class="sold"></td>
                        <td class="studio"></td>
                        <td class="loft"></td>
                        <td class="executiveOffice"></td>
                        <td class="loft"></td>
                        <td class="premierOffice"></td>
                        <td class="br3"></td>
                        <td class="empty"></td>
                        <td class="empty"></td>
                        <td class="sold"></td>
                        <td class="reserved"></td>
                        <td class="executiveOffice"></td>
                        <td class="homeOffice"></td>
                        <td class="br1"></td>
                        <td class="reserved"></td>
                        <td class="paidToDeveloper"></td>
                      </tr>
                    <?php endfor; ?>
                    <?php for($i=1; $i < 4; $i++): ?>
                     <tr class="bldg-unit">
                      <td>Floor <?php echo 10-$i; ?></td>
                      <td class="empty md-trigger"></td>
                      <td class="sold"></td>
                      <td class="reserved"></td>
                      <td class="executiveOffice"></td>
                      <td class="homeOffice"></td>
                      <td class="br1"></td>
                      <td class="reserved"></td>
                      <td class="studio"></td>
                      <td class="br2"></td>
                      <td class="premierOffice"></td>
                      <td class="br3"></td>
                      <td class="sold"></td>
                      <td class="studio"></td>
                      <td class="loft"></td>
                      <td class="available"></td>
                      <td class="loft"></td>
                      <td class="empty"></td>
                      <td class="paidToDeveloper"></td>
                    </tr>
                  <?php endfor; ?>
                </tbody>
              </table>

               <table class="spacer3">
                <thead>
                  <tr>
                   <th class="text-ucase"><strong>Unit Type</strong></th>
                   <th class="text-ucase"><strong>Floor Area</strong></th>
                   <th class="text-ucase"><strong>Use</strong></th>
                   <th class="text-ucase"><strong>Unit Price</strong></th>
                   <th class="text-ucase"><strong>Unit Deliverable</strong></th>
                 </tr>
               </thead>
               <tbody>
                <tr>
                 <td>Studio</td>
                 <td>198sqm - 700sqm</td>
                 <td>BPO/Corporate Office</td>
                 <td>18.9-80M</td>
                 <td>Open Layout in Bare Units, Main door in glass with black aluminum frame</td>
               </tr>
               <tr>
                 <td>Premier Office Suite</td>
                 <td>198sqm - 700sqm</td>
                 <td>BPO/Corporate Office</td>
                 <td>18.9-80M</td>
                 <td>Open Layout in Bare Units, Main door in glass with black aluminum frame</td>
               </tr>
               <tr>
                 <td>Premier Office Suite</td>
                 <td>198sqm - 700sqm</td>
                 <td>BPO/Corporate Office</td>
                 <td>18.9-80M</td>
                 <td>Open Layout in Bare Units, Main door in glass with black aluminum frame, Open Layout in Bare Units, Main door in glass with black aluminum frame, Open Layout in Bare Units, Main door in glass with black aluminum frame</td>
               </tr>
               <tr>
                 <td>Premier Office Suite</td>
                 <td>198sqm - 700sqm</td>
                 <td>BPO/Corporate Office</td>
                 <td>18.9-80M</td>
                 <td>Open Layout in Bare Units, Main door in glass with black aluminum frame</td>
               </tr>
               <tr>
                 <td>Premier Office Suite</td>
                 <td>198sqm - 700sqm</td>
                 <td>BPO/Corporate Office</td>
                 <td>18.9-80M</td>
                 <td>Open Layout in Bare Units, Main door in glass with black aluminum frame</td>
               </tr>
             </tbody>
           </table>

       </div>
     </div>
     <!-- NOTES -->
     <div class="tab-pane cont" id="notes">
      <div class="col-sm-12">
        <ul class="timeline">
          <li>
            <i class="gm gm-note"></i>
            <span class="date">5 Jan</span>
            <div class="content note">
              <textarea autofocus rows="3" class="form-control note-area" placeholder="Add note..." ></textarea>
              <button class="btn btn-sm btn-danger btn-flat btn-rad ">Save Note</button>
              <button class="btn btn-sm btn-default btn-flat btn-rad">Cancel</button>
            </div>
          </li>
          <li>
            <i class="gm gm-book"></i>
            <span class="date">12 Feb</span>
            <div class="content">
              <p>sold 3<sup>rd</sup> flr. Unit 7 - 1BR by {Broker Name}</p>
              <blockquote>
                <p>Downpayment Php 5,000 - Avenir 8th flr, unit 5 </p>
              </blockquote>
              <small>9:36 AM Feb 12, 2014 </small>
            </div>
          </li>
          <li>
            <i class="gm gm-note"></i>
            <span class="date">5 Jan</span>
            <div class="content">
              <p><strong>Agent Name</strong> noted</p>
              <blockquote>
                <p>sent application form and requirements to client's email address. Clarification: I'm asking how to choose among many possible images. I know about sites like istockphoto and others where you can get free or cheap images. How to go about choosing among the many thousands of candidates to find that one perfect image, is what I'm asking. Sed scelerisque nostrum cubilia dign</p>
              </blockquote>
              <small>9:36 AM Feb 12, 2014 </small>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div> <!-- .end tab-content  -->
</div> <!-- end tab-container --></div>
</div>
</div> <!-- end cl-mcont -->
</div>
</div>
<!-- end container-fluid -->
<div class="md-modal md-header-plain md-effect-7" id="md-soldUnit">
  <div class="md-content">
    <div class="modal-body">
      <p class="spacer">Client: <a href="lead-profile.php" target="_blank">Rein Figuracion</a></p>
      <table class="hover">
        <thead>
          <tr>
            <th class="text-ucase"><strong>Due Date</strong></th>
            <th class="text-ucase"><strong>Amount</strong></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
         <tr class="text-muted">
           <td><strong>DP</strong> June 15,2014</td> <td>Php 5,000</td>
           <td><button type="button" class="btn btn-success btn-sm btn-rad" disabled="">PAID</button></td>
         </tr>
         <tr class="text-muted">
          <td>July 15,2014</td> <td>Php 25,000</td>
          <td><button type="button" class="btn btn-success btn-sm btn-rad" disabled="">PAID</button></td>
        </tr>
        <tr class="text-danger">
          <td>August 15,2014</td> <td>Php 25,000</td>
          <td><button type="button" class="btn btn-success btn-sm btn-rad">PAID</button></td>
        </tr>
        <tr>
          <td>September 15,2014</td> <td>Php 25,000</td>
          <td><button type="button" class="btn btn-success btn-sm btn-rad">PAID</button></td>
        </tr>
        <tr>
          <td>October 15,2014</td> <td>Php 25,000</td>
          <td><button type="button" class="btn btn-success btn-sm btn-rad">PAID</button></td>
        </tr>
        <tr>
          <td>November 15,2014</td> <td>Php 25,000</td>
          <td><button type="button" class="btn btn-success btn-sm btn-rad">PAID</button></td>
        </tr>
        <tr>
          <td>December 15,2014</td> <td>Php 25,000</td>
          <td><button type="button" class="btn btn-success btn-sm btn-rad">PAID</button></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</div>
<!-- <div class="md-modal md-header-plain md-effect-7" id="md-availableUnit">
  <div class="md-content">
    <div class="modal-header">
      <button type="button" class="close md-close" data-dismiss="modal" aria-hidden="true">&times;</button>
    </div>
    <div class="modal-body">
      <div id="content-sm">
        <div class="scrollable scroll-sm">
          <dl class="dl-horizontal">
            <dt>Unit Type:</dt>
            <dd>Premier Office Suite</dd>
             <dt>Floor Area:</dt>
            <dd>198.10sqm - 796.70sqm</dd>
            <dt>Use:</dt>
            <dd>BPO/Corporate Office</dd>
            <dt>Unit Price</dt>
            <dd>18.9M - 81.8M</dd>
            <dt>Unit Deliverables</dt>
            <dd>Open Layout in Bare Units, Main Door in glass with black aluminum frame</dd>
          </dl>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-primary btn-flat md-close" data-dismiss="modal">Proceed</button>
    </div>
  </div>
</div> -->
<div class="md-modal md-header-plain md-effect-7" id="md-reservedUnit">
  <div class="md-content">
    <div class="modal-body">
     <p class="spacer">Client: <a href="lead-profile.php" target="_blank">Rein Figuracion</a></p>
     <p>Reservation Ends: September 01, 2014</p>
   </div>
 </div>
</div>
<div class="md-overlay"></div>