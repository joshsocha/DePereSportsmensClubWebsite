<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<div class="row no-gutters">
    <div class="col-lg-7 col-md-6 col-sm-12">
        <h1>Upcoming Events &amp; News:</h1>
        <hr></hr>
        <?php if(date('Y-m-d') <= date('Y-m-d', strtotime('2024-03-26'))) : ?>
            <h2>72nd Annual Winter Festival</h2>
            <p>Thank you to everyone who came out to support the club. Check out the main raffle winners at the <a href="<?php echo base_url();?>EventsAndNews/Winterfest">Winterfest</a> page.</p>
            <hr></hr>
        <?php endif; ?>
        <?php if(date('Y-m-d') <= date('Y-m-d', strtotime('2024-04-11'))) : ?>
            <h2>Spring Hunter's Safety</h2>
            <p>The De Pere Sportsmen's Club's spring Hunter Education course will be held at the De Pere Sportsmen's Club on April 3, 5, and 10. The spring class is currently full. The next class will be the end of August.</p>
            <hr></hr>
        <?php endif; ?>
        <?php if(date('Y-m-d') <= date('Y-m-d', strtotime('2024-05-05'))) : ?>
            <h2>Rockland Spring Hunter's Safety</h2>
            <p>Hunter Safety Class at Rockland Townhall is being held April 30th, May 1st, May 2nd and range day Saturday May 4th at De Pere Sportsman's Club. Class is Tuesday through Thursday from 6:00pm to 8:30pm and Range day is 8:45am until 3pm. Sign up through the DNR website - <a href="https://gowild.wi.gov/customers/safetyedclass" target="_blank">WI DNR Go Wild</a>. Search for "HUNTER" Course Type and "BROWN" for County.</p>
            <hr></hr>
        <?php endif; ?>
        <?php if(date('Y-m-d') <= date('Y-m-d', strtotime('2024-08-19'))) : ?>
            <h2>HHAUSA Archery Shoot</h2>
            <p>HHAUSA will be hosting an archery shoot at the De Pere Sportsmen’s Club on August 17 and 18.  This is their season finale. <a href="https://www.hhausa.org/mission-34-de-pere-sportsmens-club-august-17th-and-18th-2024/" target="_blank">Click here</a> for more information. </p>
            <hr></hr>
        <?php endif; ?>
        <?php if(date('Y-m-d') <= date('Y-m-d', strtotime('2024-02-26'))) : ?>
            <h2>Thank You Archery Sponsors</h2>
            <p>Thank you to Wonder Sign, Riverside Ballroom, Mark Baugnet Custom Homes, R G Hendricks Concrete, JEL of Wisconsin, Jessica Wauters (Century 21), and Ledgeview Dental Care. For more information about the archery sponsors, check out the <a href="<?php echo base_url();?>Leagues/3DArchery">Archery</a> page.</p>
            <hr></hr>
        <?php endif; ?>
    </div>
    <div class="w-100 d-none d-sm-block"></div>
    <div class="col-lg-5 col-md-6 col-sm-12">
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v15.0" nonce="bgvQzoPK"></script>
        <div class="fb-page" data-href="https://www.facebook.com/DePereSportsMensClub/" data-tabs="timeline" data-width="400" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/DePereSportsMensClub/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/DePereSportsMensClub/">De Pere Sportsmen&#039;s Club</a></blockquote></div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12">
        <h1>Who we are...</h1>
        <p>Welcome to the De Pere Sportsmen's Club! Established in 1952 by a group of dedicated volunteer sportsmen to further promote shooting sports in the Green Bay area. The De Pere Sportsmen's Club continues to provide opportunities for people of all ages to experience the benefits and beauty of a lovely natural surrounding while continuing to educate community members and promote a wide range of shooting sports in a safe appropriate facility. The legacy of the founders continues today through the regular efforts of volunteers. Check in with a Board member to find out how you can help continue the legacy for future generations.</p>
        <p>The De Pere Sportsmen's Club offers a wide variety of leagues and annual events for you and your family, whether you are an experienced shooter, or a newbie looking for a place to learn and experience shooting sports. Do you have a son or daughter who would like to learn how to shoot? There are always experienced shooters both available and willing to help you with the basics and steer you or your child onto another Club opportunity. Emphasis is always placed on safety first to establish safe gun and bow handling habits. The De Pere Sportsmen's Club really takes an active interest in getting shooters started off right and including them in the activities of the Club. The De Pere Sportsmen's Club is proud of their collective role in bringing these fun sports to new generations of enthusiasts.</p>
        <p>Whether you are interested in joining a league, shooting a few open rounds, or just grabbing a bowl of our famous chicken booyah at the festival, you will surely find yourself at home at the De Pere Sportsmen's Club.</p>
    </div>
</div>