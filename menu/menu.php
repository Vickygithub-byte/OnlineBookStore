<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <style>
        #table1 td{
           /* don't use display:block otherwise it will create td in sequence */
            width: 100px;
            height: 50px;
            border: 1px solid blue; 
            text-align: center;
            background-color:darkgray;
        }

        #table2 td{
           /* don't use display:block otherwise it will create td in sequence */
            width: 400px;
            height: 190px;
            border: 1px solid blue; 
            text-align: center;
        }
        #table1{
            float:left;
            border-collapse: collapse;
        }
        #table2{
            border-collapse: collapse;
            margin-left:150px;
        }
    </style>
</head>
<body>
    <nav>
        <table id="table1">
            <tr>
                <td><a href="sem1.php">sem1</a></td>
            </tr>
            <tr>
                <td><a href="sem2.php">sem2</a></td>
            </tr>
            <tr>
                <td><a href="sem3.php">sem3</a></td>
            </tr>
            <tr>
                <td><a href="sem4.php">sem4</a></td>
            </tr>
            <tr>
                <td><a href="sem5.php">sem5</a></td>
            </tr>
            <tr>
                <td><a href="sem6.php">sem6</a></td>
            </tr>
        </table>
    </nav>
    


        <table id="table2">
            <tr>
                <td><img src="/OnlineBookStore/images/sem1/bee.jpg" alt=""></td>
                <td><img src="/OnlineBookStore/images/sem2/english.jfif" alt=""></td>
            </tr>
            <tr>
                <td><img src="/OnlineBookStore/images/sem3/df.png" alt=""></td>
                <td><img src="/OnlineBookStore/images/sem5/cn.jpeg" alt=""></td>

            </tr>
            <tr>
                <td><img src="/OnlineBookStore/images/sem5/python.jfif" alt=""></td>
                <td><img src="/OnlineBookStore/images/sem6/toc.jfif" alt=""></td>
            </tr>
        </table>

</body>
</html>