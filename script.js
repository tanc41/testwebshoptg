document.addEventListener("DOMContentLoaded", function () {
    const orderButtons = document.querySelectorAll(".order-button");

    orderButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            const serviceName = this.getAttribute("data-service");
            alert(`Thank you for ordering ${serviceName}! We'll contact you shortly.`);
        });
    });
});
