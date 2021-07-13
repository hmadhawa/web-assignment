<!DOCTYPE html>
<html lang="en">

    <head>
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
      
        @include('frontend.layouts.header')
    
    </head>

<body>
  
 
         <!-- BEGIN NAVBAR  -->
        @include('frontend.layouts.topnav')
        <!--  END NAVBAR  -->

        
       
         <!--  BEGIN CONTENT AREA  -->
        @yield('content')
       


        {{-- FOOTER AREA --}}
         @include('frontend.layouts.footer')
    
        {{-- SCRIPT AREA --}}
        @include('frontend.layouts.scripts')

        
    
</body>



</html>