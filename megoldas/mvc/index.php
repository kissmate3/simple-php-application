<!DOCTYPE html>
<html>
<head>
	<title>Feladat</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins',sans-serif;
        }

        body{
            overflow: hidden;
        }

        .container{
            max-width: 440px;
            padding: 0 20px;
            margin: 170px auto;
        }

        .wrapper{
            width: 100%;
            background: red;
            border-radius: 5px;
            box-shadow: 0px 4px 10px 1px rgba(0,0,0,0.1);
        }

        .wrapper .title{
            height: 90px;
            background: red;
            border-radius: 5px 5px 0 0;
            color: #fff;
            font-size: 30px;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .wrapper .button{
            color: #fff;
            font-size: 20px;
            font-weight: 500;
            padding-left: 0px;
            background: white;
            cursor: pointer; 
            text-align: center;
            padding: 20px;
        }

        .button a{
            text-decoration: none;
            color: black;
            padding: 10px;
            border-radius: 20px;
            border: 1px solid black;
            font-weight: bold;
        }

        .button a:hover{
            background: red;
            color: white;        
        }
        
        footer{
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: red;
            color: white;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            padding: 10px;
        }
      
    </style>
</head>
<body>
    <div class="container">

        <div class="wrapper">
            <div class="title">
                <span>Üdvözöllek a honlapon</span>
            </div>
  
            <div class="row button">
                <a href="/megoldas/mvc/felhasznalok">Felhaszálók listája</a>
            </div>

            <div class="row button">
                <a href="/megoldas/mvc/hirdetesek">Hírdetések listája</a>
            </div>
        </div>

    </div> 


    <footer>
        Kiss Máté 2021
    </footer>

</body>

</html>