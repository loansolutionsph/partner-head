<div class="page-aside email">
	<div class="fixed nano nscroller">
		<div class="content">
			<div class="mail-nav collapse">
				<ul class="nav nav-pills nav-stacked ">
					<li><img src="images/av-default.jpg" class="img-responsive"></li>
					<li><h4>Xacah Alessandra K. Chang</h4></li>
					<li><strong>Broker Type:</strong> Analytical/Driver</li>
					<li><strong>Brokerage:</strong> Global One Realty & Property Management Corp.</li>
				</ul>
			</div>
			<div class="mail-nav collapse">
				<p class="title">Lead Stats</p>
				<ul class="nav nav-pills nav-stacked ">
					<li><strong>Total:</strong>50</li>
					<li><strong>Active:</strong>4</li>
					<li><strong>Cancelled:</strong>15</li>
					<li><strong>Closed:</strong>25</li>
					<li><strong>Booking Rate:</strong> <span class="text-success">50%</span> <span class="text-danger">20%</span> </li>
				</ul>
			</div>
			<div class="mail-nav collapse">
				<p class="title"><a href="#" class="pull-right md-trigger" data-modal="md-edit-contact-info" data-toggle="tooltip" data-placement="left" data-original-title="Edit Info"><i class="fa fa-pencil-square-o"></i></a>Contact Details</p>
				<ul class="nav nav-pills nav-stacked ">
					<li><a href="skype:rein.figuracion?chat"><i class="skype fa fa-skype"></i>rein.figuracion</a></li>
					<li><i class="fa fa-envelope"></i> reinafiguracion@gmail.com</li>
					<li><i class="fa fa-mobile"></i> +63 32 266789</li>
					<li><i class="fa fa-phone"></i>  +63 97 43396 8139</li>
				</ul>
			</div>
			<div class="mail-nav collapse">
				<p class="title"><a href="#" class="pull-right md-trigger" data-modal="md-edit-social-info" data-toggle="tooltip" data-placement="left" data-original-title="Edit Info"><i class="fa fa-pencil-square-o"></i></a>Social Profiles</p>
				<ul class="nav nav-pills nav-stacked ">
					<li><a href="#" target="_blank"><i class="facebook fa fa-facebook-square"></i>http://facebook.com/dfdsfsdf</a></li>
					<li><a href="#" target="_blank"><i class="twitter fa fa-twitter-square"></i>http://facebook.com/dfdsfsdf</a></li>
					<li><a href="#" target="_blank"><i class="linkedin fa fa-linkedin-square"></i>http://facebook.com/dfdsfsdf</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- end page-aside aside-right email -->
