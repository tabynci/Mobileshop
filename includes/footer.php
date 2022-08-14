<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>footer</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/mobilie.jpg"/>
    <style>
        /* Footer style    link refered here https://codepen.io/jakeduncan/pen/rJZJMM */
.footer {
  width: 100%;
  height: auto;
  background-color: #070617;
}
.footer .col {
  width: 190px;
  height: auto;
  float: left;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  padding: 0px 20px 20px 20px;
}
.footer .col h1 {
  margin: 0;
  padding: 0;
  font-family: inherit;
  font-size: 12px;
  line-height: 17px;
  padding: 20px 0px 5px 0px;
  color: rgba(255,255,255,0.2);
  font-weight: normal;
  text-transform: uppercase;
  letter-spacing: 0.250em;
}
.footer .col ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
.footer .col ul li {
  color: #999999;
  font-size: 20px;
  font-family: inherit;
  font-weight: bold;
  padding: 5px 0px 5px 0px;
  cursor: pointer;
  transition: .2s;
  -webkit-transition: .2s;
  -moz-transition: .2s;
}
.social ul li {
  display: inline-block;
  padding-right: 5px !important;
}

.footer .col ul li:hover {
  color: #ffffff;
  transition: .1s;
  -webkit-transition: .1s;
  -moz-transition: .1s;
}
.clearfix {
  clear: both;
}
@media only screen and (min-width: 1280px) {
  .contain {
    width: 1200px;
    margin: 0 auto;
  }
}
@media only screen and (max-width: 1139px) {
  .contain .social {
    width: 1000px;
    display: block;
  }
  .social h1 {
    margin: 0px;
  }
}
@media only screen and (max-width: 950px) {
  .footer .col {
    width: 33%;
  }
  .footer .col h1 {
    font-size: 14px;
  }
  .footer .col ul li {
    font-size: 13px;
  }
}
@media only screen and (max-width: 500px) {
    .footer .col {
      width: 50%;
    }
    .footer .col h1 {
      font-size: 14px;
    }
    .footer .col ul li {
      font-size: 13px;
    }
}
@media only screen and (max-width: 340px) {
  .footer .col {
    width: 100%;
  }
}
.nci{
  color:white
}
    </style>
</head>
<body>
<div class="footer">
  <div class="contain">
  <div class="col">
    <h1>About US</h1>
    <ul>
    <a href="../user/About.php"><li>About the company</li></a>
    </ul>
  </div>
  <div class="col">
    <h1>Our Policies</h1>
    <ul>
      <li>Terms and conditions</li>
    </ul>
  </div>
  <div class="col">
    <h1>CONTACT</h1>
    <ul>
      <li>Email</li>
      <li>mobile@mobilie.com</li>
    </ul>
  </div>
  
    <div class="col">
      <h1>Support</h1>
      <ul>
        <li>Contact us</li>
      </ul>
    </div>
    <div class="col social">
      <h1>Social</h1>
      <ul>
        <li><a href="https://www.instagram.com/"><img src="../images/instagram.jpeg" width="32" style="width: 32px;"></a></li>
        <li><a href="https://twitter.com/"><img src="../images/twitter.jpeg" width="32" style="width: 32px;"></a></li>
        <li><a href="https://www.facebook.com/"><img src="../images/facebook.jpeg" width="32" style="width: 32px;"></a></li>
      </ul>
    </div>
  
<div class="clearfix"></div>
</div>
</div>

<footer class="container-fluid text-center">
<p className="col-sm">
            &copy;@ NCI | All rights reserved |
            Terms Of Service | Privacy
          </p>
</footer>
</body>
</html>