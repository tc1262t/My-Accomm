<?php
session_start();
require ("../DatabaseConnect.php");

  if(isset($_SESSION["Booking"])) //If there is value in cart session.
	{
        
//In variable Item Array ID, it contains are arrary coloumn (cart session and productID)
    $item_array_id = array_column($_SESSION["Booking"], "product_id");

//If not in array then get ID and session (cart and productID)
		if(!in_array($_GET["id"], $item_array_id)) 
		{
    $count = count($_SESSION["Booking"]);
			$item_array = array(
			'product_id' => $_GET["id"],
			'item_name' => $_POST["hidden_name"],
			'product_price' => $_POST["hidden_price"],
			'item_quantity' => $_POST["quantity"]
			);
			$_SESSION["Booking"][$count] = $item_array;
			echo '<script>window.location="../Accommodationv2.php"</script>';
		}
        
        else
		{
			echo '<script>alert("Products already added to Booking")</script>';
			echo '<script>window.location="../Accommodationv2.php"</script>';
		}
	}
  
        else
	{
		$item_array = array(
		'product_id' => $_GET["id"],
		'item_name' => $_POST["hidden_name"],
		'product_price' => $_POST["hidden_price"],
		'item_quantity' => $_POST["quantity"]
		);
		$_SESSION["Booking"][0] = $item_array;
	}


      if($_GET["action"] == "delete")
	{
		foreach($_SESSION["Booking"] as $keys => $values)
		{
			if($values["AccommodationID"] == $_GET["AccommID"])
			{
				unset($_SESSION["Booking"][$keys]);
				echo '<script>alert("Product has been removed")</script>';
				echo '<script>window.location="Accommodationv2.php"</script>';
			}
		}
	}

?>