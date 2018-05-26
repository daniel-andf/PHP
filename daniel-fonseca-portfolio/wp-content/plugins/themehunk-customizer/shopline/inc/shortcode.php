<?php
  if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
function themehunk_customizer_add_shotcode($section=''){
	$return =''; ?>
 <?php $prlx = get_theme_mod('parallax_opt','on');
$prlx_class = '';
$prlx_data_center = '';
$prlx_top_bottom =''; 
if($prlx=='on'){
$prlx_class = 'parallax';
$prlx_data_center = 'background-position: 50% 0px';
$prlx_top_bottom = 'background-position: 50% -100px;';
}else{
$prlx_class = ''; 
$prlx_data_center = '';
$prlx_top_bottom =''; 
}?> 
<?php  if($section=='aboutus'):
$heading    = get_theme_mod('aboutus_heading','');
$subheading    = get_theme_mod('aboutus_subheading','');
$shortdesc  = get_theme_mod('aboutus_shortdesc','');
$longdesc   = get_theme_mod('aboutus_longdesc','');
$aboutusimg = get_theme_mod('aboutus_image','');
$buttontext = get_theme_mod('aboutus_btn_text','');
$buttonlink = get_theme_mod('aboutus_btn_link','');
$aboutus_parallax = get_theme_mod('aboutus_parallax','on');
$buttontext  = ($buttontext!='')?$buttontext:"Get Link Page";
?>
<!-- Start amazing story -->
<?php if($aboutus_parallax =='on'){?>
<section id="aboutus_section" class="amazing-story parallax"
  data-center="background-position: 50% 0px;"
  data-top-bottom="background-position: 50% -100px;">
  <?php } else { ?>
  <section id="aboutus_section" class="amazing-story">
    <?php } ?>
    <div class="container">
      <div class="amazing-block">
        <ul class="amazing-list">
          <li class="one" data-aos="fade-up">
            <?php if($aboutusimg!=''){ ?>
            <img src="<?php echo $aboutusimg; ?>"/>
            <?php } else { ?>
            <?php if(shopline_show_dummy_data()): ?>
            <img src="<?php echo SHOPLINE_LARGE; ?>"/>
            <?php endif; ?>
            <?php } ?>
          </li>
          <li class="two" data-aos="fade-up">
            <div class="flex-abt">
              <?php if($heading!=''){ ?>
              <h2 class="aboutus-heading"><?php echo $heading; ?></h2>
              <?php } else { ?>
              <?php if(shopline_show_dummy_data()): ?>
              <h2 class="aboutus-heading"><?php _e('Get The Most Amazing Story','oneline'); ?></h2>
              <?php endif; ?>
              <?php } ?>
              <?php if($shortdesc!=''){ ?>
              <h3><?php echo $shortdesc; ?></h3>
              <?php } else { ?>
              <?php if(shopline_show_dummy_data()): ?>
              <h3>Delicious recipes, practical tools, & life giving encouragement that will inspire you to get healthy for life!</h3>
              <?php endif; ?>
              <?php } ?>
              <?php if($longdesc!=''){ ?>
              <p><?php echo $longdesc; ?></p>
              <?php } else { ?>
              <?php if(shopline_show_dummy_data()): ?>
              <p>Welcome to Dashing Dish! My name is Katie Farrell, and I'm the founder of Dashing Dish, a place to find not only wholesome and simple recipes, but encouragement, inspiration, and motivation for your journey to get fit for life. At Dashing Dish, it is truly my greatest heart's desire to help others.</p>
              <?php endif; ?>
              <?php } ?>
              <?php if($buttonlink !='' || $buttontext !=''): ?>
              <a class="amazing-btn" href="<?php echo $buttonlink; ?>"><?php echo $buttontext ; ?></a>
              <?php else: ?>
              <?php if(shopline_show_dummy_data()): ?>
              <a class="amazing-btn" href="''">Get Link Page</a>
              <?php endif; ?>
              <?php endif; ?>
            </li>
          </div>
        </ul>
        
      </div>
    </div>
  </section>
  <div class="clearfix"></div>
<?php elseif($section=='adsecond'): ?>
  <?php
$three_image_first = get_theme_mod('three_column_ads_first_image','');
$three_url_first = get_theme_mod('three_column_ads_first_url','');
$three_image_second = get_theme_mod('three_column_ads_second_image','');
$three_url_second = get_theme_mod('three_column_ads_second_url','');
$three_image_third = get_theme_mod('three_column_ads_third_image','');
$three_url_third = get_theme_mod('three_column_ads_third_url','');
?>
  <ul class="sell">
        <?php if($three_image_first!=''): ?>
        <li class="one">
          <a class="fst-img" href="<?php echo $three_url_first; ?>"><img src="<?php echo $three_image_first; ?>">
          </a>
        </li>
        <?php else: ?>
        <li class="one">
          <a href="#"><img src="<?php echo SHOPLINE_SMALL; ?>" >
          </a>
        </li>
        <?php endif; ?>
        <?php if($three_image_second!=''):?>
        <li class="two">
          <a href="<?php echo $three_url_second; ?>"><img src="<?php echo $three_image_second; ?>"></a>
        </li>
        <?php else: ?>
        <li class="two">
          <a href="#"><img src="<?php echo SHOPLINE_SMALL; ?>" ></a>
        </li>
        <?php endif; ?>
        <?php if($three_image_third!=''):?>
        <li class="three">
          <a href="<?php echo $three_url_third; ?>"><img src="<?php echo $three_image_third; ?>"></a>
        </li>
        <?php else: ?>
        <li class="three">
          <a href="#"><img src="<?php echo SHOPLINE_SMALL; ?>"></a>
        </li>
        <?php endif; ?>
      </ul>
<?php elseif($section=='slider'):?>   
<?php $i=0; ?>
<input type="hidden" id="nor_slidespeed" value="<?php if (get_theme_mod('normal_slider_speed','') != '') { echo stripslashes(get_theme_mod('normal_slider_speed')); } else { ?>3000<?php } ?>"/>
  <ul class="slides">
      <?php if (get_theme_mod('first_slider_image','') != '') { $i++; ?>
      
      <li class="<?php echo $prlx_class;?>" style="background:url('<?php echo get_theme_mod('first_slider_image'); ?>')" data-center="<?php echo $prlx_data_center;?>"
        data-top-bottom="<?php echo $prlx_top_bottom;?>">
       
          <?php } else { ?>
          <?php if(get_theme_mod('norl_prlx_set','on') == 'on'){?>
          <li class="<?php echo $prlx_class;?>" style="background:url('<?php echo SHOPLINE_SLIDER; ?>')" data-center="<?php echo $prlx_data_center;?>"
            data-top-bottom="<?php echo $prlx_top_bottom;?>">
            <?php } else { ?>
            <li style="background:url('<?php echo SHOPLINE_SLIDER; ?>')">
              <?php } ?>
              <?php } ?>
              <div class="container container_caption">
                <?php if (get_theme_mod('first_slider_heading','') != '') { ?>
                <h2 class="fadeInDown"><a href="<?php
                  if (get_theme_mod('first_slider_link','') != '') {
                  echo get_theme_mod('first_slider_link');
                  }
                ?>"><?php echo get_theme_mod('first_slider_heading'); ?></a></h2>
                <?php } else { ?>
                <h2><a href="#">Shopping theme</a></h2>
                <?php } ?>
                <?php if (get_theme_mod('first_slider_desc') != '') { ?>
                <p>
                  <?php echo get_theme_mod('first_slider_desc'); ?>
                </p>
                <?php } else { ?>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <?php } ?>
                <?php if (get_theme_mod('first_button_text','') != '') { ?>
                <a href="<?php if (get_theme_mod('first_button_link','') != '') {
                  echo stripslashes(get_theme_mod('first_button_link'));
                  } else {
                  echo "#";
                  }
                ?>" class="slider-button"><?php echo stripslashes(get_theme_mod('first_button_text')); ?></a>
                <?php } else { ?>
                <a href="#" class="slider-button">Buy Now!</a>
                <?php } ?>
              </div>
            </li>
            
            <?php if (get_theme_mod('second_slider_image','')) { $i++; ?>
            
            <li class="<?php echo $prlx_class;?>" style="background:url('<?php echo get_theme_mod('second_slider_image'); ?>')" data-center="<?php echo $prlx_data_center;?>" data-top-bottom="<?php echo $prlx_top_bottom;?>">
                <div class="container container_caption">
                  <h2><a href="<?php
                    if (get_theme_mod('second_slider_link','') != '') {
                    echo get_theme_mod('second_slider_link');
                    }
                  ?>"><?php echo stripslashes(get_theme_mod('second_slider_heading')); ?></a></h2>
                  <p><?php echo stripslashes(get_theme_mod('second_slider_desc')); ?></p>
                  <?php if (get_theme_mod('second_button_text','') != '') { ?>
                  <a href="<?php  if (get_theme_mod('second_button_link','') != '') {
                    echo stripslashes(get_theme_mod('second_button_link'));
                    } else { echo "#"; }
                  ?>" class="slider-button"><?php echo stripslashes(get_theme_mod('second_button_text')); ?></a>
                  <?php } ?>
                </div>
              </li>
              <?php } ?>
              <?php if (get_theme_mod('third_slider_image','')) { $i++; ?>
              <li class="<?php echo $prlx_class;?>" style="background:url('<?php echo get_theme_mod('third_slider_image'); ?>')" data-center="<?php echo $prlx_data_center;?>" data-top-bottom="<?php echo $prlx_top_bottom;?>" >
                
                  <div class="container container_caption">
                    <h2><a href="<?php
                      if (get_theme_mod('third_slider_link','') != '') {
                      echo get_theme_mod('third_slider_link');
                      }
                    ?>"><?php echo stripslashes(get_theme_mod('third_slider_heading')); ?></a></h2>
                    <p><?php echo stripslashes(get_theme_mod('third_slider_desc')); ?></p>
                    <?php if (get_theme_mod('third_button_text','') != '') { ?>
                    <a href="<?php  if (get_theme_mod('third_button_link','') != '') {
                      echo stripslashes(get_theme_mod('third_button_link'));
                      } else { echo "#"; }
                    ?>" class="slider-button"><?php echo stripslashes(get_theme_mod('third_button_text')); ?></a>
                    <?php } ?>
                  </div>
                </li>
                <?php } ?>
              </ul>

