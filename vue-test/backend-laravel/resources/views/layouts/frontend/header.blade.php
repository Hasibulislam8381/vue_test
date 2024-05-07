 @php
     if (!isset($pagename)) {
         $pagename = '';
     }
 @endphp

 <!-- HEADER -->
 <div class="header header-1">

     <!-- TOPBAR -->


     <!-- NAVBAR SECTION -->
     <div class="navbar-main stiky mobile-nav" id="navbar-main">
         <div class="container-fluid">
             <nav id="navbar-example" class="navbar navbar-expand-lg">
                 <a class="navbar-brand" href="{{ route('index') }}">
                     <img style="padding-bottom: 10px;" src="{{ $generalInfo->logo }}" alt="">
                 </a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                     aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarNavDropdown">
                     <ul class="navbar-nav ml-auto">
                         <li class="nav-item  @if ($pagename == 'home') active @endif ">
                             <a class="nav-link " href="{{ route('index') }}" role="button" aria-haspopup="true"
                                 aria-expanded="false">
                                 Home
                             </a>

                         </li>
                         <li class="nav-item dropdown @if ($pagename == 'about') active @endif">
                             <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                 aria-haspopup="true" aria-expanded="false">
                                 About Us
                             </a>
                             <div class="dropdown-menu">
                                 {{-- 1st one is our story --}}
                                 <a class="dropdown-item" href="{{ route('about') }}">Our Story</a>
                                 <a class="dropdown-item" href="{{ route('mission-vision') }}">Mission,Vision &
                                     Value</a>
                                 <a class="dropdown-item" href="{{ route('board-of-member') }}">Board Of Director</a>
                                 <a class="dropdown-item" href="{{ route('our-client') }}">Our Client</a>
                             </div>
                         </li>
                         <li class="nav-item @if ($pagename == 'portfolio') active @endif">
                             <a class="nav-link " href="{{ route('all_projects') }}">Our Portfolio</a>
                         </li>
                         <li class="nav-item dropdown @if ($pagename == 'services') active @endif">
                             <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                 aria-haspopup="true" aria-expanded="false">
                                 Services
                             </a>
                             <div class="dropdown-menu">
                                 {{-- @if (is_array($services) || is_object($services))
                                     @foreach ($services as $service)
                                         @if (isset($service->slug))
                                             <a class="dropdown-item"
                                                 href="{{ route('services', $service->slug) }}">{{ $service->title }}</a>
                                         @endif
                                     @endforeach
                                 @else
                                     <p>No services available</p>
                                 @endif --}}

                                 @foreach ($serviceData as $sdata)
                                     <a class="dropdown-item"
                                         href="{{ route('services', $sdata->slug) }}">{{ $sdata->title }}</a>
                                 @endforeach
                             </div>
                         </li>


                         <li class="nav-item dropdown @if ($pagename == 'package_details') active @endif">
                             <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                 aria-haspopup="true" aria-expanded="false">
                                 Packages
                             </a>
                             <div class="dropdown-menu">
                                 @if ($PackagesDetails->count() > 0)
                                     @foreach ($PackagesDetails as $package)
                                         @if ($package->id == 1)
                                             <a class="dropdown-item"
                                                 href="{{ route('packages') }}">{{ $package->title }}</a>
                                         @else
                                             <a class="dropdown-item"
                                                 href="{{ route('package-details-dropdown', $package->slug) }}">{{ $package->title }}</a>
                                         @endif
                                     @endforeach
                                 @else
                                     <p>No packages available</p>
                                 @endif
                             </div>
                         </li>
                         <li class="nav-item @if ($pagename == 'blog') active @endif">
                             <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                         </li>
                         {{-- <li class="nav-item">
                             <a class="nav-link" href="services.html">Blogs</a>
                         </li> --}}

                         <li class="nav-item @if ($pagename == 'contact_us') active @endif">
                             <a class="nav-link" href="{{ route('contact-us') }}">Contact Us</a>
                         </li>
                     </ul>
                     <a href="{{ route('get-free-quote-form') }}"
                         class="btn btn-primary btn-nav ml-auto free-quote-btn quote_button_again">Get Free
                         Quote</a>
                 </div>
             </nav>
             <!-- End Navbar -->
         </div>
     </div>


 </div>
