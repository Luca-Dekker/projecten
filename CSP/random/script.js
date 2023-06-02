// Get all the dropdown buttons
var dropdownButtons = document.querySelectorAll(".dropdown");

// Add a click event listener to each button
dropdownButtons.forEach(function(button) {
    button.addEventListener("mouseover", function() {
        // Toggle the "show" class on the dropdown content
        var content = this.querySelector(".dropdown-content");
        content.classList.toggle("show");
    });
});

// Close the dropdown menu if the user clicks outside of it
document.addEventListener("click", function(event) {
    var dropdowns = document.querySelectorAll(".dropdown-content");
    dropdowns.forEach(function(dropdown) {
        if (!dropdown.classList.contains("show")) {
            return;
        }
        if (!event.target.closest(".dropdown")) {
            dropdown.classList.remove("show");
        }
    });
});
