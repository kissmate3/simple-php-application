<!DOCTYPE html>
<html>
<head>
	<title>Felhasználók</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <style>
        .list-container {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            padding-top: 10%;
        }

        table {
            border: 1px solid #ccc;
            border-collapse: collapse;
            margin: 0;
            padding: 0;
            width: 100%;
            max-width: 900px;
            table-layout: fixed;
            align-self: center;
            font-family: Arial, Helvetica, sans-serif;
        }

        table caption {
            font-size: 10px;
            margin: .5em 0 .75em;
        }

        table tr {
        background-color: #f8f8f8;
        border: 1px solid #ddd;
        }

        table tr th {
            background-color: red;
            color:white;
            padding: 20px;
        }

        table td {
            padding: 10px;
            text-align: center;
        }

        table tr:hover {
            color: white;
            background-color: red;
        }

        .button {
            color: #fff;
            font-size: 20px;
            font-weight: 500;
            padding-left: 0px;
            background: white;
            cursor: pointer; 
            text-align: center;
            padding: 20px;
            padding-top: 10%;
        }

        .button a {
            text-decoration: none;
            color: black;
            padding: 10px;
            border-radius: 20px;
            border: 1px solid black;
            font-weight: bold;
        }

        .button a:hover {
            background: red;
            color: white;        
        }

        footer {
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

    <div class="list-container">
        <table class="s-table" >
          <thead>
            <tr>
                <th>Név</th>
            </tr>
          </thead>
         <tbody>
            <?php
                foreach($users as $user)
                {
            ?>
            <tr>
                <td><?php echo $user['name']; ?></td>
            </tr>
            <?php
                }
            ?>
         </tbody>
        </table>
    </div>

    <div class="row button">
        <a href="/megoldas/mvc/kezdolap">Vissza</a>
    </div>

    <footer>
        Kiss Máté 2021
    </footer>

</body>
