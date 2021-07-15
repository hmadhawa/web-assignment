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

    h1.topic{
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
    <div class="container" style="margin-top: 12%;" >
        <div class="row">
            <div class="container">
            <h1 class="topic" style="text-align: center">Asia Foundation</h1></div>
            <div class="row">
                <div class="leftcolumn">
                    <div class="card">
                        <h2>Upcoming events</h2>
                        <h5> Facing for the Covid-Related Challenges,June 30, 2021</h5>
                        <div>
                            <img src="https://asiafoundation.org/wp-content/uploads/2016/04/MicronesiaIslands-400x250.jpg"
                                style="height:300px; width: 100%;">
                        </div>
                        <p>Addressing the Covid-Related Challenges Facing the Pacific Islands.</p>
                        <p>While swift measures on border control taken by Pacific Island governments to contain the spread
                            of
                            Covid-19 spared the region a health crisis on the scale faced in other parts of the world, the
                            social and economic implications of the pandemic have been catastrophic for the region’s fragile
                            economies..</p>
                    </div>
                    <div class="card">
                        <h2>Past events</h2>
                        <h5>Covid-19-and-the-Indian-Platform, Oct 27, 2020</h5>
                        <div>
                            <img src="https://asiafoundation.org/wp-content/uploads/2020/06/Covid-19-and-the-Indian-Platform-Economy_thumb.jpg"
                                style="height:400px; width: 100%;">I
                        </div>
                        <p>The growing platform-based economy greatly benefited India’s youth who looking for work in urban
                            areas. This sector has been particularly attractive for women, though they still face many
                            uncertainties and challenges. How has women’s participation and benefit from this sector changed
                            in
                            light of the Covid-19 pandemic? In this new normal, is there still room for women gig workers?
                        </p>
                    </div>
                </div>
                <div class="rightcolumn">
                    <div class="card">
                        <h2>About Us</h2>
                        <div>
                            <img src="https://assets.pewresearch.org/wp-content/uploads/sites/14/2016/11/17123925/PI_2016.11.17_Gig-Workers_0-03.png"
                                style="height:400px; width: 100%;">
                        </div>
                        <p></p>
                    </div>
                    <div class="card">
                        <h3>Popular Post</h3>
                        <div>
                            <img src="https://connected2work.org/wp-content/uploads/2020/08/Screen-Shot-2020-08-13-at-3.14.44-PM.png"
                                style="height:400px; width: 100%;">
                        </div>

                    </div>
                    <div class="card">
                        <h3>Follow US</h3>
                        <p>InAsia is a weekly in-depth, in-country resource for readers who want to stay abreast of
                            significant
                            events and issues shaping Asia’s development, hosted by The Asia Foundation. </p>
                        <a href="www.asiafoundation.com">FACEBOOK</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
