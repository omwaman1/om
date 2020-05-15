//  Get inputs from html Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$phone = $_POST['phone'];
$message = $_POST['message'];