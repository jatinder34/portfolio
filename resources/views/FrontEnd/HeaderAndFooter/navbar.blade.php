<div class="loader text-center">
        <img src="{{ URL::asset('assets/img/shot.gif') }}" alt="">
</div>
<!-- NAVBAR -->
<nav hidden>
        <div class="nav-header">
                <!-- Navbar Logo -->
                <a href="#" class="brand">
                        <img class="scrolled" src="assets/img/logo.png" alt="logo">
                        <img class="top" src="assets/img/logo-light.png" alt="logo-scrolled">
                </a>
                <!-- Burger Menu -->
                <button class="toggle-bar">
                        <span class="fa fa-bars"></span>
                </button>
        </div>
        <!-- Navbar Links -->
        <ul class="menu">
                <li class="scrollspy active"><a href="#home">Home</a></li>
                <li class="scrollspy"><a href="#about">About</a></li>
                <li class="scrollspy"><a href="#portfolio">Portfolio</a></li>
                <li class="scrollspy"><a href="#services">Service</a></li>
                <li class="scrollspy"><a href="#contact">Contact Us</a></li>
                <li class="scrollspy"><a href="#" data-toggle="modal" data-target="#loginregister">Login/Register</a></li>
        </ul>
</nav>
<!-- The Modal -->
<div class="modal fade" id="loginregister" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">                        
                        <!-- Modal body -->
                        <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <br>
                                <div class="container register">
                                        <div class="row">
                                                <div class="col-md-3 register-left">
                                                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                                                        <h3>Welcome</h3>
                                                        <p>You are 30 seconds away from earning your own money!</p>
                                                        <button type="submit" name="" id="login-tab" >Login</button><br/>
                                                </div>
                                                <div class="col-md-9 register-right">
                                                        <div id="myTabContent">
                                                                <div id="register">
                                                                        <h3 class="register-heading">Register as a Customer</h3>
                                                                        <div class="row register-form">
                                                                                <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                                <input type="text" class="form-control" placeholder="Name *" value="" id="name" name="firstname"/>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                                <input type="text" minlength="10" maxlength="10" name="phone" class="form-control" placeholder="Your Phone *" value="" id="phone"/>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                                <input type="password" class="form-control"  placeholder="Confirm Password *" value="" name="cpassword" id="cpassword"/>
                                                                                                <span class="errorMsg">Miss Match.</span>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                                <select class="form-control" id="state" name="state">
                                                                                                        <option class="hidden"  selected disabled>Please select State</option>
                                                                                                </select>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                                <div class="maxl">
                                                                                                        <label class="radio inline"> 
                                                                                                        <input type="radio" name="gender" value="male" checked>
                                                                                                        <span> Male </span> 
                                                                                                        </label>
                                                                                                        <label class="radio inline"> 
                                                                                                        <input type="radio" name="gender" value="female">
                                                                                                        <span>Female </span> 
                                                                                                        </label>
                                                                                                </div>
                                                                                        </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                        <div class="form-group">
                                                                                                <input type="email" name="email" id="email" class="form-control" placeholder="Your Email *" value="" />
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                                <input type="password" name="password" id="password" class="form-control" placeholder="Password *" value="" />
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                                <select class="form-control" id="country" name="country">
                                                                                                        <option class="hidden"  selected disabled>Please select Country</option>
                                                                                                        @foreach($countries as $country)
                                                                                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                                                                                        @endforeach
                                                                                                </select>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                                <select class="form-control" name="city" id="city">
                                                                                                        <option class="hidden"  selected disabled>Please select City</option>
                                                                                                </select>
                                                                                        </div>
                                                                                                <input type="submit" class="btnRegister"  value="Register"/>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <div id="login" style="display:none;">
                                                                        <h3 class="register-heading">Login as a Customer</h3>
                                                                        <div class="row register-form justify-content-md-center">
                                                                                <div class="col-md-auto">
                                                                                        <div class="form-group">
                                                                                                <input type="email" class="form-control" placeholder="Your Email *" value="" />
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                                <input type="password" class="form-control" placeholder="Password *" value="" />
                                                                                        </div>
                                                                                        <div class="form-group text-center">
                                                                                                <input type="submit" class="btnLogin"  value="Login"/>
                                                                                        </div>
                                                                                </div>
                                                                        
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                </div>
                        </div>                        
                </div>
        </div>
</div>