<?php elseif($section=='ribbon'):?>
<?php
$heading    = get_theme_mod('ribbon_heading','');
$subheading = get_theme_mod('ribbon_subheading','');
$video_option = get_theme_mod('ribbon_bg_options','');
$ribbon_video_bg_image = get_theme_mod( 'ribbon_video_bg_image','');
if (get_theme_mod('video_muted')=='1'){
$muted = "muted";
} else{
$muted = "";
}
?>

<section id="ribbon_section" class="vedio-ribbon <?php echo $prlx_class;?>"
    data-center="<?php echo $prlx_data_center;?>"
    data-top-bottom="<?php echo $prlx_top_bottom;?>">
        <?php if($video_option =='video'):?>
        <?php if(shopline_mobile_user_agent_switch()==false): ?>
        <video id="video" autoplay="autoplay" loop="loop" poster="<?php echo $ribbon_video_bg_image; ?>" <?php echo $muted; ?> id="bgvid" >
        <source src="<?php echo get_theme_mod('ribbon_bg_video'); ?>" type="video/mp4">
        </video>
        <?php endif; ?>
        <?php if(shopline_mobile_user_agent_switch()):?>
        <video id="video" autoplay="autoplay" loop="loop"  poster="<?php echo $ribbon_video_bg_image; ?>" <?php echo $muted; ?> id="bgvid">
        <source src="#" type="video/mp4">
        </video>
        <?php endif;?>
        <?php endif; ?>
        <div class="title-wrap" data-aos="fade-up">
            <div class="video-title">
                <?php if($heading!=''){ ?>
                <h2 class="ribbon-heading"><?php echo $heading; ?></h2>
                <?php } else { ?>
                <?php if(shopline_show_dummy_data()): ?>
                <h2 class="ribbon-heading"><?php _e('Video Background Show Your Website Visually','oneline'); ?></h2>
                <?php endif; ?>
                <?php } ?>
                <div class="heading-border"></div>
                <?php if($subheading!=''){ ?>
                <p class="ribbon-sub-heading"><?php echo $subheading; ?></p>
                <?php } else { ?>
                <?php if(shopline_show_dummy_data()): ?>
                <p class="ribbon-sub-heading"><?php _e('fitness quality backpacks, bags, travel goods and accessoriesus ut venenatis. Maecenas mattis mattisIn','oneline'); ?> </p>
                <?php endif; ?>
                <?php } ?>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
