<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
	  xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">

<head>
	<script>
	var rootURI = ".";
	</script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<link type="text/css" rel="stylesheet" href="/css/bootstrap-ch.css">
	<link type="text/css" rel="stylesheet" href="/css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="/css/theme.min.css">


	<script type="text/javascript" src="/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		var isguest = true;
		jQuery.noConflict();
	</script>
</head>

<body class="home-page">

<!--[if lt IE 9]>
<div class="ie8-note alert alert-warning">
	<div class="container">
		<div class="media">
			<div class="icon pull-left fa fa-comment" style="font-size: 50px; height: 50px; line-height: 50px; margin-right: 20px;"></div>
			<div class="media-body">
				<strong>Please upgrade your browser</strong>
				<div>Your browser does not support the new technologies we used.</div>
			</div>
		</div>
	</div>
</div>
<![endif]-->

<?php if($this->isHome): ?><div class="top-cover" ><?php endif; ?>

	<nav class="nav-site navbar navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-site-collapse">
					<i class="fa fa-bars"></i>
				</button>
				<a class="navbar-brand" href="<?php echo $this->baseurl; ?>">Soheil Novinfard</a>
			</div>
			<div class="collapse navbar-collapse" id="nav-site-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="<?php echo $this->baseurl; ?>/projects">
							My Projects
						</a>
					</li>
					<li class="dropdown">
						<a target="_blank" href="./media/resume.pdf">
							Resume
						</a>
					</li>
					<li>
						<a href="<?php echo $this->baseurl; ?>/blog">Blog</a>
					</li>
					<li>
						<a href="<?php echo $this->baseurl; ?>/contact">
							Contact Me
						</a>
					</li>
					<?php if(false): ?>
						<?php if ($user->get('guest') == 1): ?>
							<li>
							<span>
							<a href="javascript:void(0);" class="btn btn-login" data-toggle="modal" data-target="#myModal">
								<i class="fa fa-lock"></i>&nbsp; Sign In
							</a>
							</span>
							</li>
						<?php else: ?>
							<li class="dropdown">
								<a href="javascript:void(0);" data-toggle="dropdown"
								   class="btn btn-login dropdown-toggle"
								   style="padding-bottom: 5px;padding-top: 5px;margin-top:10px;">
									<i class="fa fa-user"></i>
									&nbsp; My Account
									<b class="caret"></b>
								</a>
								<ul class="dropdown-menu" style="right: 0;margin-top:10px;">
									<li>
										<a href="<?php echo $this->baseurl; ?>/account/subscriptions">
											<i class="icon fa fa-shield"></i>
											My Subscriptions
										</a>
									</li>
									<!--								<li>-->
									<!--									<a href="--><?php //echo $this->baseurl; ?><!--/account/licenses">-->
									<!--										<i class="icon fa fa-sticky-note-o"></i>-->
									<!--										My Licenses-->
									<!--									</a>-->
									<!--								</li>-->
									<li>
										<a href="<?php echo $this->baseurl; ?>/account/profile">
											<i class="icon fa fa-info"></i>
											My Profile
										</a>
									</li>
									<li>
										<a href="<?php echo $this->baseurl; ?>/account/change-pass">
											<i class="icon fa fa-toggle-on"></i>
											Change Password
										</a>
									</li>
									<li>
										<a href="<?php echo $this->baseurl; ?>/account/logout">
											<i class="icon fa fa-sign-out"></i>
											Logout
										</a>
									</li>
								</ul>
							</li>
						<?php endif; ?>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</nav>

	<?php if($this->isHome): ?>
	<header class="headlines text-center front-headline">
		<h2>Mobile Software Engineer</h2>
		<h1>iOS Developer</h1>
		<div>
			My name is Soheil Novinfard
		</div>
	</header>
	<!--	<a class="home-readmore" href="--><?php //echo $this->baseurl; ?><!--/products/egoltarchive">-->
	<!--		<span class="btn btn-product">Ream More</span>-->
	<!--	</a>-->
	<section class="front-product">
		<?php if(false): ?>
			<div class="container2">
				<ul class="product-list row text-center">
					<li class="col-md-2 col-md-offset-1">

					</li>
					<li class="col-md-2">

					</li>
					<li class="col-md-2">
						<!--					<h3>About me?</h3>-->
						<a href="#about">
							<span class="btn btn-product">Ream More</span>
						</a>
					</li>
					<li class="col-md-2 ">

					</li>
					<li class="col-md-2">

					</li>
				</ul>
			</div>
		<?php endif; ?>
	</section>

	<footer class="footer footer-home text-center">
		<div class="container">
			<div class="footer-menu clearfix">
				Want to know more about me? <a href="<?php echo $this->baseurl; ?>/projects">My projects</a> will speak to you. If you still want to know more, please download <a target="_blank" href="./media/resume.pdf">my resume</a>.
				<br/><br/>
				In addition, you can check my profile in the following channels:
				<br/><br/>
				<ul class="nav inline">
					<li>
						<a href="http://www.linkedin.com/in/novinfard">
							<i class="fa fa-linkedin"></i>
							<span class="visible-phone">LinkedIn</span>
						</a>
					</li>
					<li>
						<a href="https://github.com/novinfard">
							<i class="fa fa-github"></i>
							<span class="visible-phone">Github</span>
						</a>
					</li>
					<li>
						<a href="https://stackoverflow.com/users/3477974/soheil-novinfard">
							<i class="fa fa-stack-overflow"></i>
							<span class="visible-phone">Stack Overflow</span>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/novinfard/">
							<i class="fa fa-instagram"></i>
							<span class="visible-phone">Instagram</span>
						</a>
					</li>
					<li>
						<a href="https://twitter.com/novinfard">
							<i class="fa fa-twitter"></i>
							<span class="visible-phone">Twitter</span>
						</a>
					</li>
					<?php if(false): ?>
					<li>
						<a href="https://www.facebook.com/novinfard">
							<i class="fa fa-facebook"></i>
							<span class="visible-phone">Facebook</span>
						</a>
					</li>
					<li>
						<a href="https://www.youtube.com/c/novinfard">
							<i class="fa fa-youtube"></i>
							<span class="visible-phone">YouTube</span>
						</a>
					</li>
					<?php endif; ?>
				</ul>
				<?php if(false): ?>
					<ul class="nav inline pull-right">
						<li>
							<a href="<?php echo $this->baseurl; ?>/blog">Blog</a>
						</li>
						<li>
							<a href="<?php echo $this->baseurl; ?>/contact">Contact</a>
						</li>
						<li>
							<a href="<?php echo $this->baseurl; ?>/forums">Forums</a>
						</li>
						<li>
							<a href="<?php echo $this->baseurl; ?>/about">About</a>
						</li>
					</ul>
				<?php endif; ?>
				<hr>
				<?php if(false): ?>
					<ul class="nav inline pull-right small">
						<li>
							<a href="<?php echo $this->baseurl; ?>/translators">Translators</a>
						</li>
						<li>
							<a href="<?php echo $this->baseurl; ?>/terms-conditions">Terms & Conditions</a>
						</li>
						<li>
							<a href="<?php echo $this->baseurl; ?>/privacy-policy">Privacy Policy</a>
						</li>
						<li>
							<a href="<?php echo $this->baseurl; ?>/support-policy">Support Policy</a>
						</li>
						<li>
							<a href="http://extensions.joomla.org/profile/profile/details/84373#extensions">JED Directory</a>
						</li>
						<li>
							<a target="_blank" href="http://www.irhost.info">IRhost Hosting</a>
						</li>
					</ul>
				<?php endif; ?>
				<div class="footer-copyright small">
					Copyright © 2012 - <?php echo date('Y'); ?> Soheil Novinfard . All rights reserved.
				</div>
			</div>
		</div>
	</footer>
