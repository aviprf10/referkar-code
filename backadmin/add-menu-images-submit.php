<?php
include "common/config.php";
include "common/check_login.php";
header('Content-type: application/json');
if($admin == 1)
{
	if($_POST)
	{
		$menu_small_images 	= Secure1($db_mysqli,$_POST['file_name1']);
		$menu_images 	    = Secure1($db_mysqli,$_POST['file_name2']);
		$menu_id   			= Secure1($db_mysqli,$_POST['menu_id']);
		$images_name   			= Secure1($db_mysqli,$_POST['images_name']);
		$created_on = get_current_date_time();
		if(isset($_POST['status']))
		{
			$status = 1;
		}
		else
		{
			$status = 0;
		}
		
		$insert_menu_images_query = "INSERT INTO menu_images (menu_small_images,menu_images, menu_id,images_name, created_on,status, is_deleted) VALUES ('$menu_small_images','$menu_images', '$menu_id', '$images_name','$created_on', '$status','0');";
		$result_insert_menu_images_query = mysqli_query($db_mysqli,$insert_menu_images_query);
		
		if($result_insert_menu_images_query)   
		{ 
			$return["html_message"] = 'Menu Images Added Successfully.';
			$return["status"] = "success";
			echo json_encode($return); 
			exit();
		}
		else 
		{
			$return["html_message"] = 'Some Error Occured While adding Home Banner';
			$return["status"] = "error";
			echo json_encode($return);
			exit();
		} 
	}
	else 
	{
		$return["html_message"] = 'Some Error Occured! Please try again.';
		$return["status"] = "error";
		echo json_encode($return);
		exit();
	}
}
else
{
	$return["html_message"] = 'Please login.';
	$return["status"] = "error";
	echo json_encode($return);
	exit();
}
?>