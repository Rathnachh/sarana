document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("form_register");
    const overlay = document.getElementById("overlay");

    form.addEventListener("submit", (e) => {
        e.preventDefault(); // Prevent the default form submission

        // Show loading overlay
        overlay.style.display = 'block';

        // Gather form data
        const frm = new FormData(form);

        // Send AJAX request
        fetch('controller/requestController.php', {
            method: 'POST',
            body: frm,
        })
        .then(response => response.json())
        .then(data => {
            overlay.style.display = 'none'; // Hide loading overlay

            if (data.error) {
                alert(data.error); // Show error if there's any
            } else {
                // Success
                alert(`User registered successfully! Email: ${data.email}`);
                window.location.href = 'index.php'; // Redirect after success
            }
        })
        .catch(err => {
            overlay.style.display = 'none'; // Hide loading overlay
            console.error('Error:', err); // Log any errors
        });
    });
});
