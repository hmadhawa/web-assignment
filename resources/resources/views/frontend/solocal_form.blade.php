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
                <h1 class="topic" style="text-align: center">SOLOCAL</h1>
                {{-- <p style="text-align: center">Working with UNICEF made me grow up and recognize how fortunate I am..</p> --}}
           
                <p style="text-align: center">Solocal is the local, trusted, digital partner of all companies wishing to accelerate their growth.</p>
            </div>
            <div class="row">
                <div class="leftcolumn">
                  <div class="card">
                    <h2>Upcoming events</h2>
                    <h5> Aug 7, 2021</h5>
                    <div>
                    <img src="https://reader016.staticloud.net/reader016/html5/20181222/5444342bafaf9f9c098b4732/bg3.png" style="height:400px; width: 100%;">
                  </div>
                    <p>Prepared by Rangarajan Ramaswamy, PMP, PMI-SP, PMI-RMP Page 1 of 5 RANGAS 51 HOT TOPICS TO REMEMBER FOR RISK MANAGEMENT PROFESSIONAL (RMP) EXAM 1. A contingency plan is a planned action to be taken if a threat or an opportunity happens. A fallback plan is implemented if the contingency plan is not effective or fails. </p>
                  </div>
                  <div class="card">
                    <h2>Past events</h2>
                    <h5> De10 2, 2019</h5>
                    <div>
                    <img src="https://reader012.staticloud.net/reader012/html5/20190412/546d2181b4af9f702c8b52d6/bg2.png" style="height:420px; width: 100%;">
                    </div>
                    <p>The Digital Era : the growing influence of online on the path to purchase.</p>
                  </div>
                </div>
                <div class="rightcolumn">
                  <div class="card">
                    <h2>About Us</h2>
                    <div>
                    <img src="https://www.mdpi.com/jrfm/jrfm-14-00154/article_deploy/html/images/jrfm-14-00154-g001.png" style="height:300px; width: 100%;">
                  </div>
                    <p>Optimise energy consumption, use of resource and reduce the carbon impact for sustainable digitalisation.</p>
                  </div>
                  <div class="card">
                    <h3>Popular Post</h3>
                    <div>
                    <img src="https://images.squarespace-cdn.com/content/56053a09e4b0252146bb1eb3/1505506631002-CGDWP31NW3KHS7GGBAVZ/budget+guide+for+solo+female+travellers?content-type=image%2Fpng"style="height:400px; width: 100%;" >
                  </div>
                   
                  </div>
                  <div class="card">
                    <h3>Follow Us</h3>
                    <p>Solocal Group operates as a digital media company. The Company focuses on media with audiences, geolocated data, technological platforms, commercial coverage, partnerships with GAFAM, and numerous talents..</p>
                    <a href="www.solocal.com">FACEBOOK</a>
                  </div>
                </div>
              </div>
        </div>
    </div>

@endsection
