<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-compatible" content="ie=edge" />
    <title>Nectaus App</title>
    <link rel="stylesheet" href="/css/authStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            @if($errors->any())
            <ul>
                @foreach($errors-> all as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif
            <form action="{{ route('register.user') }}" method="post">
                @csrf
                @method('post')
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <div class="formInput">
                    <label for="">Full Name</label>
                    <input type="text" name="fullName" placeholder="Full Name" required>
                    <label for="">National ID</label>
                    <input type="Number" name="NationalId" placeholder="National ID" required onchange="">
                    <label for="">Role</label>
                    <select name="role" id="" placeholder="Role">
                        <option value="beekeeper">BeeKeeper</option>
                        <option value="officer">Goverment Officer</option>
                        <option value="admin">Admin</option>
                    </select>
                    <label for="">Email</label>
                    <input type="email" name="email" placeholder="Email Address" required>
                    <label for="">Password</label>
                    <input type="password" name="passwords" placeholder="passwords" required>

                </div>
                <button type="submit">Sign Up</button>

            </form>
        </div>
        <div class="form-container sign-in-container">

            <form>
                <h1>Login</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                <div class="formInput">

                    <label for="">Email</label>
                    <input type="string" name="Email" placeholder="Email">
                    <label for="">Password</label>
                    <input type="password" name="Password" placeholder="password">
                </div>
                <a href="forgot.html">Forgot your password?</a>

                <a href="/home" style="color: white;">login</a>
                <a href="/home"><button>Login</button></a>

            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Login</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/authMain.js"></script>
</body>

</html>