</div>
<?php if(false): ?>
	<div class="bottom-cover" >
		<section class="front-testimonial top-b">
			<div class="container">
				<div class="row">
					<div>
						<h2 class="world_map_title text-center">We bring thousands of smiles in 142 countries of the world</h2>
						<div class="world_map">
							<img class="world_map_logo" src="<?php echo $this->tmplroot; ?>/images/smile-icon2.png">
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php if(false): ?>
			<section class="front-company" >
				<div class="container text-center">
					<ul class="com-list">
						<li><img class="img-responsive" src="<?php echo $this->tmplroot; ?>/images/kfc-logo.png"></li>
						<li><img class="img-responsive" src="<?php echo $this->tmplroot; ?>/images/mtv-logo.png"></li>
						<li><img class="img-responsive" src="<?php echo $this->tmplroot; ?>/images/unicef-logo.png"></li>
						<li><img class="img-responsive" src="<?php echo $this->tmplroot; ?>/images/irib-logo.png"></li>
						<li><img class="img-responsive" src="<?php echo $this->tmplroot; ?>/images/tehranuni-logo.png"></li>
					</ul>
				</div>
			</section>
		<?php endif; ?>
		<section class="front-company" style="padding:10px 0;">
			<div class="what-joomla text-center">
				<img src="<?php echo $this->tmplroot; ?>/images/joomla_small_logo.png"> <a target="_blank" href="http://www.joomla.org">Joomla!</a> is a free and open source CMS for bulding websites. We have been developing Joomla! extensions in Egolt.
			</div>
		</section>
	</div>
