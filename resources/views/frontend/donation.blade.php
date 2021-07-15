@extends('frontend.layouts.app')

<head>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="donation.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>

    <style>
    body {
        padding-top: 3rem;
        padding-bottom: 3rem;
        color: #5a5a5a;
        background-color: #DFEAE2;
    }
    </style>

</head>
@section('content')






<main role="main">

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" src="https://cdn.mos.cms.futurecdn.net/X8mQzyLT3D3Uw6ehLKyRnY.jpg"
                    alt="First slide">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <p><b>
                                <h2> INTRODUCTION </h2>
                            </b> </p>
                        <p>
                            <font color="FBFCFC "> You can help to restore the earth's climate by donating to our
                                trusted environmental projects.Show some love to our environment .Stand for what you
                                stand on.</font>
                        </p>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide"
                    src="https://images.sadhguru.org/sites/default/files/media_files/freaky-reasons-to-plant-trees.jpg"
                    alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <p><b>
                                <h2> WHAT WE DO? </h2>
                            </b> </p>
                        <p>We are here to add maximum value for your donation.Your donations will be sent directly to
                            the most trusted nature protection programs organized by the recognized organizations.</p>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide"
                    src="https://www.sustainability-times.com/wp-content/uploads/thumbs/hands-earth-next-generation-climate-protection-space-universe-responsibility-ethics-nature-conservation-3b7z1129ox94p9qxzrlam8.jpg">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <p><b>
                                <h2> HOW TO CONTRIBUTE </h2>
                            </b> </p>
                        <p>You also can help our fundraising programs.Deposit your donations in given bank accounts.We
                            can send that money to the trusted projects that are actively taking climate actions.Do not
                            miss this opportunity you get to become a nature hero..</p>

                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>




    <div class="card" style="width: 100%;">

        <div class="card-body">
            <br>
            <br>
            <h6>
                <p> It is our collective and individual responsibility to preserve and tend to the world in which we all
                    live.All must pay the debt of nature .Fill this form for the donations .</p>
                <p>Let s heal our world....</p>
            </h6>

            <div class="testbox">
                <form action="/submitdonation" method="POST">
                    @csrf
                    <div class="banner">
                        <h1>Donation Form</h1>
                    </div>
                    <br />
                    <fieldset>
                        <legend>Donation Form</legend>
                        <div class="colums">

                            <div class="item">
                                <label for="fname">First Name<span>*</span></label>
                                <input id="fname" type="text" name="fname" />
                            </div>
                            <div class="item">
                                <label for="lname"> Last Name<span>*</span></label>
                                <input id="lname" type="text" name="lname" />
                            </div>
                            <div class="form-group col-md-6" style="margin-left: -1%;">
                                <label for="company">Gender</label>
                                <select class="form-control" id="gender" name="gender">
                                    <option selected>Choose...</option>
                                    <option value="1"> Male</option>
                                    <option value="2"> Female</option>
                                    <option value="3"> Other</option>

                                </select>
                            </div>
                            {{-- <div class="form-group col-md-6">
                                    <label for="gender" class="gender">Gender</label>
                                    <br>
                                    <select class="form-select form-select-lg mb-3"  name="gender" id="gender">
                                        <option selected> Select</option>
                                        <option> Male</option>
                                        <option> Female</option>
                                        <option> Other</option>

                                    </select>
                                  
                                </div> --}}
                            <div class="item">
                                <label for="address">Email Address<span>*</span></label>
                                <input id="email" type="text" name="email" />
                            </div>
                            <div class="item">
                                <label for="phone">Phone Number</label>
                                <input id="phone" type="tel" name="phone" />
                            </div>
                            <div class="item">
                                <label for="address">Street Address</label>
                                <input id="address" type="text" name="address" />
                            </div>
                            <div class="item">
                                <label for="country">Country</label>
                                <input id="country" type="text" name="country" />
                            </div>
                            <div class="item">
                                <label for="date">Date</label>
                                <input type="date" id="date" name="date">
                            </div>

                    </fieldset>
                    <br />
                    <fieldset>
                        <legend>Donation Details</legend>
                        <div class="colums">
                        </div>
                        <div class="checkbox">
                            <p>May we thank you publicly?</p>
                            <label><input type="checkbox" />No, please keep my information anonymous
                            </label>
                        </div>

                        <div class="item">
                            <label for="amount">Donation Amount<span>*</span></label>
                            <input id="amount" type="number" name="amount" />
                        </div>
                        <div class="item">
                            <label for="comment">Donation Comments</label>
                            <textarea id="comment" rows="3" name="comment"></textarea>
                        </div>
                    </fieldset>
                    <div class="btn-block">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <br>
    <br>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Bank Details</h5>
            <h6 class="card-subtitle mb-2 text-muted">text</h6>
            <p class="card-text"></p>

        </div>
    </div>
    <br>
    <br>

    <script>
    $(document).ready(function() {
        $("form").submit(function(event) {
            var formData = {
                fname: $("#fname").val(),
                lname: $("#lname").val(),
                gender: $("#gender").val(),
                email: $("#email").val(),
                address: $("#address").val(),
                country: $("#country").val(),
                date: $("#date").val(),
                amount: $("#amount").val(),
                comment: $("#comment").val(),
            };

            $.ajax({
                type: "POST",
                url: "/submitdonation",
                data: {
                    "_token": "{{ csrf_token() }}",
                    formData,
                }
                dataType: "json",
                enctype: 'multipart/form-data',
                encode: true,
                contentType: false,
                cache: false,
            }).done(function(data) {
                console.log(data);
            });

            event.preventDefault();
        });
    });
    </script>



</main>

{{-- <script>
        window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script> --}}
<script src="{{ asset('frontend/assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../../../assets/js/vendor/holder.min.js"></script>



@endsection