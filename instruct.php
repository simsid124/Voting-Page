<?php require 'extras/header.php'; ?>
<style>
html{
    scroll-behavior: smooth;
}
body{
    padding: 0;
    margin: 0;
}
*{
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
			
*:not(code){
    font-family: 'Roboto', sans-serif;
}
.row{
	display: flex;
}
#navbar1{
    text-align: center;
    overflow-y: scroll;
    height: 100vh;
    position: fixed;
    width: 400px;
}
#navbar1 header{
    padding: 20px 30px;
    font-weight: 600;
    border-bottom: 1px solid black;
    color: black;
}
.nav1-link{
    text-decoration: none;
    display: block;
    padding: 20px 30px;
    color: black;
    border-bottom: 1px solid black; 
}
.nav1-link:hover{
    background-color: black;
    color: white;
}
#main-doc{
    padding-left: 400px;
	width: 100%;
}
.main-section{
	padding: 20px 30px;
	max-width: 700px;
	margin: 0 auto;
	padding-bottom: 0px;
}
.main-section header{
	text-align: center;
	padding: 10px 0;
}
.main-section h1{
	font-size: 45px;
	margin: 12px auto;
}
.main-section p{
	line-height: 1.6;
	text-rendering: optimizelegibility;
}
.main-section li{
    margin-bottom: 10px;
	line-height: 1.6;
}
code{
	margin: 10px auto;
	padding: 20px 14px;
	display: block;
	background-color: lightgrey;
	line-height: 2;
	white-space: pre;
	word-break: normal;
	word-wrap: normal;
	border-radius: 5px;
}
@media only screen and (max-width: 815px) {
	.row{
		flex-direction: column;
	}
	#main-doc{
		padding-left: 0;
		padding-top: 25px;
    }
    #navbar1{
        height: 250px;
		width: 100%;
		position: static;
	}
}

</style>
<body>
    <?php require 'extras/navbar.php'; ?>
    <div class="row">
        <nav id="navbar1">
            <header><h3>Steps to Use this Website for Voting</h3></header>
            <a class="nav1-link" href="#Introduction">Introduction</a>
            <a class="nav1-link" href="#Find_in_Chrome">Find in Chrome</a>
			<a class="nav1-link" href="#Sign_In">Sign In</a>
			<a class="nav1-link" href="#Vote">Vote</a>
			<a class="nav1-link" href="#Finding_Results">Finding Results</a>
        </nav>
        <main id="main-doc">
            <section class="main-section" id="Introduction">
                <header><h1>Introduction</h1></header>
                <p>Hey there folks! This website is designed for easy voting. 
                    Just an experiment done by a college student.
                    Just put in your username and password that has been assigned to you by the Conductor.
                    And you are good to go. Also, the contact form doesn't work yet.<br>
                    <br>For detailed Information, Just Scroll.
                </p>
                <h2>Languages used:</h2>

                <ul>
                    <li>HTML</li>
                    <li>JavaScript</li>
                    <li>PHP</li>
                    <li>Bootstrap</li>
                    <li>CSS</li>
                    <li>MySQL</li>
                    <li>PDO</li>
                </ul>
            </section>
            <section class="main-section" id="Find_in_Chrome">
                <header ><h1>Find in Chrome</h1></header>
                <p>
                    Basically, Just open your Browser and search for www.votingmadeeasy.com .
                    Click On the link And you'll find this page.<br>
                    <img src="" alt= "homepage" />
                </p>
            </section>
            <section class="main-section" id="Sign_In">
                <header><h1>Sign In</h1></header>
                <p>
                    Welcome to the Home Page. Here you can Enter your Username and Password. 
                    and click on the Submit button. This will take you to the question page.
                </p>
            </section>
            <section class="main-section" id="Vote">
                <header><h1>Vote</h1></header>
                <p>When reached at the question page. Selct one Option and click on Vote button. 
                    Your answer has been recorded. 
                    If not satisfied, you can update any time whenever the question is available.</p>
            </section>
            <section class="main-section" id="Finding_Results">
                <header><h1>Finding Results</h1></header>
                <p>Now about the results, you can see the results the day after when the question page has been expired.
                    Check  the Results at View More>Results in the navbar.
                </p>
            </section>
        </div>
    </div>
    <?php require 'extras/footer.php'; ?>
</body>
</html>