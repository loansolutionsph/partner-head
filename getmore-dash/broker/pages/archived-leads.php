<div class="container-fluid" id="pcont">
	<div class="message">
		<div class="head">
			<h3>Archived Leads</h3>
			<ul class="status-list list-unstyled list-inline">
				<li class="stat-all"><a href="leads.php">All <span class="text-muted">(1,552)</span> </a></li>
				<li class="stat-all"><a href="booked-leads.php">Booked <span class="text-muted">(57,924)</span></a></li>
				<li class="stat-all active"><a href="archived-leads.php">Archived <span class="text-muted">(384,526)</span></a></li>
			</ul>
			<div class="filter-box">
				<div class="filter-by">
					<p>Filter Leads by</p>
				</div>
				<div class="filters">
					<form class="form-inline" role="form">
						<div class="form-group">
							<select class="select2">
								<option value="" selected>Any Buyer Type</option>
								<option value="">Local</option>
								<option value="">International</option>
							</select>
						</div>

						<div class="form-group">
							<select class="select2">
								<option value="" selected>Any Mobile Network</option>
								<option value="">Smart</option>
								<option value="">Globe</option>
								<option value="">Sun</option>
							</select>
						</div>
						<br>
						<div class="form-group">
							<select name="" id="" class="form-control">
								<option value="" selected>Any Lead Status</option>
								<option value="">Hot Lead</option>
								<option value="">Cold Lead</option>
							</select>
						</div>
						<div class="form-group">
							<button type="button" class="btn btn-success">Apply Filters</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="sub-head clearfix">
			<div class="pull-right">
				<input type="date" class="form-control" placeholder="Date Picker" style="min-width: 100px; margin-left: 15px;" value="<?php echo date('Y-m-d'); ?>">
			</div>
			<div class="pull-left">
				<input type="text" class="form-control" placeholder="Search" style="min-width: 300px;">
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
							<th class="sorting">Source</th>
							<th class="sorting">Contact Number</th>
							<th>Email</th>
							<th class="sorting">IP Location</th>
							<th class="sorting">Urgency</th>
							<th class="sorting">Buyer Type</th>
							<th class="sorting" class="text-right" style="width:8%;">Applied On</th>
						</tr>
					</thead>
					<tbody class="no-border-y">
						<?php for($i=0; $i < 5; $i++): ?>
							<tr onclick='location.href="lead-profile.php"'>
								<td><input type="checkbox" /></td>
								<td>Terence Patrick F. Casquejo</td>
								<td>Avenir</td>
								<td>9214650557</td>
								<td>Edwin1772@aol.com</td>
								<td>Cebu City</td>
								<td>in a year</td>
								<td>Balikbayan</td>
								<td class="text-right">Aug 10</td>
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