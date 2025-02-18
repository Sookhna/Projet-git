const loader = document.getElementById('loader');

// Add event listener to the form to handle the submission
const form = document.getElementById('generate-form');

form.addEventListener('submit', async (event) => {
    event.preventDefault(); // Empêche le rechargement de la page lors de la soumission du formulaire

    // Check if the description is provided
    const description = document.getElementById('description').value;
    if (!description.trim()) {
        alert('Please enter a description!');
        return;
    }

    try {
        // Show the loader while processing the request
        loader.style.display = 'block';

        // Send request to generate.php with the description
        const response = await fetch('generate.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ description })
        });

        const data = await response.json();
        const resultDiv = document.getElementById('result');

        // Check if the response contains generated links
        let link = data.links && data.links[0] ? data.links[0] : null;

        // Display the result or error
        if (link) {
            // Get current URL
            var url = window.location.href;
            resultDiv.innerHTML = `<a href="${url + link}" target="_blank">View Generated Page</a>`;
        } else {
            resultDiv.innerHTML = 'Error generating the page.';
        }
    } catch (error) {
        // Display an error message if something goes wrong
        document.getElementById('result').innerHTML = 'An error occurred. Please try again.';
        console.error('Error:', error);
    } finally {
        // Hide the loader after processing
        loader.style.display = 'none';
    }
});
