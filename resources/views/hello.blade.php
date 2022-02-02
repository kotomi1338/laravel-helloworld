<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>Puti Hackason</title>
</head>

<body>
  <h2>Hello World Laravel!!</h2>
  <p>ぷちハッカソン!</p>
  <br>
  <div id="map" style="height:500px">
  </div>
  <script src="{{ asset('/js/result.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=KEY&callback=initMap" async defer>
  </script>
</body>

</html>