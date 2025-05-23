   {{-- navbar start --}}

   <nav class="navbar navbar-expand-lg bg-body-tertiary">
       <div class="container-fluid">
           <a class="navbar-brand" href="{{ route('dashboard') }}">Ticles</a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
               aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                   <li class="nav-item">
                       <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">Home</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="#">API</a>
                   </li>

                   <li class="nav-item">
                       <a class="nav-link" href="{{ route('about') }}">About Us</a>
                   </li>
               </ul>
               <form class="d-flex">
                   <h5>Selamat datang, {{ Auth::user()->name }}</h5>
               </form>
           </div>
       </div>
   </nav>
   {{-- navbar ends --}}
