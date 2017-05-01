<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
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
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
        <script src="js/app.js" charset="utf-8"  ></script>
  <script>
    var vm = new Vue({
      el:'#vue-app', //กำหนด scope ของ Vue
      data:{  //กำหนดว่าใน Vue จะมีอะไรได้บ้าง
        /*message : '',
        score : 0,
        firstname: '',
        lastname: '',*/
        count:0,
        total:0,
        isRandom:false,
        players: [],
        isModeAdd: true,
        formPlayer: {
          firstname: '',
          lastname: '',
        }

      },
      filters: {

      },
      mounted: function(){ //call back function
        /*
        this.firstname = 'Tony';
        this.lastname = 'Stark';
        this.score = 10;
        this.message = 'Hello Vue!';*/
        this.total = 1;
        this.players.push({
          firstname: 'player1',
          lastname: 'lastname',
        });
      },
      computed: {
        fullname: function(){
          return this.firstname + " " + this.lastname;
        },
        grade: function(){
          var grade = 'F';
          if(this.score >= 80){
            grade = 'A';
          }else if(this.score >= 75){
            grade = 'B+';
          }
          return grade;

      },
      randomNum: function(){
        var output = Math.floor((Math.random() * 10) + 1);
        return output;
      }
    },
      methods: {
        submitStudent: function(){

      },
      clearformPlayer: function(){

      },
      nextPlayer: function(){
        this.count += 1;
      }

    }
  });
  </script>
    </body>
</html>
