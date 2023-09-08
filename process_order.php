<?php
// Process the order and calculate the total cost
$service = $_POST['service'];
$quantity = $_POST['quantity'];

// Calculate the total cost based on the service and quantity (you can define your own pricing logic)

$totalCost = calculateTotalCost($service, $quantity);

// Redirect to PayPal for payment (you would need to replace with your actual payment gateway)
$paypalURL = "https://www.paypal.com/cgi-bin/webscr";
$paypalEmail = "your_paypal_email@example.com";

// Prepare the PayPal form
echo '<form action="' . $paypalURL . '" method="post">';
echo '<input type="hidden" name="business" value="' . $paypalEmail . '">';
echo '<input type="hidden" name="cmd" value="_xclick">';
echo '<input type="hidden" name="item_name" value="' . $service . '">';
echo '<input type="hidden" name="amount" value="' . $totalCost . '">';
echo '<input type="hidden" name="currency_code" value="USD">';
echo '<input type="submit" value="Pay with PayPal">';
echo '</form>';

// Function to calculate total cost based on service and quantity
function calculateTotalCost($service, $quantity) {
    // Define your pricing logic here
    // For example, you can have a price array for each service
    $prices = [
        "service1" => 10,
        "service2" => 20,
        "service3" => 30,
    ];

    if (array_key_exists($service, $prices)) {
        return $prices[$service] * $quantity;
    } else {
        return 0; // Service not found, handle this case accordingly
    }
}
?>
