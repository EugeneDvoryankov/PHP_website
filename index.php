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

            .container img{
                width: 100%;
                height: 400px;
                text-align: center;
            }

            .header{
                text-align: center;
                color: white;
                position: absolute;
                top: 30%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            /* Style the top navigation bar */
            .navbar {
                overflow: hidden;
                background: #1abc9c;
                text-align: center;
                height: 30px;
                font-size: 20px;
            }

            .about_me{
                background-color: lightgrey;
                width: 90%;
                border: 5px solid green;
                padding: 50px;
                position: center;
            }

        </style>
    </head>
    <body>

    <div class="container">
            <img src="home_page_background.jpg">
            <div class="navbar">
                <a href="#">Link</a>
                <a href="#">Link</a>
                <a href="#">Link</a>
                <a href="#" class="right">Link</a>
            </div>
    </div>
    
    <div class="header">
        <h1>Hi there!</h1>
        <h1>I am Eugene Dvoryankov</h1>
        <h1>A Software Engineer</h1>
    </div>

    

    
    </body>
</html>
    
