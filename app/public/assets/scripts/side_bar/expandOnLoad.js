document.addEventListener("DOMContentLoaded", function() {
    let collapseBtn = document.getElementById("collapse-btn");
    let ariaExpanded = collapseBtn.getAttribute("aria-expanded");
    console.log(ariaExpanded);
    if (window.innerWidth > 990 && ariaExpanded === "false") {
        collapseBtn.click();
        console.log(ariaExpanded);
        console.log(window.innerWidth);
    }

    if (window.innerWidth < 990 && ariaExpanded === "true") {
        collapseBtn.click();
        console.log(window.innerWidth);
    }
});