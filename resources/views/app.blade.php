<!DOCTYPE html>
<html lang="en">

  <head>

  @include('user/layouts/head')
    
  </head>

  <body>
  	<div id="fb-root"></div>

    @include('user/layouts/nav')

    @section('main-content')

    @show	

	@include('user/layouts/footer')    

  </body>

</html>
