<!doctype html>
<html class="no-js" lang="zxx">
<?php
include('./includes/connection.php');

$result = [];
$sql = "SELECT * FROM `product`";
$result = mysqli_query($con, $sql);

?>
<!-- Mirrored from preview.colorlib.com/theme/furn/product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Dec 2023 03:37:01 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shop | eCommerce</title>
    <meta name="description" content>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.html">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/lightslider.min.css">
    <link rel="stylesheet" href="assets/css/price_rangs.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script nonce="b96368ce-a30e-4244-aaeb-35b636433f07">
    (function(w, d) {
        ! function(dg, dh, di, dj) {
            dg[di] = dg[di] || {};
            dg[di].executed = [];
            dg.zaraz = {
                deferred: [],
                listeners: []
            };
            dg.zaraz.q = [];
            dg.zaraz._f = function(dk) {
                return async function() {
                    var dl = Array.prototype.slice.call(arguments);
                    dg.zaraz.q.push({
                        m: dk,
                        a: dl
                    })
                }
            };
            for (const dm of ["track", "set", "debug"]) dg.zaraz[dm] = dg.zaraz._f(dm);
            dg.zaraz.init = () => {
                var dn = dh.getElementsByTagName(dj)[0],
                    dp = dh.createElement(dj),
                    dq = dh.getElementsByTagName("title")[0];
                dq && (dg[di].t = dh.getElementsByTagName("title")[0].text);
                dg[di].x = Math.random();
                dg[di].w = dg.screen.width;
                dg[di].h = dg.screen.height;
                dg[di].j = dg.innerHeight;
                dg[di].e = dg.innerWidth;
                dg[di].l = dg.location.href;
                dg[di].r = dh.referrer;
                dg[di].k = dg.screen.colorDepth;
                dg[di].n = dh.characterSet;
                dg[di].o = (new Date).getTimezoneOffset();
                if (dg.dataLayer)
                    for (const du of Object.entries(Object.entries(dataLayer).reduce(((dv, dw) => ({
                            ...dv[1],
                            ...dw[1]
                        })), {}))) zaraz.set(du[0], du[1], {
                        scope: "page"
                    });
                dg[di].q = [];
                for (; dg.zaraz.q.length;) {
                    const dx = dg.zaraz.q.shift();
                    dg[di].q.push(dx)
                }
                dp.defer = !0;
                for (const dy of [localStorage, sessionStorage]) Object.keys(dy || {}).filter((dA => dA
                    .startsWith("_zaraz_"))).forEach((dz => {
                    try {
                        dg[di]["z_" + dz.slice(7)] = JSON.parse(dy.getItem(dz))
                    } catch {
                        dg[di]["z_" + dz.slice(7)] = dy.getItem(dz)
                    }
                }));
                dp.referrerPolicy = "origin";
                dp.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(dg[di])));
                dn.parentNode.insertBefore(dp, dn)
            };
            ["complete", "interactive"].includes(dh.readyState) ? zaraz.init() : dg.addEventListener(
                "DOMContentLoaded", zaraz.init)
        }(w, d, "zarazData", "script");
    })(window, document);
    </script>
</head>

