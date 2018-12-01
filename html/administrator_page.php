<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/bootstrap-theme.css">
    <script src="bootstrap/jquery-1.10.2.js"></script>
    <script src="bootstrap/bootstrap.js"></script>
    

<meta charset="utf-8">
<title>monCTO</title>
<script src="jquery-3.2.1.js"></script>
<script language="javascript" type="">
    function countDown(secs){
      tiao.innerText=secs;
      if(--secs>0)
       setTimeout("countDown("+secs+")",1000);
      }
      countDown(3);
</script>
<style type="text/css">
    @import "../css/admin.css";        
</style>
</head>
<body style="background-color:#fff">
    <section>
    <h1 style="text-align:center"><div class="header">
        monCTO
    <div>
    </h1>
        <hr/>
    </section>

    <h2 style="text-align:center"> 
        UPLOAD NEW PROJECT</h2>
    <br>
    <h2 style="text-align:center">  
        <form method="post" action="../db_connect/connectsql.php">
            TITLE:<br>
            <input type="text" name="TITLE" value="" required="required">
            <br>
            START DATE:<br>
            <input type="text" name="START_DATE" value="" required="required">
            <br>
            FINSH DATE:<br>
            <input type="text" name="FINSH_DATE" value="" required="required">
            <br>
            TIME PLANNED:<br>
            <input type="text" name="TIME_PLANNED" value="" required="required">
            <br>
            <br>
            DESCRIPTION:<br>
            <textarea rows="15" cols="120" style="font-size: 20px" name="DESCRIPTION" required="required">
            </textarea><br>
            <div class="file-box">
            <h2 style="text-align:center">      
            <span class>
                    <span>Upload Related Files:</span>
                    <input type="file" name="file_file"id="input_file"/>
            </span></h2>

            <h2 style="text-align:center">
            <span class="">
                    <span>Upload Related Photos: </span>
                        <input type="file" name="file_photo" id = "input_photo" accept="image/gif,image/jpeg,image/jpg,image/png,image/svg">   
                    </span><br></h2>
            </div>
            <h2 style="text-align:center">
                <input type="submit" class="myButton" value="Submit">
                <input type="button" class="myButton" value="Return" onclick="location.href='client_page.php'">
            </h2>
        </form> 
    <h2>
    <br>
    

    
    <br>

    <h6 style="text-align:center; font-size: 15px;">
        <p>if you have completed all the contents , please click submit to upload</p></h6>  
<script>
    $("#submit").click(function () {
        var formData = new FormData();
        formData.append("file", $("#input_file")[0].files[0]);
        $.ajax({
            url: '/fileupload',
            type: 'post',
            data: formData,
            processData: false,
            contentType: false,
            success: function (msg) {
                alert(msg);
            }
        });
    });


</script>
</body>
</html>



