<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="{{asset('assets/css/authStyle.css')}}">
         
    <title>Login & Registration Form</title> 
</head>
<body>
    
    <div class="container">
        <div class="forms">
            <div class="form reset">
                <span class="title">Password Reset</span>

                <form action="">
                    @csrf
                    <div class="input-field">
                        <input type="text" placeholder="Enter your email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                       

                    <div class="input-field button">
                        <input  type="submit" value="Continue">
                    </div>
                </form>
            </div>
        </div>
    </div>
     <script src="{{asset('assets/js/authScript.js')}}"></script> 
</body>
</html>