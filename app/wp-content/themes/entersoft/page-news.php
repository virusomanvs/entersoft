<?php
$id_services = 5; // ID страницы проекта
$perpage = 6; // Кол-во записей на странице
?>
<?php get_header(); ?>
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image" style="background-image: url(images/bg-image-9.jpg);">
        <div class="shell">
            <h2 class="breadcrumbs-custom__title">News</h2>
            <ul class="breadcrumbs-custom__path">
                <li><a href="index.html">Home</a></li>
                <li class="active">News</li>
            </ul>
        </div>
    </section>
    <!-- News-->
    <section class="section section-md bg-gray-4 text-center">
        <div class="shell">
            <div class="range range-30">
                <div class="cell-sm-6 cell-md-4">
                    <article class="post-modern"><a class="post-modern__image-wrap" href="single-post.html"><img class="post-modern__image" src="images/post-1-365x215.jpg" alt="" width="365" height="215"/></a>
                        <div class="post-modern__main">
                            <p class="post-modern__title"><a href="single-post.html">How We Measure the Increasing Vlogs' Ad Potential</a></p>
                            <p class="post-modern__text">We have recently finished our research, which is closely connected</p>
                            <ul class="post-modern__meta">
                                <li><span class="icon icon-primary mdi mdi-clock"></span><a href="single-post.html">January 6, 2017</a></li>
                                <li><span class="icon icon-primary fl-justicons-visible6"></span><span>524</span></li>
                                <li> <span class="icon icon-primary mdi mdi-comment-outline"></span><a href="single-post.html">3</a></li>
                            </ul>
                        </div>
                    </article>
                </div>
                <div class="cell-sm-6 cell-md-4">
                    <article class="post-modern"><a class="post-modern__image-wrap" href="single-post.html"><img class="post-modern__image" src="images/post-2-365x215.jpg" alt="" width="365" height="215"/></a>
                        <div class="post-modern__main">
                            <p class="post-modern__title"><a href="single-post.html">Digital Marketing Metrics That Really Matter Nowadays</a></p>
                            <p class="post-modern__text">Marketing is currently in a state of evolution where it is dispensing</p>
                            <ul class="post-modern__meta">
                                <li><span class="icon icon-primary mdi mdi-clock"></span><a href="single-post.html">January 6, 2017</a></li>
                                <li><span class="icon icon-primary fl-justicons-visible6"></span><span>524</span></li>
                                <li> <span class="icon icon-primary mdi mdi-comment-outline"></span><a href="single-post.html">3</a></li>
                            </ul>
                        </div>
                    </article>
                </div>
                <div class="cell-sm-6 cell-md-4">
                    <article class="post-modern"><a class="post-modern__image-wrap" href="single-post.html"><img class="post-modern__image" src="images/post-3-365x215.jpg" alt="" width="365" height="215"/></a>
                        <div class="post-modern__main">
                            <p class="post-modern__title"><a href="single-post.html">How Outdated the Nielsen Metrics Are?</a></p>
                            <p class="post-modern__text">You probably know why Nielsen ratings are important, but you don’t</p>
                            <ul class="post-modern__meta">
                                <li><span class="icon icon-primary mdi mdi-clock"></span><a href="single-post.html">January 6, 2017</a></li>
                                <li><span class="icon icon-primary fl-justicons-visible6"></span><span>524</span></li>
                                <li> <span class="icon icon-primary mdi mdi-comment-outline"></span><a href="single-post.html">3</a></li>
                            </ul>
                        </div>
                    </article>
                </div>
            </div>
            <!-- Pagination-->
            <ul class="pagination-custom">
                <li class="pagination-control"><a href="#">Prev</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li class="active"><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li class="pagination-control"><a href="#">Next</a></li>
            </ul>
        </div>
    </section>

<?php get_footer(); ?>