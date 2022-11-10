<!-- header styles -->

<?php
   $localFonts = apply_filters('get_local_fonts', '');
?>
<?php if ($localFonts) : ?> 
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $localFonts; ?>" media="screen" type="text/css" />
<?php else : ?>
   <?php endif; ?>
<link id="u-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
<style> .u-header {
  background-image: none;
  min-height: 106px;
}
.u-header .u-menu-1 {
  margin: 23px calc(((100% - 1140px) / 2)) 0 auto;
}
.u-header .u-nav-1 {
  font-size: 1rem;
}
.u-block-543b-26 {
  font-size: 1rem;
  text-shadow: 2px -2px 8px rgba(128,128,128,1);
}
.u-header .u-nav-2 {
  font-size: 1rem;
}
.u-header .u-nav-popup-2 {
  height: 100%;
}
.u-block-543b-17 {
  font-size: 1rem;
  text-shadow: 2px -2px 8px rgba(128,128,128,1);
}
.u-header .u-social-icons-1 {
  white-space: nowrap;
  height: 24px;
  min-height: 16px;
  width: 91px;
  min-width: 68px;
  margin: -28px calc(((100% - 1140px) / 2) + 67px) 0 auto;
}
.u-header .u-icon-1 {
  color: rgb(59, 89, 152) !important;
}
.u-header .u-icon-2 {
  color: rgb(85, 172, 238) !important;
}
.u-header .u-icon-3 {
  color: rgb(197, 54, 164) !important;
}
.u-header .u-image-1 {
  width: 106px;
  height: 106px;
  margin: -51px auto 0 0;
}
.u-header .u-logo-image-1 {
  width: 100%;
  height: 100%;
}
@media (max-width: 1199px) {
  .u-header .u-menu-1 {
    margin-right: calc(((100% - 1140px) / 2) + 100px);
  }
  .u-header .u-social-icons-1 {
    margin-right: calc(((100% - 1140px) / 2) + 155px);
  }
  .u-header .u-image-1 {
    margin-top: -28px;
  }
}
@media (max-width: 991px) {
  .u-header .u-menu-1 {
    margin-right: calc(((100% - 1140px) / 2) + 210px);
  }
  .u-header .u-social-icons-1 {
    margin-right: calc(((100% - 1140px) / 2) + 252px);
  }
}
@media (max-width: 767px) {
  .u-header .u-menu-1 {
    margin-right: calc(((100% - 1140px) / 2) + 300px);
  }
  .u-header .u-social-icons-1 {
    margin-right: calc(((100% - 1140px) / 2) + 338px);
  }
  .u-header .u-image-1 {
    margin-bottom: 24px;
  }
}
@media (max-width: 575px) {
  .u-header .u-menu-1 {
    margin-right: calc(((100% - 1140px) / 2) + 400px);
  }
  .u-header .u-social-icons-1 {
    margin-right: auto;
    margin-left: calc(((100% - 1140px) / 2) + 525px);
  }
}</style>
