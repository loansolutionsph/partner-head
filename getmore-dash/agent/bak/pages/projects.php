<div class="container-fluid" id="pcont">
	<div class="message">
		<div class="head">
			<h3 class="no-margin-bottom">Properties</h3>
			<div class="clearfix"></div>
			<div class="filter-box">
				<div class="filter-by">
					<p>Filter Leads by</p>
				</div>
				<div class="filters">
					<form class="form-inline" role="form">

						<div class="form-group">
							<select class="select2" style="min-width: 200px;">
								<option value="" selected>Any Developer</option>
								<option value="">Megaworld</option>
								<option value="">Filinvest</option>
								<option value="">Primary Homes</option>
							</select>
						</div>
						<div class="form-group">
							<select class="select2" style="min-width: 200px;">
								<option value="" selected>Any Project</option>
								<option value="">Avenir</option>
								<option value="">Bloq</option>
								<option value="">Capri Oasis</option>
								<option value="">Sorrento Oasis</option>
								<option value="">Sanremo Oasis at Citta Di Mare</option>
							</select>
						</div>
						<br>

						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search keyword..." style="min-width: 300px;">
						</div>
						<div class="form-group">
							<button type="button" class="btn btn-success">Apply Filters</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<!-- end head -->
		<div class="mail">
			<div class="table-responsive">
				<table class="table no-border hover" id="datatable">
					<thead class="no-border">
						<tr>
							<th>Development</th>
							<th>Project</th>
							<th>Developer</th>
							<th>Total Leads</th>
							<th>Sold</th>
							<th>Units Left</th>
							<th>Commission Earned</th>
							<th class="text-right">Date Added</th>
						</tr>
					</thead>
					<tbody class="no-border-y">
						<?php for($i=0; $i < 6; $i++): ?>
							<tr title="See Full Details">
								<td>8 Newton Boulevard</td>
								<td>Mactan Newton</td>
								<td>Megaworld</td>
								<td>2,879</td>
								<td>241</td>
								<td class="text-success">67</td>
								<td>Php 1,545,784.00</td>
								<td class="text-right">Apr 09</td>
							</tr>
							<tr title="See Full Details">
								<td>BLOQ Residences</td>
								<td>BLOQ</td>
								<td>Acropolis</td>
								<td>7,884</td>
								<td>749</td>
								<td class="text-danger">4</td>
								<td>Php 973,074.00</td>
								<td class="text-right">Apr 09</td>
							</tr>
						<?php endfor; ?>
					</tbody>
				</table>
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
		</div> <!-- end mail -->
		<!-- end message -->
		<!-- end container-fluid -->
