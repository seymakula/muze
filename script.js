// Form gönderildiğinde teşekkür mesajını göster
document.getElementById("contact-form").addEventListener("submit", function (event) {
    event.preventDefault(); // Formun varsayılan davranışını engeller
    const feedback = document.getElementById("feedback");
    feedback.style.display = "block"; // Teşekkür mesajını görünür yap
});