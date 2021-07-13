@extends('frontend.layouts.app')



<head>


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/eco.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <style>


    </style>

</head>
@section('content')

    <main role="main">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: 9%;">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3" class="active"></li>

            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100"
                        src="https://www.stem.org.uk/sites/default/files/fieldable-panel-panes/rich-text/Climate%20change%20header.png"
                        alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100"
                        src="https://um.baden-wuerttemberg.de/fileadmin/_processed_/9/b/csm_Haende-halten-die-Erdkugel_ipopba_Fotolia_2434x1310_71a68f6659.jpg"
                        alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100"
                        src="https://www.qs.com/wp-content/uploads/2020/07/higher-education-climate-change.jpg"
                        alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100"
                        src="https://www.iceniprojects.com/wp-content/uploads/2019/06/We%E2%80%99ve-heard-plenty-of-rhetoric-surrounding-the-climate-emergency-but-where%E2%80%99s-the-action.png"
                        alt="Forth slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="album ">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="card border-white mb-3">
                            <h5 class="card-header">UNICEF</h5>
                            <div class="card-body">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img src="https://e7.pngegg.com/pngimages/989/708/png-clipart-unicef-logo-unicef-graphics-logo-invitational-banquet.png"
                                                style="width:100%;height:250px;" class="card-img-top" alt="UNICEF">
                                        </div>
                                        <div class="flip-card-back">

                                            <p>The impact of digital technologies (responsible for 4% of greenhouse
                                                gases) is approximately split into the production and consumption
                                                stages. At the consumption phase, 80% of its impact comes from video,
                                                which has a huge carbon footprint.The agency is among the most
                                                widespread and recognizable social welfare organizations in the world.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://www.unicef.org/srilanka" class="btn btn-outline-success  mx-2 my-2">
                                            View</a>
                                        <a href="/unicef_form" class="btn btn-outline-success mx-2 my-2">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card border-white mb-3">
                            <h5 class="card-header">SOLOCAL</h5>
                            <div class="card-body">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img src="https://static.wixstatic.com/media/9c3e51_73503a71674c4d0bb01693852b7860fc~mv2.png/v1/fill/w_289,h_199,al_c,q_90/file.jpg"
                                                style="width:100%; height:250px;" class="card-img-top" alt="solocal">
                                        </div>
                                        <div class="flip-card-back">
                                            <p>Since 2013, Solocal has been engaged in a corporate social responsibility
                                                strategy. In 2018, compliance with the European Directive on the
                                                Publication of Extra-Financial Information has led Solocal to re-examine
                                                its main CSR risks and opportunities in order to publish its Statement
                                                on Non-Financial Performance (SNFP).</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://www.solocal.com/" class="btn btn-outline-success mx-2 my-2">View</a>
                                        <a href="/solocal_form" class="btn btn-outline-success mx-2 my-2">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-white mb-3">
                            <h5 class="card-header">The British Council</h5>
                            <div class="card-body">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img src="https://cdn.freebiesupply.com/logos/thumbs/2x/british-council-1-logo.png"
                                                style="width:100%; height:250px;" class="card-img-top"
                                                alt="british-council">
                                        </div>
                                        <div class="flip-card-back">
                                            <p>The British Council builds connections, understanding and trust between
                                                people in the UK and other countries through arts and culture, education
                                                and the English language. ..Our work in arts and culture stimulates
                                                creative expression and exchange and nurtures creative enterprise.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://www.britishcouncil.lk/" class="btn btn-outline-success mx-2 my-2">View</a>
                                        <a href="/bc_form" class="btn btn-outline-success mx-2 my-2">Edit</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-white mb-3">
                            <h5 class="card-header">Asia Foundation</h5>
                            <div class="card-body">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img src="https://pbs.twimg.com/profile_images/803961894486888448/noMrOXzj.jpg"
                                            style="width:100%;height:250px;" class="card-img-top" alt="asiafoundation">
                                        
                                        </div>
                                        <div class="flip-card-back">
                                            <p>The Asia Foundation is a nonprofit international development organization
                                                committed to improving lives across a dynamic and developing Asia.
                                                Informed by six decades of experience and deep local expertise, our work
                                                across the region addresses five overarching goals—strengthen
                                                governance, empower women, expand economic opportunity, increase
                                                environmental resilience, and promote international cooperation.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://asiafoundation.org/where-we-work/sri-lanka/"
                                            class="btn btn-outline-success mx-2 my-2">View</a>
                                            <a href="/af_form" class="btn btn-outline-success mx-2 my-2">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-white mb-3">
                            <h5 class="card-header">USAID</h5>
                            <div class="card-body">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img src="https://www.pikpng.com/pngl/m/495-4958147_usaid-logo-png-transparent-png-logo-de-usaid.png"
                                                style="width:100%; height:250px;" class="card-img-top" alt="USAID">
                                        </div>
                                        <div class="flip-card-back">
                                            <p>USAID transforms. It transforms families, communities, and countries – so
                                                they can thrive and prosper. Whether by preventing the next global
                                                epidemic, responding to a devastating earthquake, or helping a farmer
                                                access tools to grow her business.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://www.usaid.gov/sri-lanka" class="btn btn-outline-success mx-2 my-2">View</a>
                                        <a href="/usaid_form" class="btn btn-outline-success mx-2 my-2">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card border-white mb-3">
                            <h5 class="card-header">Peace Brigades International</h5>
                            <div class="card-body">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img src="https://betterplace-assets.betterplace.org/uploads/organisation/profile_picture/000/001/495/fill_200x200_bp1581590941_pbi_claim.jpg"
                                                style="width:100%; height:250px;" class="card-img-top"
                                                alt="peace brigades international">
                                        </div>
                                        <div class="flip-card-back">

                                            <p>Human rights defenders- courageous people who stand up for the rights and
                                                dignity of their communities because they believe in peace and justice
                                                for all are at the heart of all we do. We use our international presence
                                                and global networks to protect,support and enable the work of human
                                                rights defenders are at the heart of all we do at PBI.local activists
                                                for peaceful social change.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="https://www.peacebrigades.org/" class="btn btn-outline-success mx-2 my-2">View</a>
                                        <a href="/pbi_form" class="btn btn-outline-success mx-2 my-2">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>

@endsection
