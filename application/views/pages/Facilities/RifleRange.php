<div class="row">
<div class="col-lg-12">
	<h1>Rifle Range</h1>
</div>
</div>
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-4 pull-right">
	<b>Rifle Range Representative:</b><br/>
	<span><?php echo $rifle; ?></span><br/>
	<span><span class="glyphicon glyphicon-envelope"></span> <?php echo $rifleEmail; ?></span><br/>
	<br/>
	<img class="img-responsive" src="<?php echo base_url();?>assets/images/RifleRange.jpg"/>
</div>
<div class="col-lg-9 col-md-9 col-sm-8">
	<p>We offer an outdoor range of 10 meters, 25, 50, and 100 yards. The rifle range is open year-round to all members. For your safety, you will be provided with a list of range rules and a 20-minute video that needs to be viewed prior to using the facility. Once you view the video you will be given a range badge that is to be worn on the range at all times. You will also receive the combination to the lock so you can enter at your discretion.</p>
	<p>Any member that has viewed the video can use the outdoor range. A few of these rules are:</p>
	<ul>
		<li>NEVER handle your firearm when someone is down range</li>
		<li>ONLY bring cased firearms to the range</li>
		<li>DON'T use cans, bottles, or other garbage as targets.</li>
		<li>Paper bull's-eye targets only!</li>
		<li>No explosive targets</li>
		<li>Please be prepared to show your membership card to anyone who requests it. Failure to show your membership card will result in a trespassing citation and revocation of membership.</li>
		<li>Everyone using the range must sign in.</li>
		<li>The fee for guests is $10 per day, per guest.</li>
	</ul>
	<p><b>Hours of operation</b> vary throughout the year based on available light. The Club range is available Monday through Saturday beginning at 8:00 AM, and Sundays beginning at 9:00 AM. The range of the Club <u>closes at sunset or 8:00 pm</u> whichever is earlier. Here are the open and close times for the next 30 days:</p>
	<table class="table-with-header" style="display: inline-table;">
		<thead>
			<tr><th>Date</th><th>Opening Time</th><th>Closing Time</th></tr>
		</thead>
		<tbody>
			<?php
				for($i = 0; $i < 30; $i++){
					echo '<tr><td>'.$sunsetDateTimes[$i]['date'].'</td><td>'.$sunsetDateTimes[$i]['openTime'].'</td><td>'.$sunsetDateTimes[$i]['closeTime'].'</td></tr>';
				}
			?>
		</tbody>
	</table>
	<p>Any use outside of these hours is to be reported to a member of the Board of Directors for action. Please remember that every member is considered a volunteer safety officer. If you observe an unsafe practice or an activity that may jeopardize the use of the Club safely, please step forward and discuss your concerns with the member. Operating within the guidelines of safe handling and shooting practices helps to assure that the Club grounds will be available for use without more severe restrictions in the future.</p>
	<p><b>It is your responsibility as a Club member to ensure that safe practices are followed at all times.</b></p>
</div>
</div>