<?php elseif($section=='search'): ?>
 <form role="search" method="get" class="searchbox_1 woocommerce-product-search" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
    <!--<label class="screen-reader-text" for="s"><?php _e( 'Search for:', 'woocommerce' ); ?></label>
    --><input type="search" class="search_1 search-field" placeholder="<?php echo get_theme_mod('search_box_text',esc_attr_x( 'Search Products&hellip;', 'placeholder', 'woocommerce' )); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'woocommerce' ); ?>" />
    <button type="submit" value="<?php echo esc_attr_x( '', 'submit button', 'woocommerce' ); ?>" class="submit_1" /></button>
    <input type="hidden" name="post_type" value="product" />
  </form>
    <?php  elseif($section=='testimonial'): ?>
     <?php
$testm_slidr_spd   = get_theme_mod('testm_slider_speed','');
$heading    = get_theme_mod('our_testm_heading','');
$subheading = get_theme_mod('our_testm_subheading','');
$testimonial_parallax = get_theme_mod('testimonial_parallax','on');
if(get_theme_mod('testm_play','')=='on'){
  $testmply='true';
}else{
  $testmply='false';
};
?>
<input type="hidden" id="testm_ply" value="<?php echo $testmply; ?>"/> 
<input type="hidden" id="testm_slidr_spd" value="<?php echo $testm_slidr_spd; ?>"/>  
<!-- start testimonial -->
<section id="testimonial_section" class="testimonial <?php echo $prlx_class;?>" 
 data-center="<?php echo $prlx_data_center;?>"
  data-top-bottom="<?php echo $prlx_top_bottom;?>">
  <div class="container">
    <div class="block-heading" data-aos="fade-up">
      <?php if($heading!=''){ ?>
      <h2 class="testimonial-heading"><?php echo $heading; ?></h2>
      <?php } else { ?>
      <?php if(shopline_show_dummy_data()): ?>
      <h2 class="testimonial-heading"><?php _e('Watch Client Say?','oneline'); ?></h2>
      <?php endif; ?>
      <?php } ?>
      <div class="heading-border"></div>
      <?php if($subheading!=''){ ?>
      <p class="testimonial-woocatesub-heading"><?php echo $subheading; ?></p>
      <?php } else { ?>
      <?php if(shopline_show_dummy_data()): ?>
      <p class="testimonial-sub-heading" ><?php _e('fitness quality backpacks, bags, travel goods and accessories','oneline'); ?> </p>
    <?php endif; ?>
      <?php } ?>
    </div>
    <div class="testimonial-block" data-aos="fade-up">
      <div class="testimonial-wrap owl-carousel">
        <?php
        if ( is_active_sidebar( 'testimonial-widget' ) ):
        dynamic_sidebar( 'testimonial-widget' );
        else:
        ?>
      <?php if(shopline_show_dummy_data()): ?>
        <div class="testimonial-content item">
          <div class="figure-testimonial">
            <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial2.jpg">
            <a class="web-link" href="#">www.themehunk.com</a>
            <p>It’s important for website to have subscription form. Theme has this subscribe form ready. Subscription form works directly with Mailchimp.com mailing service. Build and manage your mailing lists with Montserrat.</p>
            <h4>one Lery Page.</h4>

          </div>
        </div>
        <div class="testimonial-content item">
          <div class="figure-testimonial">
            <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial1.jpg">
            <a class="web-link" href="#">www.themehunk.com</a>
            <p>It’s important for website to have subscription form. Theme has this subscribe form ready. Subscription form works directly with Mailchimp.com mailing service. Build and manage your mailing lists with Montserrat.</p>
            <h4>one Lery Page.</h4>
          </div>
        </div>
        <div class="testimonial-content item">
          <div class="figure-testimonial">
            <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial2.jpg">
            <a class="web-link" href="#">www.themehunk.com</a>
            <p>It’s important for website to have subscription form. Theme has this subscribe form ready. Subscription form works directly with Mailchimp.com mailing service. Build and manage your mailing lists with Montserrat.</p>
            <h4>one Lery Page.</h4>
          </div>
        </div>
        <div class="testimonial-content item">
          <div class="figure-testimonial">
            <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial1.jpg">
            <p>It’s important for website to have subscription form. Theme has this subscribe form ready. Subscription form works directly with Mailchimp.com mailing service. Build and manage your mailing lists with Montserrat.</p>
            <h4>one Lery Page.</h4>
          </div>
        </div>
        <div class="testimonial-content item">
          <div class="figure-testimonial">
            <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial2.jpg">
            <a class="web-link" href="#">www.themehunk.com</a>
            <p>It’s important for website to have subscription form. Theme has this subscribe form ready. Subscription form works directly with Mailchimp.com mailing service. Build and manage your mailing lists with Montserrat.</p>
            <h4>one Lery Page.</h4>
          </div>
        </div>
      <?php endif; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
    <?php  elseif($section=='woocate'): ?>
  <!-- cat-home start -->
