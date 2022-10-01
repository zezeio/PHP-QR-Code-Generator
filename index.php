<html>
<head>
	<meta charset="utf-8">
	<title>QR Code Generator</title>
	<meta name="description" content="QR Code Generator. QR Code Link Generator. QR Link Generator. QR Link" />
	<link rel="stylesheet" href="index.css">
	<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
</head>

<body>
  <div class="main">
    <div class="container-fluid">
      <div class="row">
	  <div class='col-3'></div>
        <div class='col-5 first'>
		<center><img src="img/main.png" width="260px" class="mainimg">
          <h1 class="main-heading">
		  Generate<br><span class="jumbo-title">QR Code</span><br>
		  <p style="font-size:16px; color:red;">(Only Link)</p>
          </h1>
          <form action="Generated-Qr.php" method="POST">
            <div class="form-group">
              <input name="qrCode" type="text" class="form-control shadow-sm p-3 mb-5 bg-white rounded textInput" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter QR Code Link">
            </div>
            <input name="Generate" type="submit" class="btngradient btn btn-primary submitButton shadow-sm p-6 mb-5" value="Generate QR Code"></input>
          </form>
		  </center>
        </div>
		<div class='col-3'></div>
      </div>
    </div>
  </div>
</body>
</html>