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
                <h1 class="topic" style="text-align: center">Peace Brigades International</h1>
                {{-- <p style="text-align: center">Working with UNICEF made me grow up and recognize how fortunate I am..</p> --}}

            </div>
      
            <div class="row">
                <div class="leftcolumn">
                  <div class="card">
                    <h2>Upcoming events</h2>
                    <h5>Nov 23, 2019</h5>
                    <div>
                   <img src="https://www.peacebrigades.org/sites/www.peacebrigades.org/files/pand5.png" style="height:250px; width: 100%;">
                    </div>
                    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                  </div>
                  <div class="card">
                    <h2>Past events</h2>
                    <h5>Feb 18, 2020</h5>
                    <div>
                     <img src="https://pbs.twimg.com/media/E3RCThLXMAEtnH5.jpg" style="height:400px; width: 100%;">
                    </div>
                    <p>The Agreement on Socioeconomic Aspects and the Agrarian Situation (1996) indicates that a firm and lasting peace must be founded on the basis of a socio-economic development oriented to the common good that responds to the needs of the entire population, in order to overcome situations of poverty. , extreme poverty, discrimination and social marginalization. The Peace Accords develop a set of guidelines to address the agrarian situation and rural development. There is talk of an objective of transforming the structure of land tenure and use.</p>
                  </div>
                </div>
                <div class="rightcolumn">
                  <div class="card">
                    <h2>About Us</h2>
                    <div>
                    <img src="https://assets.weforum.org/wp-content/uploads/2015/12/1512B18-human-rights-risk-index-map-2014-Syria-Sudan.png" style="height:300px; width: 100%;">
                    </div>
                    <p></p>
                  </div>
                  <div class="card">
                    <h3>Popular Post</h3>
                    <div>
                    <img src="https://p.kindpng.com/picc/s/219-2192214_youth-for-peace-international-hd-png-download.png" style="height:250px; width: 100%;">
                  </div>
                  </div>
                  <div class="card">
                    <h3>Follow Us</h3>
                    <p>“I arrived to PBI a long time ago and I pass by the house a lot to visit.  These visits give me strength to continue fighting for justice. I can honestly say that my experience with Peace Brigades International has been the most intense but fulfilling experience of my life, a never-ending journey of lessons learned, friendships made, happiness, hardships, journeys, projects, goals and changes.</p>
                  </div>
                </div>
              </div>
        </div>
    </div>

@endsection
