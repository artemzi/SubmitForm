<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Title</title>
		<meta charset="UTF-8">
		<meta name=description content="">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="http://imsky.github.com/holder/holder.js"></script>
        <style>
            body {
                background-image: url("img/marble.jpg");
            }
            .jumbotron {
                background-image: url("img/marble.jpg");
            }
            .img-responsive {
                margin: 0 auto;
            }
            .button{
                margin:0px auto; //it will center them
            }
        </style>
	</head>
	<body>
        <div class="jumbotron">
            <a href="#" style="margin-top: 15px;">
                <img class="img-responsive" src="img/logo-white.png">
            </a>
        </div>
        <div class="container">
            <div class="row-fluid">

                <form role="form">
                    <div class="col-xs-32 col-sm-2 col-md-2 col-lg-2">

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                        <div class="form-group">
                            <!--                    <label for="InputText">Some text</label>-->
                            <input type="text" name="first" class="form-control" id="FirstString" placeholder="Enter line one">
                        </div>
                        <div class="form-group">
                            <!--                    <label for="InputText">Some text</label>-->
                            <input type="text" name="second" class="form-control" id="SecondString" placeholder="Enter line two">
                        </div>
                        <br/>
                        <div class="form-group">
                            <input type="file" id="InputFile">
                        </div>

                       <div style="margin-left: 35%">
                           <button type="submit" class='btn btn-success'>Present</button>
                           <button type="submit" class='btn btn-danger'>Clear</button>
                       </div>

                    </div>
                </form>
            </div>
        </div>

        <!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	</body>
</html>