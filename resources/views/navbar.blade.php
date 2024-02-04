
<nav class="navbar p-0 fixed-top d-flex flex-row">
    
    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
      </button>

      <ul class="navbar-nav w-100">
        <li class="nav-item w-100" >
          <form action="{{ url('search') }}" method="GET" >
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Text Here..." name="search" style="background-color: aliceblue">
                
                    <button class="btn btn-primary" type="submit">
                      Search
                    </button>
                
            </div>
          </form>
        </li>
      </ul>
      <ul class="navbar-nav navbar-nav-right">

        <li class="nav-item dropdown d-none d-lg-block">
          <a class="nav-link btn btn-success create-new-button"  href="{{url( 'post_page' )}}">+ Upload New Material</a>
        </li>

        <li class="nav-item nav-settings d-none d-lg-block">
          <a class="nav-link" href="">
            <i class="mdi mdi-view-grid"></i>
          </a>
        </li>
       
        
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-format-line-spacing"></span>
      </button>
    </div>
  </nav>