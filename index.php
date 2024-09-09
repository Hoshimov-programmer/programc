<?php include "path.php";
include "db.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="httpss://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap">
    <title>My blog</title>
  </head>
  <body>

<?php include("header.php"); ?>

<!-- Карусель -->
<div class="container">
  <div class="row">
    <h2 class="slider-title">Топ публикации</h2>
  </div>
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="picture/image1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption-hack carousel-caption d-none d-md-block">
          <h5><a href="">First slide label</a></h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="picture/image2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption-hack carousel-caption d-none d-md-block">
          <h5><a href="">First slide label</a></h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="picture/image3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption-hack carousel-caption d-none d-md-block">
          <h5><a href="">First slide label</a></h5>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<!-- Карусель -->
<!-- main -->
<div class="container">
  <div class="content row">
    <!-- main content -->
    <div class="main-content col-md-9 col-12">
        <h2>Последние публикации</h2>
        <div class="post row">
          <div class="img col-12 col-md-4">
            <img src="picture/image4.jpg" alt="" class="img-thumbnail">
          </div>
          <div class="post_text col-12 col-md-8">
            <h3>
              <a href="#">Прикольная статья на тему динамического сайта...</a>
            </h3>
            <i class="far fa-user">Имя автора</i>
            <i class="far fa-calendar">Mar 11, 2019</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Exercitarionem optio possimus a inventore maxime laborum.
            </p>
          </div>
        </div>
        <div class="post row">
          <div class="img col-12 col-md-4">
            <img src="picture/image5.jpeg" alt="" class="img-thumbnail">
          </div>
          <div class="post_text col-12 col-md-8">
            <h3>
              <a href="#">Прикольная статья на тему динамического сайта...</a>
            </h3>
            <i class="far fa-user">Имя автора</i>
            <i class="far fa-calendar">Mar 11, 2019</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Exercitarionem optio possimus a inventore maxime laborum.
            </p>
          </div>
        </div>
        <div class="post row">
          <div class="img col-12 col-md-4">
            <img src="picture/image4.jpg" alt="" class="img-thumbnail">
          </div>
          <div class="post_text col-12 col-md-8">
            <h3>
              <a href="#">Прикольная статья на тему динамического сайта...</a>
            </h3>
            <i class="far fa-user">Имя автора</i>
            <i class="far fa-calendar">Mar 11, 2019</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Exercitarionem optio possimus a inventore maxime laborum.
            </p>
          </div>
        </div>
        <div class="post row">
          <div class="img col-12 col-md-4">
            <img src="picture/image5.jpeg" alt="" class="img-thumbnail">
          </div>
          <div class="post_text col-12 col-md-8">
            <h3>
              <a href="#">Прикольная статья на тему динамического сайта...</a>
            </h3>
            <i class="far fa-user">Имя автора</i>
            <i class="far fa-calendar">Mar 11, 2019</i>
            <p class="preview-text">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Exercitarionem optio possimus a inventore maxime laborum.
            </p>
          </div>
        </div>
      </div>
      <!-- Sidebar content -->
      <div class="sidebar col-md-3 col-12">
        <div class="section search">
          <h3>Поиск</h3>
          <form action="/" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="Введите искомое слово...">
          </form>
        </div>


        <div class="section topics">
          <h3>Категории</h3>
          <ul>
            <li><a href="#">Программирование</a></li>
            <li><a href="#">Дизайн</a></li>
            <li><a href="#">Визуализация</a></li>
            <li><a href="#">Кейсы</a></li>
            <li><a href="#">Мотивация</a></li>
          </ul>
        </div>

    </div>
  </div>
</div>
<!-- main -->


<?php include("footer.php"); ?>


</body>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script> -->
</html>
