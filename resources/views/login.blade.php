@extends('master');
@section("content")

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form>
                <div class="form-group">
                  <label for="InputEmail">E-mail address</label>
                  <input type="email" class="form-control" id="InputEmail">
                </div>
                <div class="form-group">
                  <label for="InputPassword">Password</label>
                  <input type="password" class="form-control" id="InputPassword">
                </div>
                <div class="rememberMe">
                    <label>
                      <input type="checkbox"> Remember Me
                    </label>
                  </div>
                <button type="login" class="btn btn-default">Login</button>
              </form>
        </div> 
    </div>
</div>


@endsection