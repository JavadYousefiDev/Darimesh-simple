<?php

// PHP ---
include '../database/config2.php';

?>

<!DOCTYPE html>
<html lang="fa-ir" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>داریمش | صفحه محصولات </title>
    <link rel="stylesheet" href="../css/bootstrap.rtl.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../fontawesome2/css/all.css">
    <link rel="shortcut icon" href="../img/Darimesh.ico">
    <link rel="stylesheet" href="../css/mains.css">
    <link rel="stylesheet" href="../css/prod.css">
</head>

<body>

    <!-- header -->
    <?php include_once "../includes/headerr.php"; ?>


    <!-- <div class="container">

        <h3 class="page-title">محصولات سایت</h3>
        
        <div class="product-container">

            <div class="product-card" data-name="c-1">

                <img src="../img/prods/adata-ex-770g-2TB.jpg" alt="external hard adata">
                <a href="#"><h4 class="prod-title">هارد اکسترنال ای دیتا مدل HD770G با ظرفیت 2TB</h4></a>
                <div class="price">۲،۳۶۸،۰۰۰ تومان</div>

            </div>

            <div class="product-card" data-name="c-2">

                <img src="../img/prods/mouse-tsco-tm-764-ga.jpg" alt="mouse tsco">
                <a href="#"><h4 class="prod-title">موس گیمینگ تسکو مدل TM 764 GA</h4></a>
                <div class="price">۲۱۵،۰۰۰ تومان</div>

            </div>

            <div class="product-card" data-name="c-3">

                <img src="../img/prods/monitor-maya-mo24-series-24inch.jpg" alt="monitor maya">
                <a href="#"> <h4 class="prod-title">مانیتور مایا مدل MO24 Series</h4></a>
                <div class="price">۴،۲۹۹،۰۰۰ تومان</div>

            </div>

            <div class="product-card" data-name="c-4">

                <img src="../img/prods/airdotspro.jpg" alt="airdots pro">
                <a href="#"><h4 class="prod-title">هندزفری بلوتوث Redmi Airdots Pro</h4></a>
                <div class="price">۲۳۰،۰۰۰ تومان</div>

            </div>

            <div class="product-card" data-name="c-5">

                <img src="../img/prods/ram-pc-2channel-ddr4-3200mhz-vengence-rgb-pro.jpg" alt="vengence ram">
                <a href="#"><h4 class="prod-title">رم Vengence RGB Pro دو کاناله و DDR4 با فرکانس 3200 Mhz و ظرفیت 16 گیگابایت </h4></a>
                <div class="price">۲،۳۷۸،۰۰۰ تومان</div>

            </div>

            <div class="product-card" data-name="c-6">

                <img src="../img/prods/a52s-5g-sm-2sim-256gb.jpg" alt="a52s">
                <a href="#"> <h4 class="prod-title">گوشی موبایل سامسونگ ۲ سیمکارت مدل Galaxy A52s با ظرفیت 256GB</h4></a>
                <div class="price">۱۲،۳۸۹،۰۰۰ تومان</div>

            </div>

            <div class="product-card" data-name="c-7">

                <img src="../img/prods/a22sm-128g.jpg" alt="a22sm mobile">
                <a href="#"> <h4 class="prod-title">گوشی موبایل سامسونگ ۲ سیمکارت مدل Galaxy A22s با ظرفیت 128GB</h4></a>
                <div class="price">۱۳،۶۹۹،۰۰۰ تومان</div>

            </div>

            <div class="product-card" data-name="c-8">

                <img src="../img/prods/airpods-pro-3-wireless.jpg" alt="airpods pro">
                <a href="#"><h4 class="prod-title">هندزفری بلوتوث Airpods |||</h4></a>
                <div class="price">۲۴۹،۰۰۰ تومان</div>

            </div>

            <div class="product-card" data-name="c-9">

                <img src="../img/prods/headset-unikoma-X20-7.1.jpg" alt="unikoma">
                <a href="#"><h4 class="prod-title">هدست اونیکوما مدل X20 7.1</h4></a>
                <div class="price">۸۹۱،۰۰۰ تومان</div>

            </div>

            <div class="product-card" data-name="c-10">

                <img src="../img/prods/asus-m509ba-15.6in.jpg" alt="asus laptop">
                <a href="#"><h4 class="prod-title">لپتاپ 15.6 اینچی ایسوس مدل M509BA </h4></a>
                <div class="price">۱۲،۴۵۰،۰۰۰ تومان</div>

            </div>

            <div class="product-card" data-name="c-11">

                <img src="../img/prods/aser-aspire-a31558-320p-a-15in.jpg" alt="laptop aser aspire">
                <a href="#"><h4 class="prod-title">لپتاپ 15 اینچی ایسر مدل Aspire A315-58 320P A</h4></a>
                <div class="price">۲۸،۵۳۰،۰۰۰ تومان</div>

            </div>

            <div class="product-card" data-name="c-12">

                <img src="../img/prods/dell-S2721HN-27inch.jpg" alt="monitor dell">
                <a href="#"><h4 class="prod-title">مانیتور dell 27 اینچی مدل S2721HN</h4></a>
                <div class="price">۷،۲۳۸،۰۰۰ تومان</div>

            </div>

            <div class="product-card" data-name="c-13">

                <img src="../img/prods/a12NachoSM-64g-spec.jpg" alt="a12 samsung">
                <a href="#"><h4 class="prod-title">گوشی سامسونگ مدل Galaxy A12 NachoSM با حافظه 64GB</h4></a>
                <div class="price">۴،۲۹۹،۰۰۰ تومان</div>

            </div>

            <div class="product-card" data-name="c-14">

                <img src="../img/prods/pocoF3-5g-256g.jpg" alt="poco xiaomi">
                <a href="#"><h4 class="prod-title">گوشی شیائومی مدل POCO F3 - 5G با ظرفیت 256GB</h4></a>
                <div class="price">۱۳،۶۹۹،۰۰۰ تومان</div>

            </div>

            <div class="product-card" data-name="c-15">

                <img src="../img/prods/hdd-internal-wd-purple-1TB.jpg" alt="poco xiaomi">
                <a href="#"><h4 class="prod-title">هارد اینترنال وسترن دیجیتال مدل Purple با ظرفیت 1TB</h4></a>
                <div class="price">۱،۲۶۰،۰۰۰ تومان</div>

            </div>

            <div class="product-card" data-name="c-16">

                <img src="../img/prods/a32-5g-2sim-128g.jpg" alt="samsung a32s">
                <a href="#"><h4 class="prod-title">گوشی موبایل سامسونگ ۲ سیمکارت مدل A32sm - 5G با ظرفیت 128GB</h4></a>
                <div class="price">۶،۸۸۰،۰۰۰ تومان</div>

            </div>

        </div>

        <div class="product-action">
        
            <div class="action" data-target="c-1">
                <i class="fa-solid fa-xmark close"></i>
                <img src="../img/prods/adata-ex-770g-2TB.jpg" alt="external hard adata">
                <h4 class="action-title">هارد اکسترنال ای دیتا مدل HD770G با ظرفیت 2TB</h4>
                <p class="desc">محصولی شگرف از ایران زمین بنام فلان و بهمان</p>
                <div class="add-to-cart-btn">
                    <span class="action-price alert alert-primary">۲،۳۶۸،۰۰۰ تومان</span>
                    <a href="#" id="add" class="btn btn-success addCart">اضافه به سبد خرید</a>
                </div>
            </div>

            <div class="action" data-target="c-2">
                <i class="fa-solid fa-xmark close"></i>
                <img src="../img/prods/mouse-tsco-tm-764-ga.jpg" alt="mouse gaming tsco">
                <h4 class="action-title">موس گیمینگ تسکو مدل TM 764 GA</h4>
                <p class="desc">محصولی شگرف از ایران زمین بنام فلان و بهمان</p>
                <div class="add-to-cart-btn">
                    <span class="action-price alert alert-primary">۲۱۵،۰۰۰ تومان</span>
                    <a href="#" id="add" class="btn btn-success addCart">اضافه به سبد خرید</a>
                </div>
            </div>

            <div class="action" data-target="c-3">
                <i class="fa-solid fa-xmark close"></i>
                <img src="../img/prods/monitor-maya-mo24-series-24inch.jpg" alt="mouse gaming tsco">
                <h4 class="action-title">مانیتور مایا 24 اینچ مدل MO24 Series</h4>
                <p class="desc">محصولی شگرف از ایران زمین بنام فلان و بهمان</p>
                <div class="add-to-cart-btn">
                    <span class="action-price alert alert-primary">۴،۲۹۹،۰۰۰ تومان</span>
                    <a href="#" id="add" class="btn btn-success addCart">اضافه به سبد خرید</a>
                </div>
            </div>

            <div class="action" data-target="c-4">
                <i class="fa-solid fa-xmark close"></i>
                <img src="../img/prods/airdotspro.jpg" alt="mouse gaming tsco">
                <h4 class="action-title">هندزفری بلوتوث مدل Redmi Airdots pro</h4>
                <p class="desc">محصولی شگرف از ایران زمین بنام فلان و بهمان</p>
                <div class="add-to-cart-btn">
                    <span class="action-price alert alert-primary">۲۳۰،۰۰۰ تومان</span>
                    <a href="#" id="add" class="btn btn-success addCart">اضافه به سبد خرید</a>
                </div>
            </div>

            <div class="action" data-target="c-5">
                <i class="fa-solid fa-xmark close"></i>
                <img src="../img/prods/ram-pc-2channel-ddr4-3200mhz-vengence-rgb-pro.jpg" alt="mouse gaming tsco">
                <h4 class="action-title">رم Vengence RGB Pro دو کاناله و DDR4 با فرکانس 3200 Mhz و ظرفیت 16 گیگابایت </h4>
                <p class="desc">محصولی شگرف از ایران زمین بنام فلان و بهمان</p>
                <div class="add-to-cart-btn">
                    <span class="action-price alert alert-primary">۲،۳۷۸،۰۰۰ تومان</span>
                    <a href="#" id="add" class="btn btn-success addCart">اضافه به سبد خرید</a>
                </div>
            </div>

            <div class="action" data-target="c-6">
                <i class="fa-solid fa-xmark close"></i>
                <img src="../img/prods/a52s-5g-sm-2sim-256gb.jpg" alt="mouse gaming tsco">
                <h4 class="action-title">گوشی موبایل سامسونگ ۲ سیمکارت مدل Galaxy A52s با ظرفیت 256GB</h4>
                <p class="desc">محصولی شگرف از ایران زمین بنام فلان و بهمان</p>
                <div class="add-to-cart-btn">
                    <span class="action-price alert alert-primary">۱۲،۳۸۹،۰۰۰ تومان</span>
                    <a href="#" id="add" class="btn btn-success addCart">اضافه به سبد خرید</a>
                </div>
            </div>

            <div class="action" data-target="c-7">
                <i class="fa-solid fa-xmark close"></i>
                <img src="../img/prods/a22sm-128g.jpg" alt="mouse gaming tsco">
                <h4 class="action-title">گوشی موبایل سامسونگ ۲ سیمکارت مدل Galaxy A22s با ظرفیت 128GB</h4>
                <p class="desc">محصولی شگرف از ایران زمین بنام فلان و بهمان</p>
                <div class="add-to-cart-btn">
                    <span class="action-price alert alert-primary">۱۳،۶۹۹،۰۰۰ تومان</span>
                    <a href="#" id="add" class="btn btn-success addCart">اضافه به سبد خرید</a>
                </div>
            </div>

            <div class="action" data-target="c-8">
                <i class="fa-solid fa-xmark close"></i>
                <img src="../img/prods/airpods-pro-3-wireless.jpg" alt="mouse gaming tsco">
                <h4 class="action-title">هندزفری بلوتوث Airpods |||</h4>
                <p class="desc">محصولی شگرف از ایران زمین بنام فلان و بهمان</p>
                <div class="add-to-cart-btn">
                    <span class="action-price alert alert-primary">۲۴۹،۰۰۰ تومان</span>
                    <a href="#" id="add" class="btn btn-success addCart">اضافه به سبد خرید</a>
                </div>
            </div>

            <div class="action" data-target="c-9">
                <i class="fa-solid fa-xmark close"></i>
                <img src="../img/prods/headset-unikoma-X20-7.1.jpg" alt="mouse gaming tsco">
                <h4 class="action-title">هدست اونیکوما مدل X20 7.1</h4>
                <p class="desc">محصولی شگرف از ایران زمین بنام فلان و بهمان</p>
                <div class="add-to-cart-btn">
                    <span class="action-price alert alert-primary">۸۹۱،۰۰۰ تومان</span>
                    <a href="#" id="add" class="btn btn-success addCart">اضافه به سبد خرید</a>
                </div>
            </div>

            <div class="action" data-target="c-10">
                <i class="fa-solid fa-xmark close"></i>
                <img src="../img/prods/asus-m509ba-15.6in.jpg" alt="mouse gaming tsco">
                <h4 class="action-title">لپتاپ 15.6 اینچی ایسوس مدل M509BA </h4>
                <p class="desc">محصولی شگرف از ایران زمین بنام فلان و بهمان</p>
                <div class="add-to-cart-btn">
                    <span class="action-price alert alert-primary">۱۲،۴۵۰،۰۰۰ تومان</span>
                    <a href="#" id="add" class="btn btn-success addCart">اضافه به سبد خرید</a>
                </div>
            </div>

            <div class="action" data-target="c-11">
                <i class="fa-solid fa-xmark close"></i>
                <img src="../img/prods/aser-aspire-a31558-320p-a-15in.jpg" alt="mouse gaming tsco">
                <h4 class="action-title">لپتاپ 15 اینچی ایسر مدل Aspire A315-58 320P A</h4>
                <p class="desc">محصولی شگرف از ایران زمین بنام فلان و بهمان</p>
                <div class="add-to-cart-btn">
                    <span class="action-price alert alert-primary">۲۸،۵۳۰،۰۰۰ تومان</span>
                    <a href="#" id="add" class="btn btn-success addCart">اضافه به سبد خرید</a>
                </div>
            </div>
            
            <div class="action" data-target="c-12">
                <i class="fa-solid fa-xmark close"></i>
                <img src="../img/prods/dell-S2721HN-27inch.jpg" alt="mouse gaming tsco">
                <h4 class="action-title">مانیتور dell 27 اینچی مدل S2721HN</h4>
                <p class="desc">محصولی شگرف از ایران زمین بنام فلان و بهمان</p>
                <div class="add-to-cart-btn">
                    <span class="action-price alert alert-primary">۷،۲۳۸،۰۰۰ تومان</span>
                    <a href="#" id="add" class="btn btn-success addCart">اضافه به سبد خرید</a>
                </div>
            </div>

            <div class="action" data-target="c-13">
                <i class="fa-solid fa-xmark close"></i>
                <img src="../img/prods/a12NachoSM-64g-spec.jpg" alt="mouse gaming tsco">
                <h4 class="action-title">گوشی سامسونگ مدل Galaxy A12 NachoSM با حافظه 64GB</h4>
                <p class="desc">محصولی شگرف از ایران زمین بنام فلان و بهمان</p>
                <div class="add-to-cart-btn">
                    <span class="action-price alert alert-primary">۴،۲۹۹،۰۰۰ تومان</span>
                    <a href="#" id="add" class="btn btn-success addCart">اضافه به سبد خرید</a>
                </div>
            </div>

            <div class="action" data-target="c-14">
                <i class="fa-solid fa-xmark close"></i>
                <img src="../img/prods/pocoF3-5g-256g.jpg" alt="mouse gaming tsco">
                <h4 class="action-title">گوشی شیائومی مدل POCO F3 - 5G با ظرفیت 256GB</h4>
                <p class="desc">محصولی شگرف از ایران زمین بنام فلان و بهمان</p>
                <div class="add-to-cart-btn">
                    <span class="action-price alert alert-primary">۱۳،۶۹۹،۰۰۰ تومان</span>
                    <a href="#" id="add" class="btn btn-success addCart">اضافه به سبد خرید</a>
                </div>
            </div>

            <div class="action" data-target="c-15">
                <i class="fa-solid fa-xmark close"></i>
                <img src="../img/prods/hdd-internal-wd-purple-1TB.jpg" alt="mouse gaming tsco">
                <h4 class="action-title">هارد اینترنال وسترن دیجیتال مدل Purple با ظرفیت 1TB</h4>
                <p class="desc">محصولی شگرف از ایران زمین بنام فلان و بهمان</p>
                <div class="add-to-cart-btn">
                    <span class="action-price alert alert-primary">۱،۲۶۰،۰۰۰ تومان</span>
                    <a href="#" id="add" class="btn btn-success addCart">اضافه به سبد خرید</a>
                </div>
            </div>

            <div class="action" data-target="c-16">
                <i class="fa-solid fa-xmark close"></i>
                <img src="../img/prods/a32-5g-2sim-128g.jpg" alt="mouse gaming tsco">
                <h4 class="action-title">گوشی موبایل سامسونگ ۲ سیمکارت مدل A32sm - 5G با ظرفیت 128GB</h4>
                <p class="desc">محصولی شگرف از ایران زمین بنام فلان و بهمان</p>
                <div class="add-to-cart-btn">
                    <span class="action-price alert alert-primary">۶،۸۸۰،۰۰۰ تومان</span>
                    <a href="#" id="add" class="btn btn-success addCart">اضافه به سبد خرید</a>
                </div>
            </div>

        </div>

    </div> -->

    <!-- --------------------------------- -->



    <div class="container" style="text-align: center;">
        <br><br>
        <h2 class="product-title"> <i class="fa-solid fa-circle-check"></i> محصولات سایت</h2>

        <div class="row" style="width: 100%;display: flex;justify-content: center;">

            <div style="margin: 25px 10px;" class="box col-sm-12 col-md-6 col-lg-4 col-xl-3">

                <div class="card" style="width: 22rem;">
                    <img src="../img/prods/airdotspro.jpg" style="width: 100%;" class="card-img-top" alt="airdots pro">
                    <div class="card-body">
                        <h3 class="card-title">هندزفری بلوتوث مدل Redmi Airdots pro</h3>
                        <p class="card-text">230000 تومان</p>
                        <a href="#" class="btn btn-success">اضافه به سبد خرید</a>
                    </div>
                </div>

            </div>

            <div style="margin: 25px 10px;" class="box col-sm-12 col-md-6 col-lg-4 col-xl-3">

                <div class="card" style="width: 22rem;">
                    <img src="../img/prods/a22sm-128g.jpg" style="width: 100%;" class="card-img-top" alt="a22 samsung">
                    <div class="card-body">
                        <h3 class="card-title">گوشی سامسونگ مدل galaxy A22s</h3>
                        <p class="card-text">13699000 تومان</p>
                        <a href="#" class="btn btn-success">اضافه به سبد خرید</a>
                    </div>
                </div>

            </div>

            <div style="margin: 25px 10px;" class="box col-sm-12 col-md-6 col-lg-4 col-xl-3">

                <div class="card" style="width: 22rem;">
                    <img src="../img/prods/tablet-lenovo-tab-MT-7305i-16GB.jpg" style="width: 100%;" class="card-img-top" alt="a22 samsung">
                    <div class="card-body">
                        <h3 class="card-title">تبلت لنوو مدل MT-7305i</h3>
                        <p class="card-text">1800000 تومان</p>
                        <a href="#" class="btn btn-success">اضافه به سبد خرید</a>
                    </div>
                </div>

            </div>

            <div style="margin: 25px 10px;" class="box col-sm-12 col-md-6 col-lg-4 col-xl-3">

                <div class="card" style="width: 22rem;">
                    <img src="../img/prods/headphone-bluetoth-leito-L7.jpg" style="width: 100%;" class="card-img-top" alt="a22 samsung">
                    <div class="card-body">
                        <h3 class="card-title">هدفون بلوتوثی لیتو مدل L-7</h3>
                        <p class="card-text">299500 تومان</p>
                        <a href="#" class="btn btn-success">اضافه به سبد خرید</a>
                    </div>
                </div>

            </div>

            <div style="margin: 25px 10px;" class="box col-sm-12 col-md-6 col-lg-4 col-xl-3">

                <div class="card" style="width: 22rem;">
                    <img src="../img/prods/headset-tscoth-5127.jpg" style="width: 100%;" class="card-img-top" alt="a22 samsung">
                    <div class="card-body">
                        <h3 class="card-title">هدست تسکو مدل th 5127</h3>
                        <p class="card-text">277000 تومان</p>
                        <a href="#" class="btn btn-success">اضافه به سبد خرید</a>
                    </div>
                </div>

            </div>

            <div style="margin: 25px 10px;" class="box col-sm-12 col-md-6 col-lg-4 col-xl-3">

                <div class="card" style="width: 22rem;">
                    <img src="../img/prods/aser-nitro5-an515-45-r5t9-15in.jpg" style="width: 100%;" class="card-img-top" alt="a22 samsung">
                    <div class="card-body">
                        <h3 class="card-title">لپ تاپ ایسر مدل Nitro5 an515 15 اینچی</h3>
                        <p class="card-text">32500000 تومان</p>
                        <a href="#" class="btn btn-success">اضافه به سبد خرید</a>
                    </div>
                </div>

            </div>

            <div style="margin: 25px 10px;" class="box col-sm-12 col-md-6 col-lg-4 col-xl-3">

                <div class="card" style="width: 22rem;">
                    <img src="../img/prods/asus-vivobook-r465fab-14in.jpg" style="width: 100%;" class="card-img-top" alt="a22 samsung">
                    <div class="card-body">
                        <h3 class="card-title">لپ تاپ 14 اینچی ایسوس مدل Vivobook </h3>
                        <p class="card-text">12750000 تومان</p>
                        <a href="#" class="btn btn-success">اضافه به سبد خرید</a>
                    </div>
                </div>

            </div>

            <div style="margin: 25px 10px;" class="box col-sm-12 col-md-6 col-lg-4 col-xl-3">

                <div class="card" style="width: 22rem;">
                    <img src="../img/prods/mousepad-gaming-mou543.jpg" style="width: 100%;" class="card-img-top" alt="a22 samsung">
                    <div class="card-body">
                        <h3 class="card-title">موس پد گیمینگ مدل MOU543</h3>
                        <p class="card-text">31000 تومان</p>
                        <a href="#" class="btn btn-success">اضافه به سبد خرید</a>
                    </div>
                </div>

            </div>

            <div style="margin: 25px 10px;" class="box col-sm-12 col-md-6 col-lg-4 col-xl-3">

                <div class="card" style="width: 22rem;">
                    <img src="../img/prods/tscomouse-tm-754.jpg" style="width: 100%;" class="card-img-top" alt="a22 samsung">
                    <div class="card-body">
                        <h3 class="card-title">موس گیمینگ تسکو مدل tm 754 ga</h3>
                        <p class="card-text">180000 تومان</p>
                        <a href="#" class="btn btn-success">اضافه به سبد خرید</a>
                    </div>
                </div>

            </div>

            <div style="margin: 25px 10px;" class="box col-sm-12 col-md-6 col-lg-4 col-xl-3">

                <div class="card" style="width: 22rem;">
                    <img src="../img/prods/hdd-internal-wd-purple-1TB.jpg" style="width: 100%;" class="card-img-top" alt="a22 samsung">
                    <div class="card-body">
                        <h3 class="card-title">هارد اینترنال آبی وسترن با ظرفیت 1TB</h3>
                        <p class="card-text">1260000 تومان</p>
                        <a href="#" class="btn btn-success">اضافه به سبد خرید</a>
                    </div>
                </div>

            </div>

            <div style="margin: 25px 10px;" class="box col-sm-12 col-md-6 col-lg-4 col-xl-3">

                <div class="card" style="width: 22rem;">
                    <img src="../img/prods/a52s-5g-sm-2sim-256gb.jpg" style="width: 100%;" class="card-img-top" alt="a22 samsung">
                    <div class="card-body">
                        <h3 class="card-title">گوشی سامسونگ مدل galaxy A52s 256GB</h3>
                        <p class="card-text">12316000 تومان</p>
                        <a href="#" class="btn btn-success">اضافه به سبد خرید</a>
                    </div>
                </div>

            </div>

            <div style="margin: 25px 10px;" class="box col-sm-12 col-md-6 col-lg-4 col-xl-3">

                <div class="card" style="width: 22rem;">
                    <img src="../img/prods/dell-S2721HN-27inch.jpg" style="width: 100%;" class="card-img-top" alt="a22 samsung">
                    <div class="card-body">
                        <h3 class="card-title">مانیتور 27 اینچی dell مدل S2721HN</h3>
                        <p class="card-text">7238000 تومان</p>
                        <a href="#" class="btn btn-success">اضافه به سبد خرید</a>
                    </div>
                </div>

            </div>

            <div style="margin: 25px 10px;" class="box col-sm-12 col-md-6 col-lg-4 col-xl-3">

                <div class="card" style="width: 22rem;">
                    <img src="../img/prods/asus-m509ba-15.6in.jpg" style="width: 100%;" class="card-img-top" alt="a22 samsung">
                    <div class="card-body">
                        <h3 class="card-title">لپ تاپ 15.6 اینچی ایسوس مدل m509ba</h3>
                        <p class="card-text">12450000 تومان</p>
                        <a href="#" class="btn btn-success">اضافه به سبد خرید</a>
                    </div>
                </div>

            </div>

            <div style="margin: 25px 10px;" class="box col-sm-12 col-md-6 col-lg-4 col-xl-3">

                <div class="card" style="width: 22rem;">
                    <img src="../img/prods/handsferi-bluetuth-Cy-t5s-tws.jpg" style="width: 100%;" class="card-img-top" alt="a22 samsung">
                    <div class="card-body">
                        <h3 class="card-title">هندزفری بلوتوث مدل QCY t5s tws</h3>
                        <p class="card-text">528000 تومان</p>
                        <a href="#" class="btn btn-success">اضافه به سبد خرید</a>
                    </div>
                </div>

            </div>

            <div style="margin: 25px 10px;" class="box col-sm-12 col-md-6 col-lg-4 col-xl-3">

                <div class="card" style="width: 22rem;">
                    <img src="../img/prods/headset-unikoma-X20-7.1.jpg" style="width: 100%;" class="card-img-top" alt="a22 samsung">
                    <div class="card-body">
                        <h3 class="card-title">هدست گیمینگ اونیکوما مدل X20 7.1</h3>
                        <p class="card-text">891000 تومان</p>
                        <a href="#" class="btn btn-success">اضافه به سبد خرید</a>
                    </div>
                </div>

            </div>

        </div>
    </div>





    <!--  <div class="card" style="width: 22rem;">
        <img src="../img/prods/airdotspro.jpg" style="width: 100%;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>  -->








    <br><br>


    <!-- footer -->
    <?php include_once "../includes/footer.php"; ?>


    <!-- Attached files -->

    <script src="../js/jquery-3.5.1.min.js" defer></script>
    <script src="../js/bootstrap.min.js" defer></script>
    <script src="../js/Popper.js" defer></script>
    <script src="../fontawesome/js/all.min.js" defer></script>
    <script src="../fontawesome2/js/all.min.js" defer></script>


</body>

</html>