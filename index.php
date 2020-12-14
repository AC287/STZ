<?php get_header(); ?>

<!-- <p>Envelope icon: <span class="glyphicon glyphicon-envelope"></span></p> -->
<?php
/*
  if (have_posts()):
  while (have_posts()) : the_post();?>

  <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
  <!-- the_permalink enable wordpress to link to that post page automatically. -->
  <?php the_content(); ?>
  <?php endwhile;

  else:
    echo '<p>No content found</p>';

  endif;
*/
include 'phpsnippet/serverlocation.php';
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

    <div class="item active">
      <img src="<?php bloginfo('template_directory')?>/images/banners/stz_rough.jpg">
      <div class="index-banner-textbox ibt-rough">
        <div class="ibt-text">
          <span>NOT ROUGH AROUND THE EDGES</span>
        </div>
        <div class="ibt-underline">
        </div>
      </div>
    </div>

    <div class="item">
      <img src="<?php bloginfo('template_directory')?>/images/banners/stz_merch.jpg">
      <div class="index-banner-textbox ibt-merch">
        <div class="ibt-text">
          <span>BEST IN CLASS MERCHANDISING</span>
        </div>
        <div class="ibt-underline">
        </div>
      </div>
    </div>

    <div class="item">
      <img src="<?php bloginfo('template_directory')?>/images/banners/stz_pipedecor.jpg">
      <div class="index-banner-textbox ibt-pipedecor">
        <div class="ibt-text">
          <span>TRADITIONAL COMPANY WITH UNTRADITIONAL IDEAS</span>
        </div>
        <div class="ibt-underline">
        </div>
      </div>
    </div>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div class="about-midsectioncallout">
	<div class="container">
		<div class="about-midsectioncallout-innerpadding">
			<p>STZ prides itself on their expert knowledge of fittings, nipples and pipe. By eating, breathing and dreaming rough plumbing, STZ is able to manufacture thousands of skus, offer competitive pricing, customized product assortments, and various programs.</p>
		</div>
	</div>
</div>

<!--  MID-CATEGORY  -->
<div id="mid-category">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="index-midcategory" >
            <div class="index-midcategory-imgholder index-indexretail"></div>
          <div class="mc-header" >RETAIL</div>
        </div>
        <div class="index-midcategory-contents" id="imc-indexretail">
          <div class="mc-txt">
            <p>Since STZ has a firm understanding of the retail marketplace, this gives your retail space a great edge.</p>
            <p>STZ's label and UPC color coding system allows easy shopping for the customer and quick restocking by store personnel. The small pack quantities allow for quick turnaround.</p>
            <p>STZ's ability to customize product assortments, program updates, and  competitive pricing makes us the retailer's #1 choice.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="index-midcategory" >
          <!-- <img src="<?php bloginfo('template_directory')?>/images/retail01.png"></img> -->
          <div class="index-midcategory-imgholder index-index2step"></div>
          <div class="mc-header" >2 STEP DISTRIBUTION</div>
        </div>
        <div class="index-midcategory-contents" id="imc-index2step">
          <div class="mc-txt">
            <p>STZ's two-step distribution process keeps the product easily accessible to the distributor. Global access points and local headquartered support allow for quick turn around and instant service.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="index-midcategory" >
          <!-- <img src="<?php bloginfo('template_directory')?>/images/oem01.png"></img> -->
          <div class="index-midcategory-imgholder index-indexwholesale"></div>
          <div class="mc-header" >WHOLESALE</div>
        </div>
        <div class="index-midcategory-contents" id="imc-indexwholesale">
          <div class="mc-txt">
            <p>STZ's sister company Cambridge caters to the wholesale market by offering bulk options on many of the Rough Plumbing skus. <a href="<?php echo $cambridgeSite; ?>">Click here</a> to check out their website.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> <!-- end mid-category -->

<?php get_footer(); ?>
