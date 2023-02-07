<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyJobs</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container">
        <section class="flex navbar">
            <div class="logo">
                <img src="{{ asset('/imgs/logo.webp') }}" />
            </div>
            <div class="navigation">
                <div class="register">
                    <img src="{{ asset('/imgs/add-user.png') }}" />
                    <span>Register</span>
                </div>
                <div class="login">
                    <img src="{{ asset('imgs/login.png') }}" />
                    <span>LogIn</span>
                </div>
            </div>

        </section>
    </div>

</body>

</html>
