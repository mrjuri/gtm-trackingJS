<!doctype html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>GTM - Test</title>

    <script src="js/gtmTrackingJS-config.js?v=<?php echo filemtime('js/gtmTrackingJS-config.js'); ?>"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="js/gtmTrackingJS-init.js?v=<?php echo filemtime('js/gtmTrackingJS-init.js'); ?>"></script>

</head>
<body>

    <div class="container">

        <br><br>

        <h1>Example page</h1>

        <hr><br>

        <div class="row">

            <div class="col-lg-3">

                <a class="btn btn-primary btn-block"
                   id="click-me-1"
                   href="#click-me-1">Click Me 1</a>

            </div>

        </div>

        <br>

        <div class="row">

            <div class="col-lg-3">

                <a class="btn btn-warning btn-block"
                   id="click-me-2"
                   href="#click-me-2">Click Me 2</a>

            </div>

        </div>

        <br>

        <div class="row">

            <div class="col-lg-3">

                <button class="btn btn-secondary btn-block" type="button">
                    <span>Click Me 3</span>
                </button>

            </div>

            <div class="col-lg-3">

                <input class="form-control"
                       name="input-value"
                       type="text"
                       placeholder="Seleziona i beneficiari"
                       value="12345">

            </div>

            <div class="col-lg-3">

                <div class="btn btn-primary price" id="price">
                    3,06 €
                </div>

            </div>

        </div>

        <br><hr>

        <br>

        <div class="row">

            <div class="col-lg-3">

                <button class="btn btn-primary btn-block" type="button">
                    <span>Continue</span>
                </button>

            </div>

        </div>

        <br>

        <div class="row">

            <div class="col-lg-3">

                <button class="btn btn-primary btn-block" type="button">
                    <span>Continue</span>
                </button>

            </div>

        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>