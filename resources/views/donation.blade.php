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
            <img class="first-slide" src="C:\wathsala\NSBM\MIS\year 1\Semester 2\web app dev\cat.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>One more for good measure.</h1>
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


      

<div class="card" style="width: 30rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="card-title">Donation Form</h3>
    
    <form method="post" action="{{ route('posts.store') }}">
                        @csrf
                        
           
            
            <pre  style="font-family:Bold italic; ">
               
    Owner Name   <input type= "text" name="fname" placeholder="Owner Name"> <br>
    Email        <input type="email" name="email" placeholder="email"> <br>
    Phone        <input type="text" name="phone" placeholder="+94 7********"> <br> 
    Purpose      <select>
        <option value= "">a</option>
        <option>b</option>
        <option>sssss</option>
        <option>a</option>
    </select> <br>
    Suggetions    <input type="text" name=""> <br>
    Donating date <input type="date" name=""> <br>
    Donate type <input type="radio" name="transmission"> aa   <input type="radio" name="transmission"> bb
    <br>
    Other        <textarea> </textarea>
    <br>
    <input type="checkbox" name="" >I agree to the terms and conditions
    <br>
    <input type="submit" name="" value="Submit"> <input type="reset" name="" value="Reset">
  


</pre>

</fieldset>
</form>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

@endsection