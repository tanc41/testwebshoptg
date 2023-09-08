<?php
<script src="https://telegram.org/js/telegram-web-app.js"></script>
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedService = $_POST["service"];
    $quantity = $_POST["quantity"];
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Calculate total cost based on the selected service and quantity.
    // You can define the prices for each service.
    $totalCost = calculateTotalCost($selectedService, $quantity);

    // Here, you would integrate a payment gateway to process the payment.
    // For simplicity, we'll just display the total cost.
    echo "<h2>Order Summary</h2>";
    echo "<p>Service: $selectedService</p>";
    echo "<p>Quantity: $quantity</p>";
    echo "<p>Total Cost: $totalCost USD</p>";
} else {
    echo "Invalid request.";
}

function calculateTotalCost($service, $quantity) {
    // Define the prices for each service.
    $servicePrices = [
        "service1" => 50,
        "service2" => 75,
        "service3" => 100,
    ];

    // Check if the selected service exists in the array.
    if (array_key_exists($service, $servicePrices)) {
        $pricePerUnit = $servicePrices[$service];
        return $pricePerUnit * $quantity;
    } else {
        return 0; // Invalid service selected.
    }
}
?>
