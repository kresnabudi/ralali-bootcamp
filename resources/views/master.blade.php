<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Ralali Bootcamp</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<style>
  *{
      margin: 0;
      padding: 0%;
      font-family: Arial, Helvetica;
  }
  nav{
      display: flex;
      flex-direction: row;
      justify-content: space-evenly;
      background-color: orange;
      color: white;
      padding: 10px 0;
  }
  .login-container{
      display: flex;
      align-items: center;
  }
  .login-container > button{
      background-color:darkcyan;
      border: none;
      padding: 5px 10px;
      color: white;
      margin: 0 5px;
      border-radius: 2px;
      transition: all 0.3s ease;
  }
  .login-container > button:hover{
      background-color: antiquewhite;
      color: black;
      cursor: pointer;
  }
  
</style>
<body>
  <header>
    <nav>
            <h1>Ralali Bootcamp</h1>
            <br>
            <input type="text" placeholder="Search">
            <div class="login-container">
                <button id="signIn">Sign In</button>
                <button id="signOut">Sign Out</button>
            </div>
    </nav>
</header>

  @yield('content')
</body>

</html>