document.querySelectorAll("button").forEach(button => {
    if (button.hasAttribute("data-bs-target") && button.getAttribute("data-bs-target") == "#modal-img")
        button.onclick = () => {
            let modal = document.querySelector("#modal-img .modal-body");
            while (modal.firstChild) {
                modal.removeChild(modal.firstChild);
            }
            modal.appendChild(button.firstChild.cloneNode());

            let title = document.querySelector("#modal-img .modal-title");
            title.textContent = button.firstChild.alt;
        }
});