<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="\css\login-register.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js">
<title>{{ trans('registerPage.title') }}</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row no-gutter">
          <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
          <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
              <div class="container">
                <div class="row">
                  <div class="col-md-9 col-lg-8 mx-auto">
                    <h3 class="login-heading mb-4">{{ trans('registerPage.heading') }}</h3>
                    <form method="POST" action="{{ route('register') }}">
                      @csrf
                        <div class="form-label-group">
                            <input type="name" id="inputName" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                             @enderror

                            <label for="inputName">{{ trans('registerPage.name') }}</label>
                        </div>
                      <div class="form-label-group">
                        <input type="email" id="inputEmail" placeholder="{{ trans('login-page.email') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                          @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                          @enderror
                        <label for="inputEmail">{{ trans('login-page.email') }}</label>
                      </div>
                      <div class="form-label-group">
                        <input type="password" id="inputPassword" placeholder="{{ trans('login-page.password') }}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                          @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                          @enderror
                        <label for="inputPassword">{{ trans('login-page.password') }}</label>
                      </div>
                      <div class="form-label-group">
                        <input type="password" id="confirmPassword" placeholder="{{ trans('registerPage.confirm') }}" 
                        class="form-control" name="password_confirmation" required autocomplete="new-password">
                        <label for="confirmPassword">{{ trans('registerPage.confirm') }}</label>
                      </div>
                      <div>
                      <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">{{ trans('registerPage.register') }}</button>
                    </div>
                    <div class="text-center">
                        <a class="small" href="/sign-in">{{ trans('registerPage.login') }}</a></div>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>