<?php
$cat_slidr_spd   = get_theme_mod('woo_cate_slider_speed','');
$heading     = get_theme_mod('woo_cate_slider_heading','');
$subheading  = get_theme_mod('woo_cate_slider_subheading','');
$cat_prallax = get_theme_mod('woo_cate_parallax','on');
if(get_theme_mod('cat_play','')=='on'){
$catply='true';
}else{
$catply='false';
};
?>
<input type="hidden" id="cat_ply" value="<?php echo $catply; ?>"/>
<input type="hidden" id="cat_slidr_spd" value="<?php echo $cat_slidr_spd; ?>"/>

<section id="category_section" class="home-imagecat <?php echo $prlx_class;?>"
  data-center="<?php echo $prlx_data_center;?>"
  data-top-bottom="<?php echo $prlx_top_bottom;?>">
    <div class="container">
      <div class="imagecat-block" data-aos="fade-up">
        <div class="block-heading">
          <?php if($heading!=''){ ?>
          <h2 class="woocate-heading"><?php echo $heading; ?></h2>
          <?php } else { ?>
          <?php if(shopline_show_dummy_data()): ?>
          <h2 class="woocate-heading"><?php _e('enjoy your shopping'); ?></h2>
          <?php endif; ?>
          <?php } ?>
          
          <div class="heading-border"></div>
          <?php if($subheading!=''){ ?>
          <p class="woocate-sub-heading"><?php echo $subheading; ?></p>
          <?php } else { ?>
          <?php if(shopline_show_dummy_data()): ?>
          <p class="woocate-sub-heading"><?php _e('fitness quality backpacks, bags, travel goods and accessoriesus ut venenatis. Maecenas mattis mattisIn','shopline'); ?> </p>
          <?php endif; ?>
          <?php } ?>
        </div>
        <!-- grid-slider-layout -->
        <div class="cat-grid owl-carousel" data-aos="fade-up">
          <?php do_action('shopline_cate_image'); ?>
        </div>
      </div>
    </div>
  </section>
  <div class="clearfix"></div>
  <?php  elseif($section=='wooproduct'): ?>
