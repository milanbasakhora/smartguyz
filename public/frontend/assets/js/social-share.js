function sharePage(event) {
    event.preventDefault();
    // Get the current page's URL
    const pageUrl = window.location.href;

    // Create a temporary input element to copy the URL to the clipboard
    const tempInput = document.createElement('input');
    tempInput.value = pageUrl;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand('copy');
    document.body.removeChild(tempInput);

    // Provide user feedback (optional)
    alert('Page URL copied to clipboard!');
}

function shareOnFacebook(event) {
    event.preventDefault();
    // Implement your logic for sharing on Facebook
    // This will open a new window with a Facebook share dialog:
    window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(window.location.href), '_blank');
}

function shareOnMessenger(event) {
    event.preventDefault();
    // Implement your logic for sharing on Facebook Messenger
    // This will open a new window with a Messenger share dialog:
    window.open('fb-messenger://share/?link=' + encodeURIComponent(window.location.href), '_blank');
}

function shareOnTwitter(event) {
    event.preventDefault();
    // Implement your logic for sharing on Twitter
    // This will open a new window with a Twitter share dialog:
    window.open('https://twitter.com/intent/tweet?url=' + encodeURIComponent(window.location.href), '_blank');
}

function shareOnLinkedIn(event) {
    event.preventDefault();
    // Implement your logic for sharing on LinkedIn
    // This will open a new window with a LinkedIn share dialog:
    window.open('https://www.linkedin.com/sharing/share-offsite/?url=' + encodeURIComponent(window.location.href), '_blank');
}
