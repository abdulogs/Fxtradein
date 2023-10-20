<?php require_once "classes/app.php"; ?>
<?php require_once "classes/database.php"; ?>

<?php app::isLogin("id", "home.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fxtradein | Home</title>
  <link rel="stylesheet" href="./assets/libs/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/libs/themify/themify.min.css">
  <link rel="stylesheet" href="assets/css/stylesheet.css">
</head>

<body class="main-bg">

  <?php app::component("header"); ?>

  <div class="container pt-5 pb-5">
    <div class="row align-items-center">
      <div class="col-sm-6 py-5">
        <h1>Welcome to <b>Fxtradein</b></h1>
      <p class="text-dark">Experience the smoothest most transparent trading experience</p>
        <div class="mt-4">
          <a href="signup.php" class="btn btn-outline-dark">Get started</a>
        </div>
      </div>
      <div class="col-sm-6 mt-100 p-5 text-center ">
      <img src="assets/images/1.png" class="img-fluid" alt="">
      </div>
    </div>
  </div>
  <div class="container pt-5">
  <h2 class="text-center mb-5 pb-5"><b>What makes us great</b></h2>
    <div class="row text-dark">
      <div class="col-sm-6 mb-5  pb-3">
        <div class="media d-flex align-content-center align-items-center">
          <span class="ti-map-alt p-3 font-30 br-50 border"></span>
          <div class="media-body m-0 p-0 ml-3">
            <h3 class="media-heading mb-2 m-0 font-25"><b>Trade Anywhere</b></h3>
            <p class="font-12 text-secondary m-0"> Whether on your phone, tablet or desktop, with fxtradein you can trade anywhere!</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 mb-5 pb-3">
        <div class="media d-flex align-content-center align-items-center">
          <i class="ti-bar-chart-alt p-3 font-30 br-50 border"></i>
          <div class="media-body m-0 p-0 ml-3">
            <h3 class="media-heading mb-2 m-0 font-25"><b>Advanced Charting</b></h3>
            <p class="font-12 text-secondary m-0"> Customize your trading experience</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 mb-5 pb-3">
        <div class="media d-flex align-content-center align-items-center">
          <i class="ti-wallet p-3 font-30 br-50 border"></i>
          <div class="media-body m-0 p-0 ml-3">
            <h3 class="media-heading mb-2 m-0 font-25"><b> Multiple Assets</b></h3>
            <p class="font-12 text-secondary m-0">Trade over 20+ different cryptocurrencies</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 mb-5 pb-3">
        <div class="media d-flex align-content-center align-items-center">
          <i class="ti-timer p-3 font-30 br-50 border"></i>
          <div class="media-body m-0 p-0 ml-3">
            <h3 class="media-heading mb-2 m-0 font-25"><b> Trade Whenever</b></h3>
            <p class="font-12 text-secondary m-0"> Our markets are open 24/7. Trade whenever you feel like it</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="pt-5 mt-5" id="benifits"></div>
  

  <div class="container pt-5 pb-5">
    <div class="row text-dark">
      <div class="col-sm-6">
        <img class="img-fluid" src="./assets/images/2.png">
      </div>
      <div class="col-sm-6">
        <h1 class="mb-5"><b>Benefits</b></h1>
        <div class="media align-items-center mb-3">
          <i class="ti-check-box mr-2 font-16 border p-2 br-50"></i>
          <div class="media-body">
            <p class="media-heading text-muted mb-0 f-20">Enjoy a sleek platform aimed at both beginners and experienced traders alike!</p>
          </div>
        </div>
        <div class="media align-items-center mb-3">
          <i class="ti-check-box mr-2 font-16 border p-2 br-50"></i>
          <div class="media-body">
            <p class="media-heading text-muted mb-0 f-20">
              Trade on multiple platforms, mobile, tablet or desktop</p>
          </div>
        </div>
        <div class="media align-items-center mb-3">
          <i class="ti-check-box mr-2 font-16 border p-2 br-50"></i>
          <div class="media-body">
            <p class="media-heading text-muted mb-0 f-20">
              Indulge in many different investment opportunities with over 20+ pairs</p>
          </div>
        </div>
        <div class="media align-items-center mb-3">
          <i class="ti-check-box mr-2 font-16 border p-2 br-50"></i>
          <div class="media-body">
            <p class="media-heading text-muted mb-0 f-20">
              Unlike some traditional investment platforms, you can trade here 24/7</p>
          </div>
        </div>
        <div class="media align-items-center mb-3">
          <i class="ti-check-box mr-2 font-16 border p-2 br-50"></i>
          <div class="media-body">
            <p class="media-heading text-muted mb-0 f-20">
              We offer transparent pricing of assets & easy and experienced traders alike!</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="pt-5 pb-5" id="about"></div>
  <div class="container pt-5 pb-5">
    <div class="row align-items-center">
      <div class="col-sm-6">
        <h1 class="mb-3"><b>ABOUT US</b></h1>
        <div class="media align-items-center mb-3">
          <i class="ti-info p-3 border mr-3 p-3 font-25 br-50"></i>
          <div class="media-body">
            <p class="media-heading text-muted mb-0 f-20">fxtradein provides top-notch quality cryptocurrency trading services, which have fulfilled the trading needs of clients since the foundation of the company in 2019. The value we provide is
              unequalled. In addition to the provision of enabling trading conditions to stimulate high gains for our customers, we also ensure the availability and safety of funds.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <img class="img-fluid" src="./assets/images/3.png">
      </div>
    </div>
  </div>
  <div class="pt-5 mt-5" id="faq"></div>
  <div class="container pt-5 pb-5">
    <div class="row align-items-center">
      <div class="col-sm-6">
        <img class="img-fluid" src="./assets/images/4.png">
      </div>
      <div class="col-sm-6">
        <h1 class="mb-3"><b>F.A.Q</b></h1>
        <div class="media align-items-center mb-2">
          <i class="ti-star font-30 mr-3"></i>
          <div class="media-body">
            <p class="media-heading mb-0 f-16">
              <a href="#" data-toggle="collapse" data-target="#faq1" class="btn btn-link pl-0 font-weight-bold shadow-none text-dark text-decoration-none btn-block text-left">How can I deposit funds?</a>
            </p>
            <div id="faq1" class="collapse pt-10 pb-10">
              Depositing funds can be easily done via nearly any credit/debit card. We also accept Bitcoin deposits.
              All you'll need to do is click the deposit button. The minimum amount to deposit via credit/debit card is $250 while the minimum Bitcoin deposit amount is 0.01 BTC.
            </div>
          </div>
        </div>
        <div class="media align-items-center mb-2">
          <i class="ti-star font-30 mr-3"></i>
          <div class="media-body">
            <p class="media-heading mb-0 f-16">
              <a href="#" data-toggle="collapse" data-target="#faq2" class="btn btn-link pl-0 font-weight-bold shadow-none text-dark text-decoration-none btn-block text-left"> How can I withdraw funds?</a>
            </p>
            <div id="faq2" class="collapse pt-10 pb-10">
              To withdraw funds, make sure that you are logged in and then click on the withdrawal button.
            </div>
          </div>
        </div>
        <div class="media align-items-center mb-2">
          <i class="ti-star font-30 mr-3"></i>
          <div class="media-body">
            <p class="media-heading mb-0 f-16">
              <a href="#" data-toggle="collapse" data-target="#faq3" class="btn btn-link pl-0 font-weight-bold shadow-none text-dark text-decoration-none btn-block text-left">How can I start trading?</a>
            </p>
            <div id="faq3" class="collapse pt-10 pb-10">
              To start trading, just register on our website and deposit funds into your account. Once your account is funded you can head over to the trading platform, choose a trading pair and open trades.
            </div>
          </div>
        </div>
        <div class="media align-items-center mb-2">
          <i class="ti-star font-30 mr-3"></i>
          <div class="media-body">
            <p class="media-heading mb-0 f-16">
              <a href="#" data-toggle="collapse" data-target="#faq4" class="btn btn-link pl-0 font-weight-bold shadow-none text-dark text-decoration-none btn-block text-left">What can I trade other than Bitcoin?</a>
            </p>
            <div id="faq4" class="collapse pt-10 pb-10">
              Our platform contains a multitude of all the popular cryptocurrency pairings. This includes Ethereum (ETH), Litecoin (LTC), Ethereum Classic (ETC) & much more.
            </div>
          </div>
        </div>
        <div class="media align-items-center mb-2">
          <i class="ti-star font-30 mr-3"></i>
          <div class="media-body">
            <p class="media-heading mb-0 f-16">
              <a href="#" data-toggle="collapse" data-target="#faq5" class="btn btn-link pl-0 font-weight-bold shadow-none text-dark text-decoration-none btn-block text-left"> Is KYC & AML required?</a>
            </p>
            <div id="faq5" class="collapse pt-10 pb-10">
              KYC & AML practices are a standard in most countries across the globe today. This helps protect us & our clients from any form of criminal activity. As such we are required to perform basic due diligence on our clientele as required in
              the form of KYC & AML practices.
            </div>
          </div>
        </div>
        <div class="media align-items-center mb-2">
          <i class="ti-star font-30 mr-3"></i>
          <div class="media-body">
            <p class="media-heading mb-0 f-16">
              <a href="#" data-toggle="collapse" data-target="#faq6" class="btn btn-link pl-0 font-weight-bold shadow-none text-dark text-decoration-none btn-block text-left"> What documentation is required for KYC AML verification?</a>
            </p>
            <div id="faq6" class="collapse pt-10 pb-10">
              Please provide clear photographs in colour of the following:
              * A valid state issued ID or passport
              * Proof of residence (a recent utility bill from the last 3 months)
              If you've used a credit or debit card to fund the account,
              * A picture of the front and back of the card in question.
              Feel free to cover the first 12 digits of the card, showing only the last 4 digits.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php app::component("footer"); ?>

</body>

</html>
