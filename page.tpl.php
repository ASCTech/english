<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">

<meta name="description" content="<?php print $site_name; ?>"/>
<meta name="author" content="Arts and Sciences Technology Services Office"/>
<meta name="keywords" content="<?php print strtr($site_name, array(" " => ", ")); ?>, Arts and Sciences, OSU, Ohio State"/>
<?php
global $base_path;
global $theme_path;

$body_classes .= ' layout-'.$GLOBALS['quickSites_layout'];

if(!($front_image || $front_text || $front_links)){
  $body_classes .= ' no-front-header';
}


?>
<title><?php print $head_title ?></title>
<?php print $head ?>
<?php print $styles ?>
<?php print $scripts ?>

</head>
<body class="<?php print $body_classes; ?>">

  <?php require_once("navbar/osu-navbar-b-custom.php"); ?>

  <div id="header">
    <div class="container">
      <div id="header-container" class="span-24">
        <?php if(false && !$is_front){ ?>
          <a href="http://artsandsciences.osu.edu/" id="small-banner-1" title="Arts and Sciences homepage">&nbsp;</a>
        <?php } ?>
        <div id="logo">
          <?php if($logo){ ?>
            <?php if(!$is_front){ ?>
            <a href="<?php global $base_url; print $base_url; ?>" title="Back to <?php print $site_name; ?> home"><img alt="<?php print $site_name; ?>" src="<?php print $logo ?>"/></a>
            <?php }else{ ?>
            <img alt="<?php print $site_name; ?>" src="<?php print $logo ?>"/>
            <?php } ?>
          <?php } ?>
        </div><!-- .logo -->
        <a href="http://www.osu.edu/" id="osulogo" title="Ohio State University homepage">&nbsp;</a>

        <div id="navigation">
          <?php print $MainNav; ?>
        </div><!-- #navigation -->
      </div>
    </div> <!-- .container -->
    <div id="header-tile">&nbsp;</div>
  </div> <!-- #header -->
  <div id="headerbar">&nbsp;</div>

  <?php include($is_front ? "front.tpl.php" : "inner.tpl.php"); ?>

  <hr id="footer-border"/>
  <div id="footer">
      <div id="footer-color-left"></div>
        <div id="footer-color-right"></div>
    <div class="container <?php if(!$is_front){ print "banner-padded"; } ?>">
      <?php if(!$is_front){ ?>
        <a href="http://artsandsciences.osu.edu/" id="small-banner-2" title="Arts and Sciences homepage">&nbsp;</a>
      <?php } ?>
      <div id="contact" class="span-6 append-1">
        <?php print $footer_info; ?>
      </div>
      <div id="footer-right" class="span-17 last">
        <div id="footer-top" class="span-17 last">
          <?php print $footer; ?>
        </div>
        <div id="footer-bottom" class="span-17 last">
          <?php print $footer_menu; ?>
        </div>
      </div>
    </div>
  </div>
  <div id="footer_copyright" class="clearfix">
    <div class="small">
      <p>&copy; <?php print date("Y"); ?>, The Ohio State University, College of Arts and Sciences</p>
      <?php include("sites/all/files/icons/uicons_basic.php"); ?>
    </div>
  </div>


<?php print $closure;?>

</body>

</html>
