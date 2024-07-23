


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('admin/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <title>loguin-admin</title>

    <style>

        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            position: relative;
            font-family: 'Times New Roman', Times, serif;
            font-size: 20px;
            font-weight: 500;
            
        }

        .video_fondo{
            position: absolute;
            top: 0;
            left: 0;
        }

        .card , .card-body{
            background-color: rgba(255, 255, 255, 0.062);
            background-clip: padding-box;
            border: 10px solid rgba(255, 255, 255, 0.212);
            color: white;
            
        }

    </style>
</head>
<body style="height: 100vh ; overflow: hidden " class="row  justify-content-center align-items-center">
 
          <div class="video_fondo">
            <video  autoplay muted loop>
                <source  src="{{asset('fondo_animado.mp4')}}" type="video/mp4">
            </video>
          </div>
                <div class="col-12 col-md-6 ">
                    <div class="card">
                        <div class="card-header">{{ __('admin') }}</div>
        
                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.login.submit') }}">
                                @csrf
        
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
        
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
          
      



    <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.min.js') }}" ></script>
       
    
</body>
</html>