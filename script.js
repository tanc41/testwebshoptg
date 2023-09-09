function orderService(service) {
    // Store the selected service in local storage or a cookie
    localStorage.setItem('selectedService', service);

    // Redirect to the checkout page
    window.location.href = 'checkout.html';
}
