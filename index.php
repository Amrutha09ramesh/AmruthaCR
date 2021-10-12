<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Document</title>
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
        }
        .buttons
        {
            padding: 10px;
            background-color:#5F4DB6;
            display: flex;
            justify-content: space-evenly;
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
            
        }
        a,button
        {
            background-color: blue;
            color: white;
            padding: 10px;
            margin-right: 10px;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="info">
        <h1> Task Tracker </h1>
    </div>
    <div class="buttons">
        <a href="overview.php" type="button" > Overview </a>
        <a href="pendingtask.php" type="button" > Pending Task </a>
        <a href="addtask.php" type="button" > Add Task </a>
        <a href="addcustomer.php" type="button" > Add customer </a>
        <a href="#" type="button" > Customer </a>
    </div>
    <div class="mid">
        <p>Pending Tasks:<br>for Date:</p>
        <input type="text" id="d" style="color: white;" disabled>
    </div>
    <div class="info_1">
        <table>
            <tr>
                <th> Name </th>
                <th> Visit Time </th>
                <th> Status </th>
                <th> Customer </th>
                <th> Phone </th>
                <th> mobile </th>
            </tr>
            <tr>
                <td> Electric Work </td>
                <td> 9:00 AM </td>
                <td> Pending  </td>
                <td> Nayana </td>
                <td> 1234567890 </td>
                <td> 9382456123 </td>
            </tr>    
        </table>
    </div>
    <div class="footer">
        <p> All Rights Reserved (C) 20d21 Some Website </p>
    </div>
</body>
<script type="text/javascript">
    var date = new Date().toLocaleDateString();
    document.getElementById("d").value = date;
</script>
</html>