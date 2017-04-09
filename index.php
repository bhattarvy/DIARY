<html>
    <head>
    <meta charset="utf-8"/>
        <style>
            body{
                background-color: azure;
            }
            #main{
                background-image: url("i11.jpeg");
                height: 500px;
                
                
                margin-top: -100px;
                text-align: center;
                color: fuchsia;
                font-size: 50px;
                
            }
            form{
                align-items: center;
                width: 50%;
                font-style: italic;
                font-size: 20px;
                color: blue;
              
               
                
            }
            #singup{
                position: absolute;
                left: 25%;
            }
            #bottom{
                po
            }
        
        </style>
        
    </head>
  <body>
    <div id="main">
      <p>ONLINE DIARY</p>
      
      </div>
      <br><br><br>
      <div id="signup">
      <form align="center"
            action="new.php" method="post">
          <fieldset>
          <legend>information</legend>
          username:<input type="text" name="name" id="name"/><br>
    
          password:<input type="password" name="password" id="password"/><br>
              <input type="submit" value="submit"/>
          </fieldset>
          </form>
      </div>
      <br>
      <div id="bootom">
     <a href="diary2nd.php">singup</a>
      
      </div>
    
    </body>

</html>
