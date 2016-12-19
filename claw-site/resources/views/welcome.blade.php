<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Rolldown List</title>
  <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>

<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


      <link rel="stylesheet" href="/css/list.css">


</head>

<body>
  <ul class="rolldown-list" id="myList">
      @foreach($lastUsers as $user)
          <li>{{$user->twitterName}}</li>
      @endforeach
  </ul>

<button id="btnReload">Reload</button>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="/js/list.js"></script>

</body>
</html>
