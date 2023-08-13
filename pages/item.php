<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
 
  <!-- <link href="css/index2.css" rel="stylesheet"> -->
  <link href="../assets/css/fontello.css" rel="stylesheet">
  <!-- <link href="css/buttonStyles.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link href="../assets/css/item.css" rel="stylesheet">
</head>

<body>
<?php include("../app/include/header.php"); ?>
 

  <section class="main">
    <div class="photosSide">
        <div class="bigImg">
            <img src="../assets/images/AIR JORDAN 4 RETRO METALLIC PACK PURPLE.jfif">
        </div>
        <div class="smallImages">
            <img src="../assets/images/AIR JORDAN 4 RETRO METALLIC PACK PURPLE.jfif">
            <img src="../assets/images/AIR JORDAN 4 RETRO METALLIC PACK PURPLE.jfif">
            <img src="../assets/images/AIR JORDAN 4 RETRO METALLIC PACK PURPLE.jfif">
        </div>
    </div>
    <div class="infoSide">
        <div class="topInf">
            <p class="producer">NIKE</p>
            <p class="article">Article: 193949492</p>
        </div>
        <h3 class="fullname">КРОССОВКИ NIKE SB DUNK CACTUS JACK</h3>
        <div class="sizes">
            <p class="sizeHeader">Size</p>
            <div class="sizesCircles">
                <div class="circleSize">36</div>
                <div class="circleSize">37</div>
                <div class="circleSize">38</div>
                <div class="circleSize">39</div>
                <div class="circleSize">40</div>
                <div class="circleSize">41</div>
                <div class="circleSize">42</div>
                <div class="circleSize">43</div>
            </div>
        </div>
        <div class="costAndBtn">
            <p class="cost">165.00 BYN</p>
            <button class="btn btn-primary">Add to cart</button>
        </div>
    </div>
  </section>

  
 



  

  <?php include("../app/include/footer.php"); ?>











  <div class="modal fade" id="signinModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header myModalHeader">
          
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <h1 class="modal-title fs-5" id="exampleModalLabel">Sign In</h1>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Email:</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Password:</label>
              <!-- <textarea class="form-control" id="message-text"></textarea> -->
              <input type="password" class="form-control" id="message-text">
            </div>
          </form>
        </div>
        <div class="modal-footer myModalFooter">
         
          <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
          <button type="button" class="btn btn-primary">Sign In</button>
          <p data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#signupModal">I don't have an account</p>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header myModalHeader">
         
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <h1 class="modal-title fs-5" id="exampleModalLabel">Sign Up</h1>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Username:</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Email:</label>
              <input type="email" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Password:</label>
              <!-- <textarea class="form-control" id="message-text"></textarea> -->
              <input type="password" class="form-control" id="message-text">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Confirm password:</label>
              <!-- <textarea class="form-control" id="message-text"></textarea> -->
              <input type="password" class="form-control" id="message-text">
            </div>
          </form>
        </div>
        <div class="modal-footer myModalFooter">
         
          <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
          <button type="button" class="btn btn-primary">Sign Up</button>
          <p data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#signinModal">I already have an account</p>
        </div>
      </div>
    </div>
  </div>

  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/sliderTop.js"></script>
  <script src="js/sliderBottom.js"></script>
  <script src="index.js"></script>
</body>

</html>