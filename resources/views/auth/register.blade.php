<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diphideo &mdash; Digital Photo & Video</title>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/iofrm-style.css">
</head>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="/">
                <h2>Diphideo</h2>
                <!--<div class="logo">
                    <img class="logo-size" src="images/logo-light.svg" alt="">
                </div>-->
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">

                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Digital Photo & Video Sharing</h3>
                        <p></p>
                        <div class="page-links">
                            <a href="{{ route('login') }}">Login</a><a href="{{ route('register') }}" class="active">Register</a>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full Name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail Address">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                            <!--
                            <input class="form-control" type="text" name="agent_id" placeholder="Agent ID" required>
                            <input class="form-control" min="1" type="number" name="con_limit" placeholder="Concurrent Limit" step="1" required>
                            <input class="form-control gallery" min="0" max='1' type="number" name="gallery" placeholder="Gallery Included" required>
                            <input class="form-control" type="number" min="1" name="cameras" placeholder="Total Cameras" step="1" required>
                            <select class="form-control subs" type="text" name="subs_type" required>
                                <option disabled selected>&nbspSubscription Type</option>
                                <option value='Trial'>Trial</option>
                                <option value='Monthly'>Monthly</option>
                                <option value='Yearly'>Yearly</option>
                                <option value='Lifetime'>Lifetime</option>
                            </select>-->
                            <div class="form-button">
                                <button id="submit" name="submit" type="submit" class="ibtn">Register</button>
                            </div>
                        </form>
                        <!--
                        <div class="other-links">
                            <span>Or register with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>