<?php include("path.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
 
  <!-- <link href="css/index2.css" rel="stylesheet"> -->
  <link href="assets/css/fontello.css" rel="stylesheet">
  <!-- <link href="css/buttonStyles.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <link href="index.css" rel="stylesheet">
</head>

<body>
  <?php include("app/include/header.php"); ?>
  

  <section class="mySlider">
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/images/sneakers1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/images/sneakers2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="assets/images/sneakers3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <section class="sneakersCatalog">
    <div class="mycontainer">
      <div class="sortingAndH">
        <div class="h">
          <h1 class="text-uppercase">All goods</h1>
        </div>
        <div class="sorting">
          <p>Sorting by: </p>
          <!-- <select>
            <option>A-Z</option>
            <option>Cheap first</option>
            <option>Expensive first</option>
          </select> -->
          <select class="form-select" aria-label="Default select example">
            <option value="1" selected>A-Z</option>
            <option value="2">Cheap first</option>
            <option value="3">Expensive first</option>
          </select>
        </div>
      </div>

      <div class="cards">
       
        <div class="mycard">
          <a href="pages/item.php">
            <div class="card-header">
              <img src="assets/images/nike.png">
              <p>$15.00</p>
            </div>
            <div class="card-imgBlock">
              <img src="assets/images/CAMPUS X BAD BUNNY BEIGE.jfif">
            </div>
            <div class="card-footer">
              <h5>Piy piy</h5>
              <p>Piri piri</p>
            </div>
          </a>
        </div>

        <div class="mycard">
          <div class="card-header">
            <img src="assets/images/nike.png">
            <p>$15.00</p>
          </div>
          <div class="card-imgBlock">
            <img src="assets/images/CAMPUS X BAD BUNNY BEIGE.jfif">
          </div>
          <div class="card-footer">
            <h5>Piy piy</h5>
            <p>Piri piri</p>
          </div>
        </div>

        <div class="mycard">
          <div class="card-header">
            <img src="assets/images/nike.png">
            <p>$15.00</p>
          </div>
          <div class="card-imgBlock">
            <img src="assets/images/CAMPUS X BAD BUNNY BEIGE.jfif">
          </div>
          <div class="card-footer">
            <h5>Piy piy</h5>
            <p>Piri piri</p>
          </div>
        </div>

        <div class="mycard">
          <div class="card-header">
            <img src="assets/images/nike.png">
            <p>$15.00</p>
          </div>
          <div class="card-imgBlock">
            <img src="assets/images/CAMPUS X BAD BUNNY BEIGE.jfif">
          </div>
          <div class="card-footer">
            <h5>Piy piy</h5>
            <p>Piri piri</p>
          </div>
        </div>

        <div class="mycard">
          <div class="card-header">
            <img src="assets/images/nike.png">
            <p>$15.00</p>
          </div>
          <div class="card-imgBlock">
            <img src="assets/images/CAMPUS X BAD BUNNY BEIGE.jfif">
          </div>
          <div class="card-footer">
            <h5>Piy piy</h5>
            <p>Piri piri</p>
          </div>
        </div>

        <div class="mycard">
          <div class="card-header">
            <img src="assets/images/nike.png">
            <p>$15.00</p>
          </div>
          <div class="card-imgBlock">
            <img src="assets/images/CAMPUS X BAD BUNNY BEIGE.jfif">
          </div>
          <div class="card-footer">
            <h5>Piy piy</h5>
            <p>Piri piri</p>
          </div>
        </div>

        <div class="mycard">
          <div class="card-header">
            <img src="assets/images/nike.png">
            <p>$15.00</p>
          </div>
          <div class="card-imgBlock">
            <img src="assets/images/CAMPUS X BAD BUNNY BEIGE.jfif">
          </div>
          <div class="card-footer">
            <h5>Piy piy</h5>
            <p>Piri piri</p>
          </div>
        </div>

        <div class="mycard">
          <div class="card-header">
            <img src="assets/images/nike.png">
            <p>$15.00</p>
          </div>
          <div class="card-imgBlock">
            <img src="assets/images/CAMPUS X BAD BUNNY BEIGE.jfif">
          </div>
          <div class="card-footer">
            <h5>Piy piy</h5>
            <p>Piri piri</p>
          </div>
        </div>

      </div>

      <button type="button" class="btn  btn-outline-light btnSecond">View all</button>

    </div>
  </section>
 
  <section class="newArticleBlock">
    <div class="myContainer">
      <div class="HAndMore">
        <div class="h">
          <h1 class="text-uppercase">New Article</h1>
        </div>
        <button type="button" class="btn btn-dark myDarkBtn text-uppercase">View More</button>
      </div>
      <div class="sliderBlock">
        <div class="wrapper">
          <i id="leftTop" class="fa-solid fa-angle-left"></i>
          <div class="carouselItemsNew">
              <div class="sneaker" draggable="false">
                <div class="mycard">
                  <div class="card-header">
                    <img src="images/nike.png">
                    <p>$15.00</p>
                  </div>
                  <div class="card-imgBlock">
                    <img src="images/CAMPUS X BAD BUNNY BEIGE.jfif">
                  </div>
                  <div class="card-footer">
                    <h5>Piy piy</h5>
                    <p>Piri piri</p>
                  </div>
                </div>
              </div>
              <div class="sneaker" draggable="false">
                <div class="mycard">
                  <div class="card-header">
                    <img src="images/nike.png">
                    <p>$15.00</p>
                  </div>
                  <div class="card-imgBlock">
                    <img src="images/CAMPUS X BAD BUNNY BEIGE.jfif">
                  </div>
                  <div class="card-footer">
                    <h5>Piy piy</h5>
                    <p>Piri piri</p>
                  </div>
                </div>
              </div>
              <div class="sneaker" draggable="false">
                <div class="mycard">
                  <div class="card-header">
                    <img src="images/nike.png">
                    <p>$15.00</p>
                  </div>
                  <div class="card-imgBlock">
                    <img src="images/CAMPUS X BAD BUNNY BEIGE.jfif">
                  </div>
                  <div class="card-footer">
                    <h5>Piy piy</h5>
                    <p>Piri piri</p>
                  </div>
                </div>
              </div>
              <div class="sneaker" draggable="false">
                <div class="mycard">
                  <div class="card-header">
                    <img src="images/nike.png">
                    <p>$15.00</p>
                  </div>
                  <div class="card-imgBlock">
                    <img src="images/CAMPUS X BAD BUNNY BEIGE.jfif">
                  </div>
                  <div class="card-footer">
                    <h5>Piy piy</h5>
                    <p>Piri piri</p>
                  </div>
                </div>
              </div>
              <div class="sneaker" draggable="false">
                <div class="mycard">
                  <div class="card-header">
                    <img src="images/nike.png">
                    <p>$15.00</p>
                  </div>
                  <div class="card-imgBlock">
                    <img src="images/CAMPUS X BAD BUNNY BEIGE.jfif">
                  </div>
                  <div class="card-footer">
                    <h5>Piy piy</h5>
                    <p>Piri piri</p>
                  </div>
                </div>
              </div>
              <div class="sneaker" draggable="false">
                <div class="mycard">
                  <div class="card-header">
                    <img src="images/nike.png">
                    <p>$15.00</p>
                  </div>
                  <div class="card-imgBlock">
                    <img src="images/CAMPUS X BAD BUNNY BEIGE.jfif">
                  </div>
                  <div class="card-footer">
                    <h5>Piy piy</h5>
                    <p>Piri piri</p>
                  </div>
                </div>
              </div>
              <div class="sneaker" draggable="false">
                <div class="mycard">
                  <div class="card-header">
                    <img src="images/nike.png">
                    <p>$15.00</p>
                  </div>
                  <div class="card-imgBlock">
                    <img src="images/CAMPUS X BAD BUNNY BEIGE.jfif">
                  </div>
                  <div class="card-footer">
                    <h5>Piy piy</h5>
                    <p>Piri piri</p>
                  </div>
                </div>
              </div>
              <div class="sneaker" draggable="false">
                <div class="mycard">
                  <div class="card-header">
                    <img src="images/nike.png">
                    <p>$15.00</p>
                  </div>
                  <div class="card-imgBlock">
                    <img src="images/CAMPUS X BAD BUNNY BEIGE.jfif">
                  </div>
                  <div class="card-footer">
                    <h5>Piy piy</h5>
                    <p>Piri piri</p>
                  </div>
                </div>
              </div>
              <div class="sneaker" draggable="false">
                <div class="mycard">
                  <div class="card-header">
                    <img src="images/nike.png">
                    <p>$15.00</p>
                  </div>
                  <div class="card-imgBlock">
                    <img src="images/CAMPUS X BAD BUNNY BEIGE.jfif">
                  </div>
                  <div class="card-footer">
                    <h5>Piy piy</h5>
                    <p>Piri piri</p>
                  </div>
                </div>
              </div>
            <!-- <img src="images/olga.jpg" alt="img" draggable="false">
            <img src="images/maria.jpg" alt="img" draggable="false">
            <img src="images/tatyana.jpg" alt="img" draggable="false">
            <img src="images/daria.jpg" alt="img" draggable="false">
            <img src="images/olga.jpg" alt="img" draggable="false">
            <img src="images/maria.jpg" alt="img" draggable="false">
            <img src="images/tatyana.jpg" alt="img" draggable="false">
            <img src="images/daria.jpg" alt="img" draggable="false">
            <img src="images/man.jpg" alt="img" draggable="false"> -->
          </div>
          <i id="rightTop" class="fa-solid fa-angle-right"></i>
        </div>
      </div>
    </div>
  </section>


  <section class="dealOfTheDayBlock">
    <div class="myContainer">
      <div class="HAndMore">
        <div class="h">
          <h1 class="text-uppercase">Deal Of The day</h1>
        </div>
        <button type="button" class="btn btn-dark myDarkBtn text-uppercase">View More</button>
      </div>
      <div class="sliderBlock">
        <div class="wrapper">
          <i id="leftBottom" class="fa-solid fa-angle-left"></i>
          <div class="carouselItemsDeal">
              <div class="sneaker" draggable="false">
                <div class="mycard">
                  <div class="card-header">
                    <img src="images/nike.png">
                    <p>$15.00</p>
                  </div>
                  <div class="card-imgBlock">
                    <img src="images/CAMPUS X BAD BUNNY BEIGE.jfif">
                  </div>
                  <div class="card-footer">
                    <h5>Piy piy</h5>
                    <p>Piri piri</p>
                  </div>
                </div>
              </div>
              <div class="sneaker" draggable="false">
                <div class="mycard">
                  <div class="card-header">
                    <img src="images/nike.png">
                    <p>$15.00</p>
                  </div>
                  <div class="card-imgBlock">
                    <img src="images/CAMPUS X BAD BUNNY BEIGE.jfif">
                  </div>
                  <div class="card-footer">
                    <h5>Piy piy</h5>
                    <p>Piri piri</p>
                  </div>
                </div>
              </div>
              <div class="sneaker" draggable="false">
                <div class="mycard">
                  <div class="card-header">
                    <img src="images/nike.png">
                    <p>$15.00</p>
                  </div>
                  <div class="card-imgBlock">
                    <img src="images/CAMPUS X BAD BUNNY BEIGE.jfif">
                  </div>
                  <div class="card-footer">
                    <h5>Piy piy</h5>
                    <p>Piri piri</p>
                  </div>
                </div>
              </div>
              <div class="sneaker" draggable="false">
                <div class="mycard">
                  <div class="card-header">
                    <img src="images/nike.png">
                    <p>$15.00</p>
                  </div>
                  <div class="card-imgBlock">
                    <img src="images/CAMPUS X BAD BUNNY BEIGE.jfif">
                  </div>
                  <div class="card-footer">
                    <h5>Piy piy</h5>
                    <p>Piri piri</p>
                  </div>
                </div>
              </div>
              <div class="sneaker" draggable="false">
                <div class="mycard">
                  <div class="card-header">
                    <img src="images/nike.png">
                    <p>$15.00</p>
                  </div>
                  <div class="card-imgBlock">
                    <img src="images/CAMPUS X BAD BUNNY BEIGE.jfif">
                  </div>
                  <div class="card-footer">
                    <h5>Piy piy</h5>
                    <p>Piri piri</p>
                  </div>
                </div>
              </div>
              <div class="sneaker" draggable="false">
                <div class="mycard">
                  <div class="card-header">
                    <img src="images/nike.png">
                    <p>$15.00</p>
                  </div>
                  <div class="card-imgBlock">
                    <img src="images/CAMPUS X BAD BUNNY BEIGE.jfif">
                  </div>
                  <div class="card-footer">
                    <h5>Piy piy</h5>
                    <p>Piri piri</p>
                  </div>
                </div>
              </div>
              <div class="sneaker" draggable="false">
                <div class="mycard">
                  <div class="card-header">
                    <img src="images/nike.png">
                    <p>$15.00</p>
                  </div>
                  <div class="card-imgBlock">
                    <img src="images/CAMPUS X BAD BUNNY BEIGE.jfif">
                  </div>
                  <div class="card-footer">
                    <h5>Piy piy</h5>
                    <p>Piri piri</p>
                  </div>
                </div>
              </div>
              <div class="sneaker" draggable="false">
                <div class="mycard">
                  <div class="card-header">
                    <img src="images/nike.png">
                    <p>$15.00</p>
                  </div>
                  <div class="card-imgBlock">
                    <img src="images/CAMPUS X BAD BUNNY BEIGE.jfif">
                  </div>
                  <div class="card-footer">
                    <h5>Piy piy</h5>
                    <p>Piri piri</p>
                  </div>
                </div>
              </div>
              <div class="sneaker" draggable="false">
                <div class="mycard">
                  <div class="card-header">
                    <img src="images/nike.png">
                    <p>$15.00</p>
                  </div>
                  <div class="card-imgBlock">
                    <img src="images/CAMPUS X BAD BUNNY BEIGE.jfif">
                  </div>
                  <div class="card-footer">
                    <h5>Piy piy</h5>
                    <p>Piri piri</p>
                  </div>
                </div>
              </div>
            <!-- <img src="images/olga.jpg" alt="img" draggable="false">
            <img src="images/maria.jpg" alt="img" draggable="false">
            <img src="images/tatyana.jpg" alt="img" draggable="false">
            <img src="images/daria.jpg" alt="img" draggable="false">
            <img src="images/olga.jpg" alt="img" draggable="false">
            <img src="images/maria.jpg" alt="img" draggable="false">
            <img src="images/tatyana.jpg" alt="img" draggable="false">
            <img src="images/daria.jpg" alt="img" draggable="false">
            <img src="images/man.jpg" alt="img" draggable="false"> -->
          </div>
          <i id="rightBottom" class="fa-solid fa-angle-right"></i>
        </div>
      </div>
    </div>
  </section>

 

  <?php include("app/include/footer.php"); ?>









  <div class="modal fade" id="signinModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header myModalHeader">
          
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <h1 class="modal-title fs-5" id="exampleModalLabel">Sign In</h1>
        </div>
        <div class="modal-body">
          <form method="post" action="app/controllers/users.php">
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Email:</label>
              <input type="text" class="form-control" id="recipient-name" name="email-signin">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Password:</label>
              <!-- <textarea class="form-control" id="message-text"></textarea> -->
              <input type="password" class="form-control" id="message-text" name="pass-signin">
            </div>
            <input type="submit" class="btn btn-primary" value="Sign In" name="signInBtn"></input>
          </form>
        </div>
        <div class="modal-footer myModalFooter">
         
          <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
        
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
          <form method="post" action="app/controllers/users.php">
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Username:</label>
              <input type="text" class="form-control" id="recipient-name" name="username-signup">
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Email:</label>
              <input type="email" class="form-control" id="recipient-name" name="email-signup">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Password:</label>
              <!-- <textarea class="form-control" id="message-text"></textarea> -->
              <input type="password" class="form-control" id="message-text" name="pass1-signup">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Confirm password:</label>
              <!-- <textarea class="form-control" id="message-text"></textarea> -->
              <input type="password" class="form-control" id="message-text" name="pass2-signup">
            </div>
            <input type="submit" class="btn btn-primary" value="Sign Up" name="signUpBtn"></input>
          </form>
        </div>
        <div class="modal-footer myModalFooter">
         
          <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
         
          <p data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#signinModal">I already have an account</p>
        </div>
      </div>
    </div>
  </div>

  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/sliderTop.js"></script>
  <script src="assets/js/sliderBottom.js"></script>
  <script src="index.js"></script>
</body>

</html>