<div class="container-fluid" id="pcont">
	<div class="message">
		<div class="head">
			<h3 class="no-margin-bottom">Features & Amenities <small>(19 items)</small></h3>
		</div>
		<div class="mail">
			<div class="form">
				<div class="row">
					<div class="col-md-4">
						<div class="content">
							<form role="form">
								<h4 class="spacer-bottom-sm">Add New Features/Amenities</h4>
								<div class="form-group">
									<label class="required">Feature/Amenity</label> <input type="text" class="form-control">
								</div>
								<div class="form-group">
									<label>Description</label> <textarea name="" id="" cols="30" rows="3" class="form-control"></textarea>
								</div>
								<button class="btn btn-flat btn-rad btn-primary no-margin-left" type="submit">Add New Feature/Amenity</button>
							</form>
						</div>
					</div>
					<div class="col-md-8">
						<div class="cl-mcont">
							<div class="block">
								<table class="table no-border hover">
									<thead class="default-header no-border">
										<tr>
											<th>Feature/Amenity</th>
											<th>Description</th>
											<th>Properties</th>
										</tr>
									</thead>
									<tbody class="no-border-y">
										<?php for($i=0; $i < 5; $i++): ?>
											<tr>
												<td>Heated Infinity Pool <p class="row-actions"><a href="">Edit</a> | <a href="">Remove</a></p></td>
												<td></td>
												<td><a href="">15</a></td>
											</tr>
											<tr>
												<td>Covered Pool Lounge <p class="row-actions"><a href="">Edit</a> | <a href="">Remove</a></p></td>
												<td>Lorem ipsum dolor sit amet</td>
												<td><a href="">4</a></td>
											</tr>
											<tr>
												<td>Outdoor Lounge on Wooden Deck <p class="row-actions"><a href="">Edit</a> | <a href="">Remove</a></p></td>
												<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam libero sed alias ipsam facilis pariatur nam neque, voluptatum modi optio amet quasi quo doloremque doloribus.</td>
												<td><a href="">9</a></td>
											</tr>
											<tr>
												<td>WiFi Access in the whole amenity floor <p class="row-actions"><a href="">Edit</a> | <a href="">Remove</a></p></td>
												<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam libero sed alias ipsam facilis pariatur nam neque, voluptatum modi optio amet quasi quo doloremque doloribus.</td>
												<td><a href="">7</a></td>
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
