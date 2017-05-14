<!DOCTYPE html>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<html lang="ar">
     <head>
  @include('partials._head')
     </head>
     
     <body>
      @include('partials._nav') 

        <div class="container">

          @include('partials._messages')

         
          @yield ('content')

          @include('partials._contact')  

          @include('partials._footer')   


        </div>

        
    </body>
    </html>