<?php endif; ?>


<?php else: ?>
	<div class="inner-page main-inner" >
		<section class="container">
			<jdoc:include type="component" />
		</section>

	</div>

	<div class="crumb" >
		<div class="container" style="padding: 0;" >
			<jdoc:include type="modules" name="breadcrumbs" style="none" />
		</div>
	</div>

	<footer class="footer text-center">
		<div class="container">
			<div class="footer-menu clearfix">
				<ul class="nav inline">
					<li>
						<a href="http://www.linkedin.com/in/novinfard">
							<i class="fa fa-linkedin"></i>
							<span class="visible-phone">LinkedIn</span>
						</a>
					</li>
					<li>
						<a href="https://github.com/novinfard">
							<i class="fa fa-github"></i>
							<span class="visible-phone">Github</span>
						</a>
					</li>
					<li>
						<a href="https://stackoverflow.com/users/3477974/soheil-novinfard">
							<i class="fa fa-stack-overflow"></i>
							<span class="visible-phone">Stack Overflow</span>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/novinfard/">
							<i class="fa fa-instagram"></i>
							<span class="visible-phone">Instagram</span>
						</a>
					</li>
					<li>
						<a href="https://twitter.com/novinfard">
							<i class="fa fa-twitter"></i>
							<span class="visible-phone">Twitter</span>
						</a>
					</li>
					<?php if(false): ?>
						<li>
							<a href="https://www.facebook.com/novinfard">
								<i class="fa fa-facebook"></i>
								<span class="visible-phone">Facebook</span>
							</a>
						</li>
						<li>
							<a href="https://www.youtube.com/c/novinfard">
								<i class="fa fa-youtube"></i>
								<span class="visible-phone">YouTube</span>
							</a>
						</li>
					<?php endif; ?>
				</ul>
				<?php if(false): ?>
					<ul class="nav inline pull-right">
						<li>
							<a href="<?php echo $this->baseurl; ?>/blog">Blog</a>
						</li>
						<li>
							<a href="<?php echo $this->baseurl; ?>/contact">Contact</a>
						</li>
						<li>
							<a href="<?php echo $this->baseurl; ?>/forums">Forums</a>
						</li>
						<li>
							<a href="<?php echo $this->baseurl; ?>/about">About</a>
						</li>
					</ul>
				<?php endif; ?>
				<hr>
				<?php if(false): ?>
					<ul class="nav inline pull-right small">
						<li>
							<a href="<?php echo $this->baseurl; ?>/translators">Translators</a>
						</li>
						<li>
							<a href="<?php echo $this->baseurl; ?>/terms-conditions">Terms & Conditions</a>
						</li>
						<li>
							<a href="<?php echo $this->baseurl; ?>/privacy-policy">Privacy Policy</a>
						</li>
						<li>
							<a href="<?php echo $this->baseurl; ?>/support-policy">Support Policy</a>
						</li>
						<li>
							<a href="http://extensions.joomla.org/profile/profile/details/84373#extensions">JED Directory</a>
						</li>
						<li>
							<a target="_blank" href="http://www.irhost.info">IRhost Hosting</a>
						</li>
					</ul>
				<?php endif; ?>
				<div class="footer-copyright small">
					Copyright © 2012 - <?php echo date('Y'); ?> Soheil Novinfard . All rights reserved.
				</div>
			</div>
		</div>
	</footer>
<?php endif; ?>


