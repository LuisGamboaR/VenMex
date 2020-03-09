<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/font.css') }}">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!--DATATABLE CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/pages/data-table/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
<!--    Menu       -->
@include ('partials/admin/sidebar')


<!--    Menu lateral    -->



<!--    Contenido editable    -->

     @yield('content')




  <!-- Jquery JS-->

    <!-- JavaScript files-->
    <script src="{{ asset('assets/admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ asset('assets/admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>

    <script src="{{ asset('assets/admin/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/front.js') }}"></script>
    
    <script type="text/javascript" src="{{ asset('assets/admin/jquery-validate/jqueryValidate.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/admin/jquery-validate/additional-methods.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/admin/validaciones.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/admin/fontawesome.js') }}"></script>

<!-- DATATABLE JS-->
<script src="{{ asset('assets\admin\bower_components\datatables.net\js\jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets\admin\bower_components\datatables.net-buttons\js\dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets\admin\assets\pages\data-table\js\jszip.min.js') }}"></script>
<script src="{{ asset('assets\admin\assets\pages\data-table\js\pdfmake.min.js') }}"></script>
<script src="{{ asset('assets\admin\assets\pages\data-table\js\vfs_fonts.js') }}"></script>
<script src="{{ asset('assets\admin\bower_components\datatables.net-buttons\js\buttons.print.min.js') }}"></script>
<script src="{{ asset('assets\admin\bower_components\datatables.net-buttons\js\buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets\admin\bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets\admin\bower_components\datatables.net-responsive\js\dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets\admin\bower_components\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.') }}js"></script>
  



  </body>
</html>



    



<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
   <script>
    $("#seeAnotherField").change(function () {
        if ($(this).val() == "yes") {
            $('#otherFieldDiv').show();
            $('#otherFieldDiv2').hide();

        } else {
            $('#otherFieldDiv').hide();
            $('#otherFieldDiv2').show();
        }
    });
    $("#seeAnotherField").trigger("change");

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

    $('#simpletable').DataTable({
    language: {
    "decimal": "",
    "emptyTable": "No hay información",
    "info": "Mostrando la página _PAGE_ de _PAGES_",
    "infoEmpty": "Mostrando 0 de 0 Entradas",
    "infoFiltered": "(Filtrado de _MAX_ total entradas)",
    "infoPostFix": "",
    "thousands": ",",
    "lengthMenu": "Mostrar _MENU_ Entradas",
    "loadingRecords": "Cargando...",
    "processing": "Procesando...",
    "search": "Buscar:",
    "zeroRecords": "Sin resultados encontrados",
    "paginate": {
        "first": "Primero",
        "last": "Ultimo",
        "next": "Siguiente",
        "previous": "Anterior"
      }
    }

});

</script>

    @include('sweetalert::alert')
    @yield('script')

    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

</body>

</html>