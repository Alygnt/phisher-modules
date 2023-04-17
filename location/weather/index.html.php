<html lang="en"><head>

    <meta charset="UTF-8">
    
  <link rel="apple-touch-icon" type="image/png" href="https://www.freefavicon.com/freefavicons/icons/flat-location-logo-152-234349.png">
  
  <link rel="shortcut icon" type="image/x-icon" href="https://www.freefavicon.com/freefavicons/icons/flat-location-logo-152-234349.png">
  
  <link rel="mask-icon" type="" href="https://www.freefavicon.com/freefavicons/icons/flat-location-logo-152-234349.png" color="#111">
  

  
    <title>Weather</title>
    <script src="https://unpkg.com/feather-icons"></script>
    
    
    
  <style>
  @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700,900&display=swap');
  
  :root {
      --gradient: linear-gradient( 135deg, #72EDF2 10%, #5151E5 100%);
  }
  
  * {
      -webkit-box-sizing: border-box;
              box-sizing: border-box;
      line-height: 1.25em;
  }
  
  .clear {
      clear: both;
  }
  
  body {
      margin: 0;
      width: 100%;
      height: 100vh;
      font-family: 'Montserrat', sans-serif;
      background-color: #343d4b;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center;
      -webkit-box-pack: center;
          -ms-flex-pack: center;
              justify-content: center;
  }
  
  .container {
      border-radius: 25px;
      -webkit-box-shadow: 0 0 70px -10px rgba(0, 0, 0, 0.2);
              box-shadow: 0 0 70px -10px rgba(0, 0, 0, 0.2);
      background-color: #222831;
      color: #ffffff;
      height: 400px;
  }
  
  .weather-side {
      position: relative;
      height: 100%;
      border-radius: 25px;
      background-image: url("https://images.unsplash.com/photo-1559963110-71b394e7494d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=675&q=80");
      width: 300px;
      -webkit-box-shadow: 0 0 20px -10px rgba(0, 0, 0, 0.2);
              box-shadow: 0 0 20px -10px rgba(0, 0, 0, 0.2);
      -webkit-transition: -webkit-transform 300ms ease;
      transition: -webkit-transform 300ms ease;
      -o-transition: transform 300ms ease;
      transition: transform 300ms ease;
      transition: transform 300ms ease, -webkit-transform 300ms ease;
      -webkit-transform: translateZ(0) scale(1.02) perspective(1000px);
              transform: translateZ(0) scale(1.02) perspective(1000px);
      float: left;
  }
  
  .weather-side:hover {
      -webkit-transform: scale(1.1) perspective(1500px) rotateY(10deg);
              transform: scale(1.1) perspective(1500px) rotateY(10deg);
  }
  
  .weather-gradient {
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      background-image: var(--gradient);
      border-radius: 25px;
      opacity: 0.8;
  }
  
  .date-container {
      position: absolute;
      top: 25px;
      left: 25px;
  }
  
  .date-dayname {
      margin: 0;
  }
  
  .date-day {
      display: block;
  }
  
  .location {
      display: inline-block;
      margin-top: 10px;
  }
  
  .location-icon {
      display: inline-block;
      height: 0.8em;
      width: auto;
      margin-right: 5px;
  }
  
  .weather-container {
      position: absolute;
      bottom: 25px;
      left: 25px;
  }
  
  .weather-icon.feather {
      height: 60px;
      width: auto;
  }
  
  .weather-temp {
      margin: 0;
      font-weight: 700;
      font-size: 4em;
  }
  
  .weather-desc {
      margin: 0;
  }
  
  .info-side {
      position: relative;
      float: left;
      height: 100%;
      padding-top: 25px;
  }
  
  .today-info {
      padding: 15px;
      margin: 0 25px 25px 25px;
  /* 	box-shadow: 0 0 50px -5px rgba(0, 0, 0, 0.25); */
      border-radius: 10px;
  }
  
  .today-info>div:not(:last-child) {
      margin: 0 0 10px 0;
  }
  
  .today-info>div .title {
      float: left;
      font-weight: 700;
  }
  
  .today-info>div .value {
      float: right;
  }
  
  .week-list {
      list-style-type: none;
      padding: 0;
      margin: 10px 35px;
      -webkit-box-shadow: 0 0 50px -5px rgba(0, 0, 0, 0.25);
              box-shadow: 0 0 50px -5px rgba(0, 0, 0, 0.25);
      border-radius: 10px;
      
  }
  
  .week-list>li {
      float: left;
      padding: 15px;
      cursor: pointer;
      -webkit-transition: 200ms ease;
      -o-transition: 200ms ease;
      transition: 200ms ease;
      border-radius: 10px;
  }
  
  .week-list>li:hover {
      -webkit-transform: scale(1.1);
          -ms-transform: scale(1.1);
              transform: scale(1.1);
      background: #fff;
      color: #222831;
      -webkit-box-shadow: 0 0 40px -5px rgba(0, 0, 0, 0.2);
              box-shadow: 0 0 40px -5px rgba(0, 0, 0, 0.2)
  }
  
  .week-list>li.active {
      background: #fff;
      color: #222831;
      border-radius: 10px;
  }
  
  .week-list>li .day-name {
      display: block;
      margin: 10px 0 0 0;
      text-align: center;
  }
  
  .week-list>li .day-icon {
      display: block;
      height: 30px;
      width: auto;
      margin: 0 auto;
  }
  
  .week-list>li .day-temp {
      display: block;
      text-align: center;
      margin: 10px 0 0 0;
      font-weight: 700;
  }
  
  .location-container {
      padding: 25px 35px;
  }
  
  .location-button {
      outline: none;
      width: 100%;
      -webkit-box-sizing: border-box;
              box-sizing: border-box;
      border: none;
      border-radius: 25px;
      padding: 10px;
      font-family: 'Montserrat', sans-serif;
      background-image: var(--gradient);
      color: #ffffff;
      font-weight: 700;
      -webkit-box-shadow: 0 0 30px -5px rgba(0, 0, 0, 0.25);
              box-shadow: 0 0 30px -5px rgba(0, 0, 0, 0.25);
      cursor: pointer;
      -webkit-transition: -webkit-transform 200ms ease;
      transition: -webkit-transform 200ms ease;
      -o-transition: transform 200ms ease;
      transition: transform 200ms ease;
      transition: transform 200ms ease, -webkit-transform 200ms ease;
  }
  
  .location-button:hover {
      -webkit-transform: scale(0.95);
          -ms-transform: scale(0.95);
              transform: scale(0.95);
  }
  
  .location-button .feather {
      height: 1em;
      width: auto;
      margin-right: 5px;
  }
  </style>
  
    <script>
    window.console = window.console || function(t) {};
  </script>
  
    
    
    <script>
    if (document.location.search.match(/type=embed/gi)) {
      window.parent.postMessage("resize", "*");
    }
  </script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/location.js"></script>
  </head>
  
  <body translate="no" onload="info()">
    <div class="container">
    <div class="weather-side">
      <div class="weather-gradient"></div>
      <div class="date-container">
        <h2 class="date-dayname">Tuesday</h2><span class="date-day">15 Jan 2019</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin location-icon"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg><span class="location">Paris, FR</span>
      </div>
      <div class="weather-container"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun weather-icon"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
        <h1 class="weather-temp">29°C</h1>
        <h3 class="weather-desc">Sunny</h3>
      </div>
    </div>
    <div class="info-side">
      <div class="today-info-container">
        <div class="today-info">
          <div class="precipitation"> <span class="title">PRECIPITATION</span><span class="value">0 %</span>
            <div class="clear"></div>
          </div>
          <div class="humidity"> <span class="title">HUMIDITY</span><span class="value">34 %</span>
            <div class="clear"></div>
          </div>
          <div class="wind"> <span class="title">WIND</span><span class="value">0 km/h</span>
            <div class="clear"></div>
          </div>
        </div>
      </div>
      <div class="week-container">
        <ul class="week-list">
          <li class="active"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun day-icon"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg><span class="day-name">Tue</span><span class="day-temp">29°C</span></li>
          <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cloud day-icon"><path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z"></path></svg><span class="day-name">Wed</span><span class="day-temp">21°C</span></li>
          <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cloud-snow day-icon"><path d="M20 17.58A5 5 0 0 0 18 8h-1.26A8 8 0 1 0 4 16.25"></path><line x1="8" y1="16" x2="8.01" y2="16"></line><line x1="8" y1="20" x2="8.01" y2="20"></line><line x1="12" y1="18" x2="12.01" y2="18"></line><line x1="12" y1="22" x2="12.01" y2="22"></line><line x1="16" y1="16" x2="16.01" y2="16"></line><line x1="16" y1="20" x2="16.01" y2="20"></line></svg><span class="day-name">Thu</span><span class="day-temp">08°C</span></li>
          <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cloud-rain day-icon"><line x1="16" y1="13" x2="16" y2="21"></line><line x1="8" y1="13" x2="8" y2="21"></line><line x1="12" y1="15" x2="12" y2="23"></line><path d="M20 16.58A5 5 0 0 0 18 7h-1.26A8 8 0 1 0 4 15.25"></path></svg><span class="day-name">Fry</span><span class="day-temp">19°C</span></li>
          <div class="clear"></div>
        </ul>
      </div>
      <div class="location-container">
        <button class="location-button" onclick="locate(true)"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg><span>Change location</span></button>
      </div>
    </div>
  </div>
      <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
  
    
        <script id="rendered-js">
  feather.replace();
  //# sourceURL=pen.js
      </script>
  
    
    </script>
  
  
  
  
   
  </body></html>