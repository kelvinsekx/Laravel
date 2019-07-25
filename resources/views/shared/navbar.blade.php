<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="#">LELIAN</a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
 </button>

 <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <!-- Left Side Of Navbar -->
   <ul class="navbar-nav mr-auto">
     <li class="nav-item {{Request::is('/') ? 'active' : ""}}">
       <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
     </li>
     <li class="nav-item {{Request::is('contact') ? 'active' : ""}}">
       <a class="nav-link" href="/contact">Register A new Ticket</a>
     </li>
     <li class="nav-item {{Request::is('tickets') ? 'active' : ""}}">
       <a class="nav-link" href="/tickets">All Tickets</a>
     </li>

     <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About LELIAN</a>
       <div class="dropdown-menu" aria-labelledby="dropdown01">
         <a class="dropdown-item" href="#">Vision</a>
         <a class="dropdown-item" href="#">Mission</a>
         <a class="dropdown-item" href="#">Core Values</a>
       </div>
     </li>

   </ul>

   <!-- <form class="form-inline my-2 my-lg-0">
     <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
     <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
   </form> -->
   <!-- Right Side Of Navbar -->
   <ul class="navbar-nav ml-auto">
     <li class="nav-item {{Request::is('blog') ? 'active' : ""}} forest">
       <a class="nav-link forest" href="/blog">Blog</a>
     </li>
       <!-- Authentication Links -->
       @guest
       <li class="nav-item dropdown">
         <a id="navbarDropdown" class="nav-link dropdown-toggle mamber" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
             Member
         </a>
         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>

           @if (Route::has('register'))
               <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
           @endif
         </div>
       </li>
       @else
           <li class="nav-item dropdown">
               <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                   {{ Auth::user()->name }} <span class="caret"></span>
               </a>

               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                 @if(Auth::user()->hasRole('Admin'))
                  <a class="dropdown-item" href="/admin">Admin</a>
                 @endif
                   <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                       {{ __('Logout') }}
                   </a>


                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                       @csrf
                   </form>
               </div>
           </li>
       @endguest
   </ul>
 </div>
</nav>
