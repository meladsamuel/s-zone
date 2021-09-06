
<!DOCTYPE html>
<html>
    <head>
        <title>QR code Generator</title>
    </head>
<body>
    <div class="visible-print text-center">
        <center>
        <h1>qr code for {{$machines->name}}</h1>
 {!! QrCode::size(250)->generate($machines->id); !!}
      </center>
    </div>
</body>
</html>
