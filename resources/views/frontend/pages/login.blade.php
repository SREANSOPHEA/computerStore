<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Davy Computer - Login</title>
    <link rel="icon" href="{{asset('assets/images/logo.png')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body style="background-color: black; height:100vh;" class="w-100 d-flex justify-content-center align-items-center">
    <div class="w-100">
        <div class="d-flex justify-content-center align-items-center">
            <div>
                <img src="{{asset('assets/images/logo.png')}}" style="height: 70px" alt="Logo Image">
            </div>
            <div>
                <h1 class="text-light">Davy Computer</h1>
            </div>
        </div>
        <div class="row w-100">
            <div style="margin: 0 auto;" class="col-10 col-md-6 col-lg-4 card rounded text-center p-4 text-dark mt-3">
                <h3>Login</h3>
                <div class="text-start mb-3">
                    <label for="email"><b>Email</b></label>
                    <input type="text" id="email" class="form-control border-2 border-dark" placeholder="example@email.com">
                </div>
                <div class="text-start mb-3">
                    <label for="password"><b>Password</b></label>
                    <input type="password" id="password" class="form-control border-2 border-dark" placeholder="***********">
                </div>
                <div class="d-flex justify-content-between mb-3">
                    <div>
                        <input type="checkbox" class="form-check-input" value="remember">
                        <span>Remember me</span>
                    </div>
                    <div>
                        <a href="#">Forget Password?</a>
                    </div>
                </div>
                <div class="text-center mb-3">
                    <button class="btn btn-primary w-100"><i class="bi bi-box-arrow-in-right"></i> Login</button>
                </div>
                <div class="text-center mb-3">
                    <h6>Don't have an account?</h6>
                    <a href="" style="text-decoration: none;"><h6 class="text-primary">Register New Account</h6></a>
                    <div class="d-flex justify-content-between">
                        <hr style="width: 45%">
                        <span><b>Or</b></span>
                        <hr style="width: 45%">
                    </div>
                </div>
                <div class="text-center mb-3">
                    <button class="btn btn-outline-danger w-100"><i class="bi bi-google"></i> Login with Google</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>