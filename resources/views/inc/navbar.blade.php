<nav class="site-header sticky-top py-1">
      <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="/">
          logo
        </a>
        <a class="py-2 d-none d-md-inline-block {{Request::is('/') ? 'active' : ''}}" href="/">Home</a>
        <a class="py-2 d-none d-md-inline-block {{Request::is('about') ? 'active' : ''}}" href="/about">About</a>
        <a class="py-2 d-none d-md-inline-block {{Request::is('contact') ? 'active' : ''}}" href="/contact">Contact</a>
        
      </div>
    </nav>