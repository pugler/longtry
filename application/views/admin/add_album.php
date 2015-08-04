<body id="addalbum-page"> 
<?php echo $admin_menu; ?>
 
<!-- start content-outer -->
<div id="content-outer">
<!-- start content -->
<div id="content">


<div id="page-heading"><h1>Add product</h1></div>


<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
	<th rowspan="3" class="sized"><img src="<?php echo base_url();?>asset/images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
	<th class="topleft"></th>
	<td id="tbl-border-top">&nbsp;</td>
	<th class="topright"></th>
	<th rowspan="3" class="sized"><img src="<?php echo base_url();?>asset/images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
</tr>
<tr>
	<td id="tbl-border-left"></td>
	<td>
	<!--  start content-table-inner -->
	<div id="content-table-inner">
	
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr valign="top">
		<td>
			<!--  start step-holder -->
			<div id="step-holder">
				<div class="step-no">1</div>
				<div class="step-dark-left"><a href="">Add Album</a></div>
				<div class="step-dark-right">&nbsp;</div>
				<div class="step-no-off">2</div>
				<div class="step-light-left">Add Picture</div>
				<div class="step-light-right">&nbsp;</div>
				<div class="step-no-off">3</div>
				<div class="step-light-left">Preview</div>
				<div class="step-light-round">&nbsp;</div>
				<div class="clear"></div>
			</div>
			<!--  end step-holder -->
		
			<!-- start id-form -->
			<form name="add_album_form" id="add_album_form" method="post" action="<?php echo base_url();?>admin/postalbum" enctype="multipart/form-data">
			<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
				<tr>
					<th valign="top">Album name:</th>
					<td><input type="text" class="inp-form" name="album_name"/></td>
					<td></td>
				</tr>
				<tr>
					<th valign="top">Album description:</th>
					<td><textarea rows="" cols="" class="form-textarea" name="album_description"></textarea></td>
					<td></td>
				</tr>				
				<tr>
					<th valign="top">Model:</th>
					<td><input type="text" class="inp-form" name="album_model" /></td>
					<td></td>
				</tr>
				<tr>
					<th valign="top">Location:</th>
					<td><input type="text" class="inp-form" name="album_location"/></td>
					<td></td>
				</tr>				
				<tr>
					<th valign="top">Select a date:</th>
					<td class="noheight">					
						<table border="0" cellpadding="0" cellspacing="0">
						<tr  valign="top">
							<td>
								<select id="d" class="styledselect-day" name="album_date">
									<option value="">dd</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
									<option value="31">31</option>
								</select>
							</td>
							<td>
								<select id="m" class="styledselect-month" name="album_month">
									<option value="">mmm</option>
									<option value="1">Jan</option>
									<option value="2">Feb</option>
									<option value="3">Mar</option>
									<option value="4">Apr</option>
									<option value="5">May</option>
									<option value="6">Jun</option>
									<option value="7">Jul</option>
									<option value="8">Aug</option>
									<option value="9">Sep</option>
									<option value="10">Oct</option>
									<option value="11">Nov</option>
									<option value="12">Dec</option>
								</select>
							</td>
							<td>
								<select  id="y"  class="styledselect-year" name="album_year">
									<option value="">yyyy</option>
									<?php for($i=date('Y')-10;$i<=date('Y');$i++) : ?>
									<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
									<?php endfor ?>
								</select>								
							</td>
							<td><a href=""  id="date-pick"><img src="<?php echo base_url();?>asset/images/forms/icon_calendar.jpg"   alt="" /></a></td>
						</tr>
						</table>			
					</td>
					<td></td>
				</tr>				
				<tr>
					<th>Album cover:</th>
					<td><input type="file" class="file_1" name="album_cover" /></td>
					<td>
						<div class="bubble-left"></div>
						<div class="bubble-inner">JPEG, GIF 5MB max per image</div>
						<div class="bubble-right"></div>
					</td>
				</tr>				
				<tr>
					<th>&nbsp;</th>
					<td valign="top">
						<input type="submit" value="" class="form-submit" />
						<input type="reset" value="" class="form-reset"  />
					</td>
					<td></td>
				</tr>
			</table>
			</form>
			<!-- end id-form  -->
		</td>
		<td>

		<!--  start related-activities -->
		<div id="related-activities">
			
			<!--  start related-act-top -->
			<div id="related-act-top">
			<img src="<?php echo base_url();?>asset/images/forms/header_related_act.gif" width="271" height="43" alt="" />
			</div>
			<!-- end related-act-top -->
			
			<!--  start related-act-bottom -->
			<div id="related-act-bottom">
			
				<!--  start related-act-inner -->
				<div id="related-act-inner">
				
					<div class="left"><a href=""><img src="<?php echo base_url();?>asset/images/forms/icon_plus.gif" width="21" height="21" alt="" /></a></div>
					<div class="right">
						<h5>Add another product</h5>
						Lorem ipsum dolor sit amet consectetur
						adipisicing elitsed do eiusmod tempor.
						<ul class="greyarrow">
							<li><a href="">Click here to visit</a></li> 
							<li><a href="">Click here to visit</a> </li>
						</ul>
					</div>
					
					<div class="clear"></div>
					<div class="lines-dotted-short"></div>
					
					<div class="left"><a href=""><img src="<?php echo base_url();?>asset/images/forms/icon_minus.gif" width="21" height="21" alt="" /></a></div>
					<div class="right">
						<h5>Delete products</h5>
						Lorem ipsum dolor sit amet consectetur
						adipisicing elitsed do eiusmod tempor.
						<ul class="greyarrow">
							<li><a href="">Click here to visit</a></li> 
							<li><a href="">Click here to visit</a> </li>
						</ul>
					</div>
					
					<div class="clear"></div>
					<div class="lines-dotted-short"></div>
					
					<div class="left"><a href=""><img src="<?php echo base_url();?>asset/images/forms/icon_edit.gif" width="21" height="21" alt="" /></a></div>
					<div class="right">
						<h5>Edit categories</h5>
						Lorem ipsum dolor sit amet consectetur
						adipisicing elitsed do eiusmod tempor.
						<ul class="greyarrow">
							<li><a href="">Click here to visit</a></li> 
							<li><a href="">Click here to visit</a> </li>
						</ul>
					</div>
					<div class="clear"></div>
					
				</div>
				<!-- end related-act-inner -->
				<div class="clear"></div>
			
			</div>
			<!-- end related-act-bottom -->
		
		</div>
		<!-- end related-activities -->

		</td>
	</tr>
	<tr>
		<td><img src="<?php echo base_url();?>asset/images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
		<td></td>
	</tr>
</table>
 
<div class="clear"></div>
</div>
<!--  end content-table-inner  -->
</td>
<td id="tbl-border-right"></td>
</tr>
<tr>
	<th class="sized bottomleft"></th>
	<td id="tbl-border-bottom">&nbsp;</td>
	<th class="sized bottomright"></th>
</tr>
</table>









 





<div class="clear">&nbsp;</div>

</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer -->

 

<div class="clear">&nbsp;</div>
    
<!-- start footer -->         
<div id="footer">
	<!--  start footer-left -->
	<div id="footer-left">
	Admin Skin &copy; Copyright Internet Dreams Ltd. <a href="">www.netdreams.co.uk</a>. All rights reserved.</div>
	<!--  end footer-left -->
	<div class="clear">&nbsp;</div>
</div>
<!-- end footer -->
 
</body>
</html>