<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Restrurant POS System</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background: radial-gradient(ellipse at bottom, #0d1d31 0%, #0c0d13 100%);
            color: #fff;
            font-family: 'Nunito', sans-serif;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
            font-weight: 800;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 23px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        h3,h2 {
  text-decoration:  underline wavy #fffffa 2px;
}
        .m-b-md {
            margin-bottom: 30px;
        }
        .links{
            margin-top:80px;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md fw-bold">
                Restaurant Point-Of-Sale 
            </div><hr/>
            <h2 class="text-white fw-bold ">Advanced Database Management Project</h2>
            <div class="container-fluid mb-5">
                <h4>Sumitted By: </h4>
                <h3>Kaustubh Reet</h3>
                <h3>Harsh Vardhan</h3>
<h3>Md. Raphe</h3>
<hr/>
            </div>
            <div class="links fw-bold text-white">
                
			
                <a href="Restro/admin/" >Admin Log In</a>
                <a href="Restro/cashier/">Cashier Log In</a>
                <a href="Restro/customer">Customer Log In</a>
            </div>
        </div>
    </div>
</body>

</html>