@extends('frontend.layouts.app')
<style>
    * {
        box-sizing: border-box;
    }

    /* body {
            font-family: Arial;
            padding: 10px;
          
        } */

    /* Header/Blog Title */
    /* .header {
            padding: 30px;
            text-align: center;
            background: white;
        } */

    h1.topic {
        color: black;

        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        /* font-size: 50px; */
    }

    /* Style the top navigation bar */
    /* .topnav {
            overflow: hidden;
            background-color: rgb(6, 14, 128);
        } */

    /* Style the topnav links */
    /* .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        } */

    /* Change color on hover */
    /* .topnav a:hover {
            background-color: #ddd;
            color: black;
        } */

    /* Create two unequal columns that floats next to each other */
    /* Left column */
    .leftcolumn {
        float: left;
        width: 75%;
    }

    /* Right column */
    .rightcolumn {
        float: left;
        width: 25%;
        /* background-color: #000000; */
        padding-left: 20px;
    }

    /* Fake image */
    .fakeimg {
        background-color: #aaa;
        width: 100%;
        padding: 20px;
    }

    /* Add a card effect for articles */
    .card {
        background-color: rgb(132, 145, 165);
        padding: 20px;
        margin-top: 20px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Footer */
    .footer {
        padding: 20px;
        text-align: center;
        background: #ddd;
        margin-top: 20px;
    }

    /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 800px) {

        .leftcolumn,
        .rightcolumn {
            width: 100%;
            padding: 0;
        }
    }

    /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
    @media screen and (max-width: 400px) {
        .topnav a {
            float: none;
            width: 100%;
        }
    }

</style>

@section('content')

    {{-- <div class="header">
     
        <p>Resize the browser window to see the effect.</p>
    </div> --}}

    {{-- <div class="topnav">
        <a href="#">What we do</a>
        <a href="#">Take action</a>
        <a href="#">Donate</a>
    </div> --}}
    <div class="container" style="margin-top: 12%;">
        <div class="row">
            <div class="container">
                <h1 class="topic" style="text-align: center">UNICEF</h1>
                <p style="text-align: center">Working with UNICEF made me grow up and recognize how fortunate I am..</p>

            </div>
      
            <div class="row">
                <div class="leftcolumn">
                    <div class="card">
                        <h2>Upcoming events</h2>
                        <h5>July 17, 2021</h5>
                        <div>
                            <img src="https://looppacificassets.s3.amazonaws.com/thumbnails/image/global_day_of_parents.png"
                                style="height:400px; width: 100%;">
                        </div>
                        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco.</p>
                    </div>
                    <div class="card">
                        <h2>Past events</h2>
                        <h5>30th anniversary, Jan 21, 2019</h5>
                        <div>
                            <img src="https://www.unicef.org/tajikistan/sites/unicef.org.tajikistan/files/styles/hero_mobile/public/9_1.png"
                                style="height:400px; width: 100%;">
                        </div>
                        <p>In 2019, the 30th anniversary of the Convention on the Rights of the Child, UNICEF and partners
                            worked side by side with children and young people to overcome the obstacles that keep far too
                            many children from reaching their full potential. By the end of 2019, the mid-term mark of
                            UNICEF’s 2018–2021 Strategic Plan, 74 per cent of the targets set out were already achieved.</p>
                    </div>
                </div>
                <div class="rightcolumn">
                    <div class="card">
                        <h2>About Us</h2>
                        <div>
                            <img src="https://www.unicef.org/serbia/sites/unicef.org.serbia/files/styles/hero_mobile/public/2020-11/Better%20world%20za%20svako%20dete%20EN_0.png"
                                style="height:300px; width: 100%;">
                        </div>
                        <p>I believe deeply that children are more powerful than oil, more beautiful than rivers, more
                            precious than any other natural resource a country can have. ...</p>
                    </div>
                    <div class="card">
                        <h3>Popular Post</h3>
                        <div>
                            <img src="https://hindi.examsdaily.in/wp-content/uploads/2020/12/11-Deccember-2020-Current-Affairs.jpg"
                                style="height:300px; width: 100%;">
                        </div>
                    </div>
                    <div class="card">
                        <h3>Follow Us</h3>
                        <p>The cause of making the world a better place for children unites us all. ...</p>
                        <p>Children need champions. Get involved, speak out, volunteer, or become a donor and give every
                            child a fair chance to succeed.</p>
                        <p> Want to get in touch? Please reach out to the office nearest you.</p>

                        <a href="www.unicef.com">FACEBOOK</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
