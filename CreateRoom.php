<?php 
    session_start(); 
    include "db_conn.php";
?>
<script type="text/javascript">
    sessionStorage.setItem('display_name', <?php echo $_SESSION['name']; ?>)
</script>
<?php 
        $room_name =  $_REQUEST['room_name'];
        $host_name = $_SESSION['name']; 
        $sql = "SELECT * FROM rooms WHERE room_name='$room_name' ";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
        }else{
            $sql2 = "INSERT INTO rooms(room_name, host_name) VALUES('$room_name', '$host_name')";
            $result2 = mysqli_query($conn, $sql2);
            header("Location: room.php?room=${room_name}");
        }
?>