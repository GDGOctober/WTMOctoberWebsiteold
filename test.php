<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="css/vendors/bootstrap.min.css">
    <link rel="stylesheet" href="css/vendors/font-awesome.min.css">
    <link rel="stylesheet" href="css/vendors/animate.min.css">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900);
        .contact-form {
            margin-top: 30px;
        }
        .contact-form .input-block {
            background-color: rgba(255, 255, 255, 0.8);
            border: solid 1px #FF512F;
            width: 100%;
            height: 60px;
            padding: 25px;
            position: relative;
            margin-bottom: 20px;
            -moz-transition: all 0.3s ease-out;
            -o-transition: all 0.3s ease-out;
            -webkit-transition: all 0.3s ease-out;
            transition: all 0.3s ease-out;
        }
        .contact-form .input-block.focus {
            background-color: #fff;
            border: solid 1px #fb2900;
        }
        .contact-form .input-block.textarea {
            height: auto;
        }
        .contact-form .input-block.textarea .form-control {
            height: auto;
            resize: none;
        }
        .contact-form .input-block label {
            position: absolute;
            left: 25px;
            top: 25px;
            display: block;
            margin: 0;
            font-weight: 300;
            z-index: 1;
            color: #333;
            font-size: 18px;
            line-height: 10px;
        }
        .contact-form .input-block .form-control {
            background-color: transparent;
            padding: 0;
            border: none;
            -moz-border-radius: 0;
            -webkit-border-radius: 0;
            border-radius: 0;
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
            box-shadow: none;
            height: auto;
            position: relative;
            z-index: 2;
            font-size: 18px;
            color: #333;
        }
        .contact-form .input-block .form-control:focus label {
            top: 0;
        }
        .contact-form .square-button {
            background-color: rgba(255, 255, 255, 0.8);
            color: #fb2900;
            font-size: 26px;
            text-transform: uppercase;
            font-weight: 700;
            text-align: center;
            -moz-border-radius: 2px;
            -webkit-border-radius: 2px;
            border-radius: 2px;
            -moz-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            -webkit-transition: all 0.3s ease;
            transition: all 0.3s ease;
            padding: 0 60px;
            height: 60px;
            border: none;
            width: 100%;
        }
        .contact-form .square-button:hover, .contact-form .square-button:focus {
            background-color: white;
        }

        @media (min-width: 768px) {
            .contact-wrap {
                width: 60%;
                margin: auto;
            }
        }
        /*----page styles---*/
        body {
            background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuMCIgeTE9IjAuNSIgeDI9IjEuMCIgeTI9IjAuNSI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmNTEyZiIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iI2RkMjQ3NiIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
            background-size: 100%;
            background-image: -webkit-gradient(linear, 0% 50%, 100% 50%, color-stop(0%, #ff512f), color-stop(100%, #dd2476));
            background-image: -moz-linear-gradient(left, #ff512f, #dd2476);
            background-image: -webkit-linear-gradient(left, #ff512f, #dd2476);
            background-image: linear-gradient(to right, #ff512f, #dd2476);
            font-family: 'Roboto', sans-serif;
        }

        .contact-wrap {
            padding: 15px;
        }

        h1 {
            background-color: white;
            color: #ff7c62;
            padding: 40px;
            margin: 0 0 50px;
            font-size: 30px;
            text-transform: uppercase;
            font-weight: 700;
            text-align: center;
        }
        h1 small {
            font-size: 18px;
            display: block;
            text-transform: none;
            font-weight: 300;
            margin-top: 10px;
            color: #ff7c62;
        }

        .made-with-love {
            margin-top: 40px;
            padding: 10px;
            clear: left;
            text-align: center;
            font-size: 10px;
            font-family: arial;
            color: #fff;
        }
        .made-with-love i {
            font-style: normal;
            color: #F50057;
            font-size: 14px;
            position: relative;
            top: 2px;
        }
        .made-with-love a {
            color: #fff;
            text-decoration: none;
        }
        .made-with-love a:hover {
            text-decoration: underline;
        }

    </style>
</head>

<body>


<section class="contact-wrap">
    <form action="" class="contact-form">
        <div class="col-sm-6">
            <div class="input-block">
                <label for="">First Name</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="input-block">
                <label for="">Last Name</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-sm-12">
            <div class="input-block">
                <label for="">Email</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-sm-12">
            <div class="input-block">
                <label for="">Message Subject</label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-sm-12">
            <div class="input-block textarea">
                <label for="">Drop your message here</label>
                <textarea rows="3" type="text" class="form-control"></textarea>
            </div>
        </div>
        <div class="col-sm-12">
            <button class="square-button">Send</button>
        </div>
    </form>
</section>

<!-- follow me template -->
<div class="made-with-love">
    Made with
    <i>♥</i> by
    <a target="_blank" href="https://codepen.io/nikhil8krishnan">Nikhil Krishnan</a>
</div>
<form action = "scripts/upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file_img">
    <input type="submit" name="btn_upload" value="Upload">
</form>

<script src="js/vendors/jquery-3.2.1.min.js"></script>
<script src="js/vendors/bootstrap.min.js"></script>
<script src="js/vendors/wow.min.js"></script>
<script src="js/main.min.js"></script>
</body>
</html>