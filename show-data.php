<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud PHP With Ajax</title>
    <style>
        

body{
  font-family: arial;
  background: #b2bec3;
  padding:0;
  margin: 0;
}
#main{
  width: 800px;
  margin: 0 auto;
  background: white;
  font-size: 19px;
}
#header{
  background: #f7d794;
}
h1{
  float: left;
  margin: 15px;
}
/* by me */
#table-load{
  background-color: aqua;
  padding: 20px;
}        
#table-load input{
margin-left: 300px;
padding: 10px;
margin-top: 10px;
border-radius: 10px;
cursor: pointer;
width: 16%;
font-size: 20px;

}
/*end */

#search-bar{
  padding: 10px 20px 0;
  float: right;
}
#search-bar label{
  font-size: 16px;
  font-weight: bold;
  display: block;
}
#search-bar input{
  width: 250px;
  height: 25px;
  font-size: 18px;
  letter-spacing: 0.8px;
  padding: 3px 10px;
  border-radius: 4px;
  border: 1px solid #000;
}
#search-bar input:focus{
  outline: 0;
}
#table-form{
  background: #55efc4;
  padding: 20px 10px;
}
#table-form input[type="text"]{
  width: 180px;
  height: 25px;
  font-size: 18px;
  padding: 3px 10px;
  border-radius: 4px;
  border: 1px solid green;
}
#save-button{
  background:#2c3e50;
  color: #fff;
  border:0;
  padding: 8px 30px;
  margin-left: 7px;
  border-radius: 3px;
  cursor: pointer;
}
#table-data{
  padding: 15px;
  height: 500px;
  vertical-align: top;
}
#table-data th{
  background: #74b9ff;
}
#table-data tr:nth-child(odd){
  background: #ecf0f1;
}
#success-message{
  background: #DEF1D8;
  color: green;
  padding: 10px;
  margin: 10px;
  display: none;
  position: absolute;
  right: 15px;
  top: 15px;
}
#error-message{
  background: #EFDCDD;
  color: red;
  padding: 10px;
  margin: 10px;
  display: none;
  position:absolute;
  right: 15px;
  top: 15px;
}
.delete-btn{
  background:#e74c3c;
  color: #fff;
  border:0;
  padding: 4px 10px;
  border-radius: 3px;
  cursor: pointer;
}
.edit-btn{
  background: #27ae60;
  color: white;
  border: 0;
  padding: 4px 10px;
  border-radius: 3px;
  cursor: pointer;
}
#modal{
  background: rgba(0,0,0,0.7);
  position: fixed;
  left: 0;
  top:0;
  width: 100%;
  height: 100%;
  z-index: 100;
  display: none;
}
#modal-form{
  background: #fff;
  width: 30%;
  position: relative;
  top: 20%;
  left: calc(50% - 15%);
  padding: 15px;
  border-radius: 4px;
}
#modal-form h2{
  margin: 0 0 15px;
  padding-bottom: 10px;
  border-bottom: 1px solid #000;
}
#modal-form input[type = "text"]{
  width: 100%;
}
#close-btn{
  background: red;
  color: white;
  width: 30px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  border-radius: 50%;
  position: absolute;
  top: -15px;
  right: -15px;
  cursor: pointer;
}

    </style>
    <style>

    </style>    
</head>
<body>
        <table id="main" border="0" cellspacing="0" >   
            <tr>
                <td id="header">
                    <h1>Crud PHP With Ajax</h1>

                </td>
            </tr>

            
            <tr>
                <td id="table-load">
                    <input type="button" id="load-button" value="load Data">
                </td>
            </tr>


            <tr>
                <td id="table-data">
                    
                </td>
            </tr>
        </table>

        <script src="js/jQuery.js"></script>


        <script type="text/javascript">
          $(document).ready(function(){
              $("#load-button").on("click",function(e){
                  $.ajax({
                    url : "ajax-load.php",
                    type : "POST",
                    success : function(data){
                      $("#table-data").html(data);  
                    }
                  });
              });
          });
        </script>
</body>
</html>









