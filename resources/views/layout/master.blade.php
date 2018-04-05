<!DOCTYPE html>
<html class="no-focus"> 
    <head>
   @include("layout.header")
      
    </head>
    <body>
        @include("layout.menu")
 	 <main id="main-container">

        <!-- Page Content -->
        <div class="content">
        <div class="row">
        @yield('content')
        </div>
      
        </div>
    </main>    
        @include("layout.footer")
       
    </body>
</html>