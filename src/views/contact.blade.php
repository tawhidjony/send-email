<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <style>
        body {background-image: linear-gradient(-136deg, #d0d0d0, #ffffff);}
        .emailFromLayout {
            width: 50%;
            margin:auto;
            margin-top:8%;
            margin-bottom:7%;
            -webkit-box-shadow: 0px 0px 4px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 0px 4px 0px rgba(0,0,0,0.75);
            box-shadow: 0px 0px 4px 0px rgba(0,0,0,0.75);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="">
                <form class="card emailFromLayout">
                    <div class="card-body">
                        <h3><i class="fa fa-envelope" aria-hidden="true"></i> Contact us</h3><hr>
                    <div class="form-group">
                        <label for="name">Your Full Name : </label>
                        <input type="text" class="form-control" id="name"  placeholder="Enter Your Full Name">
                    </div>
                    <div class="form-group">
                        <label for="Email">Enter Your Email : </label>
                        <input type="email" class="form-control" placeholder="Enter Your Email Address">
                    </div>
                    <div class="form-group">
                    <label for="message">Ddescribe Your Message : </label>
                    <textarea name="message" class="form-control" cols="20" rows="5" placeholder="Enter Your Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane" aria-hidden="true"></i> Send Email</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
</body>
</html>
