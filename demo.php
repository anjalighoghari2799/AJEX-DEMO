<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>

<body>
    <table border="2" id="main-table" width="1002px" height="100px" align="center">
        <tr>
        <th>AJAX WITH PHP</th>
        </tr>
        <tr>
            <td align="center">STUDENT TABLE</td>
        </tr>
        <tr>
            <td align="center">
            ENTER STUDENTS NAME:
            <input type="text" name="name" id="name">

            </td>
        </tr>
        <tr>
            <td align="center">

            <input type="button" id="load-data" value="LOAD">
            </td>

        </tr>
        <tr>
            <td id="table-data">
            
            </td>
        </tr>
    </table>
    <script
  src="https://code.jquery.com/jquery-3.7.0.js"
  integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
  crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
                $("#load-data").on("click",function(e){
                        $.ajax({
                            url:"data.php",
                            type:"POST",
                            success:function(data){
                                $("#table-data").html(data);
                            }

                        });
                });
       
            });
    </script>
</body>
</html>