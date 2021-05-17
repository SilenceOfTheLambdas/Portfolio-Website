<!-- 
  Author: Callum-James Smith (sudo-make)
  Date Created: 20-11-2019
  Last Updated: 23-01-2021
 -->
<!DOCTYPE html>
<html class="no-js" lang="en">
<!-- 
                                                         ____________
                                 (`-..________....---''  ____..._.-`
                                  \\`._______.._,.---'''     ,'
                                  ; )`.      __..-'`-.      /
                                 / /     _.-' _,.;;._ `-._,'
                                / /   ,-' _.-'  //   ``--._``._
                              ,','_.-' ,-' _.- (( =-    -. `-._`-._____
                            ,;.''__..-'   _..--.\\.--'````--.._``-.`-._`.
             _          |\,' .-''        ```-'`---'`-...__,._  ``-.`-.`-.`.
  _     _.-,'(__)\__)\-'' `     ___  .          `     \      `--._
,',)---' /|)          `     `      ``-.   `     /     /     `     `-.
\_____--.  '`  `               __..-.  \     . (   < _...-----..._   `.
 \_,--..__. \\ .-`.\----'';``,..-.__ \  \      ,`_. `.,-'`--'`---''`.  )
           `.\`.\  `_.-..' ,'   _,-..'  /..,-''(, ,' ; ( _______`___..'__
                   ((,(,__(    ((,(,__,'  ``'-- `'`.(\  `.,..______   SSt
                                                      ``--------..._``--.__
                                                      Here be dragons.....
 -->
<head>
  <title>$ ls ~/ | Callum-James Smith</title>
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- include Google hosted jQuery Library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <!-- Obtained from https://www.jqueryscript.net/menu/Highlight-Nav-Bootstrap-jQuery-Dynamic-Menu.html -->
  <script src="js/dynamic-menu.js"></script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,800" />
  <!-- Below is the API for Fontawesome, this provides some icons that allow for quicker load times and better responsiveness -->
  <script src="https://kit.fontawesome.com/6598dc23bc.js" crossorigin="anonymous"></script>
  <!-- These are the css files for the website, bootstrap.css has the complete bootstrap suite.-->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <!-- This css file overrides the defaults set by bootstrap -->
  <link rel="stylesheet" href="css/main.css" />

  <!-- reCaptcha3 -->
  <script src="https://www.google.com/recaptcha/api.js?render=6Lf4YTcaAAAAACveZh4vo9iQU2OB1-PiWyCsX-cV"></script>
  <script src="https://www.google.com/recaptcha/api.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.0/anime.min.js"></script>
  <!-- Video Wallpaper -->
  <script src="https://www.gordonmac.com/wp-content/themes/2016/vendor/vide/jquery.vide.min.js"></script>
</head>

<body>
  <?php
  if (isset($_GET['contact'])) {
    if ($_GET['contact'] == "success") {
      echo ("<div class='alert alert-success'>Thanks for contacting</div>");
    }
  }
  ?>
  <!-- Navigation bar/header -->
  <div class="container-fluid home-page">
    <header class="heropanel--video" data-vide-bg="mp4: ./video/Website_Background_Video.mp4, poster: ./images/video_poster.png" data-vide-options="posterType: png, loop: true, muted: true, position: 50% 50%">
      <nav class="navbar navbar-expand-lg navbar-light">
        <!-- Start of navigation -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item navigation-links">
              <a href="index.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item navigation-links">
              <a href="#" class="nav-link" data-toggle="modal" data-target="#aboutModal">About me</a>
            </li>
            <li class="nav-item navigation-links">
              <a href="#" class="nav-link" data-toggle="modal" data-target="#contactModal">Contact</a>
            </li>
          </ul>
          <script>
            $("#navbarSupportedContent").dynamicMenu();
          </script>
      </nav> <!-- End of navigation -->
        <div class="jumbotron demo">
          <div class="jumbo-info">
            <h1 class="display-4">Callum-James Smith</h1>
            <p class="lead">Student <i class="fa fa-university" aria-hidden="true"></i> and Game Developer <i class="fa fa-gamepad" aria-hidden="true"></i></p>
            <div class="btn" aria-label="Social media links">
              <button type="button" class="btn btn-light btn-social">
                <a class="text-dark" href="https://www.linkedin.com/in/callum-james-smith/" aria-label="External link to my LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                <span>LinkedIn Profile</span>
              </button>
              <button type="button" class="btn btn-light btn-social">
                <a class="text-dark" href="https://github.com/sudo-make" aria-label="External link to my GitHub page"><i class="fa fa-github" aria-hidden="true"></i></a>
                <span>GitHub Profile</span>
              </button>
            </div>
          </div>
        </div>
        <!-- Project thingy -->
        <div class="folder" id="js_folder">
          <div class="folder-summary" id="js_toggle-folder">
            <div class="folder-summary__start">
              <button class="folder-collapse-button" id="js_folder-collapse-button">
                <svg id="js_folder-collapse-button-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up">
                  <polyline points="18 15 12 9 6 15"></polyline>
                </svg>
              </button>
              <div class="folder-summary__file-count" id="js_folder-summary-amount">
                <span class="folder-summary__file-count__amount">6</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder">
                  <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
                </svg>
              </div>
            </div>
            <div class="folder-summary__details">
              <div class="folder-summary__details__name">
                Projects
              </div>
              <div class="folder-summary__details__share">
                Widget Design by
                <a class="shared-user" href="https://dribbble.com/7ahang" target="_blank" rel="noopener noreferrer">
                  <svg class="shared-user__avatar" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="12" fill="#1C213E" />
                    <circle cx="12" cy="12" fill="#BFBFC0" r="6.168" />
                    <circle cx="12.561" cy="11.439" r="5.607" fill="url(#paint0_radial)" fill-opacity=".5" />
                    <defs>
                      <radialGradient id="paint0_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="rotate(109.486 3.244 10.282) scale(7.73263)">
                        <stop stop-color="#758EA9" />
                        <stop offset="1" stop-color="#668097" stop-opacity="0" />
                      </radialGradient>
                    </defs>
                  </svg>
                  <span class="shared-user__name">7ahang</span>
                </a>
              </div>
            </div>
            <div class="folder-summary__end">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M6 12c0 1.657-1.343 3-3 3s-3-1.343-3-3 1.343-3 3-3 3 1.343 3 3zm9 0c0 1.657-1.343 3-3 3s-3-1.343-3-3 1.343-3 3-3 3 1.343 3 3zm9 0c0 1.657-1.343 3-3 3s-3-1.343-3-3 1.343-3 3-3 3 1.343 3 3z" /></svg>
            </div>
          </div>

          <ul class="folder-content" id="js_folder-content">
            <!-- Capstone Project -->
            <li class="folder-item js_folder-item">
              <div class="folder-item__icon">
                <img src="images/monogame_logo.png" alt="The logo for the MonoGame engine" style="width: 40px; height: 40px;">
              </div>
              <div class="folder-item__details">
                <div class="folder-item__details__name">
                  <a href="https://github.com/sudo-make/Capstone-Project">University Capstone Project</a>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#ecc31c" stroke-widt class="feather feather-star">
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                  </svg>
                </div>
                <div class="folder-item__details__date">A 2D A-RPG game being created using MonoGame; for my 3rd year capstone project.</div>
              </div>
            </li>
            <li class="folder-item js_folder-item">
              <div class="folder-item__icon">
              <svg width="2433" height="2500" viewBox="0 0 256 263" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin meet">
                  <path d="M166.872 131.237l45.91-79.275 22.184 79.275-22.185 79.256-45.909-79.256zm-22.376 12.874l45.916 79.262-79.966-20.486-57.77-58.776h91.82zm45.906-105.033l-45.906 79.275h-91.82l57.77-58.78 79.956-20.495zm65.539 65.18L227.933.06l-104.54 27.925-15.475 27.207-31.401-.225L0 131.244l76.517 76.259h.003l31.388-.232 15.497 27.207 104.528 27.92L255.94 158.22l-15.906-26.982 15.906-26.978z" fill="#222C37" /></svg>
              </div>
              <div class="folder-item__details">
                <div class="folder-item__details__name">
                  <a href="https://www.callum-jamessmith.com/Outlier.html">Outlier (CE318 Assignment) Click to play</a>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="640" height="480" viewBox="0 0 640 480" xml:space="preserve">
                    <desc>Created with Fabric.js 3.6.3</desc>
                    <defs>
                    </defs>
                    <g transform="matrix(0 2.21 -2.21 0 327.62 231.24)"  >
                    <linearGradient id="SVGID_75" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1 0 0 1 -50 -42.5)"  x1="0" y1="42.5" x2="100" y2="42.5">
                    <stop offset="0%" style="stop-color:rgba(41, 252, 205, 1);"/>
                    <stop offset="100%" style="stop-color:rgba(177, 134, 134, 1);"/>
                    </linearGradient>
                    <polygon style="stroke: rgb(0,0,0); stroke-width: 8; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: url(#SVGID_75); fill-rule: nonzero; opacity: 1;"  points="0,-42.5 50,42.5 -50,42.5 " />
                    </g>
                    </svg>
                </div>
                <div class="folder-item__details__date">A Realistic FPS survival game made with Unity 2018</div>
              </div>
            </li>
            <!-- Micro RPG -->
            <li class="folder-item js_folder-item">
              <div class="folder-item__icon">
                <svg width="2433" height="2500" viewBox="0 0 256 263" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin meet">
                  <path d="M166.872 131.237l45.91-79.275 22.184 79.275-22.185 79.256-45.909-79.256zm-22.376 12.874l45.916 79.262-79.966-20.486-57.77-58.776h91.82zm45.906-105.033l-45.906 79.275h-91.82l57.77-58.78 79.956-20.495zm65.539 65.18L227.933.06l-104.54 27.925-15.475 27.207-31.401-.225L0 131.244l76.517 76.259h.003l31.388-.232 15.497 27.207 104.528 27.92L255.94 158.22l-15.906-26.982 15.906-26.978z" fill="#222C37" /></svg>
              </div>
              <div class="folder-item__details">
                <div class="folder-item__details__name">
                  <a href="https://github.com/sudo-make/micro-rpg">Micro RPG</a>
                </div>
                <div class="folder-item__details__date">A 2D rougelike game I'm currently working on; again, made using Unity3D. ;)</div>
              </div>
            </li>
            <!-- Nihil -->
            <li class="folder-item js_folder-item">
              <div class="folder-item__icon">
                <svg width="2433" height="2500" viewBox="0 0 256 263" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin meet">
                  <path d="M166.872 131.237l45.91-79.275 22.184 79.275-22.185 79.256-45.909-79.256zm-22.376 12.874l45.916 79.262-79.966-20.486-57.77-58.776h91.82zm45.906-105.033l-45.906 79.275h-91.82l57.77-58.78 79.956-20.495zm65.539 65.18L227.933.06l-104.54 27.925-15.475 27.207-31.401-.225L0 131.244l76.517 76.259h.003l31.388-.232 15.497 27.207 104.528 27.92L255.94 158.22l-15.906-26.982 15.906-26.978z" fill="#222C37" /></svg>
              </div>
              <div class="folder-item__details">
                <div class="folder-item__details__name">
                  <a href="https://github.com/sudo-make/Nihil---Game">Nihil</a>
                </div>
                <div class="folder-item__details__date">
                  A 3D horror game made using Unity3D
                </div>
              </div>
            </li>
            <!-- Global Game Jam 2019 -->
            <li class="folder-item js_folder-item">
              <div class="folder-item__icon">
                <img src="images/GGJ00-RoundLogo-900x900.png" alt="The logo for Global Game Jam" style="width: 40px; height: 40px;">
              </div>
              <div class="folder-item__details">
                <div class="folder-item__details__name">
                  <a href="https://github.com/sudo-make/Global-Game-Jam-2019---Memories">Global Game Jam 2019</a>
                </div>
                <div class="folder-item__details__date">
                  My submission to the 2019 Global Game Jam event. This was also make in Unity3D; and was a team effort.
                </div>
              </div>
            </li>
            <!-- 2D Java "Bejeweled" clone-->
            <li class="folder-item js_folder-item">
              <div class="folder-item__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="6.527 4.399 290.829 540.906">
                  <path d="M285.104 430.945h-2.037v-1.14h5.486v1.14h-2.025v5.688h-1.424v-5.688zm10.942.297h-.032l-2.02 5.393h-.924l-2.006-5.393h-.024v5.393h-1.343v-6.828h1.976l1.86 4.835 1.854-4.835h1.969v6.828h-1.311l.001-5.393z" fill="#e76f00" />
                  <path d="M102.681 291.324s-14.178 8.245 10.09 11.035c29.4 3.354 44.426 2.873 76.825-3.259 0 0 8.518 5.341 20.414 9.967-72.63 31.128-164.376-1.803-107.329-17.743M93.806 250.704s-15.902 11.771 8.384 14.283c31.406 3.24 56.208 3.505 99.125-4.759 0 0 5.937 6.018 15.271 9.309-87.815 25.678-185.624 2.025-122.78-18.833" fill="#5382a1" />
                  <path d="M168.625 181.799c17.896 20.604-4.701 39.146-4.701 39.146s45.439-23.458 24.571-52.833c-19.491-27.395-34.438-41.005 46.479-87.934.001-.001-127.013 31.721-66.349 101.621" fill="#e76f00" />
                  <path d="M264.684 321.369s10.492 8.646-11.555 15.333c-41.923 12.7-174.488 16.535-211.314.507-13.238-5.76 11.587-13.752 19.396-15.429 8.144-1.766 12.798-1.437 12.798-1.437-14.722-10.371-95.157 20.363-40.857 29.166 148.084 24.015 269.944-10.814 231.532-28.14M109.499 208.617s-67.431 16.016-23.879 21.832c18.389 2.462 55.047 1.905 89.192-.956 27.906-2.354 55.928-7.358 55.928-7.358s-9.84 4.214-16.959 9.074c-68.475 18.01-200.756 9.631-162.674-8.79 32.206-15.568 58.392-13.802 58.392-13.802M230.462 276.231c69.608-36.171 37.425-70.932 14.96-66.248-5.506 1.146-7.961 2.139-7.961 2.139s2.045-3.202 5.947-4.588c44.441-15.624 78.619 46.081-14.346 70.521 0 0 1.079-.962 1.4-1.824" fill="#5382a1" />
                  <path d="M188.495 4.399s38.55 38.562-36.563 97.862c-60.233 47.567-13.735 74.689-.025 105.678-35.158-31.723-60.96-59.647-43.65-85.637 25.406-38.151 95.792-56.648 80.238-117.903" fill="#e76f00" />
                  <path d="M116.339 374.246c66.815 4.277 169.417-2.373 171.846-33.987 0 0-4.67 11.984-55.219 21.503-57.027 10.731-127.364 9.479-169.081 2.601.002-.002 8.541 7.067 52.454 9.883" fill="#5382a1" />
                  <path d="M105.389 495.049c-6.303 5.467-12.96 8.536-18.934 8.536-8.527 0-13.134-5.113-13.134-13.314 0-8.871 4.937-15.357 24.739-15.357h7.328l.001 20.135m17.392 19.623V453.93c0-15.518-8.85-25.756-30.188-25.756-12.457 0-23.369 3.076-32.238 6.999l2.56 10.752c6.983-2.563 16.022-4.949 24.894-4.949 12.292 0 17.58 4.949 17.58 15.181v7.678h-6.135c-29.865 0-43.337 11.593-43.337 28.993 0 15.018 8.878 23.554 25.594 23.554 10.745 0 18.766-4.437 26.264-10.929l1.361 9.221 13.645-.002zM180.824 514.672h-21.691l-26.106-84.96h18.944l16.198 52.199 3.601 15.699c8.195-22.698 13.992-45.726 16.891-67.898h18.427c-4.938 27.976-13.822 58.684-26.264 84.96M264.038 495.049c-6.315 5.467-12.983 8.536-18.958 8.536-8.512 0-13.131-5.113-13.131-13.314 0-8.871 4.947-15.357 24.748-15.357h7.341v20.135m17.39 19.623V453.93c0-15.518-8.871-25.756-30.186-25.756-12.465 0-23.381 3.076-32.246 6.999l2.557 10.752c6.985-2.563 16.041-4.949 24.906-4.949 12.283 0 17.579 4.949 17.579 15.181v7.678h-6.146c-29.873 0-43.34 11.593-43.34 28.993 0 15.018 8.871 23.554 25.584 23.554 10.752 0 18.77-4.437 26.28-10.929l1.366 9.221 13.646-.002zM36.847 529.099c-4.958 7.239-12.966 12.966-21.733 16.206L6.527 535.2c6.673-3.424 12.396-8.954 15.055-14.104 2.3-4.581 3.252-10.485 3.252-24.604v-96.995h18.478v95.666c-.001 18.875-1.51 26.5-6.465 33.936" fill="#e76f00" /></svg>
              </div>
              <div class="folder-item__details">
                <div class="folder-item__details__name">
                  <a href="https://github.com/sudo-make/Java-Game-CE203-A2-">2D Java "Bejeweled" clone</a>
                </div>
                <div class="folder-item__details__date">
                  This is a 2D game made using Java swing; as part of an assignment in my 2nd year at university.
                </div>
              </div>
            </li>
            <!-- Portfolio Website -->
            <li class="folder-item js_folder-item">
              <div class="folder-item__icon">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                  <g>
                    <g>
                      <g>
                        <path d="M108.382,0h23.077v22.8h21.11V0h23.078v69.044H152.57v-23.12h-21.11v23.12h-23.077L108.382,0L108.382,0z" />
                        <path d="M205.994,22.896h-20.316V0h63.72v22.896h-20.325v46.148h-23.078L205.994,22.896L205.994,22.896z" />
                        <path d="M259.511,0h24.063l14.802,24.26L313.163,0h24.072v69.044h-22.982V34.822l-15.877,24.549h-0.397l-15.888-24.549v34.222 h-22.58V0z" />
                        <path d="M348.72,0h23.084v46.222h32.453v22.822H348.72V0z" />
                      </g>
                    </g>
                  </g>
                  <g id="Guides_to_delete">
                    <g>
                      <polygon fill="#E34E26" points="107.125,470.727 74.012,99.297 437.703,99.297 404.549,470.755 255.769,512 		" />
                      <polygon fill="#EF662A" points="255.857,129.657 255.857,480.449 376.164,447.101 404.51,129.657 		" />
                      <polygon fill="#FFFFFF" points="141.761,175.217 154.041,312.978 311.936,312.978 306.637,372.066 255.799,385.811 205.057,372.085 201.664,334.146 155.937,334.146 162.476,407.282 255.787 433.199 349.219,407.282 361.744,267.429 195.706,267.429 191.538,220.777 365.732,220.777 365.873,220.777 369.953,175.217 		" />
                      <g>
                        <polygon fill="#EBEBEB" points="255.857,175.217 141.761,175.217 154.041,312.978 255.857,312.978 255.857,267.429 195.706,267.429 191.538,220.777 255.857,220.777 			" />
                        <polygon fill="#EBEBEB" points="255.857,385.791 255.799,385.811 205.057,372.085 201.664,334.146 155.937,334.146 162.476,407.282 255.787,433.199 255.857,433.179 			" />
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <div class="folder-item__details">
                <div class="folder-item__details__name">
                  <a href="https://github.com/sudo-make/Portfolio-Website">Portfolio Website</a>
                </div>
                <div class="folder-item__details__date">
                  If your seeing this; then you already know all about it :) This website was created using Bootstrap, JQuery, SCSS, PHP and HTML5
                </div>
              </div>
            </li>
          </ul>
        </div>
    </header>
  </div>

  <!-- About Modal -->
  <div class="modal fade" id="aboutModal" tabindex="0" role="dialog" aria-labelledby="aboutModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="aboutModalTitle">About Me</h5>
          <button type="button" class="close" data-dismiss="modal" tabindex="0" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card mb-3" style="max-width: 650px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="images/profile_img.gif" class="card-img" alt="A GIF of a disco cockroach.">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Hey!</h5>
                  <p class="card-text">3rd year student at the university of essex and game developer.</p>
                  <p class="small">I also love dragons! <i class="fas fa-dragon"></i></p>
                </div>
              </div>
            </div>
            <div class="card text-center card-about">
              <!-- The card bodies, these are shown when user clicks on corresponding tab -->
              <div class="card-body">
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                    My name is Callum-James Smith; I am a 3rd year student at the university of essex; studying computer science.
                    I make games, create websites, and mess around with linux.
                  </div>
                </div>
              </div> <!-- End of content in tabbed pane -->
            </div> <!-- End of Tabbed Pane Body -->
            <!-- C.V Download -->
            <button type="submit" class="btn btn-outline-info" onclick="window.open('https://docs.google.com/document/d/e/2PACX-1vTeBsoP5b7dVH8GO_JlLbKgrj0-iR3od015JFOtAfJOrl8_5Gre6IbRK3U9JjVkObbzd-7RjRrupS_K/pub')"><i class="far fa-file"></i> View my C.V</button>
          </div> <!-- End of Tabbed Pane -->
        </div> <!-- End of Modal Body -->
      </div> <!-- End of Modal Content -->
    </div> <!-- End of Modal Dialog -->
  </div><!-- End of About Modal -->

  <!-- Contact Modal -->
  <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Send me a message</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="contact_body">
          <div id="contact_results" class="alert-danger"></div>
          <form id="contact_form" data-sitekey="6Lf4YTcaAAAAACveZh4vo9iQU2OB1-PiWyCsX-cV" data-callback='onSubmit' data-action='submit' method="post" action="contact.php">
            <div class="form-group">
              <label for="from-email" class="col-form-label">Your email:</label>
              <input type="email" class="form-control" id="user_email" name="user_email" required="true">
            </div>
            <div class="form-group">
              <label for="subject" class="col-form-label">Subject:</label>
              <input type="text" class="form-control" id="subject" name="subject" required="true">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Message:</label>
              <textarea class="form-control" id="message" name="message" required="true"></textarea>
            </div>
            <button type="submit" class="btn btn-outline-info">Send</button>
            <input type="hidden" id="token" name="token">
          </form>
          <!-- Start jQuery code -->
          <script>
            function onSubmit(token) {
              document.getElementById("contact_form").submit();
            }
          </script>
        </div>
      </div>
    </div>
  </div> <!-- End of Contact Modal -->

  <script src="js/jquery.min.js"></script>
  <script src="js/app.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script> <!-- Bootstrap Javascript stuff, animations etc. -->
  <!-- Folder Effect -->
  <script src="js/folder_effect.js"></script>

  <!-- Cool background effect -->
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/TweenLite.min.js"></script>
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/EasePack.min.js"></script>
  <script src="js/effect.js"></script>
</body>

</html>