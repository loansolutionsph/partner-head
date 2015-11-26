<div class="container-fluid" id="pcont">
  <div class="message">
    <div class="head">
      <h3>Users  <a href="users-add.php" class="btn btn-primary btn-flat btn-rad btn-sm">Add New</a> </h3>
      <ul class="status-list list-unstyled list-inline">
        <li class="stat-all"><a href="leads.php">All <span class="text-muted">(10)</span> </a></li>
        <li class="stat-all"><a href="archived-leads.php">Super Admin <span class="text-muted">(1)</span></a></li>
        <li class="stat-all"><a href="archived-leads.php">Admin <span class="text-muted">(10)</span></a></li>
        <li class="stat-all"><a href="archived-leads.php">Agents <span class="text-muted">(25)</span></a></li>
      </ul>
    </div>
    <div class="sub-head clearfix">

      <div class="pull-left">
        <form class="form-inline" role="form">
          <div class="form-group">
            <select name="" id="" class="form-control">
              <option value="">Bulk Action</option>
              <option value="">Delete</option>
            </select>
          </div>
          <button type="submit" class="btn btn-flat btn-rad btn-default no-margin">Apply</button>
        </form>
      </div>

      <div class="pull-left">
        <form class="form-inline" role="form" style="margin-left: 20px;">
          <div class="form-group">
            <select name="" id="" class="form-control">
              <option value="">Change Role To...</option>
              <option value="">Super Admin</option>
              <option value="">Admin</option>
              <option value="">Agent</option>
            </select>
          </div>
          <button type="submit" class="btn btn-flat btn-rad btn-default no-margin">Change</button>
        </form>
      </div>
    </div>
    <div class="md-overlay"></div>
    <!-- End Nifty Modal -->
    <div class="mail">
      <div class="table-responsive">
        <table class="table no-border hover">
          <thead class="no-border">
            <tr>
              <th style="width:2%;"><input type="checkbox" /></th>
              <th>Username</th>
              <th>Name</th>
              <th>Email</th>
              <th>Role</th>
              <th>Status</th>
              <th class="sorting" class="text-right" style="width:8%;">Created On</th>
            </tr>
          </thead>
          <tbody class="no-border-y">
            <?php for($i=0; $i < 21; $i++): ?>
              <tr>
              <td><input type="checkbox" /></td>
                <td>ellaine.csr</td>
                <td>Rein Figuracion</td>
                <td>rein.figuracion@gmail.com</td>
                <td>Super Admin</td>
                <td>Active</td>
                <td>Aug 21</td>
              </tr>
            <?php endfor; ?>
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