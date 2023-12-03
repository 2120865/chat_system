<?php
	include('session.php');
	
	$cid=$_POST['chatid'];
	$pass=$_POST['chat_pass'];
	
	$result=mysqli_query($conn,"select * from chatroom where chatroomid='$cid' and chat_password='$pass'");
	if (mysqli_num_rows($result) > 0){
		mysqli_query($conn,"insert into chat_member (chatroomid, userid) values ('$cid', '".$_SESSION['id']."')");
		header('location: chatroom.php?id='.$cid);
	}
	
	else{
		?>
		<script>
			window.alert('Incorrect Password!');
			window.history.back();
		</script>
		<?php
	}
?>