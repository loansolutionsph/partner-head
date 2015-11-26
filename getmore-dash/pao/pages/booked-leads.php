<div class="container-fluid" id="pcont">
	<div class="message">
		<div class="head">
			<h3>Forwarded Leads</h3>


			<ul class="status-list list-unstyled list-inline">
				<li class="stat-all"><a href="leads.php">All <span class="text-muted">(1,552)</span> </a></li>
				<li class="stat-all active"><a href="booked-leads.php">Forwarded <span class="text-muted">(24)</span></a></li>
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
		<!-- 	<div class="pull-right" style="margin-left: 10px;">
			<select name="" id="" class="form-control">
			<option value="">Payment Status</option>
				<option value="">In a week</option>
				<option value="">In a month</option>
				<option value="">Due</option>
			</select>
		</div>
		 -->
			<div class="pull-right">
				<input type="text" class="form-control" placeholder="Search" style="min-width: 300px;">
			</div>

			<div class="pull-left">
				<form class="form-inline" role="form">
					<div class="form-group">
						<select name="" id="" class="form-control">
							<option value="">Bulk Action</option>
							<option value="">Paid</option>
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
							<th class="sorting">Source</th>
							<th class="sorting">Contact Number</th>
							<th>Email</th>
							<th class="sorting">Broker</th>
							<!-- <th class="sorting">Payment</th>
							<th class="sorting">Payment Status</th> -->
							<th class="sorting text-right">Booked</th>
						</tr>
					</thead>
					<tbody class="no-border-y">
						<?php for($i=0; $i < 11; $i++): ?>
							<tr class="payment-due">
								<td><input type="checkbox" /></td>
								<td>Terence Patrick F. Casquejo</td>
								<td>Avenir</td>
								<td>+639214650557 / +639214456557</td>
								<td>Edwin1772@aol.com</td>
								<td>Broker ABC</td>
								<!-- <td>Due: Aug 10</td>
								<td>
									<div class="btn-group no-margin">
										<button type="button" data-modal="md-lead-comment" class="md-trigger btn btn-sm btn-flat btn-rad btn-stat btn-claimed dropdown-toggle" data-toggle="dropdown">Unpaid &nbsp; <span class="caret"></span></button>
										<ul class="dropdown-menu dropdown-menu-status pull-right" role="menu">
											<li><a href="#">Paid</a></li>
											<li><a href="#">Back-out</a></li>
										</ul>
									</div>
								</td> -->
								<td class="text-right">Jul 10</td>
							</tr>
							<tr>
								<td><input type="checkbox" /></td>
								<td>Patrick Casquejo</td>
								<td>BLOQ</td>
								<td>+639214650557</td>
								<td>patrickc@gmail.com</td>
								<td>Broker XYZ</td>
								<!-- <td>Next: Sept 10</td>
								<td>
									<div class="btn-group no-margin">
										<button type="button" data-modal="md-lead-comment" class="md-trigger btn btn-sm btn-flat btn-rad btn-stat btn-claimed dropdown-toggle" data-toggle="dropdown">Unpaid &nbsp; <span class="caret"></span></button>
										<ul class="dropdown-menu dropdown-menu-status pull-right" role="menu">
											<li><a href="#">Paid</a></li>
											<li><a href="#">Back-out</a></li>
										</ul>
									</div>
								</td> -->
								<td class="text-right">Jul 10</td>
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
<div class="modal-body">
      <form role="form">

        <div class="form-group">
          <label class="required">Comment</label>
          <textarea name="" id="" rows="5" class="form-control" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, autem totam libero tempore perspiciatis minima."></textarea>
        </div>
        <button type="button" class="btn btn-danger btn-rad btn-flat md-close" data-dismiss="modal">Save Note</button>
        <button class="btn btn-default btn-rad btn-flat md-close">Cancel</button>
      </form>
    </div>
	</div>
</div>
<!-- overlay -->
<div class="md-overlay"></div>