$sql = "INSERT INTO students (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
if(mysqli_query($link, $sql))
{
if (isset($_POST['submit'])) {
echo '<script>alert("message successfully send to om")</script>'; 
}
}
else {

print ("Y");
}
