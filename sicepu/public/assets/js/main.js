// This file contains the custom JavaScript for the application.

// Function to handle the click event for buttons that navigate to different pages
document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.nav-link'); // Select all navigation links

    buttons.forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default link behavior
            const targetPage = this.getAttribute('href'); // Get the target page from the href attribute
            
            // Use AJAX to load the content of the target page
            fetch(targetPage)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.text();
                })
                .then(html => {
                    document.querySelector('#content').innerHTML = html; // Update the content area with the new page
                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                });
        });
    });
});