<?php require 'extras/header.php'; ?>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>
<?php require 'extras/navbar.php'; ?>
<div class="about-section">
  <h1>About Us</h1>
  <p>Hi, I am Simar Sidhu. <br>
  Currently pursuing Bachelors of Technology in Computer Science and Engineering Deptt.<br>
  This website is merely an experimental project.<br>
  Thankyou.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/sims2.jpg" alt="Simar" style="width:100%; align: center;">
      <div class="container">
        <h2>Simar Sidhu</h2>
        <p class="title">Creator and Developer</p>
        <p></p>
        <p>simarsidhu0102@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/nims1.jpg" alt="Nimar" style="width:100%">
      <div class="container">
        <h2>Nimar Sidhu</h2>
        <p class="title">Advisor</p>
        <p>nimar.19712@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/satvir1.jpg" alt="Satvir" style="width:100%">
      <div class="container">
        <h2>Dr. Satvir Singh</h2>
        <p class="title">Mentor</p>
        <p>drsatvir.in@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
<?php require 'extras/footer.php';?>
</body>
</html>
