@include('include/header');
<body>
    <div class="container-fluid position">
        <div class="row">
            <div class="col-lg-3 col-md-3"></div>
            <div class="col-lg-6 col-md-6 loginform">
                <div class="inloginbox">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 loginformleft">
                            <div class="textonly">
                                <h2 class="leftlogotext">WELCOME</h2>
                                <h3 class="lefttagline">Please Login to Access</h3>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 loginformright">
                            <h2 class="loginheading"><i>Login Here</i></h2>
                            <form method="post" action="{{URL::to('/valid')}}">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="erroruser"></label>
                                    <input type="email" class="form-control fas fa-user" id="iconified " name="username" aria-describedby="emailHelp" placeholder="&#xf007; Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="errorpass"></label>
                                    <input type="password" class="form-control fas fa-lock" name="password" id="exampleInputPassword1" placeholder="&#xf023; Password">
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" name="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <div class="submit-buttom">
                                    <button type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3"></div>
        </div>
    </div>
</body>
</html>
