<nav class="site-header home-header">
  <div class="navbar navbar-expand-lg navbar-dark py-0 px-lg-0" style="background-color: #111;">

    <button class="navbar-toggler my-3" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
      aria-expanded="false" aria-label="Toggle main navigation">
        <span class="navbar-toggler-icon"></span>
         Menu 
        </button>
    <button class="navbar-toggler my-3" type="button" data-toggle="collapse" data-target="#contactNavDropdown" aria-controls="contactNavDropdown"
      aria-expanded="false" aria-label="Toggle contact navigation">
        Contact 
        <span class="navbar-toggler-icon"></span>
      </button>

    <div class="collapse navbar-collapse justify-content-center align-items-center text-light flex-wrap" id="contactNavDropdown">
      <div class="contact navbar-nav w-100 justify-content-center ">
        <a class="mx-3 p-3 p-sm-1" href="tel:06-3490178">General Enquiries: (06) 349-0178</a>
        <a class="mx-3 p-3 p-sm-1" href="tel:06-349-0177">Attendance: (06) 349-0177</a>
        <a class="mx-3 p-3 p-sm-1" href="tel:+64-6-349-1181">International Enquiries: +64-6-349-1181</a>
        <a class="nav-item nav-link mx-3 p-3 p-sm-1" href="https://www.facebook.com/WhanganuiHigh/">Facebook</a>
        <a class="nav-item nav-link mx-3 p-3 p-sm-1 " href="https://www.youtube.com/WanganuiHigh/">Youtube</a>
        <a class="nav-item nav-link mx-3 p-3 p-sm-1 " href="https://twitter.com/whanganuihigh">Twitter</a>
      </div>

      <div class="navbar-nav">
        <a class="mx-3 p-3 p-sm-1 " href="https://library.whs.ac.nz">Library</a>
        <a class="mx-3 p-3 p-sm-1" href="/payments">Payments</a>
        <a class="mx-3 p-3 p-sm-1" href="/contact">Contact</a>
        <a class="mx-3 p-3 px-5 p-sm-1 px-md-3 bg-white text-dark" href="http://kamar.whs.ac.nz">Kamar</a>
      </div>
    </div>
  </div>

  <div class="navbar navbar-expand-lg navbar-light navbar-bg-light py-0" style="box-shadow: 0 -8px 8px -6px;">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav w-100 justify-content-center">
        <li class="nav-item dropdown px-3">
          <a class="mb-0 p-2 nav-link dropdown-toggle nav-item" href="/about-whs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              About WHS
            </a> @if($about)
          <div class="dropdown-menu">
            <a class="dropdown-item" href="/about-whs">About WHS</a> @foreach($about as $page)
            <a class="dropdown-item" href="{{$page->getPath()}}">{{$page->title}}</a> @endforeach
          </div>
          @endif
        </li>
        <li class="nav-item dropdown px-3">
          <a class="mb-0 p-2 nav-link dropdown-toggle nav-item" href="/for-parents" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              For Parents
            </a>
        </li>
        <li class="nav-item dropdown px-3">
          <a class="mb-0 p-2 nav-link dropdown-toggle nav-item" href="/curriculum" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Curriculum
            </a>
        </li>
        <li class="nav-item dropdown px-3">
          <a class="mb-0 p-2 nav-link dropdown-toggle nav-item" href="/news" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              News
            </a>
        </li>
        <li class="nav-item dropdown px-3">
          <a class="mb-0 p-2 nav-link dropdown-toggle nav-item" href="/international" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              International
            </a>
        </li>
      </ul>
    </div>
  </div>

</nav>