<!-- start featured product slider -->
<section id="featured_product_section" class="featured-prd <?php echo $prlx_class;?>" data-center="<?php echo $prlx_data_center;?>"
  data-top-bottom="<?php echo $prlx_top_bottom;?>">
  <div class="container" data-aos="fade-up">
    <?php do_action( 'shopline_product' ); ?>
  </div>
</section>
<div class="clearfix"></div>
<?php  elseif($section=='cart_menu'): ?>
 <ul class="hdr-icon-list"> 
                <?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if(is_plugin_active('yith-woocommerce-wishlist/init.php')){?>
              <li class="top-list wishlist">
                <a class="tooltip" href="<?php echo esc_url( shopline_whishlist_url() ); ?>"><i class="fa fa-heart icon-space" aria-hidden="true"></i>
                  <span class="tooltiptext"><?php _e('Wishlist','shopline'); ?></span></a>
             </li>
             <?php } ?> 
                <li class="top-list accnt"><?php  do_action('shopline_myaccount'); ?></li>
                <li class="top-list cart">
                <div class="cart-widget tooltip">
                  <span class="tooltiptext"><?php _e('Cart','shopline'); ?></span>
                  <div onmouseover="openNav()" onmouseout="closeNav()">
                    <?php do_action( 'shopline_header' ); ?>
                    </div>
                    <!-- side menu -->
                    <!-- onmouseover="openNav()" -->
                    <div onmouseover="openNav()" onmouseout="closeNav()" id="mySidenav" class="sidenav">
                    <div id="accordion" class="woocommerce">
                        <?php do_action( 'shopline_cart' ); ?>
                      </div>
                    </div>
                  </div>
                </li>
            </ul>

    <?php elseif($section=='woocommerce'): ?>
      <?php if( shortcode_exists( 'recent_products' ) ): ?>
    <?php $woo_product = get_theme_mod('woo_shortcode','[recent_products]'); ?>
  <div class="container">
    <?php if(get_theme_mod( 'woo_head_')!=''){?>
    <h2 class="head-text wow fadeInRight" data-wow-duration="1s"><?php echo get_theme_mod( 'woo_head_'); ?></h2>
    <?php } else { ?>
    <h2 class="head-text wow fadeInRight" data-wow-duration="1s"> <?php _e('Woocommerce ','featuredlite'); ?></h2>
    <?php } ?>
    <?php if(get_theme_mod( 'woo_desc_')!=''){?>
    <h3 class="subhead-text wow fadeInRight" data-wow-duration="1s"><?php echo get_theme_mod( 'woo_desc_'); ?></h3>
    <?php } else { ?>
    <h3 class="subhead-text wow fadeInRight" data-wow-duration="1s"><?php _e('Lorem Ipsum is simply dummy text of the printing and typesetting industry','featuredlite'); ?></h3>
    <?php } ?>
    <div class="wow fadeInLeft" data-wow-duration="1s">
      <?php echo do_shortcode($woo_product); ?>
    </div>
  </div>
