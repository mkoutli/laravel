<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Covid-19 Images</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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
	    .row {
		  display: flex;
		  flex-wrap: wrap;
		  padding: 0 4px;
		}

		/* Create two equal columns that sits next to each other */
		.column {
		  flex: 50%;
		  padding: 0 4px;
		}

		.column img {
		  margin-top: 8px;
		  vertical-align: middle;
		}

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Covid-19 Images
                </div>

                <!--<div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>-->
		<div class="row">
		  <div class="column">
		    <img src="https://raw.githubusercontent.com/ieee8023/covid-chestxray-dataset/master/images/000001-12.jpg" style="width:128px;height:128px;">
		    <img src="https://raw.githubusercontent.com/ieee8023/covid-chestxray-dataset/master/images/000001-17.jpg" style="width:128px;height:128px;">
		    <img src="https://raw.githubusercontent.com/ieee8023/covid-chestxray-dataset/master/images/000001-19.jpg" style="width:128px;height:128px;">
		    <img src="https://raw.githubusercontent.com/ieee8023/covid-chestxray-dataset/master/images/000001-2.jpg" style="width:128px;height:128px;">
		    <img src="https://raw.githubusercontent.com/ieee8023/covid-chestxray-dataset/master/images/000001-24.jpg" style="width:128px;height:128px;">
		    <img src="https://raw.githubusercontent.com/ieee8023/covid-chestxray-dataset/master/images/000001-27.jpg" style="width:128px;height:128px;">
		    <img src="https://raw.githubusercontent.com/ieee8023/covid-chestxray-dataset/master/images/000001-3.png" style="width:128px;height:128px;">
		  </div>
		  <div class="column">
		    <img src="https://raw.githubusercontent.com/ieee8023/covid-chestxray-dataset/master/images/000001-6.png" style="width:128px;height:128px;">
		    <img src="https://raw.githubusercontent.com/ieee8023/covid-chestxray-dataset/master/images/000001-9-a.jpg" style="width:128px;height:128px;">
		    <img src="https://raw.githubusercontent.com/ieee8023/covid-chestxray-dataset/master/images/000001-9-b.jpg" style="width:128px;height:128px;">
		    <img src="https://raw.githubusercontent.com/ieee8023/covid-chestxray-dataset/master/images/000001.jpg" style="width:128px;height:128px;">
		    <img src="https://raw.githubusercontent.com/ieee8023/covid-chestxray-dataset/master/images/000002-11-a.jpg" style="width:128px;height:128px;">
		    <img src="https://raw.githubusercontent.com/ieee8023/covid-chestxray-dataset/master/images/000002-11-b.jpg" style="width:128px;height:128px;">
		  </div>
		  <div class="column">
		    <img src="https://raw.githubusercontent.com/ieee8023/covid-chestxray-dataset/master/images/000002-14.jpg" style="width:128px;height:128px;">
		    <img src="https://raw.githubusercontent.com/ieee8023/covid-chestxray-dataset/master/images/000002-16.jpg" style="width:128px;height:128px;">
		    <img src="https://raw.githubusercontent.com/ieee8023/covid-chestxray-dataset/master/images/000002-19-a.jpg" style="width:128px;height:128px;">
		    <img src="https://raw.githubusercontent.com/ieee8023/covid-chestxray-dataset/master/images/000002-19-b.jpg" style="width:128px;height:128px;">
		    <img src="https://raw.githubusercontent.com/ieee8023/covid-chestxray-dataset/master/images/000002-2.jpg" style="width:128px;height:128px;">
		    <img src="https://raw.githubusercontent.com/ieee8023/covid-chestxray-dataset/master/images/000002-29.jpg" style="width:128px;height:128px;">
		  </div>
		</div>
            </div>
        </div>
    </body>
</html>