<div class="container-fluid" id="pcont">
	<div class="message">
		<div class="head">
			<h3>Leads <!-- <a href="add-filter.php" class="btn btn-default btn-rad btn-sm">Add New</a> --></h3>
			<ul class="status-list list-unstyled list-inline">
				<li class="stat-all active"><a href="leads.php">All <span class="text-muted">(1,552)</span> </a></li>
				<li class="stat-all"><a href="booked-leads.php">Forwarded <span class="text-muted">(24)</span></a></li>
				<li class="stat-all"><a href="archived-leads.php">Archived <span class="text-muted">(384,526)</span></a></li>
			</ul>
		</div>
		<div class="sub-head clearfix">
			<div class="pull-right">
				<div id="reportrange" class="pull-right">
					<i class="fa fa-calendar fa-lg"></i>
					<span><?php echo date("F j, Y", strtotime('-30 day')); ?> - <?php echo date("F j, Y"); ?></span> <b class="caret"></b>
				</div>
			</div>
			<div class="pull-right">
				<input type="text" class="form-control" placeholder="Search" style="min-width: 300px;">
			</div>
			<div class="pull-left">
				<form class="form-inline" role="form">
					<div class="form-group">
						<select name="" id="" class="form-control">
							<option value="">Bulk Action</option>
							<option value="">Archive</option>
						</select>
					</div>
					<button type="submit" class="btn btn-flat btn-rad btn-primary no-margin">Apply</button>
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
							<th class="sorting" style="width:15%;">Lead</th>
							<th>Source</th>
							<th class="sorting">Contact Number</th>
							<th>Email</th>
							<th class="sorting">Status</th>
							<th class="sorting" class="text-right" style="width:8%;">Forwarded Last</th>
						</tr>
					</thead>
					<tbody class="no-border-y">
						<tr class="highlight-bg">
							<td><input type="checkbox" checked="" /></td>
							<td>Terence Patrick F. Casquejo</td>
							<td>Avenir</td>
							<td>9214650557</td>
							<td>Edwin1772@aol.com</td>

							<td>
								<div class="btn-group no-margin">
									<button type="button" data-modal="md-lead-comment" class="md-trigger btn btn-sm btn-flat btn-rad btn-stat btn-claimed dropdown-toggle" data-toggle="dropdown">Not Called &nbsp; <span class="caret"></span></button>
									<ul class="dropdown-menu dropdown-menu-status pull-right" role="menu">
										<li><a href="#">Called</a></li>
										<li><a href="#">PMed Facebook</a></li>
										<li><a href="#">With SMS</a></li>
										<li><a href="#">Callback</a></li>
										<li><a href="#"> Email Sent</a></li>
										<li class="divider"></li>
										<li><a href="#">Booked</a></li>
									</ul>
								</div>
							</td>
							<td class="text-right">Aug 5</td>
						</tr>
						<tr class="fresh-bg">
							<td><input type="checkbox" /></td>
							<td>Terence Patrick F. Casquejo</td>
							<td>Avenir</td>
							<td>9214650557</td>
							<td>Edwin1772@aol.com</td>

							<td>
								<div class="btn-group no-margin">
									<button type="button" data-modal="md-lead-comment" class="md-trigger btn btn-sm btn-flat btn-rad btn-stat btn-claimed dropdown-toggle" data-toggle="dropdown">Not Called &nbsp; <span class="caret"></span></button>
									<ul class="dropdown-menu dropdown-menu-status pull-right" role="menu">
										<li><a href="#">Called</a></li>
										<li><a href="#">PMed Facebook</a></li>
										<li><a href="#">With SMS</a></li>
										<li><a href="#">Callback</a></li>
										<li><a href="#"> Email Sent</a></li>
										<li class="divider"></li>
										<li><a href="#">Booked</a></li>
									</ul>
								</div>
							</td>
							<td class="text-right">Aug 5</td>
						</tr>
						<tr>
							<td><input type="checkbox" /></td>
							<td>Terence Patrick F. Casquejo</td>
							<td>Avenir</td>
							<td>9214650557</td>
							<td>Edwin1772@aol.com</td>

							<td>
								<div class="btn-group no-margin">
									<button type="button" data-modal="md-lead-comment" class="md-trigger btn btn-sm btn-flat btn-rad btn-stat btn-claimed dropdown-toggle" data-toggle="dropdown">Not Called &nbsp; <span class="caret"></span></button>
									<ul class="dropdown-menu dropdown-menu-status pull-right" role="menu">
										<li><a href="#">Called</a></li>
										<li><a href="#">PMed Facebook</a></li>
										<li><a href="#">With SMS</a></li>
										<li><a href="#">Callback</a></li>
										<li><a href="#"> Email Sent</a></li>
										<li class="divider"></li>
										<li><a href="#">Booked</a></li>
									</ul>
								</div>
							</td>
							<td class="text-right">Aug 5</td>
						</tr>
						<tr>
							<td><input type="checkbox" /></td>
							<td>Terence Patrick F. Casquejo</td>
							<td>Avenir</td>
							<td>9214650557</td>
							<td>Edwin1772@aol.com</td>

							<td>
								<div class="btn-group no-margin">
									<button type="button" data-modal="md-lead-comment" class="md-trigger btn btn-sm btn-flat btn-rad btn-stat btn-claimed dropdown-toggle" data-toggle="dropdown">Not Called &nbsp; <span class="caret"></span></button>
									<ul class="dropdown-menu dropdown-menu-status pull-right" role="menu">
										<li><a href="#">Called</a></li>
										<li><a href="#">PMed Facebook</a></li>
										<li><a href="#">With SMS</a></li>
										<li><a href="#">Callback</a></li>
										<li><a href="#"> Email Sent</a></li>
										<li class="divider"></li>
										<li><a href="#">Booked</a></li>
									</ul>
								</div>
							</td>
							<td class="text-right">Aug 5</td>
						</tr>
						<tr>
							<td><input type="checkbox" /></td>
							<td>Terence Patrick F. Casquejo</td>
							<td>Avenir</td>
							<td>9214650557</td>
							<td>Edwin1772@aol.com</td>

							<td>
								<div class="btn-group no-margin">
									<button type="button" data-modal="md-lead-comment" class="md-trigger btn btn-sm btn-flat btn-rad btn-stat btn-claimed dropdown-toggle" data-toggle="dropdown">Not Called &nbsp; <span class="caret"></span></button>
									<ul class="dropdown-menu dropdown-menu-status pull-right" role="menu">
										<li><a href="#">Called</a></li>
										<li><a href="#">PMed Facebook</a></li>
										<li><a href="#">With SMS</a></li>
										<li><a href="#">Callback</a></li>
										<li><a href="#"> Email Sent</a></li>
										<li class="divider"></li>
										<li><a href="#">Booked</a></li>
									</ul>
								</div>
							</td>
							<td class="text-right">Aug 5</td>
						</tr>
						<tr>
							<td><input type="checkbox" /></td>
							<td>Terence Patrick F. Casquejo</td>
							<td>Avenir</td>
							<td>9214650557</td>
							<td>Edwin1772@aol.com</td>

							<td>
								<div class="btn-group no-margin">
									<button type="button" data-modal="md-lead-comment" class="md-trigger btn btn-sm btn-flat btn-rad btn-stat btn-claimed dropdown-toggle" data-toggle="dropdown">Not Called &nbsp; <span class="caret"></span></button>
									<ul class="dropdown-menu dropdown-menu-status pull-right" role="menu">
										<li><a href="#">Called</a></li>
										<li><a href="#">PMed Facebook</a></li>
										<li><a href="#">With SMS</a></li>
										<li><a href="#">Callback</a></li>
										<li><a href="#"> Email Sent</a></li>
										<li class="divider"></li>
										<li><a href="#">Booked</a></li>
									</ul>
								</div>
							</td>
							<td class="text-right">Aug 5</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div> <!-- end mail -->
		<!-- <div class="footer-table clearfix">
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
		</div> -->
	</div>
</div>
<div class="md-modal md-header-plain md-effect-7" id="md-lead-comment">
	<div class="md-content">
		<div class="modal-header">
			<!-- <h3>Changing lead status to <span class="text-info">PMed Facebook</span></h3> -->
		</div>
		<div class="modal-body">
			<form role="form">
				<div class="form-group">
					<label>Schedule</label> <input type="date" class="form-control">
				</div>
				<div class="form-group">
					<label class="required">Comment</label>
					<textarea name="" id="" rows="5" class="form-control" placeholder="Add your comments here eg. sent SMS - asked if still interested to get a condo unit, called, cannot be reached, invalid number, keep on ringing etc..."></textarea>
				</div>
				<button type="button" class="btn btn-danger btn-rad btn-flat md-close" data-dismiss="modal">Save Note</button>
				<button class="btn btn-default btn-rad btn-flat md-close">Cancel</button>
			</form>
		</div>
	</div>
</div>
<!-- overlay -->
<div class="md-overlay"></div>