<!-- <?php
        if(isset($_POST['add'])){
			if(isset($_SESSION['cart'])){
					// Lưu trữ id sp vào mảng
					$item_array_id = array_column($_SESSION['cart'] ,"product_id","quantity");
					// ktr id trong mảng nếu có thì tb có trong giỏ và ngược lại cộng thêm 1
					if(in_array($_POST['product_id'],$item_array_id)){
						echo "<script> alert('Sản phảm đã có trong giỏ!')</script>";
						echo "<script>window.location = 'index.php'</script>";
					}
					else{
						$count = count($_SESSION['cart']);
						$item_array = array(
							'product_id'=> $_POST['product_id'],
                            'quantity' => $_POST['quantity']
						);
						$_SESSION['cart'][$count] = $item_array;
					
					}
			} 
			else 
			{
				// số sp trong cart
				$item_array = array(
					'product_id'=>$_POST['product_id'],
                    'quantity' => $_POST['quantity']
				);

				$_SESSION['cart'][0] = $item_array;
			}

		}



?> -->