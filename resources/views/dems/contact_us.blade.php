<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DMA</title>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <!-- industries CSS -->
    <link rel="stylesheet" href="{{asset('css/industries.css')}}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Favicon  -->
    <link rel="shortcut icon" href="{{asset('images/favicon-logo.png')}}" type="image/x-icon">

</head>

<body>
    <!-- Container-Fluid-Start -->
    <div class="container-fluid">

        <!-- Navbar -->

        @include('dems.components.navbar')

        <!-- LC Main Section -->

        <div class="row luxury-top-main pt-5 pb-5 d-flex align-items-center justify-content-center">



            <div class="col-md-6  col-11 luxury-in-2 d-flex align-items-end justify-content-center mt-3">
                <div class="row col-lg-12 luxury-in-2-text">
                    <h6 class="" id="SUB-TEXT">CONTACT US</h6>
                    <h1 class="pb-lg-4 pb-2">Connect with us.</h1>
                    <p id="SUB-PARA">Our digital marketing team is always ready to help. Give us a call, send us an email, or fill out the form below.</p>
                    <h2><i class="bi bi-geo-alt-fill"></i> &nbsp;OFFICE ADDRESS </h2>
                    <p>Jail Road, Lahore</p>
                    <h2><i class="bi bi-telephone"></i> &nbsp;PHONE NUMBER </h2>
                    <p>+1-800-569-2754</p>
                    <h2><i class="bi bi-envelope"></i> &nbsp;EMAIL US </h2>
                    <p>sales@digitalmarketingagency.com</p>

                </div>

            </div>

            <div class="col-md-5 col-11 luxury-in-3 d-flex align-items-center justify-content-center mt-3">

                <!-- Form-Main-Row -->
                <div class="row col-12 mb-5">

                    <!-- Form-Row-1 -->
                    <div class="row pb-4 f-r-1">
                        <h6>REQUEST A QUOTE &nbsp; <span>(Its fast, Easy & free)</span></h6>
                    </div>
                    <!-- Form-Row-2 -->
                    <div class="row pb-4 f-r-2">
                        <div class="col-lg-6 col-12">
                            <label class="">Name*</label>
                            <input type="text" class="col-12 p-2" placeholder="NAME">
                        </div>
                        <div class="col-lg-6 col-12 responsive-item">
                            <label class="">Website*</label>
                            <input type="url" class="col-12 p-2" placeholder="URL">
                        </div>
                    </div>
                    <!-- Form-Row-3 -->
                    <div class="row pb-lg-5 f-r-3">
                        <div class="col-lg-6 col-12">
                            <label class="">Email*</label>
                            <input type="email" class="col-12 p-2" placeholder="your_mail@gmail.com">
                        </div>
                        <div class="col-lg-6 col-12 responsive-item">
                            <label class="">Phone Number*</label>
                            <input type="tel" class="col-12 p-2" placeholder="YOUR NUMBER">
                        </div>
                    </div>
                    <!-- Form-Row-4 -->
                    <div class="row pb-5 f-r-4">
                        <div class="col-lg-6">
                            <select class="col-12 p-2">
                                <option>Budget</option>
                                <option value="1">Less than %5,000/month</option>
                                <option value="2">$5,000-$10,000/month</option>
                                <option value="3">$10,000-$20,000/month</option>
                                <option value="3">More than $20,000+/month</option>
                            </select>
                        </div>
                        <div class="col-lg-6 responsive-item">
                            <select class="col-12 p-2">
                                <option>Best Start Date</option>
                                <option value="1">Immediately</option>
                                <option value="2">1-4 Weeks</option>
                                <option value="3">1-2 Months</option>
                                <option value="3">2-4 Months</option>
                                <option value="3">4-6 Months</option>
                                <option value="3">Not Sure Yet</option>
                            </select>
                        </div>
                    </div>
                    <!-- Form-Row-5 -->
                    <div class="row f-r-5 d-flex align-items-center justify-content-center pt-3">
                        <button class="col-auto px-5 py-3">GET A FREE QUOTE</button>
                    </div>

                </div>

            </div>

        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <iframe class="map px-5 pt-5" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13602.416431111427!2d74.3469698!3d31.5350316!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391904ef575fdb87%3A0x50e89ba5e8d171ed!2sRafi%20Group%20Landmark%20Plaza!5e0!3m2!1sen!2s!4v1698661369262!5m2!1sen!2s" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="width:100%;height:100vh"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-11 text-center my-3">.
            </div>
            <div class="col-sm-11 mb-4" style="background-color: rgb(24, 30, 78);">
                <div class="row">
                    <div class="col-lg-6 p-3">
                        <h1 class="mt-5" style="font-size: 55px; font-weight: 700; color: white;">Book a meeting <br>
                            <span style="color: rgb(252, 194, 71);;">to get started</span>
                        </h1>
                        <p class=" mt-4 mb-5" style="color: white; font-size: 22px;">Speak to an expert to find out how Digital Consumer Intelligence will change the way you work.</p>
                        <span id="BOOK"><b>Book a Meeting</b></span>
                    </div>
                    <div class="col-lg-6 p-0 m-0">
                        <img class="img-fluid" src="{{asset('images/unsplash_qCi_MzVODoU__1_.webp')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    @include('dems.components.footer')

    <script src="script.js"></script>

    <!-- Bootstrap CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>