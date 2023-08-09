<!DOCTYPE html>
<html lang="en">
<head>
	<link href="<?php echo base_url('/assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('/assets/css/custom.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('/assets/css/fontawesome/all.min.css'); ?>" rel="stylesheet">
	<title><?php if(isset($title)) echo $title; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<?php if(!in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))) : ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-96849732-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-96849732-1');
  </script>
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script>
    (adsbygoogle = window.adsbygoogle || []).push({
      google_ad_client: "ca-pub-5735797484663928",
      enable_page_level_ads: true
    });
  </script>
<?php endif; ?>
</head>
<body>
<div class="container-fluid" style="max-width:1000px; background-color:white;">
<div class="row">
	<div class="col-lg-12">
		<h1>De Pere Sportsmen's Club</h1>
    <h3>Est. 1952</h3>
	</div>
</div>
<div class="row" style="max-width:1000px;" id="nav">
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
  </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if($page=="home") echo 'class="active"';?>><a href="<?php echo base_url();?>">Home</a></li>
        <li class="<?php if($page=="eventsandnews") echo 'active';?> dropdown">
          <a data-toggle="dropdown" class="dropdown-toggle" role="button" aria-expanded="false">Events and News <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
            <li class="<?php if($subpage=="eventsandnews") echo 'active';?>"><a href="<?php echo base_url();?>EventsAndNews">Main Calendar</a></li>
            <li class="<?php if($subpage=="newsletter") echo 'active';?>"><a href="<?php echo base_url();?>EventsAndNews/Newsletter">Newsletter</a></li>
            <li class="<?php if($subpage=="winterfest") echo 'active';?>"><a href="<?php echo base_url();?>EventsAndNews/Winterfest">Winterfest</a></li>
            <?php /*<li class="<?php if($subpage=="sportsmensraffle") echo 'active';?>"><a href="<?php echo base_url();?>EventsAndNews/SportsmensRaffle">Sportsmen's Raffle</a></li>*/?>
            <?php /*<li class="<?php if($subpage=="cancerresearchbenefit") echo 'active';?>"><a href="<?php echo base_url();?>EventsAndNews/CancerResearchBenefit">Cancer Research Benefit</a></i>*/?>
            <?php /*<li class="<?php if($subpage=="20gunraffle") echo 'active';?>"><a href="<?php echo base_url();?>EventsAndNews/20GunRaffle">20-Gun Raffle</a></li>*/?>
            <li class="<?php if($subpage=="summerraffle") echo 'active';?>"><a href="<?php echo base_url();?>EventsAndNews/SummerRaffle">$ummer Raffle</a></li>
            <li class="<?php if($subpage=="sightindays") echo 'active';?>"><a href="<?php echo base_url();?>EventsAndNews/SightInDays">Sight-in Days</a></li>
            <li class="<?php if($subpage=="hunterssafety") echo 'active';?>"><a href="<?php echo base_url();?>EventsAndNews/HuntersSafety">Hunter's Safety</a></li>
          </ul>
        </li>
        <li class="<?php if($page=="leagues") echo 'active';?> dropdown">
          <a data-toggle="dropdown" class="dropdown-toggle" role="button" aria-expanded="false">Leagues <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li class="<?php if($subpage=="leagues") echo 'active';?>"><a href="<?php echo base_url();?>Leagues">All Leagues</a></li>
            <li class="<?php if($subpage=="3darchery") echo 'active';?>"><a href="<?php echo base_url();?>Leagues/3DArchery">3D Archery</a></li>
            <li class="<?php if($subpage=="4h") echo 'active';?>"><a href="<?php echo base_url();?>Leagues/4H">4H Shooting</a></li>
            <li class="<?php if($subpage=="actionpistol") echo 'active';?>"><a href="<?php echo base_url();?>Leagues/ActionPistol">Action Pistol</a></li>
            <?php /*<li class="<?php if($subpage=="actionrifle") echo 'active';?>"><a href="<?php echo base_url();?>Leagues/ActionRifle">Action Rifle</a></li>*/?>
            <li class="<?php if($subpage=="juniorrifle") echo 'active';?>"><a href="<?php echo base_url();?>Leagues/JuniorRifle">Junior Rifle</a></li>
            <li class="<?php if($subpage=="pistol") echo 'active';?>"><a href="<?php echo base_url();?>Leagues/Pistol">Pistol</a></li>
            <li class="<?php if($subpage=="trapleague") echo 'active';?>"><a href="<?php echo base_url();?>Leagues/Trap">Trap</a></li>
          </ul>
        </li>
        <li <?php if($page=="facilities") echo 'class="active"';?>>
          <a data-toggle="dropdown" class="dropdown-toggle" role="button" aria-expanded="false">Facilities <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
            <li class="<?php if($subpage=="facilities") echo 'active';?>"><a href="<?php echo base_url();?>Facilities">All Facilities</a></li>
            <li class="<?php if($subpage=="3darcheryrange") echo 'active';?>"><a href="<?php echo base_url();?>Facilities/3DArcheryRange">3D Archery Range</a></li>
            <li class="<?php if($subpage=="clubhouse") echo 'active';?>"><a href="<?php echo base_url();?>Facilities/ClubHouse">Club House</a></li>
            <li class="<?php if($subpage=="indoorrange") echo 'active';?>"><a href="<?php echo base_url();?>Facilities/IndoorRange">Indoor Range</a></li>
            <li class="<?php if($subpage=="naturepreserve") echo 'active';?>"><a href="<?php echo base_url();?>Facilities/NaturePreserve">Nature Preserve</a></li>
            <li class="<?php if($subpage=="riflerange") echo 'active';?>"><a href="<?php echo base_url();?>Facilities/RifleRange">Rifle Range</a></li>
            <li class="<?php if($subpage=="traprange") echo 'active';?>"><a href="<?php echo base_url();?>Facilities/Trap">Trap</a></li>
          </ul>
        </li>
        <li <?php if($page=="about") echo 'class="active"';?>>
          <a data-toggle="dropdown" class="dropdown-toggle" role="button" aria-expanded="false">About Us <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
            <li class="<?php if($subpage=="aboutus") echo 'active';?>"><a href="<?php echo base_url();?>AboutUs">About Us</a></li>
            <li class="<?php if($subpage=="boardmembers") echo 'active';?>"><a  href="<?php echo base_url();?>AboutUs/BoardMembers">Board Members</a></li>
            <li class="<?php if($subpage=="recommendedsites") echo 'active';?>"><a href="<?php echo base_url();?>AboutUs/RecommendedSites">Recommended Sites</a></li>
          </ul>
        </li>
        <li <?php if($page=="join") echo 'class="active"';?>><a href="<?php echo base_url();?>Join">Join</a></li>
        <li <?php if($page=="gallery") echo 'class="active"';?>>
          <a data-toggle="dropdown" class="dropdown-toggle" role="button" aria-expanded="false">Gallery <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
            <li class="<?php if($subpage=="photogallery") echo 'active';?>"><a target="_blank" href="http://www.facebook.com/pages/De-Pere-Sportsmens-Club/120542164625203?sk=photos">Photo Gallery</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
</nav>
</div><!-- /.container-fluid -->
<div class="row">
  <div class="col-lg-12" style="background-color: #fff; padding: 0;"><img class="img-responsive" style="display: block;margin-left: auto;margin-right: auto;" src="<?php echo base_url();?>assets/images/<?php echo $banner; ?>"/></div>
</div>
<!--<img style="position:absolute;display:block;top:0;z-index:-999;margin-right:auto;margin-left:auto;min-height:400px;" class="img-responsive" src="<?php echo base_url();?>assets/images/Default.jpg"/>-->