<?php endif; ?>
<?php endif; 
}

function themehunk_customizer_shortcode($atts) {
    $output = '';
    $pull_quote_atts = shortcode_atts(array(
          'section' => 1
            ), $atts);
    $did = wp_kses_post($pull_quote_atts['section']);

  	$output = themehunk_customizer_add_shotcode($did);
    return $output;
}
add_shortcode('themehunk-customizer', 'themehunk_customizer_shortcode');

//social icon shortocdes
function themehunk_customizer_social(){
 $social ='<ul>
    <span style="font-style:italic;font-size:12px;">Share</span>
    <li><a target="_blank" href="https://twitter.com/home?status='.get_the_title().'-'.get_permalink().'"><i class="fa fa-twitter"></i></a></li>
    <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.get_permalink().'"><i class="fa fa-facebook"></i></a></li>
    <li><a target="_blank" href="https://plus.google.com/share?url='.get_permalink().'"><i class="fa fa-google-plus"></i></a></li>
    <li><a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url='.get_permalink().'&title='.get_the_title().'&source=LinkedIn"><i class="fa fa-linkedin"></i></a></li>
  </ul>';
    return $social;
}

function themehunk_customizer_social_shortcode($atts) {
    $output = '';
    $pull_quote_atts = shortcode_atts(array(
        'did' => 1
            ), $atts);
    $did = wp_kses_post($pull_quote_atts['did']);

    $output = themehunk_customizer_social($did);
    return $output;
}
add_shortcode('themehunk-customizer-social', 'themehunk_customizer_social_shortcode');


// woocommerce plugin
function themehunk_customizer_woo($did=''){
  $woo_product = get_theme_mod('woo_shortcode','[recent_products]');
  
  echo do_shortcode( $woo_product );
  
}

function themehunk_customizer_shopline_woo($atts) {
    $output = '';
    $pull_quote_atts = shortcode_atts(array(
        'did' => 1
            ), $atts);
    $did = wp_kses_post($pull_quote_atts['did']);

  $output = themehunk_customizer_woo($did);
  return $output;
}
add_shortcode('themehunk-customizer-woo', 'themehunk_customizer_shopline_woo');


?>