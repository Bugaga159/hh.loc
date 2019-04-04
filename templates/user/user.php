<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Pricing example · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal"><a href="">Casino</a></h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Slots</a>
        <a class="p-2 text-dark" href="#">Casino</a>
        <a class="p-2 text-dark" href="#">Roulette</a>
        <a class="p-2 text-dark" href="#">Promotions</a>
    </nav>
    <a class="btn btn-outline-success" href="signIn">Sign in</a>
    <a class="btn btn-outline-warning" href="signUp">Sign up</a>
    <a class="btn btn-outline-warning" href="/">Back</a>
</div>



<div class="container">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container">

        <div class="conf">
            <header class="page-header">
                <h1 class="page-title"><?= $user->getNikename() ?></h1>
                <small> <i class="fa fa-clock-o"></i> Last Updated on: <time> April 02, 2019</time></small>
            </header>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading resume-heading">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="col-xs-12 col-sm-4">
                                        <figure>
                                            <img class="img-circle img-responsive" alt="" src="http://placehold.it/300x300">
                                        </figure>

                                        <div class="row">
                                            <div class="col-xs-12 social-btns">

                                                <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                                                    <a href="#" class="btn btn-social btn-block btn-google">
                                                        <i class="fa fa-google"></i> </a>
                                                </div>

                                                <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                                                    <a href="#" class="btn btn-social btn-block btn-facebook">
                                                        <i class="fa fa-facebook"></i> </a>
                                                </div>

                                                <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                                                    <a href="#" class="btn btn-social btn-block btn-twitter">
                                                        <i class="fa fa-twitter"></i> </a>
                                                </div>

                                                <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                                                    <a href="#" class="btn btn-social btn-block btn-linkedin">
                                                        <i class="fa fa-linkedin"></i> </a>
                                                </div>

                                                <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                                                    <a href="#" class="btn btn-social btn-block btn-github">
                                                        <i class="fa fa-github"></i> </a>
                                                </div>

                                                <div class="col-xs-3 col-md-1 col-lg-1 social-btn-holder">
                                                    <a href="#" class="btn btn-social btn-block btn-stackoverflow">
                                                        <i class="fa fa-stack-overflow"></i> </a>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-xs-12 col-sm-8">
                                        <ul class="list-group">
                                            <li class="list-group-item"><?= $user->getNikename() ?></li>
                                            <li class="list-group-item">Level - <?= $user->getLevel() ?> </li>
                                            <li class="list-group-item">Money: <?= $user->getMoney() ?></li>
                                            <li class="list-group-item">Points: <?= $user->getPoints() ?></li>
                                            <li class="list-group-item"><i class="fa fa-envelope"></i> <?= $user->getEmail() ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>

        </div>

    </div>
    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
            <div class="col-12 col-md">
                <img class="mb-2" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
                <small class="d-block mb-3 text-muted">&copy; 2017-2019</small>
            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Cool stuff</a></li>
                    <li><a class="text-muted" href="#">Random feature</a></li>
                    <li><a class="text-muted" href="#">Team feature</a></li>
                    <li><a class="text-muted" href="#">Stuff for developers</a></li>
                    <li><a class="text-muted" href="#">Another one</a></li>
                    <li><a class="text-muted" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Resource</a></li>
                    <li><a class="text-muted" href="#">Resource name</a></li>
                    <li><a class="text-muted" href="#">Another resource</a></li>
                    <li><a class="text-muted" href="#">Final resource</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Team</a></li>
                    <li><a class="text-muted" href="#">Locations</a></li>
                    <li><a class="text-muted" href="#">Privacy</a></li>
                    <li><a class="text-muted" href="#">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
