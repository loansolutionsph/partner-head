<div class="container-fluid" id="pcont">
  <div class="message">
    <div class="head clearfix">
     <div id="reportrange" class="pull-right">
      <i class="fa fa-calendar fa-lg"></i>
      <span><?php echo date("F j, Y", strtotime('-30 day')); ?> - <?php echo date("F j, Y"); ?></span> <b class="caret"></b>
    </div>
    <div class="form-group pull-right no-margin-y" style=" margin-left: 10px; width: 250px;">
     <select name="" id="" class="select2">
       <option value="">All Properties</option>
       <option value="">Property 1</option>
       <option value="">Property 2</option>
       <option value="">Property 3</option>
       <option value="">Property 4</option>
       <option value="">Property 5</option>
     </select>
   </div>
   <div class="form-group pull-right no-margin-y" style="margin-left: 10px;  width: 250px;">
     <select name="" id="" class="select2">
       <option value="">All Developer</option>
       <option value="">Filinvest</option>
       <option value="">Megaworld</option>
       <option value="">Primary Homes</option>
       <option value="">Acropolis</option>
       <option value="">King Properties</option>
     </select>
   </div>
   <h3 class="no-margin-bottom">Activity Report</h3>
 </div>
 <div class="mail">
  <div class="form">
    <div class="row dash-cols">
      <div class="col-md-12">
        <div class="block">
          <div class="header">
            <h2>Agent Performance</h2>
          </div>
          <div class="contant no-padding">
            <div id="graph"></div>
          </div>
          <div class="content">
           <table class="no-border hover spacer-bottom">
            <thead class="no-border lead-header">
              <tr>
                <th>Lead Status</th>
                <th>Agent 1</th>
                <th>Agent 2</th>
                <th>Agent 3</th>
                <th>Agent 4</th>
                <th>Agent 5</th>
              </tr>
            </thead>
            <tbody class="no-border-x">
              <tr>
                <td class="text-ucase">For Callback</td>
                <td>50</td>
                <td>120</td>
                <td>46</td>
                <td>15</td>
                <td>34</td>
              </tr>
              <tr>
                <td class="text-ucase">For Meet Up</td>
                <td>50</td>
                <td>120</td>
                <td>46</td>
                <td>15</td>
                <td>34</td>
              </tr>
              <tr>
                <td class="text-ucase">Not Interested</td>
                <td>120</td>
                <td>46</td>
                <td>15</td>
                <td>34</td>
                <td>50</td>
              </tr>
              <tr>
                <td class="text-ucase">Sold</td>
                <td>50</td>
                <td>15</td>
                <td>34</td>
                <td>120</td>
                <td>46</td>
              </tr>
              <tr>
                <td class="text-ucase">Archive</td>
                <td>46</td>
                <td>50</td>
                <td>15</td>
                <td>120</td>
                <td>34</td>
              </tr>
              <tr>
                <td class="text-ucase"><strong>Total</strong></td>
                <td>316 </td>
                <td>401</td>
                <td>171</td>
                <td>304</td>
                <td>232</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div> <!-- end mail -->
</div>
</div>

