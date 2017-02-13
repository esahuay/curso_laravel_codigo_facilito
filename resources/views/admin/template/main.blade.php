<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default') | Panel de administracion</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css') }}">
</head>
<body class="admin-body">

      @include('admin.template.partials.nav')

      <section class="section-admin">
           <div class="panel panel-default">
               <div class="panel-heading">
                   <h3 class="panel-title">@yield('title')</h3>
      	       </div>
      	       <div class="panel-body">
      	         @include('flash::message')
                 @include('admin.template.partials.errors')
      	         @yield('content')
      	       </div>
      	   </div>      
      </section>
      
      <footer class="admin-footer">
         <nav class="navbar navbar-default">
             <div class="container-fluid">
             	<div class="collapse navbar-collapse">
             	    <p class="navbar-text">Todos los derechos reservados &copy {{ date('Y') }}</p>
             	    <p class="navbar-text navbar-right"><b>Codigo Facilito</b></p>
             	</div>
             </div>         	
         </nav>      	
      </footer>	

      <script src="{{ asset('plugins/jquery/js/jquery-3.1.1.js') }}"></script>
      <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
      <script src="{{ asset('plugins/chosen/chosen.jquery.js') }}"></script>

      @yield('js')

</body>
</html>
