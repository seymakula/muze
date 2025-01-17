
document.getElementById("contact-form").addEventListener("submit", function (event) {
    event.preventDefault();
    const feedback = document.getElementById("feedback");
    feedback.style.display = "block";
});