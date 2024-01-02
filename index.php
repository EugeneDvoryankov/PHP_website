<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>PHP Test</title>
        <style>
            * {
                /*border-box tells the browser to account 
                for any border and padding in the values
                you specify for an element's width and height. */
               box-sizing: border-box; 
            }

            /* Style of the body */
            body {
                font-family: Arial, Helvetica, sans-serif;
                margin: 0;
            }

            .background img{
                width: 100%;
                height: 400px;
                text-align: center;
            }

            .aboutme img{
                width: 50%;
                height: 50%;
            }

            /* Header/logo Title */
            .header{
                text-align: center;
                color: white;
                position: absolute;
                top: 30%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            /* Increase the font size of the heading */
            .header h1 {
            font-size: 40px;
            }

            /* Style the top navigation bar */
            .navbar {
                overflow: hidden;
                background-color: #1abc9c;
            }

            /* Style the navigation bar links */
            .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            }

            /* Right-aligned link */
            .navbar a.right {
            float: right;
            }

            /* Change color on hover */
            .navbar a:hover {
            background-color: #ddd;
            color: black;
            }

            /* Column container */
            .row {  
            display: -ms-flexbox; /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap; /* IE10 */
            flex-wrap: wrap;
            }

            /* Create two unequal columns that sits next to each other */
            /* Sidebar/left column */
            .side {
            -ms-flex: 30%; /* IE10 */
            flex: 30%;
            background-color: #f1f1f1;
            padding: 20px;
            }

            /* Main column */
            .main {   
            -ms-flex: 70%; /* IE10 */
            flex: 70%;
            background-color: white;
            padding: 20px;
            }

            /* Footer */
            .footer {
            padding: 20px;
            text-align: center;
            background: #ddd;
            }

            /* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 700px) {
            .row {   
                flex-direction: column;
            }
            }

            /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
            @media screen and (max-width: 400px) {
            .navbar a {
                float: none;
                width: 100%;
            }
            }


        </style>
    </head>
    <body>

    <div class="background">
        <img src="home_page_background.jpg">
        </div>
    
    <div class="header">
        <h1>Hi there!</h1>
        <h1>I am Eugene Dvoryankov</h1>
        <h1>A Software Engineer</h1>
    </div>

    <div class="navbar">
        <a href="#">Home</a>
        <a href="#">Hobbies</a>
        <a href="#">Study</a>
        <a href="#" class="right">Contact</a>
    </div>

    <div class="row">
        <div class="side">
            <h2>About Me</h2>
            <div class="aboutme">
            <img src="profile.jpg">
            </div>
            <p>Future Master of Science in Software engineering (June 2025)</p>
            <p>Proven ability to learn new technologies quickly and apply them in real-world situations.</p>
            <p> Searching for a part-time internship or summer job in back-end operations.
            Have experience in Java, Python, C, C#, Git, SQL database and more.</p>
            <h3>More Text</h3>
            <p>Lorem ipsum dolor sit ame.</p>
            <div class="fakeimg" style="height:60px;">Image</div><br>
            <div class="fakeimg" style="height:60px;">Image</div><br>
            <div class="fakeimg" style="height:60px;">Image</div>
        </div>
        <div class="main">
            <h2>TITLE HEADING</h2>
            <h5>Title description, Dec 7, 2017</h5>
            <div class="fakeimg" style="height:200px;">Image</div>
            <p>Some text..</p>
            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            <br>
            <h2>TITLE HEADING</h2>
            <h5>Title description, Sep 2, 2017</h5>
            <div class="fakeimg" style="height:200px;">Image</div>
            <p>Some text..</p>
            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        </div>
    </div>

    <div class="footer">
    <h2>Footer</h2>
    </div>

    

    
    </body>
</html>
    
