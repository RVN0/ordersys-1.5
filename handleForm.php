<?php
    // pricelist
    $fishball = 30;
    $kikiam = 40;
    $corndog = 50;
    
    // Function to handle form and generate receipt
    function handleForm() {
        global $fishball, $kikiam, $corndog;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["quantity"]) || empty($_POST["cash"])) {
                echo "<br>Please enter both quantity and cash.";
            } else {
                // Validate if inputs are numeric
                if (is_numeric($_POST["quantity"]) && is_numeric($_POST["cash"])) {
                    $quantity = (int)$_POST["quantity"];
                    $cash = (float)$_POST["cash"];

                    // Ensure quantity and cash are positive
                    if ($quantity <= 0 || $cash < 0) {
                        echo "<br>Quantity and cash must be positive values.";
                    } else {
                        // Set price based on the selected order
                        switch ($_POST["order"]) {
                            case "Fishball":
                                $order_price = $fishball;
                                $item_name = "Fishball";
                                break;
                            case "Kikiam":
                                $order_price = $kikiam;
                                $item_name = "Kikiam";
                                break;
                            case "Corndog":
                                $order_price = $corndog;
                                $item_name = "Corndog";
                                break;
                            default:
                                $order_price = 0;
                                $item_name = "";
                                break;
                        }

                        $total_cost = $order_price * $quantity;
                        $change = $cash - $total_cost;

                        // Check if user has enough cash
                        if ($total_cost <= $cash) {
                            // Generate the receipt
                            echo "<h2>Receipt</h2>";
                            echo "Total Cost: {$total_cost} PHP<br>";
                            echo "Payment: {$cash} PHP<br>";
                            echo "Change: {$change} PHP<br>";

                            // Display the current date and time
                            echo "Date and Time of Purchase: " . date('Y-m-d H:i:s') . "<br>";
                            echo "<strong>Thanks for your order!</strong>";
                        } else {
                            // If cash is not enough
                            echo "<strong><br>You do not have enough money.</strong>";
                        }
                    }
                } else {
                    echo "<br>Invalid input. Please enter numeric values for quantity and cash.";
                }
            }
        }
    }

    handleForm();
?>
