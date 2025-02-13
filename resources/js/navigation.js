// resources/js/navigation.js
document.addEventListener("DOMContentLoaded", function () {
    // Add scroll lock when menu is opened
    window.addEventListener("toggle-menu", function () {
        const body = document.body;
        if (body.style.overflow !== "hidden") {
            body.style.overflow = "hidden";
        } else {
            body.style.overflow = "unset";
        }
    });

    // Close menu on escape key
    document.addEventListener("keydown", function (e) {
        if (e.key === "Escape") {
            const event = new CustomEvent("toggle-menu");
            window.dispatchEvent(event);
        }
    });
});
