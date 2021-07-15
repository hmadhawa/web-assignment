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
                <h1 class="topic" style="text-align: center">British-council</h1>
                <p style="text-align: center">Some inspiring quotes about education and learning to help start 2017 on the right foot!</p>
               

            </div>
      
            <div class="row">
                <div class="leftcolumn">
                  <div class="card">
                    <h2>Upcoming events</h2>
                    <h5>Going Global 2021,Dec 5, 2021</h5>
                    <div>
                    <img src="https://www.britishcouncil.org/sites/default/files/gg19_yp_panel.png" style="height:350px; width: 100%;">
                  </div>
                    <p>Due to the ongoing situation with Covid-19, the British Council made the difficult decision to cancel the 2021 Going Global conference which was due to take place on 29 – 30 June in London.  In the absence of a conference, we shared a limited amount of digital content throughout June and July to explore the theme 'Global learners, global innovation'.  This included blog posts, posters and live virtual events.</p>
                  </div>
                  <div class="card">
                    <h2>Past events</h2>
                    <h5>Examination,March 2, 2021</h5>
                    <div>
                    <img src="https://www.britishcouncil.org/sites/default/files/solas_banner_ourfuture2021_2.png" style="height:375px; width: 100%;">
                  </div>
                    <p>Our highly qualified English teachers are by your side and provide you with the right tools to help you interact confidently in the real world and achieve the professional and personal success you are working towards.</p>
                  </div>
                </div>
                <div class="rightcolumn">
                  <div class="card">
                    <h2>About Us</h2>
                    <div>
                     <img src="https://learnenglish.britishcouncil.org/sites/podcasts/files/image/weibo_LE_1280x729sc.jpg" style="height:200px; width: 100%;">
                  </div>
                    <p>Your safety is our priority, therefore we are here to provide you with all the support you need. All scheduled school exams are currently cancelled.  If you are a School Candidate, please contact your school for further details. .</p>
                  </div>
                  <div class="card">
                    <h3>Popular Post</h3>
                    <div>
                        <img src="https://www.britishcouncil.lk/sites/default/files/yl_online_1_002c.png" style="height:250px; width: 100%;"> 
                  </div>
              
                  </div>
                  <div class="card">
                    <h3>Follow Us</h3>
                    <p>Every year, two million people from 90 countries sit international exams through the British Council. Our globally recognised qualifications help students to attend the best universities, find amazing career opportunities and set themselves up for a more rewarding life.</p>
                     <p> Trusted by teachers, governments, employers and students, the British Council offers support and advice – and ensures the integrity of the exams system at every stage.</p>
                     <a href="www.britishcouncil.com">FACEBOOK</a>
                    </div>
                </div>
              </div>
        </div>
    </div>

@endsection
