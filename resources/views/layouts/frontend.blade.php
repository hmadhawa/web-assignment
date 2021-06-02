<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body>
	
    <!-- about section start -->
    <div class="about_section_2 layout_padding">
        <div class="container">
            <h1 class="about_text_2"><strong>BLOG</strong></h1>
        </div>
    </div>
    
    @yield('content')

    <!-- about section end -->

   <script>
    function openNav() {
    document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
   document.getElementById("myNav").style.width = "0%";
   }
</script>



     
</body>
</html>    