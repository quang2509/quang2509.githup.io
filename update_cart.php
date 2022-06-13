<?php
        require('database/conn.php');
        if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                    if(isset($_POST['Mod_quantity'])){

                            foreach($_SESSION['cart'] as $key => $value)
                            {
                             if ($value['product_id']== $_POST['ten_sp'])
                                    {
                                        $_SESSION ['cart'][$key]['quantity'] = $_POST['Mod_quantity'];
                                header('location: cart.php');

                                    }

                                    

                            }

                    }

            }

            


?>