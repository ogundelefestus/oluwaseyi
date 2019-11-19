 <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="{{route('product.index')}}">Fessystore</a>
                    </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    

                    <ul class="nav navbar-nav pull-right ">
                      
                       <li><i class="fas fa-shopping-cart"></i><a href="{{route('product.shoppingCart')}}">Shopping Cart<span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span></a></li>
                      
                    </ul>
                    
                    <ul class="nav navbar-nav navbar-right">
                      
                      <li class="dropdown"><i class="fas fa-user"></i>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User management <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          @if(Auth::check())
                           <li><a href="{{route('user.profile')}}">Profile</a></li>
                          
                           <li><a href="{{route('user.Logout')}}">Logout</a></li>
                          @else
                          <li><a href="{{route('register')}}">Register</a></li>
                          <li><a href="{{route('login')}}">Login</a></li>
                          @endif
                         
                  
                        </ul>
                      </li>
                    </ul>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
</nav>