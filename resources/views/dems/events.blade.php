<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DMA Events | Digital Marketing</title>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('css/events.css')}}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Custom JS -->
    <script defer src="{{asset('js/script.js')}}"></script>

</head>

<body>
    <!-- Container-Fluid-Start -->
    <div class="container-fluid">

        <!-- Navbar -->
        @include('dems.components.navbar')

        <!-- Events Heading -->
        <div class="row d-flex align-items-center justify-content-center pt-5 pb-5 events-wrapper">
            <div class="row col-11 events-in">
                <h6 class="pb-3">INDUSTRY EVENTS</h6>
                <h1 class="pb-2">Knowledge & Expertise</h1>
                <h5 class="pb-2">DMA remains on the cutting edge by attending strategic conference workshops.</h5>
                <div><button class="col-auto px-5 py-3">SCHEDULE A MEET</button></div>
            </div>
        </div>

        <!-- Events News -->

        <div class="row d-flex align-items-center justify-content-center pt-3 pb-5 events-news-wrapper">
            <div class="row col-11 text-center events-news-in">
                <p>There aren't any upcoming events.</p>
                <p>Subscribe to our newsletter so that you do not miss any chances.</p>
            </div>
        </div>

    </div>

    <!-- Container-Fluid-End -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-11 text-center my-3">
                <div style="color: skyblue;"><b>OUR SALES TEAM</b></div>
                <div>
                    <h2>We Are Available For You Every Time</h2>
                </div>
            </div>
            <div class="col-sm-11 mb-4" style="background-color: rgb(24, 30, 78);">
                <div class="row">
                    <div class="col-lg-6 p-3">
                        <h1 class="mt-5" style="font-size: 55px; font-weight: 700; color: white;">Book a meeting <br>
                            <span style="color: rgb(252, 194, 71);;">to get started</span>
                        </h1>
                        <p class=" mt-4 mb-5" style="color: white; font-size: 22px;">Speak to an expert to find out how
                            Digital Consumer Intelligence will change the way you work.</p>
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



    <!-- Bootstrap CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>