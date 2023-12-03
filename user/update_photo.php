<?php
	include('session.php');

	$uploaded_name = $_FILES[ 'image' ][ 'name' ];
    $uploaded_type = $_FILES[ 'image' ][ 'type' ];
    $uploaded_size = $_FILES[ 'image' ][ 'size' ]; 

	if( ( $uploaded_type == "image/jpeg" || $uploaded_type == "image/png") && $uploaded_size < 150000 ) {

		move_uploaded_file($_FILES["image"]["tmp_name"], "../upload/" . $uploaded_name);
		$location = "upload/" . $uploaded_name;

		mysqli_query($conn,"update `user` set photo='$location' where userid='".$_SESSION['id']."'");

		?>
			<script>
				window.alert('Photo updated successfully!');
				window.history.back();
			</script>
		<?php
	}
	else{
		?>
			<script>
				window.alert('Photo not updated. Please upload JPG or PNG files only!');
				window.history.back();
			</script>
		<?php
	}

?>