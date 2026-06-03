const dropdownButtons =
    document.querySelectorAll('.dropdown-button');

dropdownButtons.forEach(button => {

    button.addEventListener('click', function () {

        if (window.innerWidth > 768) {
            return;
        }

        const dropdownContent =
            this.nextElementSibling;

        dropdownContent.classList.toggle('show-dropdown');

    });

});