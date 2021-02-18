<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="task6.css">
</head>

<body>
<div id="main">
<form id="ageinput" class="form" method="POST">
       <span id="h1" style="color:white";> Enter Your Date of birth:</span> <br><br>
        <input id="dob" type="date" value="bdate" name="bdate" required><br><br>
        <input type="submit" id = "enter" value="SUBMIT" name="age"><br><br>
        <div id="todayage"></div>
    </form>
</div>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#ageinput").submit(function(e) {
                e.preventDefault();
                setInterval(() => {
                    $.ajax({
                        type: "POST",
                        url: "index1.php",
                      
                        data: {
                            age: $("#dob").val()
                        },
                        success: function(response) {
                            $("#todayage").text(response);
                            
                        }
                    });
                }, 1000);
            });
        });
    </script>


</body>
</html>
