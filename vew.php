<?php
$server_name = "localhost";
$user_name = "root";
$password = "Nabin&dangi320";
$database = "wpt";

//Creating a connection.
$connect = mysqli_connect($server_name, $user_name, $password, $database);
//Checking the connection.
if($connect->connect_error){
  die("Connection failed => ".$connect->connect_error);
}

$name = $_POST[`name`];
$phone_number = $_POST[`phonenumber`];
$address = $_POST[`address`];

$sql = "select * from phonebook";
$result = $connect->query($sql);
$data_array = array();

if($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    // echo json_encode($row)."<br/>";
    array_push($data_array, $row);
  }
}
$connect->close();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Vew</title>
    <link rel="stylesheet" href="./vew.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.redirect@1.1.4/jquery.redirect.js"></script>
  </head>
  <body>


    <div class="vew_main_division">
      <div class="caption_division">
        <li class="vew_caption_list">
          <div class="vew_caption_division">
            <span class="caption sn_span">S.N.</span>
            <span class="caption name_span">Name</span>
            <span class="caption phone_number_span">Phone number</span>
            <span class="caption address_span">Address</span>
            <span class="caption operation_span">Operation</span>
          </div>
        </li>
      </div>
      <div class="data_vew_division">
      </div>
    </div>





    <script type="text/javascript">

      $(document).ready(function(){
        var reterived_data = <?php echo json_encode($data_array); ?>;
        // console.log(reterived_data);
        for(let i = 0; i < reterived_data.length; i++){
          $(".data_vew_division").append('<li class="vew_added_list">'+
               '<div class="vew_list_division">'+
                 '<label class="data_span_sn">'+ reterived_data[i][`SN`] +'</label>' +
                 '<label class="data_span_name">'+ reterived_data[i][`Name`] +'</label>' +
                 '<label class="data_span_phone_number">' + reterived_data[i][`Phone_number`]+ '</label>' +
                 '<label class="data_span_address">' + reterived_data[i][`Address`] +'</label>' +
                 '<div class="edit_delete_buttons">'+
                   '<button class="vew_remove_button remove_button" type="button" name="button">Remove</button>'+
                   '<button class="vew_edit_button edit_button" type="button" name="button">Edit</button>'+
                 '</div>'+
             '</div>'+
           '</li>');
        }

        $(".remove_button").click(function(event){
          if($(this).parent().parent().has('span')){
            // Get the data
            var sn = $(this).parent().parent().children('.data_span_sn').html();
            //remove the data from DOM
            $(this).parent().parent().remove();
            console.log("Removed");
            //proceed to backend deletion using SN Primary Key.
            $.ajax({
              url: "delete.php",
              data:{
                id: sn,
              },
              type:'POST',
              success: function(){
                console.log("Deleted successfully!!");
              },
              error:function(){
                console.log("Failed to delete!!");
              }
            });
            event.preventDefault();
          }
        });

        $(".edit_button").click(function(){

          if($(this).parent().parent().has('span')){
            // Get the data
            var sn = $(this).parent().parent().children('.data_span_sn').html();
            $.redirect('editvew.php', {id:sn});
          }
        });

      });

    </script>
 </body>
</html>
