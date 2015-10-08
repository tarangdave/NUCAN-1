<html>
<head><title>Update details</title></head>
<body>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nucanlogin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<input type="button" name="add1" value="Add New News" onclick="addnews()">
<input type="button" name="update1" value="Update News" onclick="updatenews()">
<input type="button" name="delete1" value="Delete News" onclick="deletenews()">
<script type="text/javascript">
function addnews() {
    <form>
        News Title: <input type="text" name="title" placeholder="News Title">
        
    </form>
}
</script>
