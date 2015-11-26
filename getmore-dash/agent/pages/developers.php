<div class="container-fluid" id="pcont">
	<div class="message">
		<div class="head">
			<h3 class="no-margin-bottom">Developers</h3>
		</div>
		<div class="mail">
			<div class="form">
				<div class="row">
					<div class="col-md-3">
						<div class="content">
							<form role="form">
								<h4 class="spacer-bottom-sm">Add New Developer</h4>
								<div class="form-group">
									<label class="required">Developer</label> <input type="text" class="form-control">
								</div>
								<div class="form-group">
									<label>Contact Person</label> <input type="text" class="form-control">
								</div>
								<div class="form-group">
									<label>Contact Number</label> <input type="text" class="form-control">
								</div>
								<button class="btn btn-flat btn-rad btn-primary no-margin-left" type="submit">Add New Developer</button>
							</form>
						</div>
					</div>
					<div class="col-md-9">
						<div class="cl-mcont">
							<div class="block">
								<table class="table no-border hover">
									<thead class="default-header no-border">
										<tr>
											<th>Developer</th>
											<th>Contact Person</th>
											<th>Contact Number</th>
											<th>Properties</th>
										</tr>
									</thead>
									<tbody class="no-border-y">
										<?php for($i=0; $i < 5; $i++): ?>
											<tr>
												<td>Filinvest <p class="row-actions"><a href="">Edit</a> | <a href="">Remove</a></p></td>
												<td>Ellaine Figuracion</td>
												<td>(+63 2) 918 8188</td>
												<td><a href="">5</a></td>
											</tr>
										<?php endfor; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>   </div> <!-- end mail -->
		</div>
	</div>
