<div class="container-fluid" id="pcont">
  <div class="message">
    <div class="head">
      <h3 class="no-margin-bottom">Projects</h3>
    </div>
    <div class="mail">
      <div class="form">
        <div class="row">
          <div class="col-md-4">
            <div class="content">
              <form role="form">
                <h4 class="spacer-bottom-sm">Add New Project</h4>
                <div class="form-group">
                  <label class="required">Project Name</label> <input class="tags" type="hidden" value="" />
                  <p class="help-block">You can add up multiple projects for a developer</p>
                </div>
                <div class="form-group">
                  <label>Developer</label> <select name="" id="" class="select2">
                    <option value="">Filinvest</option>
                    <option value="">Megaworld</option>
                    <option value="">Primary Homes</option>
                    <option value="">Acropolis</option>
                    <option value="">King Properties</option>
                  </select>
                </div>

                <button class="btn btn-flat btn-rad btn-primary no-margin-left" type="submit">Add New Project</button>
              </form>
            </div>
          </div>
          <div class="col-md-8">
            <div class="cl-mcont">
              <div class="block">
                <table class="table no-border hover">
                  <thead class="default-header no-border">
                    <tr>
                      <th>Project</th>
                      <th>Developer</th>
                      <th>Properties</th>
                    </tr>
                  </thead>
                  <tbody class="no-border-y">
                    <?php for($i=0; $i < 5; $i++): ?>
                      <tr>
                        <td>Bloq <p class="row-actions"><a href="">Edit</a> | <a href="">Remove</a></p></td>
                        <td>Acropolis</td>
                        <td><a href="">1</a></td>
                      </tr>

                      <tr>
                        <td>Eastwood <p class="row-actions"><a href="">Edit</a> | <a href="">Remove</a></p></td>
                        <td>Megaworld</td>
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
