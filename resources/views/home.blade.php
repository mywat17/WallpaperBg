

<!doctype html>
<html lang="en">
  <head>
    <title>WallpaperBg</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/body.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/adaptive.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/scroll.js"></script>
    <script type="text/javascript" src="js/grid.js"></script>
    <script type="text/javascript" src="js/pagination.js"></script>
    <script type="text/javascript" src="js/panel.js"></script>
    <script type="text/javascript" src="js/searchbar.js"></script>

  </head>
  <body>
    <div class="header">
      <div class="wrapper">
        <div class="logo">
          <a href="main.html">
          <img id="logo" src="assets\WallpaperBg.png" alt="">
          </a>
        </div>
        <div class="searchbar">
            <input class="search input" placeholder="Search"/>
            <button type="button" class="search button"name="button"><span class = "search button"></span></button>
        </div>
        <div class="lgbar">
          <div class="lgwrapper">
          <div class="flexVertical">
            <div id="lg">En</div>
            <div class="dropdown-content">
              <div class="lg_button_option"><a href="#"><img src="assets\English.png" alt=""></a></div>
              <div class="lg_button_option"><a href="#"><img src="assets\Ukrainian.png" alt=""></a></div>
            </div>
          </div>
            <img src="assets\arrow.png" id="arrow" alt="">
          </div>
        </div>
      </div>
      <div class="wrapper active">
        <div class="searchbar active">
          <button type="button" class="search button"name="button"><span class = "search button"></span></button>
          <input class="search input" placeholder="Search"/>
          <button type="button" class="cancel button"name="button"><span class ="cancel button"></span></button>
        </div>
      </div>


    </div>


    <div class="options panel">
        <div class="wrapperOptions">
          <div id="categoryName">Nature wallpaper HD</div>
          <div class="sort panel">
            <button type="button" class="sort button">Sort by :&nbsp;<span class="category sort">Date</span> <img class="sort arrow" src="assets\blue_arrow.png" alt=""></button>
            <div class="dropdown-content sort scrollmenu" id="e">
              <div class="lg_button_option"><a href="#">Lorem ipsum dolor</a></div>
              <div class="lg_button_option"><a href="#">ipsum </a></div>
              <div class="lg_button_option"><a href="#">dolor</a></div>
            </div>
          </div>
          <div class="category panel">
            <button type="button" class="category button">Category :&nbsp;<span class="category sort">All</span> <img class="sort arrow" src="assets\blue_arrow.png" alt=""></button>
            <div class="dropdown-content sort scrollmenu" id="e">
              <div class="lg_button_option"><a href="">All</a></div>
              @foreach($tags as $key => $data)
                <div class="lg_button_option"><a href="">{{$data->TagName}}</a></div>
              @endforeach
            </div>
          </div>
          <div class="grid panel">
            <img id="two" src="assets\blue_two_grid.png" alt="">
            <img id="four" src="assets\blue_four_grid.png" alt="">
            <img id="nine" src="assets\blue_nine_grid.png" alt=""></div>
        </div>
      </div>
    <div class="main content">

        <div class="left side">

          <div class="category menu">
            <div class="themes scrollmenu">
              <a href="">All<span>30</span></a>
              <br>
              @foreach($tags as $key => $data)
              <a href="">{{$data->TagName}}<span>10786</span></a>
                <br>
              @endforeach
            </div>
          </div>

          <div class="upbutton container"><img src="assets\up-arrow-button.png" alt=""></div>

        </div>
        <div class="right side">

          <div class="wallpaper grid">

            @foreach($images as $key => $data)
            <div class="wallpaper"> <a href="/page"><img src="data:image/jpeg;base64,{{base64_encode($data->Image)}}" alt=""></a></div>
            @endforeach

          </div>

          <div class="pagination">

            <div class="pagin-wrapper">
              <a class="pagin-link backward" href="#"><</a>
            </div>

            <div class="pagin-wrapper pagin-main-panel">
                <a href="#" class="pagin-link">1</a>
                <a href="#" class="pagin-link">2</a>
                <a href="#" class="pagin-link">3</a>
                <a href="#" class="pagin-link">4</a>
                <a href="#" class="pagin-link">5</a>
                <a href="#" class="pagin-link">6</a>
            </div>

            <div class="pagin-wrapper forward">
              <a class="pagin-link forward" href="#">></a>
            </div>

          </div>

        </div>

      </div>
    <div class="footer">
      <div class="license-area">© 2020–2025, WallpaperBg</div>
      <div class="filler-area">Desktop WallpaperBg, Backgrounds HD</div>
    </div>


  </body>
</html>
