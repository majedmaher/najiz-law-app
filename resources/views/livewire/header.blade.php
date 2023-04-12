<div>
    <div class="header position-fixed container">
        <nav
          class="nav-header h-100 d-flex flex-wrap justify-content-between align-items-center"
        >
        <div class="menu-box cursor-pointer d-none{{$menuIsOpen ? ' active' : ''}}" wire:click='clickMenu'>
          <span for='menu-toggle' class="menu-icon d-flex align-items-center w-100 h-100">
            <div class="menu-button"></div>
          </span>
        </div>
          <div class="nav-logo">
            <a href="#main" class="d-flex" rel="noopener noreferrer">
              <img
                class="transition-duration-500 cursor-pointer"
                src="{{asset($logo)}}"
                alt="logo"
                width="80"
                height="50"
                loading="lazy"
              />
            </a>
          </div>
  
          <div wire:click='clickMenu' class="nav-content d-flex gap-10 md-flex-column {{$menuIsOpen ? 'active' : ''}}">
            <a
              class="nav-link transition-duration-500"
              href="#"
              rel="noopener noreferrer"
              >{{__('main.main')}}</a
            >
            
            <a
            class="nav-link transition-duration-500"
            href="#about-us"
            rel="noopener noreferrer"
            >{{__('main.who are we')}}</a
            >

            <a
            class="nav-link transition-duration-500"
            href="#services"
            rel="noopener noreferrer"
            >{{__('main.our services')}}</a
            >

            <a
            class="nav-link transition-duration-500"
            href="#clients"
            rel="noopener noreferrer"
            >{{__('main.some of our clients')}}</a
            >

            <a
            class="nav-link transition-duration-500"
            href="#license"
            rel="noopener noreferrer"
            >{{__('main.licenses and credits')}}</a
            >

          </div>
        </nav>
      </div>
  
</div>
