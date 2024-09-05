// Wait for the DOM to fully load
document.addEventListener('DOMContentLoaded', () => {
    // Get references to the alert and close button
    const alertBox = document.getElementById('success-message');
    const closeButton = document.getElementById('close-button');

    // If the close button is present, add a click event listener
    if (closeButton) {
        closeButton.addEventListener('click', () => {
            // Hide the alert when the close button is clicked
            alertBox.style.display = 'none';
        });
    }
});

