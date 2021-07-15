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
                <h1 class="topic" style="text-align: center">USAID</h1>
                <p style="text-align: center">No one in USAID embodied the spirit of compassion and brotherhood that
                    underpins our efforts more than Larry Foley.</p>


            </div>
            <div class="row">
                <div class="leftcolumn">
                    <div class="card">
                        <h2>Upcoming events</h2>
                        <h5>Title description, Sep 9, 2021</h5>
                        <div>
                            <img src="https://www.ictworks.org/wp-content/uploads/2019/03/usaid-agriculutre-contract.png"
                                style="height:300px; width: 100%;">
                        </div>
                        <p>Apply Now! $843 Million in USAID Funding for African Organizations</p>
                    </div>
                    <div class="card">
                        <h2>Past events</h2>
                        <h5>Title description, April 2, 2020</h5>
                        <div>
                            <img src="https://www.the961.com/wp-content/uploads/2020/11/USAID-Just-Launched-57-Million-Project-To-Support-Agri-Food-In-Lebanon.jpg"
                                style="height:200px; width:100%;">
                        </div>
                        <p>USAID Just Launched $57 Million Project To Support Agri-Food In Sri Lanka.</p>
                        <p>Hosted by the LAC Environment CCC learning group, this webinar initiated a conversation on
                            designing research to better understand and communicate about corruption in the natural resource
                            management sector. The Colombia Mission shared their experience working through an associate
                            award with the Targeting Natural Resource Corruption (TNRC) project to co-design and conduct a
                            corruption analysis with a consortium of partners.</p>
                    </div>
                </div>
                <div class="rightcolumn">
                    <div class="card">
                        <h2>About Us</h2>
                        <div>
                            <img src="https://cdn.statcdn.com/Statistic/325000/328232-blank-355.png"
                                style="height:200px; width: 100%;">
                        </div>
                        <p>I think we knew that this would be just like raising the kids together, this would be a fun thing
                            to do in partnership.</p>
                    </div>
                    <div class="card">
                        <h3>Popular Post</h3>
                        <div>
                            <img src="https://www.archivebay.com/archive/14213934-c11b-4d6d-ba17-bcd5ce18121d.png"
                                style="height:300px; width: 100%;">
                        </div>
                    </div>

                    <div class="card">
                        <h3>Follow Us</h3>
                        <p>The cause of making the world a better place for children unites us all. ...</p>
                        <a href="www.usaid.com">FACEBOOK</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
