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
   <h3 class="no-margin-bottom">Project Analytics</h3>
 </div>
 <div class="mail">
  <div class="form">
    <div class="row">
      <div class="col-md-12">
        <div class="stats_bar spacer-bottom no-margin-top">
          <div class="butpro butstyle" >
            <div class="sub"><h2>Leads</h2><span id="total_clientes">1,456</span></div>
          </div>
          <div class="butpro butstyle">
            <div class="sub"><h2>Contacted</h2><span>413</span></div>
          </div>
          <div class="butpro butstyle">
            <div class="sub"><h2>Meetup</h2><span>125</span></div>
          </div>
          <div class="butpro butstyle">
            <div class="sub"><h2>Archieved</h2><span>461</span></div>
          </div>
          <div class="butpro butstyle">
            <div class="sub"><h2>Sold</h2><span>18</span></div>
          </div>
          <div class="butpro butstyle">
            <div class="sub"><h2>Commission</h2><span>Php 254,789</span></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row dash-cols">
      <div class="col-md-6">
        <div class="block">
          <div class="header">
            <div class="pull-right">
              <select name="" id="" class="form-control">
                <!-- lead agent status -->
                <option value="" selected>All Agent Status</option>
                <option value="">For Callback</option>
                <option value="">For Meet-up</option>
                <option value="">Cancelled</option>
                <option value="">Sold</option>
              </select>
            </div>
            <h2>Leads</h2>
          </div>
          <div class="content no-padding">
            <div id="leadsIn" class="graph"></div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="block">
          <div class="header">
            <h2>Traffic Source</h2>
          </div>
          <div class="content">
            <div id="trafficSource" style="height: 250px; margin: 0 auto;"></div>
          </div>
          <div class="content no-padding">
           <table class="no-border hover">
            <tbody class="no-border-y">
             <tr>
              <td>Adwords Display</td>
              <td>18160 <span class="help-inline text-muted">(49%)</span></td>
            </tr>
            <tr>
              <td>Adwords Search</td>
              <td>11622 <span class="help-inline text-muted">(31%)</span></td>
            </tr>
            <tr>
              <td>Classified Ads</td>
              <td>3189 <span class="help-inline text-muted">(9%)</span></td>
            </tr>
            <tr>
              <td>Direct</td>
              <td>1762 <span class="help-inline text-muted">(5%)</span></td>
            </tr>
            <tr>
              <td>Email</td>
              <td>1494 <span class="help-inline text-muted">(4%)</span></td>
            </tr>
            <tr>
              <td>Facebook</td>
              <td>752 <span class="help-inline text-muted">(2%)</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="block">
      <div class="header">
        <h2>Top Referrals</h2>
      </div>
      <div class="content no-padding">
        <div class="list-group no-margin-bottom">
          <a href="https://www.google.com.ph" class="list-group-item" target="_blank"> <span class="badge">456</span> https://www.google.com.ph</a>
          <a href="https://www.facebook.com/" class="list-group-item" target="_blank"><span class="badge">21</span> https://www.facebook.com/</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row dash-cols">
  <div class="col-md-12">
    <div class="block">
      <div class="header">
        <h2>Agent Performance</h2>
      </div>
      <div class="contant no-padding">
        <div id="agentPerformance"></div>
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
<div class="row dash-cols">
  <div class="col-md-12">
    <div class="block">
      <div class="header">
        <h2>Conversations</h2>
      </div>
      <div class="contant no-padding">
        <div id="agentConversations"></div>
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
            <td class="text-ucase">Complaint</td>
            <td>50</td>
            <td>120</td>
            <td>46</td>
            <td>15</td>
            <td>34</td>
          </tr>
          <tr>
            <td class="text-ucase">Inquiry</td>
            <td>50</td>
            <td>120</td>
            <td>46</td>
            <td>15</td>
            <td>34</td>
          </tr>
          <tr>
            <td class="text-ucase">Second Follow up</td>
            <td>120</td>
            <td>46</td>
            <td>15</td>
            <td>34</td>
            <td>50</td>
          </tr>
          <tr>
            <td class="text-ucase">Escalation</td>
            <td>50</td>
            <td>15</td>
            <td>34</td>
            <td>120</td>
            <td>46</td>
          </tr>
          <tr>
            <td class="text-ucase">Doc Submission</td>
            <td>46</td>
            <td>50</td>
            <td>15</td>
            <td>120</td>
            <td>34</td>
          </tr>
          <tr>
            <td class="text-ucase">Others</td>
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
