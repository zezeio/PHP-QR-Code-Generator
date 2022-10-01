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
		<center>
          <h1 class="main-heading">
		  QR Link <br><span class="jumbo-title">Generated</span><br>
          </h1>
          <?php
            if (isset($_POST["Generate"]))
            {
                function qrCode($s, $width = 350, $height = 350){
                    $api = 'https://chart.googleapis.com/chart?chs=%dx%d&cht=qr&chl=%s';
                    $url = sprintf($api, $width, $height, $s);
                    return $url;
                }
                $yurl  = $_POST["qrCode"]; 
                $qr = qrCode(''.$yurl.'', 300, 300);  
            ?>
            <img src="<?php echo $qr; ?>">
            <?php
            }
            ?><br><br><br><br><br>
            <button onclick="window.location.href = 'index.php';" class="btngradient btn btn-primary submitButton shadow-sm p-6 mb-5">GO TO INDEX PAGE</button>
		  </center>
        </div>
		<div class='col-3'></div>
      </div>
    </div>
  </div>
</body>
</html>
