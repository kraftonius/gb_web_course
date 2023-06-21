<?php

$name = "Котейко";
$profession = "Программист";
$city_country= "Котейск, Россия";
$email="kot@ya.ru";
$phone="+79871234567";


$arr = array( array("PHP", "55%"),
                  array("SQL", "35%"),
                  array("JavaScript", "90%"),
                  array("GitHub", "70%")
            );


$job_exp = array (
array( "KotikiLabs","Google","Microsoft"),
array( "2020 - настоящее время","2016 - 2020","2010 - 2016"),  
array( "Разработка Табличного редактора KotikiTables","Разработка BackEnd Google Sheets","Разработка алгоритмов для MS Excel")
                );


?>



<!DOCTYPE html>
<html>
  <head>
    <title>Мое резюме</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=jue6mPOp4-D2YWzvMNFXZH9wYemtgj_PoxSoMnocMcU0QP68M0qAeDvfaqzZFhD2Z-c3-I9h2u4JMsXPAONyNyavN9td6CSNJQ8OK4DdccXWaRzTSdGQKRoTfKvwVHJHLmHvO046LCg-GeXp8msUerM083_K4pXNnyzAFivp3TA0xw7HfbGo_QCbXehRoWHrdrkv9qw8BFulTY4D7210fH986shcHdW5wYPXTcdZwJ4IjjIa73h3OmBZu5aGoz9hOp7RyqGUCeNNFZwPJkHYie6LVYeGu5BDm0KU2zAZYTk4A1AcgMlsOHBxJCKqA5FNPwLh0RuONVOjQKOGVScGkC5ojYJ652DZOKF_90lvUeyAhFK0f4rN7wlFY9v2m74bApD_vr1D0qwPK-rJ7IqclXHsyBOQ8b0SVBBGkvOoJDQuSMj6ju_VJ_Vg19yMIpEXKH-NbNu06iJm107C7gQEQ6O1JohxWMVLjQx3Uff-PIp4j--9ELXNv3ur8V33DM2F--PvsqWODHHfhZWpcqoF_yJ5I7e59qU2YKMrks9VU8jMGvCW0ECVm9vNiwSivWSSR_zWcFO0g6L3LetyV1XPA2N19LYi8vjuqt5dbjjnXAGOZwFNO9bVMjvUW6fQS5TWtJ-rjlMYln9iMhlI9KLxqoKGgyUwYrjWJgI6ZmWDyfy3_BVr7kX9DYhNKUR2gxdS41rWEru1xs_jH3LudAcgeG-fCVvH2o9_MoEv46aKzBmDRwT4v95fyZiltSSPQUqb1FoBMlWKX1yW_-LBYREhw8mQxIxM9SYFXPzkal6ibYZ9KgHr1s94d9dLBL8j1Qml18Cau-fI_FJBUew1HDZ8R6FiheesaXfMkmXBABMmjeOS0pUU0Xicv9mZ-yM399qPBoBkazUJBCJz3E0IT9uXk9hiFrqc0qPM3hC7tTk8ftHBC9lGsYP1HvpaZ5TUNydZDraPqftO2NOjusoJG6iDZMjp1HpliE-Ghj5LWWoEaBL5TjQOncHSSdbZur3ic9m8-FL1YGJPaCLaUyLiOXZaLDNhNiFB6zsE9qLwToJbh60" charset="UTF-8"></script><style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: 'Jost', sans-serif;}
    </style>
  </head>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2><?= $name;?> </h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $profession;?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $city_country;?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $email;?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $phone;?></p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
          <p><?= $arr[0][0];?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?= $arr[0][1];?>"><?= $arr[0][1];?></div>
          </div>
          <p><?= $arr[1][0];?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?= $arr[1][1];?>">
              <div class="w3-center w3-text-white"><?= $arr[1][1];?></div>
            </div>
          </div>
          <p><?= $arr[2][0];?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?= $arr[2][1];?>"><?= $arr[2][1];?></div>
          </div>
          <p><?= $arr[3][0];?></p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?= $arr[3][1];?>"><?= $arr[3][1];?></div>
          </div>
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>
          <p>Английский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p>Испанский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
          </div>
          <p>Немецкий</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?= $job_exp[0][0];?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?= $job_exp[1][0];?></h6>
          <p><?= $job_exp[2][0];?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?= $job_exp[0][1];?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?= $job_exp[1][1];?></h6>
          <p><?= $job_exp[2][1];?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?= $job_exp[0][2];?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?= $job_exp[1][2];?></h6>
          <p><?= $job_exp[2][2];?></p>
        </div>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>gb.ru</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
          <p>Web Development! All I need to know in one place</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>London Business School</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
          <p>Master Degree</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>School of Coding</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
          <p>Bachelor Degree</p><br>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
 <!-- End footer -->
 </footer>

</body>
</html>
