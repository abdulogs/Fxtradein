<?php require_once "classes/app.php"; ?>
<?php require_once "classes/database.php"; ?>

<?php app::isLogout("id", "login.php"); ?>

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

<style>
  .tradingview-widget{
    width:100% !important;
  }

  iframe{
    border:none !important;
  }
</style>

<body class="bg-light">

  <?php app::component("header"); ?>

  <?php $user = DB::exists("users", ["id","balance","status"], ["id" => app::getSession("id")]); ?>

  <main class="container mt-5 pt-5">
      <div class="row">

      <?php if($user["status"] == 0): ?>
        <div class="col-sm-12 mt-5 pt-5 pb-5 pb-5 text-center">
          <br><br><br><br>
          <h1 class="ti-close border d-inline br-50 p-3 text-danger"></h1>
          <h2 class="mt-5">Your account in not activated yet!</h2>
          <p>
            Please contact to the admin for account activation
          </p>
          <b>Contact email:</b> <?php echo app::getEmail(); ?>
          <br><br><br><br>
          <br><br><br><br>
        </div>
      <?php endif; ?>

      <?php if($user["status"] == 1): ?>
        <div class="col-sm-12 ">
          <b>BALANCE : </b>  $ <?php echo $user["balance"]; ?> 	&nbsp;	&nbsp;| 	&nbsp;	&nbsp; EQUITY :  $	&nbsp;	&nbsp;| 
          &nbsp;	&nbsp; FREE MARGIN : 0 $
        </div>
        <div class="col-sm-12">
          <h3 class="mt-5"><b>Ticker</b></h3>
          <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
          </div>
          <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
            {
              "symbols": [{
                  "proName": "FOREXCOM:SPXUSD",
                  "title": "S&P 500"
                },
                {
                  "proName": "FOREXCOM:NSXUSD",
                  "title": "Nasdaq 100"
                },
                {
                  "proName": "FX_IDC:EURUSD",
                  "title": "EUR/USD"
                },
                {
                  "proName": "BITSTAMP:BTCUSD",
                  "title": "BTC/USD"
                },
                {
                  "proName": "BITSTAMP:ETHUSD",
                  "title": "ETH/USD"
                }
              ],
              "colorTheme": "light",
              "isTransparent": false,
              "locale": "en"
            }
          </script>
          <!-- TradingView Widget END -->
        </div>
        <div class="col-sm-12">
        <h3 class="mt-5"><b>Trading views</b></h3>

     


      <!-- TradingView Chart BEGIN -->
      <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
      <script type="text/javascript">
      var tradingview_embed_options = {};
      tradingview_embed_options.width = '100%';
      tradingview_embed_options.height = '400';
      tradingview_embed_options.chart = 'GptgA9A3';
      new TradingView.chart(tradingview_embed_options);
      </script>

        </div>
        <div class="col-sm-6">
          <h3 class="mt-5"><b>Technical Analysis </b></h3>
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
              {
                "interval": "1m",
                "isTransparent": false,
                "width": "100%",
                "height": "400",
                "symbol": "NASDAQ:AAPL",
                "showIntervalTabs": true,
                "locale": "en",
                "colorTheme": "light"
              }
            </script>
          </div>
          <!-- TradingView Widget END -->
        </div>
        <div class="col-sm-6">
            <h3  class="mt-5"><b>Market Overview  </b></h3>
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
           <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
              {
                "colorTheme": "light",
                "dateRange": "12M",
                "showChart": true,
                "locale": "en",
                "largeChartUrl": "",
                "isTransparent": false,
                "showSymbolLogo": true,
                "width": "100%",
                "height": "400",
                "plotLineColorGrowing": "rgba(33, 150, 243, 1)",
                "plotLineColorFalling": "rgba(33, 150, 243, 1)",
                "gridLineColor": "rgba(240, 243, 250, 1)",
                "scaleFontColor": "rgba(120, 123, 134, 1)",
                "belowLineFillColorGrowing": "rgba(33, 150, 243, 0.12)",
                "belowLineFillColorFalling": "rgba(33, 150, 243, 0.12)",
                "symbolActiveColor": "rgba(33, 150, 243, 0.12)",
                "tabs": [{
                    "title": "Indices",
                    "symbols": [{
                        "s": "FOREXCOM:SPXUSD",
                        "d": "S&P 500"
                      },
                      {
                        "s": "FOREXCOM:NSXUSD",
                        "d": "Nasdaq 100"
                      },
                      {
                        "s": "FOREXCOM:DJI",
                        "d": "Dow 30"
                      },
                      {
                        "s": "INDEX:NKY",
                        "d": "Nikkei 225"
                      },
                      {
                        "s": "INDEX:DEU30",
                        "d": "DAX Index"
                      },
                      {
                        "s": "FOREXCOM:UKXGBP",
                        "d": "FTSE 100"
                      }
                    ],
                    "originalTitle": "Indices"
                  },
                  {
                    "title": "Commodities",
                    "symbols": [{
                        "s": "CME_MINI:ES1!",
                        "d": "S&P 500"
                      },
                      {
                        "s": "CME:6E1!",
                        "d": "Euro"
                      },
                      {
                        "s": "COMEX:GC1!",
                        "d": "Gold"
                      },
                      {
                        "s": "NYMEX:CL1!",
                        "d": "Crude Oil"
                      },
                      {
                        "s": "NYMEX:NG1!",
                        "d": "Natural Gas"
                      },
                      {
                        "s": "CBOT:ZC1!",
                        "d": "Corn"
                      }
                    ],
                    "originalTitle": "Commodities"
                  },
                  {
                    "title": "Bonds",
                    "symbols": [{
                        "s": "CME:GE1!",
                        "d": "Eurodollar"
                      },
                      {
                        "s": "CBOT:ZB1!",
                        "d": "T-Bond"
                      },
                      {
                        "s": "CBOT:UB1!",
                        "d": "Ultra T-Bond"
                      },
                      {
                        "s": "EUREX:FGBL1!",
                        "d": "Euro Bund"
                      },
                      {
                        "s": "EUREX:FBTP1!",
                        "d": "Euro BTP"
                      },
                      {
                        "s": "EUREX:FGBM1!",
                        "d": "Euro BOBL"
                      }
                    ],
                    "originalTitle": "Bonds"
                  },
                  {
                    "title": "Forex",
                    "symbols": [{
                        "s": "FX:EURUSD"
                      },
                      {
                        "s": "FX:GBPUSD"
                      },
                      {
                        "s": "FX:USDJPY"
                      },
                      {
                        "s": "FX:USDCHF"
                      },
                      {
                        "s": "FX:AUDUSD"
                      },
                      {
                        "s": "FX:USDCAD"
                      }
                    ],
                    "originalTitle": "Forex"
                  }
                ]
              }
            </script>
          </div>
          <!-- TradingView Widget END -->
        </div>
        <div class="col-sm-12 mb-5">
          <h3 class="mt-5"><b>Forex Screener</b></h3>
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
              {
                "width": "100%",
                "height": "400",
                "defaultColumn": "overview",
                "defaultScreen": "general",
                "market": "forex",
                "showToolbar": true,
                "colorTheme": "light",
                "locale": "en"
              }
            </script>
          </div>
          <!-- TradingView Widget END -->
        </div>
        <div class="col-sm-12 mb-5">
          <h3 lass="mt-5"><b>Forex Cross Rates</b></h3>
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
              {
                "width": "100%",
                "height": "400",
                "currencies": [
                  "EUR",
                  "USD",
                  "JPY",
                  "GBP",
                  "CHF",
                  "AUD",
                  "CAD",
                  "NZD",
                  "CNY"
                ],
                "isTransparent": false,
                "colorTheme": "light",
                "locale": "en"
              }
            </script>
          </div>
          <!-- TradingView Widget END -->
        </div>   
        <div class="col-sm-12 mb-5">
          <h3 lass="mt-5"><b>Cryptocurrency Market</b></h3>
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
              {
                "width": "100%",
                "height": "400",
                "defaultColumn": "overview",
                "screener_type": "crypto_mkt",
                "displayCurrency": "USD",
                "colorTheme": "light",
                "locale": "en"
              }
            </script>
          </div>
          <!-- TradingView Widget END -->
        </div>
        <div class="col-sm-12 mb-5">
          <h3 class="mt-5"><b>Symbol Overview</b></h3>
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div id="tradingview_c7057"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
            <script type="text/javascript">
              new TradingView.MediumWidget({
                "symbols": [
                  [
                    "Apple",
                    "AAPL"
                  ],
                  [
                    "Google",
                    "GOOGL"
                  ],
                  [
                    "Microsoft",
                    "MSFT"
                  ]
                ],
                "chartOnly": false,
                "width": "100%",
                "height": "400",
                "locale": "en",
                "colorTheme": "light",
                "gridLineColor": "#F0F3FA",
                "trendLineColor": "#2196F3",
                "fontColor": "#787B86",
                "underLineColor": "#E3F2FD",
                "isTransparent": false,
                "autosize": true,
                "container_id": "tradingview_c7057"
              });
            </script>
          </div>
          <!-- TradingView Widget END -->
        </div>
        <div class="col-sm-12">
          <h3 class="mt-5"><b>Single Ticker</b></h3>
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-single-quote.js" async>
              {
                "symbol": "FX:EURUSD",
                "width": "100%",
                "height": "400",
                "colorTheme": "light",
                "isTransparent": false,
                "locale": "en"
              }
            </script>
          </div>
          <!-- TradingView Widget END -->
        </div>
        <div class="col-sm-12">
          <h3 class="mt-5"><b>Mini Chart</b></h3>
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
              {
                "symbol": "FX:EURUSD",
                "width": "100%",
                "height": "400",
                "locale": "en",
                "dateRange": "12M",
                "colorTheme": "light",
                "trendLineColor": "#37a6ef",
                "underLineColor": "#E3F2FD",
                "isTransparent": false,
                "autosize": true,
                "largeChartUrl": ""
              }
            </script>
          </div>
          <!-- TradingView Widget END -->
        </div>
        <?php endif; ?>
      </div>
    </main>


  <?php app::component("footer"); ?>

</body>

</html>
