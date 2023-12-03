<?php
	session_start();

	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["username"]) && isset($_POST["password"])) {
		
		include('conn.php');

        if(preg_match('/-+/', $_POST["username"]) || preg_match('/admin.+/i', $_POST["username"])) {
            $_SESSION['msg'] = "Login Failed, Hacking Attempt detected!";
			header('location: index.php');
            exit;
        }
		
		try{
			$query = "SELECT * FROM user WHERE username='".$_POST["username"]."' AND password='".md5($_POST["password"])."'";
			$result = mysqli_query($conn, $query);

			if(mysqli_num_rows($result) === 1){
				$row=mysqli_fetch_array($result);
				if ($row['access']==1){
					$_SESSION['id']=$row['userid'];
					?>
					<script>
						window.alert('Login Success, Welcome Admin!');
						window.location.href='admin/';
					</script>
					<?php
				}
				else{
					$_SESSION['id']=$row['userid'];
					?>
					<script>
						window.alert('Login Success, Welcome User!');
						window.location.href='user/';
					</script>
					<?php
				}
			} 
			else {
					$_SESSION['msg'] = "Login Failed, Invalid Input!";
					header('location: index.php');
				}


		} catch (Exception $e) {
			echo "Error: " . $e->getMessage();
		}
	}
		
?>