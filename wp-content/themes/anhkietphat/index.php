<?php get_header(); ?>
    <!-- slider -->
    <div class="container-fluid slide-outer">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/images/top/slide1.png"
                         class="img-responsive center-block" alt="Xây dựng"/>
                </div>

                <div class="item">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/images/top/slide2.png"
                         class="img-responsive center-block" alt="Xây dựng"/>
                </div>

                <div class="item">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/images/top/slide3.png"
                         class="img-responsive center-block" alt="Xây dựng"/>
                </div>

                <div class="item">
                    <img src="<?php bloginfo('stylesheet_directory') ?>/images/top/slide4.png"
                         class="img-responsive center-block" alt="Xây dựng"/>
                </div>
            </div>

            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="header3"><h3>DỰ ÁN TIÊU BIỂU</h3></div>
            <div>Coming soon</div>
        </div>

        <div class="row">
            <div class="header3"><h3>TIN TỨC</h3></div>
            <div>Coming soon</div>
        </div>


        <div class="clear"></div>
    </div><!-- content -->
<?php get_footer(); ?>