<?php if (count(JFactory::getApplication()->getMessageQueue())) : ?>
	<?php $messages = JFactory::getApplication()->getMessageQueue(); ?>
	<div class="modal fade" id="myModalMessage" tabindex="-1" role="dialog" aria-labelledby="myModalMessage">
		<div class="modal-dialog" role="document">
			<div class="modal-content alert alert-<?php echo $messages[0]['type']; ?>">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">							                         <?php echo ucfirst($messages[0]['type']); ?>
					</h4>
				</div>
				<div class="modal-body">
					<?php echo $messages[0]['message']; ?>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php if(false): ?>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Sign In</h4>
				</div>
				<div class="modal-body">
					<jdoc:include type="modules" name="login" style="none" />
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="needSubsModal" tabindex="-1" role="dialog" aria-labelledby="needSubsModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Subscription Needed</h4>
				</div>
				<div class="modal-body">
					<a style="font-weight: bold;" href="<?php echo $this->baseurl; ?>/pricing">You can only post in this category if you have a subscription for this product</a>
				</div>
			</div>
		</div>
	</div>


	<div class="modal fade" id="needSubsModalDownload" tabindex="-1" role="dialog" aria-labelledby="needSubsModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Subscription Needed</h4>
				</div>
				<div class="modal-body">
					<a style="font-weight: bold;" href="<?php echo $this->baseurl; ?>/pricing">
						You can download if you have a subscription for this product
					</a>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>

<script type="text/javascript">
	jQuery(function () {

		jQuery('#myModalMessage').modal('show');
		jQuery('[data-toggle="tooltip"]').tooltip();

		jQuery('div.pagination > ul').addClass('pagination');
		jQuery('div.pagination > ul li').has('span').addClass('active');
		jQuery('div.pagination > ul li.pagination-start').has('span').attr('class','disabled');
		jQuery('div.pagination > ul li.pagination-prev').has('span').attr('class','disabled');
		jQuery('div.pagination > ul li.pagination-next').has('span').attr('class','disabled');
		jQuery('div.pagination > ul li.pagination-end').has('span').attr('class','disabled');


		// Default Tab
		var url = document.location.toString();
		if (url.match('#')) {
			jQuery('.nav-prds a[href=#'+url.split('#')[1]+']').tab('show') ;
		}
// With HTML5 history API, we can easily prevent scrolling!
		jQuery('.nav-prds a').on('shown.bs.tab', function (e) {
			if(history.pushState) {
				history.pushState(null, null, e.target.hash);
			} else {
				window.location.hash = e.target.hash; //Polyfill for old browsers
			}
		});

		<?php //if(($option == 'com_user') and ($view == 'registration')): ?>
		jQuery("#jform_email2").val(jQuery("#jform_email1").val());
		jQuery("#jform_email1").keyup(function(){
			jQuery("#jform_email2").val(this.value);
		});
		jQuery("#jform_password2").val(jQuery("#jform_password1").val());
		jQuery("#jform_password1").keyup(function(){
			jQuery("#jform_password2").val(this.value);
		});
		<?php //endif; ?>


		jQuery(document).ready(function(){
			resizeDiv();
		});
		window.onresize = function(event) {
			resizeDiv();
		};
		function resizeDiv() {
			vpw = jQuery(window).width();
			vph = jQuery(window).height();
			vph2 = vph - jQuery('.nav-site').height() - jQuery('.footer').height() - 100;
			jQuery('.top-cover').css({'min-height': vph});
			jQuery('.inner-page').css({'min-height': vph2});
		}

		jQuery(window).scroll(function () {
			var windowScroll = jQuery(this).scrollTop();
			var mapScroll = jQuery('.world_map').scrollTop() +400;

			if (windowScroll > mapScroll) {
				jQuery('.world_map').addClass("inview");
			}
		});

		// financial
		jQuery('.financial input').addClass('form-control');
		jQuery('.financial textarea').addClass('form-control');
		jQuery('.financial select').addClass('form-control');
		jQuery('.financial form').addClass('form-max-500');
		jQuery('.financial .btn').addClass('btn-default');

//		jQuery(document).ready(function($){

		// first start
		jQuery('.tab-contents').slideUp();
		jQuery('#tab1').slideDown(200);

		// procedure
		jQuery('.opentab').click(function(event){
			jQuery('.opentab').removeClass('btn-primary')
			jQuery(this).addClass('btn-primary')
			event.preventDefault();
			var tab_id = jQuery(this).attr('id');
			jQuery('.tab-contents').slideUp();
			jQuery('#tab'+tab_id).slideDown(200);
		});
//		});
	});
</script>
</body>
</html>