<!DOCTYPE HTML>
<html>
    <head>
        <title> PHP include</title>
    <style>
        body {
            background-color: #4d2a0a;
        }
        
        #container{
            width: 960px;
            min-height: 600px;
            background: ivory;
            font-size: 20px;
            font-family: sans-serif;
        }
        
        main{
            min-height: 500px;
        }
        
        footer{
            min-height: 50px
        }
        
        </style>
    </head>
    
    <body>
    <div id="container">
            <h1>This is text</h1>
        <main>
        </main>
        
        <footer><?php include 'footer.php';?></footer>
        </div>
    </body>

</html>