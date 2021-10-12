<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">    
<?php include "includes/header.php";?>
    <title>Task Tracker</title>
    <style>
        body
        {
            margin: 0px;
            padding: 0px;
            padding-top: 10px;
            background: #ccccff;
        }
        .info
        {
            text-align: center;
            font-size: 15px;
            padding-left: 10px;
        }
        .buttons
        {
            padding: 10px;
            background-color:#5F4DB6;
            display: flex;
            justify-content: space-evenly;
            margin: 20px 20px;
        }
        .buttons button
        {
            background-color: blue;
            color: white;
            padding: 10px;
            margin-right: 10px;
            
        }
        .info_1, .mid
        {
            padding-left: 20px;
        }
        .footer
        {
            background-color: #5F4DB6;
            padding: 20px;
            text-align: center;
            margin-top: 390px;
            
        }
        .info_1
        {
            background-color: #5F4DB6;
            margin: 20px 20px;
            text-align: center;
            display: flex;
            justify-content: center;
            padding: 20px;
        }
        .info_1 th
        {
            background-color: blue;
            color: white;
            font-weight: normal;
            padding: 10px;
            
        }
        .mid input
        {
            background-color: blue;
            margin: 10px;
            color: white;
            border: none;
            text-align: center;
            padding: 10px;
        }
        th,td
        {
            padding: 15px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="info">
        <h1> Pending Task </h1>
    <form>
    <div class="buttons">
        <button type="submit" formaction="index.php">Home</button>
    </div>
    </form>
    <div class="info_1">
        <table>
            <tr>
                <th> Date </th>
                <th> Name </th>
                <th> Visit Time </th>
                <th> Status </th>
                <th> Customer </th>
                <th> Phone </th>
                <th> Mobile </th>
            </tr>
            <tr>
                <td> 9/10/21 </td>
                <td> Electric Work </td>
                <td> 9:00 AM </td>
                <td> Pending  </td>
                <td> Nayana </td>
                <td> 1234567890 </td>
                <td> 9382456123 </td>
            </tr> 
            <tr>
                <td> 10/10/21 </td>
                <td> Electric Work </td>
                <td> 11:00 AM </td>
                <td> Pending  </td>
                <td> Kirana </td>
                <td> 1234567890 </td>
                <td> 9382456123 </td>
            </tr> 
            <tr>
                <td> 10/10/21 </td>
                <td> Electric Work </td>
                <td> 1:00 PM </td>
                <td> Pending  </td>
                <td> Nisarga </td>
                <td> 1234567890 </td>
                <td> 9382456123 </td>
            </tr> 
            <tr>
                <td> 13/10/21 </td>
                <td> Electric Work </td>
                <td> 3:00 PM </td>
                <td> Pending  </td>
                <td> Nayana </td>
                <td> 1234567890 </td>
                <td> 9382456123 </td>
            </tr> 
            <tr>
                <td> 9/10/21 </td>
                <td> Electric Work </td>
                <td> 4:00 PM </td>
                <td> Pending  </td>
                <td> Priya </td>
                <td> 1234567890 </td>
                <td> 9382456123 </td>
            </tr>    
        </table>
    </div>
    <div class="footer">
        <p> All Rights Reserved (C) 2021 Some Website </p>
    </div>
    <?php include "includes/footer.php";?>
</body>
</html>