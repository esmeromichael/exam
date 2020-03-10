<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
        
            <div class="content">
                <form class="form-horizontal" method="post" id="exam" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                    <div class="row">
                        <div class="card">
                            <div class="card-header">Question #1</div>
                            <div class="card-body">
                              <input type="text" class="form-control input-value" name="input_value" value="">
                                <br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary question1" name="question1" value="question1">Question 1</button>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">Question #2</div>
                            <div class="card-body">
                                <input type="text" class="form-control input-value2" name="input_value2" value="">
                                <br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary question2" name="question2" value="question2">Question 2</button>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header">Question #3</div>
                            <div class="card-body">
                                <input type="text" class="form-control input-value3" name="input_value3" value="">
                                <br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary question3" name="question3" value="question3">Question 3</button>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header">Question #4</div>
                            <div class="card-body">
                                <input type="text" class="form-control input-value4" name="input_value4" value="">
                                <br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary question4" name="question4" value="question4">Question 4</button>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">Question #5</div>
                            <div class="card-body">
                                <input type="text" class="form-control input-value5" name="input_value5" value="" style="display: none;">
                                <br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary question5" name="question5" value="question5">Question 5</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
       
        $('.question1').on('click', function(){
            var val = $('.input-value').val();
            if(!val)
            {
                alert('Please enter the value.')
                return false;
            }
        })

        $('.question2').on('click', function(){
            var val = $('.input-value2').val();
            if(!val)
            {
                alert('Please enter the value.')
                return false;
            }
        })

        $('.question3').on('click', function(){
            var val = $(this).val();
            if(!val) {
                alert('Please enter the value.')
                return false;
            }
        });
    </script>
</html>
