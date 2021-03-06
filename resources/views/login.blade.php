<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css"> -->
        <link rel="stylesheet" type="text/css" href="{{ url('css/custom.css') }}">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="h4 m-b-md">
                    Login Page
                </div>

                <div class="links">
                    <form action="" method="post">
                        <div class="form-group">
                            <input class="form-control loginform" type="email" name="email" id="email" placeholder="Email" />
                        </div>
                        <div class="form-group">
                            <input class="form-control loginform" type="password" name="password" id="password" placeholder="Password" />
                        </div>
                        <div class="form-group">
                            <div class="btn-form">
                                <input class="btn btn-info loginbtn" type="submit" id="submit" value="Login" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
