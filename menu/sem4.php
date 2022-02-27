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
        img{
            height: 150px;
            width: 150px;
        }
        
    </style>
</head>
<body>
    <nav>
        <table id="table1">
            
            <tr>
                <td>Sem 4</td>
            </tr>
        </table>
    </nav>
    


        <table id="table2">
            <tr>
                <td><img src="/OnlineBookStore/images/sem4/coa.jpg" alt=""></td>
                <td><img src="/OnlineBookStore/images/sem4/core java.jpg" alt=""></td>
            </tr>
            <tr>
                <td><img src="/OnlineBookStore/images/sem4/dm.jpg" alt=""></td>
                <td><img src="/OnlineBookStore/images/sem4/os.jpg" alt=""></td>
            </tr>
            <tr>
                <td><img src="/OnlineBookStore/images/sem4/os2.jfif" alt=""></td>
                <td><img src="/OnlineBookStore/images/sem4/pem.jpg" alt=""></td>
            </tr>
        </table>

</body>
</html>