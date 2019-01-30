<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="images/logo.png" />
    <link rel = "stylesheet" type = "text/css" href = "{{ asset('css/styleoperator.css')}}" />



    <link rel = "stylesheet" type = "text/css" href = "{{ asset('css/styleform.css')}}" />
    <link href="{{ asset('css/simple-sidebar.css') }}" media="all" rel="stylesheet" type="text/css" />

    <title>@yield('title')</title>

</head>

<!-- <body>  -->
<body background="{{ asset('images/a5.jpeg')}}">


    <nav class="navbar navbar-expand-lg navbar-light fixd-top ">
        <div class="mr-auto col-sm-3 col-lg-2 col-xs-12">
            <img src="{{ asset('images/logo.png')}}"  width="205px" height="70px" alt="Responsive image" class="d-inline-block align-left">
        </div>
        <ul class="navbar-nav mr-auto mt-0 mt-lg-1">
            <h2 class=" font-weight-bold " style="margin-right:100px; color:#FFFFFF">ASPARAI<span style="margin-left:15px; margin-right:15px; ">REPAIR & MAINTENANCE SERVICE</span></h2>
        </ul>
    </nav>



    <section>
    <nav class="mango_bottom navbar navbar-expand-lg navbar-light " style=" background-color:#CCCCCC ;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mr-2" id="navbarTogglerDemo01">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active ml-3">
            <a class="nav-link" href="/operator" style="font-size: 18px"><b>Home </b><span class="sr-only">(current)</span></a>
        </li>
        </ul>

        <ul class="navbar-nav ml-auto mr-2">
            <li class="nav-item active dropdown ">
                <div class="container mr-5">
                    <a class="nav-link active dropdown-toggle" href="" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <b>{{ Auth::user()->fname }} </b><span class="caret"></span></a>
            
                    <div class="dropdown-menu navdropdown col-1 dropdown-menu-left " aria-labelledby="dropdown03">
                        <a class="dropdown-item" href="{{url('customerprofile')}}">Profile</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                        </form>
                    </div>
                </div>
            </li>
          
        </ul>
    </div>
    </nav>
    </section>


    <!-- Custom styles for this template -->
    <!-- <link href="css/simple-sidebar.css" rel="stylesheet"> -->

    <div id="wrapper">
        <!-- Sidebar -->
        <div class="sidebar-wrapper" >
            <ul class="sidebar-nav mt-3" >
                <li>
                    <a href="{{url('/custreg_operator/create')}}">Customer Registration</a>
                </li>

                <li>
                    <a href="{{url('/jobreq_operator/create')}}">Job Requests</a>
                </li>

                <li>
                    <a href="{{url('/buydetails_products/create')}}">Sold Product Details</a>
                </li>

               

                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Products</a>
                    <ul class="collapse list-unstyled ml-3" id="homeSubmenu">
                        <li>
                            <a href="{{url('/products')}}">Add Products</a>
                        </li>
                        <li>
                            <a href="{{url('/addproducts')}}">Add Product Types</a>
                        </li>
                        <li>
                            <a href="{{url('/product_parts')}}">Add Product Parts</a>
                        </li>
                        <li>
                            <a href="{{url('/addpart/create')}}">Inventory</a>
                        </li>
                    </ul>
                </li>

                 <li>
                    <a href="{{url('/technicians/create')}}">Technician Registration</a>
                </li>

               <!--  <li>
                    <a href="{{url('/addproducts')}}">Add Product Types</a>
                </li>

                <li>
                    <a href="{{url('/products')}}">Add Products</a>
                </li>

                <li>
                    <a href="{{url('/product_parts')}}">Add Product Parts</a>
                </li>  -->
               
            </ul>
        </div>

    </div>


 @yield('content')
 </body>

 <!-- jQuery CDN - Slim version (=without AJAX) -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <!-- Popper.JS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
 <!-- Bootstrap JS -->
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
 <!-- jQuery Custom Scroller CDN -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>


</html>
 

