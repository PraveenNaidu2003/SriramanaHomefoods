<!DOCTYPE html>
<!-- This site is Created By Shiva And Bhavani By Ravi Kumar Satya Sai Praveen as a CSP Project For Sem1 in Second year -->
<html lang="en">

<head>
  <title>Shiva Bhavani</title>
  <link rel="stylesheet" href="../Bhavani/Additional/css/style.css">
  <link href="../Bhavani/Additional/css/genaral.css" rel="stylesheet" type="text/css">
  <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
  <script type="text/javascript">
    ! function (o, c) {
      var n = c.documentElement,
        t = " w-mod-";
      n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n
        .className += t + "touch")
    }(window, document);
  </script>
  <script src="script.js"></script>
  <link href="../Bhavani/Additional/logo_fav.png" rel="shortcut icon" she type="image/x-icon">
  <link href="../Bhavani/Additional/logo_webclip.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">


</head>
<?php
$con = new mysqli("localhost", "root", "", "sriramana");
if (isset($_POST['submit'])) {
  $pid = $_POST['pid'];
  $price = $_POST['price'];
  $discprice = $_POST['discprice'];
  $name = $_POST['name'];
  $describ = $_POST['describ'];
  $addinfo = $_POST['addinfo'];

  $target_dir = "uploads/";
  $image = $target_dir . str_replace(' ', '', basename($_FILES["image"]["name"]));
  $insert = move_uploaded_file($_FILES["image"]["tmp_name"], $image);
  // $quary = "insert into products ('pid','name','price','discprixksknce','describ','addinfo','image ') values ('$pid','$name','$price','$discprice','$describ','$addinfo','$image');";
  // $quary = "insert into products ('pid') values ('$pid')";
  // $run = mysqli_query($con, "insert into products ('pid') values ");
  if ($insert) {
    $image = str_replace('uploads/', '', $image);
    $image = str_replace(' ', '', $image);
    $quary = "insert into catlog values ('$pid','$name','$price','$discprice','$describ','$addinfo','$image');";
    if (mysqli_query($con, $quary)) {
      echo '<script>alert("Data Entered Into Sucessfully")</script>';
    } else {
      echo '<script>alert("Data Not entered")</script>';
    }
  } else {
    echo '<script>alert("Image was not Uploded")</script>';
  }
}

?>

<body>

  <?php include "header.php"; ?>
  <form method="post" enctype="multipart/form-data">
    <div class="bhavani">
      <h3 style="color:pink;">Product Addition</h3>
    </div>
    <div class="item">
      <p>Product ID</p>
      <div class="name-item">
        <input type="text" name="pid" placeholder="ex:SW0001" />
      </div>
      <div class="contact-item " align="left">
        <img src="./uploads/AmmaNana.jpg" class="img-thumbnail" alt="..." style="height: 120px; width: 120px;">
      </div>
    </div>

    <div class="contact-item">
      <div class="item">
        <p>Original Price</p>
        <input type="text" name="price" placeholder="Original Price" />
      </div>
      <div class="item">
        <p>Discounted Price</p>
        <input type="text" name="discprice" placeholder="Discounted Price" />
      </div>
    </div>
    <div class="item">
      <p>Name Of The Product</p>
      <input type="text" name="name" />
    </div>
    <div class="item">
      <p>Descripation</p>
      <textarea rows="3" name="describ"></textarea>
    </div>
    <div class="item">
      <p>Addtional information</p>
      <textarea rows="3" name="addinfo"></textarea>
    </div>

    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <div class="file-upload">
      <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add
        Image</button>

      <div class="image-upload-wrap">
        <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" name="image">
        <div class="drag-text">
          <h3>Drag and drop a file or select add Image</h3>
        </div>
      </div>
      <div class="file-upload-content">
        <img class="file-upload-image" src="#" alt="your image" />
        <div class="image-title-wrap">
          <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded
              Image</span></button>
        </div>
      </div>
    </div>
    <div class="btn-block">
      <button type="submit" name="submit" href="/">APPLY</button>
    </div>
  </form>
  <?php include "fotter.php"; ?>
</body>

</html>