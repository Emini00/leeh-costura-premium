const dropdownButtons =
    document.querySelectorAll('.dropdown-button');

dropdownButtons.forEach(button => {

    button.addEventListener('click', function () {

        const dropdownContent =
            this.nextElementSibling;

        dropdownContent.classList.toggle('show-dropdown');

    });

});