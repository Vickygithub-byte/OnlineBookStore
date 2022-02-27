<doctype html>
    <html lang="en">
    <head>
        <title>Log In</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <style>
            center{
                margin-top: 150px;
            }
        .material-icons{
            font-size: 45px;
        }
        input{
            height:40px;
            width:300px;
        }
        body{
            background-color: antiquewhite;
        }
        </style>
    </head>
    <body>
    
    <center>
       
        <form action="Home.php">
            <table>
                <caption><h1>Online Book Store</h1></caption>
                <tr>
                    <td><i class="material-icons">person</i></td>
                    <td><input type="text" placeholder="Name"></td>
                </tr>
                <tr>
                    <td><i class="material-icons">key</i></td>
                    <td><input type="password" placeholder="password"></td>
                </tr>
                <tr>
                    <td><i class="material-icons">login</i></td>
                    <td><input type="submit" value="Log In" style="cursor:pointer"></td>
                </tr>
                
            </table>
        </form>
  
        <form action="Register.php">
            <table>
                <tr>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Register"></td>
                </tr>
            </table>
        </form>
    </center>
 
    </body>
    </html>




