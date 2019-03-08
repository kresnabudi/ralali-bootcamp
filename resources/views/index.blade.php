@extends('master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Content</title>
</head>
<body>
<button>view</button>
<div id="contents">

</div>
  <script>

    $("button").click(function(){
  $.getJSON("dhttps://agusdwi.id/core/rest/api.php/product?auth=AIzaSyDDmI1OLJfpzhprJACpBpXbkVg1oGoHlKc", function(result){
    for(let i = 0 ; i<= result.data.length;i++){
      $.("#contents").append(result.data[i].product_name);
    }
  });
});
  </script>
</body>
</html>  
@endsection
