 <!-- Fonts -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
 <!-- Icons -->
 <link rel="stylesheet" href="{{ asset('vendor/nucleo/css/nucleo.css') }}" type="text/css">
 <link rel="stylesheet" href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
 <!-- Page plugins -->
 <!-- Argon CSS -->
 <link rel="stylesheet" href="{{ asset('css/argon.css?v=1.2.0') }}" type="text/css">
 <style>
     .breadcrumb-dark .breadcrumb-item a {
         color: #2b2c5ab0;
     }

     .breadcrumb-dark .breadcrumb-item.active {
         color: #2b2c5ab0;
     }

     .breadcrumb-dark .breadcrumb-item+.breadcrumb-item::before {
         color: #2b2c5ab0;
     }

     .footer .copyright {
         font-size: .8rem;
     }

     .main-content-height {
         min-height: 400px;
     }

 </style>
 @stack('css')