<body>

    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt>
                </div>
            </div>
        </div>
    </div>

    <header>

        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row menu-wrapper align-items-center justify-content-between">
                        <div class="header-left d-flex align-items-center">

                            <div class="logo">
                                <a href="index-2.html"><img src="assets/img/logo/logo.png" alt></a>
                            </div>

                            <div class="logo2">
                                <a href="index-2.html"><img src="assets/img/logo/logo2.png" alt></a>
                            </div>

                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index-2.html">Home</a></li>
                                        <li><a href="product.html">Product</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="#">Page</a>
                                            <ul class="submenu">
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="card.html">Card</a></li>
                                                <li><a href="categories.html">Categories</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="product_details.html">Product Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.html">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog_details.html">Blog Details</a></li>
                                                <li><a href="elements.html">Elements</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header-right1 d-flex align-items-center">
                            <div class="search">
                                <ul class="d-flex align-items-center">
                                    <li>

                                        <form action="#" class="form-box f-right ">
                                            <input type="text" name="Search" placeholder="Search products">
                                            <div class="search-icon">
                                                <i class="ti-search"></i>
                                            </div>
                                        </form>
                                    </li>
                                    <li>
                                        <a href="login.html" class="account-btn" target="_blank">My Account</a>
                                    </li>
                                    <li>
                                        <div class="card-stor">
                                            <img src="assets/img/icon/card.svg" alt>
                                            <span>0</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>


    <main>

        <div class="slider-area ">
            <div class="slider-active">
                <div class="single-slider hero-overly2  slider-height2 d-flex align-items-center slider-bg2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-8 col-md-8">
                                <div class="hero__caption hero__caption2">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">Products</h1>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">Products</a></li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="properties new-arrival fix">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-10">
                        <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".2s">
                            <h2>Popular products</h2>
                            <P>Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare,
                                eros dolor interdum nulla.</P>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="properties__button text-center">

                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-Sofa-tab" data-toggle="tab"
                                        href="#nav-Sofa" role="tab" aria-controls="nav-Sofa"
                                        aria-selected="true">Women's Watch</a>
                                    <a class="nav-item nav-link" id="nav-Table-tab" data-toggle="tab" href="#nav-Table"
                                        role="tab" aria-controls="nav-Table" aria-selected="false">Table</a>
                                    <a class="nav-item nav-link" id="nav-Chair-tab" data-toggle="tab" href="#nav-Chair"
                                        role="tab" aria-controls="nav-Chair" aria-selected="false">Chair</a>
                                    <a class="nav-item nav-link" id="nav-Bed-tab" data-toggle="tab" href="#nav-Bed"
                                        role="tab" aria-controls="nav-Bed" aria-selected="false">Bed</a>
                                    <a class="nav-item nav-link" id="nav-Lightning-tab" data-toggle="tab"
                                        href="#nav-Lightning" role="tab" aria-controls="nav-Lightning"
                                        aria-selected="false">Lightning</a>
                                    <a class="nav-item nav-link" id="nav-Decore-tab" data-toggle="tab"
                                        href="#nav-Decore" role="tab" aria-controls="nav-Decore"
                                        aria-selected="false">Decore</a>
                                </div>
                            </nav>

                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="tab-content" id="nav-tabContent">

                        <div class="tab-pane fade show active" id="nav-Sofa" role="tabpanel"
                            aria-labelledby="nav-Sofa-tab">
                            <div class="row">
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                              ?>
                                  <div class="col-lg-4 col-md-6 col-sm-6">
                                      <div class="single-new-arrival mb-50 text-center">
                                          <div class="popular-img">
                                              <img src="<?php echo $row["img"]; ?>" style="width:20%;height: 20%;" alt>
                                          </div>
                                          <div class="popular-caption">
                                              <h3><a href="<?php echo $row["link"]; ?>" target="_blank">  <?php echo $row["name"]; ?></a></h3>
                                              <span>
                                              <?php echo $row["price"];  ?> $
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                          <?php } ?>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-Table" role="tabpanel" aria-labelledby="nav-Table-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular1.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular2.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular3.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular4.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular5.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular6.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular7.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular8.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular9.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-Chair" role="tabpanel" aria-labelledby="nav-Chair-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular1.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular2.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular3.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular4.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular5.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular6.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular7.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular8.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular9.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-Bed" role="tabpanel" aria-labelledby="nav-Bed-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular1.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular2.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular3.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular4.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular5.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular6.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular7.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular8.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular9.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-Lightning" role="tabpanel"
                            aria-labelledby="nav-Lightning-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular1.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular2.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular3.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular4.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular5.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular6.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular7.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular8.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular9.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="nav-Decore" role="tabpanel" aria-labelledby="nav-Decore-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular1.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular2.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular3.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular4.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular5.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular6.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular7.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular8.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-new-arrival mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="assets/img/gallery/popular9.png" alt>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><a href="product_details.html">Bly Microfiber / Microsuede 56" Armless
                                                    Loveseat</a></h3>
                                            <span>$367</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row justify-content-center">
                    <div class="room-btn">
                        <a href="product.html" class="border-btn">Discover More</a>
                    </div>
                </div>
            </div>
        </section>




        <div class="categories-area section-padding40 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services1.svg" alt>
                            </div>
                            <div class="cat-cap">
                                <h5>Fast & Free Delivery</h5>
                                <p>Free delivery on all orders</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services2.svg" alt>
                            </div>
                            <div class="cat-cap">
                                <h5>Secure Payment</h5>
                                <p>Free delivery on all orders</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services3.svg" alt>
                            </div>
                            <div class="cat-cap">
                                <h5>Money Back Guarantee</h5>
                                <p>Free delivery on all orders</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services4.svg" alt>
                            </div>
                            <div class="cat-cap">
                                <h5>Online Support</h5>
                                <p>Free delivery on all orders</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <footer>
        <div class="footer-wrapper">

            <div class="footer-area footer-padding">
                <div class="container ">
                    <div class="row justify-content-between">
                        <div class="col-xl-4 col-lg-3 col-md-8 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">

                                    <div class="footer-logo mb-35">
                                        <a href="index-2.html"><img src="assets/img/logo/logo2_footer.png" alt></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p>Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis
                                                viverra ornare, eros dolor interdum nulla.</p>
                                        </div>
                                    </div>

                                    <div class="footer-social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Quick links</h4>
                                    <ul>
                                        <li><a href="#">Image Licensin</a></li>
                                        <li><a href="#">Style Guide</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Shop Category</h4>
                                    <ul>
                                        <li><a href="#">Image Licensin</a></li>
                                        <li><a href="#">Style Guide</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Pertners</h4>
                                    <ul>
                                        <li><a href="#">Image Licensin</a></li>
                                        <li><a href="#">Style Guide</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    <p>
                                        Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                        </script> All rights reserved | This template is made with <i
                                            class="fa fa-heart" aria-hidden="true"></i> by <a
                                            href="https://colorlib.com/" target="_blank">Colorlib</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </footer>

    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>


    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/animated.headline.js"></script>
    <script src="assets/js/jquery.magnific-popup.js"></script>
    <script src="assets/js/gijgo.min.js"></script>

    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/jquery.barfiller.js"></script>

    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/hover-direction-snake.min.js"></script>

    <script src="assets/js/contact.js"></script>
    <script src="assets/js/jquery.form.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/mail-script.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
        integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
        data-cf-beacon='{"rayId":"832a34357a59411e","b":1,"version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}'
        crossorigin="anonymous"></script>
</body>

 

</html>