<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2" id="main-table" width="1002px" height="100px" align="center" id="main-table">
        <tr>
        <th>AJAX WITH PHP</th>
        </tr>
        <tr>
            <td align="center">STUDENT TABLE</td>
        </tr>
        <tr>
            <td align="center">
                <form id="add-form">
            ENTER STUDENTS NAME:
            <input type="text" name="fname" id="fname">
            </form>
            </td>
        </tr>
        <tr>
            <td align="center">

            <input type="button" id="load-data" value="SAVE">
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
               function loadtable(){
                $.ajax({
                    url:"data.php",
                    type:"POST",
                    success:function(data){
                        $("#table-data").html(data);
                    }

                });
               }
               loadtable();  
               $("#load-data").on("click",function (e){


               
                    e.preventDefault();
                    var fname=$("#fname").val();
                    if(fname==""){
                        alert("FILL THE NAME FIRST");
                    }else{
                        $.ajax({
                    url:"insertdata.php",
                    type:"POST",
                    data:{name:fname},
                    success:function(data){
                        loadtable();
                        $("#add-form").trigger("reset");
                    }

                })
                    }
                
 
 
                });


                $(document).on("click","#btn",function(){
                var sid=$(this).data("id");
                var ele=this;
                    $.ajax({
                        url:"deletedata.php",
                        type:"POST",
                        data:{"id":sid},
                        success:function(data){
                                if(data == 1){
                                    $(ele).closest("tr").fadeOut();
                                    loadtable();
                                }
                                else{
                                    alert("dors not deleted successfully");
                                }
                                // loadtable();
                        }

                    });
                
               });
               
                


                        });
                           
    </script>
</body>
</html> 