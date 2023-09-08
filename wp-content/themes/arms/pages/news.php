<?php
/* Template Name: news */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Course - News</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Course Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/pages/styles/bootstrap4/bootstrap.min.css">
    <link href="<?php echo get_template_directory_uri(); ?>/pages/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/pages/styles/news_styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/pages/styles/news_responsive.css">
    <script nonce="f769a40c-19a2-47ef-b579-d336a0b98fc2">
        (function(w, d) {
            ! function(U, V, W, X) {
                U[W] = U[W] || {};
                U[W].executed = [];
                U.zaraz = {
                    deferred: [],
                    listeners: []
                };
                U.zaraz.q = [];
                U.zaraz._f = function(Y) {
                    return async function() {
                        var Z = Array.prototype.slice.call(arguments);
                        U.zaraz.q.push({
                            m: Y,
                            a: Z
                        })
                    }
                };
                for (const $ of ["track", "set", "debug"]) U.zaraz[$] = U.zaraz._f($);
                U.zaraz.init = () => {
                    var ba = V.getElementsByTagName(X)[0],
                        bb = V.createElement(X),
                        bc = V.getElementsByTagName("title")[0];
                    bc && (U[W].t = V.getElementsByTagName("title")[0].text);
                    U[W].x = Math.random();
                    U[W].w = U.screen.width;
                    U[W].h = U.screen.height;
                    U[W].j = U.innerHeight;
                    U[W].e = U.innerWidth;
                    U[W].l = U.location.href;
                    U[W].r = V.referrer;
                    U[W].k = U.screen.colorDepth;
                    U[W].n = V.characterSet;
                    U[W].o = (new Date).getTimezoneOffset();
                    if (U.dataLayer)
                        for (const bg of Object.entries(Object.entries(dataLayer).reduce(((bh, bi) => ({
                                ...bh[1],
                                ...bi[1]
                            })), {}))) zaraz.set(bg[0], bg[1], {
                            scope: "page"
                        });
                    U[W].q = [];
                    for (; U.zaraz.q.length;) {
                        const bj = U.zaraz.q.shift();
                        U[W].q.push(bj)
                    }
                    bb.defer = !0;
                    for (const bk of [localStorage, sessionStorage]) Object.keys(bk || {}).filter((bm => bm.startsWith("_zaraz_"))).forEach((bl => {
                        try {
                            U[W]["z_" + bl.slice(7)] = JSON.parse(bk.getItem(bl))
                        } catch {
                            U[W]["z_" + bl.slice(7)] = bk.getItem(bl)
                        }
                    }));
                    bb.referrerPolicy = "origin";
                    bb.src = "https://preview.colorlib.com/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(U[W])));
                    ba.parentNode.insertBefore(bb, ba)
                };
                ["complete", "interactive"].includes(V.readyState) ? zaraz.init() : U.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/custom-font.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php get_template_part('/pages/csshome'); ?>
</head>

<body>
    <div class="super_container">

        <?php get_template_part('/pages/header'); ?>

        <div class="menu_container menu_mm">

            <div class="menu_close_container">
                <div class="menu_close"></div>
            </div>

            <div class="menu_inner menu_mm">
                <div class="menu menu_mm">
                    <ul class="menu_list menu_mm">
                        <li class="menu_item menu_mm"><a href="index-2.html">Home</a></li>
                        <li class="menu_item menu_mm"><a href="#">About us</a></li>
                        <li class="menu_item menu_mm"><a href="courses.html">Courses</a></li>
                        <li class="menu_item menu_mm"><a href="elements.html">Elements</a></li>
                        <li class="menu_item menu_mm"><a href="#">News</a></li>
                        <li class="menu_item menu_mm"><a href="contact.html">Contact</a></li>
                    </ul>

                    <div class="menu_social_container menu_mm">
                        <ul class="menu_social menu_mm">
                            <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                            <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                    <div class="menu_copyright menu_mm">
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="home">
            <div class="home_background_container prlx_parent">
                <div class="home_background prlx" style="background-image:url(images/news_background.jpg)"></div>
            </div>
            <div class="home_content">
                <h1>The News</h1>
            </div>
        </div>

        <div class="news">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8">
                        <div class="news_posts">

                            <div class="news_post">
                                <div class="news_post_image">
                                    <img src="images/news_1.jpg" alt="https://unsplash.com/@dsmacinnes">
                                </div>
                                <div class="news_post_top d-flex flex-column flex-sm-row">
                                    <div class="news_post_date_container">
                                        <div class="news_post_date d-flex flex-column align-items-center justify-content-center">
                                            <div>18</div>
                                            <div>dec</div>
                                        </div>
                                    </div>
                                    <div class="news_post_title_container">
                                        <div class="news_post_title">
                                            <a href="news_post.html">Why do you need a qualification?</a>
                                        </div>
                                        <div class="news_post_meta">
                                            <span class="news_post_author"><a href="#">By Christian Smith</a></span>
                                            <span>|</span>
                                            <span class="news_post_comments"><a href="#">3 Comments</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="news_post_text">
                                    <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Etiam eu purus nec eros varius luctus. Praesent finibus risus facilisis ultricies.</p>
                                </div>
                                <div class="news_post_button text-center trans_200">
                                    <a href="news_post.html">Read More</a>
                                </div>
                            </div>

                            <div class="news_post">
                                <div class="news_post_image">
                                    <img src="images/news_2.jpg" alt="https://unsplash.com/@dsmacinnes">
                                </div>
                                <div class="news_post_top d-flex flex-column flex-sm-row">
                                    <div class="news_post_date_container">
                                        <div class="news_post_date d-flex flex-column align-items-center justify-content-center">
                                            <div>18</div>
                                            <div>dec</div>
                                        </div>
                                    </div>
                                    <div class="news_post_title_container">
                                        <div class="news_post_title">
                                            <a href="news_post.html">Our new courses just for you?</a>
                                        </div>
                                        <div class="news_post_meta">
                                            <span class="news_post_author"><a href="#">By Christian Smith</a></span>
                                            <span>|</span>
                                            <span class="news_post_comments"><a href="#">3 Comments</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="news_post_text">
                                    <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Etiam eu purus nec eros varius luctus. Praesent finibus risus facilisis ultricies.</p>
                                </div>
                                <div class="news_post_button text-center trans_200">
                                    <a href="news_post.html">Read More</a>
                                </div>
                            </div>

                            <div class="news_post">
                                <div class="news_post_image">
                                    <img src="images/news_3.jpg" alt="https://unsplash.com/@dsmacinnes">
                                </div>
                                <div class="news_post_top d-flex flex-column flex-sm-row">
                                    <div class="news_post_date_container">
                                        <div class="news_post_date d-flex flex-column align-items-center justify-content-center">
                                            <div>18</div>
                                            <div>dec</div>
                                        </div>
                                    </div>
                                    <div class="news_post_title_container">
                                        <div class="news_post_title">
                                            <a href="news_post.html">Why take our graduate program??</a>
                                        </div>
                                        <div class="news_post_meta">
                                            <span class="news_post_author"><a href="#">By Christian Smith</a></span>
                                            <span>|</span>
                                            <span class="news_post_comments"><a href="#">3 Comments</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="news_post_text">
                                    <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Etiam eu purus nec eros varius luctus. Praesent finibus risus facilisis ultricies.</p>
                                </div>
                                <div class="news_post_button text-center trans_200">
                                    <a href="news_post.html">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="news_page_nav">
                            <ul>
                                <li class="active text-center trans_200"><a href="#">01</a></li>
                                <li class="text-center trans_200"><a href="#">02</a></li>
                                <li class="text-center trans_200"><a href="#">03</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="sidebar">

                            <div class="sidebar_section">
                                <div class="sidebar_section_title">
                                    <h3>Archives</h3>
                                </div>
                                <ul class="sidebar_list">
                                    <li class="sidebar_list_item"><a href="#">Design Courses</a></li>
                                    <li class="sidebar_list_item"><a href="#">All you need to know</a></li>
                                    <li class="sidebar_list_item"><a href="#">Uncategorized</a></li>
                                    <li class="sidebar_list_item"><a href="#">About Our Departments</a></li>
                                    <li class="sidebar_list_item"><a href="#">Choose the right course</a></li>
                                </ul>
                            </div>

                            <div class="sidebar_section">
                                <div class="sidebar_section_title">
                                    <h3>Latest posts</h3>
                                </div>
                                <div class="latest_posts">

                                    <div class="latest_post">
                                        <div class="latest_post_image">
                                            <img src="images/latest_1.jpg" alt="https://unsplash.com/@dsmacinnes">
                                        </div>
                                        <div class="latest_post_title"><a href="news_post.html">Why do you need a qualification?</a></div>
                                        <div class="latest_post_meta">
                                            <span class="latest_post_author"><a href="#">By Christian Smith</a></span>
                                            <span>|</span>
                                            <span class="latest_post_comments"><a href="#">3 Comments</a></span>
                                        </div>
                                    </div>

                                    <div class="latest_post">
                                        <div class="latest_post_image">
                                            <img src="images/latest_2.jpg" alt="https://unsplash.com/@erothermel">
                                        </div>
                                        <div class="latest_post_title"><a href="news_post.html">Why do you need a qualification?</a></div>
                                        <div class="latest_post_meta">
                                            <span class="latest_post_author"><a href="#">By Christian Smith</a></span>
                                            <span>|</span>
                                            <span class="latest_post_comments"><a href="#">3 Comments</a></span>
                                        </div>
                                    </div>

                                    <div class="latest_post">
                                        <div class="latest_post_image">
                                            <img src="images/latest_3.jpg" alt="https://unsplash.com/@element5digital">
                                        </div>
                                        <div class="latest_post_title"><a href="news_post.html">Why do you need a qualification?</a></div>
                                        <div class="latest_post_meta">
                                            <span class="latest_post_author"><a href="#">By Christian Smith</a></span>
                                            <span>|</span>
                                            <span class="latest_post_comments"><a href="#">3 Comments</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="sidebar_section">
                                <div class="sidebar_section_title">
                                    <h3>Tags</h3>
                                </div>
                                <div class="tags d-flex flex-row flex-wrap">
                                    <div class="tag"><a href="#">Course</a></div>
                                    <div class="tag"><a href="#">Design</a></div>
                                    <div class="tag"><a href="#">FAQ</a></div>
                                    <div class="tag"><a href="#">Teachers</a></div>
                                    <div class="tag"><a href="#">School</a></div>
                                    <div class="tag"><a href="#">Graduate</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php get_template_part('/pages/footer'); ?>
    </div>
    <script data-cfasync="false" src="https://preview.colorlib.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/pages/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/pages/styles/bootstrap4/popper.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/pages/styles/bootstrap4/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/pages/plugins/greensock/TweenMax.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/pages/plugins/greensock/TimelineMax.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/pages/plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/pages/plugins/greensock/animation.gsap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/pages/plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/pages/plugins/scrollTo/jquery.scrollTo.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/pages/plugins/easing/easing.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/pages/js/news_custom.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854" integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg==" data-cf-beacon='{"rayId":"7fc08df24a730977","version":"2023.8.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
</body>

</html>