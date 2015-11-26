<div class="container-fluid" id="pcont">
  <div class="message">
    <div class="head ">
      <h3 class="no-margin-bottom">Brokers  <a href="users-add.php" class="btn btn-success btn-flat btn-rad btn-sm">Add New</a> </h3>
    </div>
    <div class="sub-head clearfix">
      <div class="pull-left">
        <form class="form-inline" role="form">
          <div class="form-group">
            <select name="" id="" class="form-control" style="width: 200px;">
              <option value="">Bulk Action</option>
              <optgroup label="Delete User">
                <option value="">Delete</option>
              </optgroup>
            </select>
          </div>
          <button type="submit" class="btn btn-flat btn-rad btn-primary no-margin">Apply</button>
        </form>
      </div>
      <div class="pull-right">
        <input type="text" class="form-control" placeholder="Search" style="min-width: 300px;">
      </div>
    </div>
    <div class="mail">
      <div class="table-responsive">
        <table class="table no-border hover">
          <thead class="no-border">
            <tr>
              <th style="width:2%;"><input type="checkbox" /></th>
              <th>Name</th>
              <th>Broker Type</th>
              <th>Contact No.</th>
              <th>Email</th>
              <th>Brokerage</th>
              <th>Active Leads</th>
              <th>Total Leads</th>
              <th>Closed Deals</th>
              <th>Booking Rate</th> <!-- total forwarded leads/closed deals -->
            </tr>
          </thead>
          <tbody class="no-border-y">
            <tr>
              <td><input type="checkbox"/></td>
              <td>Xacah Alessandra K. Chang</td>
              <td>Analytical/Driver</td>
              <td>0917-3292224 / 09228264201 / 09323166591</td>
              <td>xkchang@gmail.com</td>
              <td>Global One Realty & Property Management Corp.</td>
              <td><a href="leads.php">4</a></td>
              <td><a href="leads.php">50</a></td>
              <td><a href="leads.php">25</a></td>
              <td class="text-success">50%</td>
            </tr>
            <tr>
              <td><input type="checkbox"/></td>
              <td>Reggie Manaloto</td>
              <td>Analytical/Driver</td>
              <td>0920-9028351 / 0922-8763569</td>
              <td>globalone.rtm@gmail.com</td>
              <td>Global One Realty & Property Management Corp.</td>
              <td><a href="leads.php" class="text-danger">0</a></td> <!-- mark red if no leads forwarded -->
              <td><a href="leads.php">150</a></td>
              <td><a href="leads.php">30</a></td>
              <td class="text-danger">20%</td> <!-- red if below 50% booking rate -->
            </tr>
          </tbody>
        </table>
      </div>
    </div> <!-- end mail -->
    <div class="footer-table clearfix">
      <div class="pull-right">
        <ul class="pagination">
          <li class="prev disabled"><a href="#"><span class="fa fa-angle-left"></span>&nbsp;Previous</a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li><li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">...</a></li>
          <li><a href="#">10</a></li>
          <li class="next"><a href="#">Next&nbsp;<span class="fa fa-angle-right"></span></a></li>
        </ul>
      </div>
      <div class="pull-left">
        <div class="showinfo">Showing 1 to 10 of 57 entries</div>
      </div>
    </div>
  </div>
</div>
<div class="md-modal md-header-plain md-effect-7"  id="md-lead-comment">
  <div class="md-content">
    <div class="modal-header">
      <h3>Changing lead status to <span class="text-info">PMed Facebook</span></h3>
      <button type="button" class="close md-close" data-dismiss="modal" aria-hidden="true">&times;</button>
    </div>
    <div class="modal-body">
      <p>Please write the means you contacted the applicant.</p>
      <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Add your comments here eg. sent SMS - asked if still interested to get a condo unit, called, cannot be reached, invalid number, keep on ringing etc..."></textarea>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default btn-flat md-close" data-dismiss="modal">Cancel</button>
      <button type="button" class="btn btn-primary btn-flat md-close" data-dismiss="modal">Add Comment</button>
    </div>
  </div>
</div>
<!-- overlay -->
<div class="md-overlay"></div>