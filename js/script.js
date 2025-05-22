function callNow() {
    window.open("tel:+919448747147", "_blank");
}

function whatsapp() {
    window.open("https://wa.me/+919945029443", "_blank");
}

// Google Translate API Initialization
function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}

// Function to Change Language (Restricting to English, Hindi, Kannada)
function changeLanguage(language) {
    var googleTranslateDropdown = document.querySelector(".goog-te-combo");
    if (googleTranslateDropdown) {
        googleTranslateDropdown.value = language;
        googleTranslateDropdown.dispatchEvent(new Event("change"));
    }
}