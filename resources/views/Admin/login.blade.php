<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <link rel="icon" type="image/png" href="uploads/favicon.png">

    <title>Admin Panel</title>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">

   @include('Admin.layout.styles')

  @include('Admin.layout.scripts')
</head>

<body>
<div id="app">
    <div class="main-wrapper">
        <section class="section">
            <div class="container container-login">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="card card-primary border-box">
                            <div class="card-header card-header-auth">
                                <h4 class="text-center">Section D'administration</h4>

                                @if(session()->get('error'))
                                      <div class="alert alert-danger">{{ session()->get('error') }}</div>
                                @endif

                            </div>
                            <div class="card-body card-body-auth">
                                <form method="POST" action="{{ route('admin_login_submit') }}">
                                   @csrf

                                    <div class="form-group">
                                        <input type="email" class="form-control @error('email') is-invalid  @enderror " name="email" value="{{ old('email') }}" placeholder="Veuillez Entrer votre adresse mail" value="" autofocus>

                                    @error('email')

                                       <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    </div>


                                    <div class="form-group">
                                        <input type="password" class="form-control @error('password') is-invalid  @enderror" name="password" value="{{ old('password') }}"  placeholder="Veuillez Entrer votre mot de passe">
                                    @error('password')

                                       <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    </div>


                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Se Connecter
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <a href="{{ route('admin_forget_password') }}">
                                                Mot de passe oublié?
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@include('Admin.layout.scripts_footer')

</body>
</html>
