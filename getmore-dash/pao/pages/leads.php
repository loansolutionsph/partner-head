<div class="container-fluid" id="pcont">
	<div class="page-head" style="padding: 0 0;">
		<div class="row">
			<div class="col-sm-12">
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<i class="fa fa-warning sign"></i><strong>Payment Overdue </strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi perferendis vero reprehenderit, ratione iusto iure!
				</div>
			</div>
		</div>
	</div>
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
							<th class="sorting">Contact Number</th>
							<th>Email</th>
							<th class="sorting">IP Location</th>
							<th class="sorting">Buyer Type</th>
							<th class="sorting">Broker</th>
							<th class="sorting" class="text-right" style="width:8%;">Applied On</th>
						</tr>
					</thead>
					<tbody class="no-border-y">
						<tr class="highlight-bg">
							<td><input type="checkbox" checked="" /></td>
							<td>Terence Patrick F. Casquejo</td>
							<td>9214650557</td>
							<td>Edwin1772@aol.com</td>
							<td>Cebu City</td>
							<td>Balikbayan</td>
							<td>
								<button data-dismiss="modal" data-modal="md-lead-comment"  class="md-trigger btn btn-sm btn-flat btn-rad btn-stat btn-claimed" type="button">Forward To...</button>
							</td>
							<td class="text-right">Aug 5</td>
						</tr>
						<tr class="fresh-bg">
							<td><input type="checkbox" /></td>
							<td>Terence Patrick F. Casquejo</td>
							<td>9214650557</td>
							<td>Edwin1772@aol.com</td>
							<td>Cebu City</td>
							<td>Balikbayan</td>
							<td>
								<button data-dismiss="modal" data-modal="md-lead-comment"  class="md-trigger btn btn-sm btn-flat btn-rad btn-stat btn-claimed" type="button">Forward To...</button>
							</td>
							<td class="text-right">Aug 5</td>
						</tr>
						<tr>
							<td><input type="checkbox" /></td>
							<td>Terence Patrick F. Casquejo</td>
							<td>9214650557</td>
							<td>Edwin1772@aol.com</td>
							<td>Cebu City</td>
							<td>Balikbayan</td>
							<td>
								<button data-dismiss="modal" data-modal="md-lead-comment"  class="md-trigger btn btn-sm btn-flat btn-rad btn-stat btn-claimed" type="button">Forward To...</button>
							</td>
							<td class="text-right">Aug 5</td>
						</tr>
						<tr>
							<td><input type="checkbox" /></td>
							<td>Terence Patrick F. Casquejo</td>
							<td>9214650557</td>
							<td>Edwin1772@aol.com</td>
							<td>Cebu City</td>
							<td>Balikbayan</td>
							<td>
								<button data-dismiss="modal" data-modal="md-lead-comment"  class="md-trigger btn btn-sm btn-flat btn-rad btn-stat btn-claimed" type="button">Forward To...</button>
							</td>
							<td class="text-right">Aug 5</td>
						</tr>
						<tr>
							<td><input type="checkbox" /></td>
							<td>Terence Patrick F. Casquejo</td>
							<td>9214650557</td>
							<td>Edwin1772@aol.com</td>
							<td>Cebu City</td>
							<td>Balikbayan</td>
							<td>
								<button data-dismiss="modal" data-modal="md-lead-comment"  class="md-trigger btn btn-sm btn-flat btn-rad btn-stat btn-claimed" type="button">Forward To...</button>
							</td>
							<td class="text-right">Aug 5</td>
						</tr>
						<tr>
							<td><input type="checkbox" /></td>
							<td>Terence Patrick F. Casquejo</td>
							<td>9214650557</td>
							<td>Edwin1772@aol.com</td>
							<td>Cebu City</td>
							<td>Balikbayan</td>
							<td>
								<button data-dismiss="modal" data-modal="md-lead-comment"  class="md-trigger btn btn-sm btn-flat btn-rad btn-stat btn-claimed" type="button">Forward To...</button>
							</td>
							<td class="text-right">Aug 5</td>
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
<div class="md-modal modal-lg md-header-plain md-effect-7"  id="md-lead-comment">
	<div class="md-content">
		<div class="modal-body">
			<div id="content">
				<div class="scrollable spacer">
					<div class=" friends-list">
						<?php for($i=0; $i < 20; $i++): ?>
							<div class="col-md-4">
								<div class="friend-widget active">
									<img src="images/av-default.jpg">
									<h4>Xacah Alessandra K. Chang</h4>
									<p>Analytical / Driver</p>
								</div>
							</div>
						<?php endfor; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default btn-flat md-close" data-dismiss="modal">Cancel</button>
			<button type="button" class="btn btn-success btn-flat" data-dismiss="modal">Proceed</button>
		</div>
	</div>
</div>
<!-- overlay -->
<div class="md-overlay"></div>