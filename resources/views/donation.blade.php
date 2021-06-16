@extends('layouts.donationfrontend')
@section('content')

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="https://cdn.mos.cms.futurecdn.net/X8mQzyLT3D3Uw6ehLKyRnY.jpg"  alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>INTRODUCTION</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="https://images.sadhguru.org/sites/default/files/media_files/freaky-reasons-to-plant-trees.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>WHAT WE DO?</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="https://www.tropicalclimate.org/sri_lanka/drought/main_background/for_children/images/people%20facing%20drought.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>HOW TO CONTRIBUTE</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
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
    <h3 class="card-title">Donation Form</h3>
    
    <div class="testbox">
    <form>
      <div class="banner">
        <h1>Donation Form</h1>
      </div>
      <br/>
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
          <div class="item">
            <label for="address">Email Address<span>*</span></label>
            <input id="address" type="text"   name="address" />
          </div>
          <div class="item">
            <label for="phone">Phone Number</label>
            <input id="phone" type="tel"   name="phone"/>
          </div>
          <div class="item">
            <label for="saddress">Street Address</label>
            <input id="saddress" type="text"   name="city" />
          </div>
          <div class="item">
            <label for="city">City</label>
            <input id="city" type="text"   name="city" />
          </div>
          <div class="item">
            <label for="zip">Zip/Postal Code</label>
            <input id="zip" type="text"   name="zip" />
          </div>
          <div class="item">
            <label for="country">Country</label>
            <input id="country" type="text"   name="text" />
          </div>
      </fieldset>
      <br/>
      <fieldset>
      <legend>Donation Details</legend>
      <div class="colums">
      </div>
      <div class="checkbox">
      <p>May we thank you publicly?</p>
      <label><input type="checkbox"/>No, please keep my information anonymous
      </label>
      </div>
      <div class="item">
      <label for="amount">Donation Amount<span>*</span></label>
      <input id="amount" type="number"   name="amount" />
      </div>
      <div class="item">
      <label for="donation">Donation Comments</label>
      <textarea id="donation" rows="3"></textarea>
      </div>
      </fieldset>
      <div class="btn-block">
      <button type="order" href="/">Confirm Order</button>
      </div>
    </form>
    </div>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<br> 
<br> 

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Bank Details</h5>
    <h6 class="card-subtitle mb-2 text-muted">text</h6>
    <p class="card-text">Some 's content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>

@endsection