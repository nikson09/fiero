document.addEventListener('DOMContentLoaded', function() {
    // Check if user has already verified their age
    if (localStorage.getItem('ageVerified') === 'true') {
        document.querySelector('.eapp-age-verification-popup-container').style.display = 'none';
        return;
    } else {
        document.querySelector('.eapp-age-verification-popup-container').style.display = 'flex';
    }

    // Get the buttons
    const yesButton = document.querySelector('.eapp-age-verification-item-allow-buttons-yes');
    const noButton = document.querySelector('.eapp-age-verification-item-allow-buttons-no');

    // Handle Yes button click
    yesButton.addEventListener('click', function() {
        localStorage.setItem('ageVerified', 'true');
        document.querySelector('.eapp-age-verification-popup-container').style.display = 'none';
    });

    // Handle No button click
    noButton.addEventListener('click', function() {
        localStorage.setItem('ageVerified', 'false');
        window.location.href = 'https://www.google.com'; // Redirect to Google or any other appropriate page
    });
}); 