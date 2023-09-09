document.addEventListener("DOMContentLoaded", function () {
    const serviceSelect = document.getElementById("service");
    const quantityInput = document.getElementById("quantity");
    const totalInput = document.getElementById("total");

    // Event listener for changes in service and quantity
    serviceSelect.addEventListener("change", updateTotal);
    quantityInput.addEventListener("input", updateTotal);

    // Function to update the total amount
    function updateTotal() {
        const servicePrice = getServicePrice(serviceSelect.value);
        const quantity = parseFloat(quantityInput.value) || 0;
        const total = servicePrice * quantity;
        totalInput.value = total.toFixed(2);
    }

    // Function to get the price of a service (replace with your actual prices)
    function getServicePrice(service) {
        switch (service) {
            case "service1":
                return 10.00;
            case "service2":
                return 15.00;
            case "service3":
                return 20.00;
            default:
                return 0.00;
        }
    }

    // Initial update
    updateTotal();
});
