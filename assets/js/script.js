// Dropdown menu
document.addEventListener('DOMContentLoaded', function () {
    const dropdownTriggers = document.querySelectorAll('.dropdown-trigger');
    let currentOpenDropdown = null;
    let closeTimer = null;

    dropdownTriggers.forEach(trigger => {
        const dropdown = trigger.nextElementSibling;

        trigger.addEventListener('mouseover', function () {
            clearTimeout(closeTimer);
            openDropdown(dropdown);
        });

        trigger.addEventListener('mouseout', function () {
            // Start a timer to close the dropdown, allows moving between trigger and dropdown
            closeTimer = setTimeout(() => closeDropdown(dropdown), 300); // Adjust the timeout as needed
        });

        dropdown.addEventListener('mouseover', function () {
            clearTimeout(closeTimer);
        });

        dropdown.addEventListener('mouseout', function () {
            closeTimer = setTimeout(() => closeDropdown(dropdown), 300); // Adjust the timeout as needed
        });
    });

    function openDropdown(dropdown) {
        if (currentOpenDropdown && currentOpenDropdown !== dropdown) {
            closeDropdown(currentOpenDropdown);
        }
        dropdown.style.opacity = '1';
        dropdown.style.visibility = 'visible';
        currentOpenDropdown = dropdown;
    }

    function closeDropdown(dropdown) {
        dropdown.style.opacity = '0';
        dropdown.style.visibility = 'hidden';
        currentOpenDropdown = null;
    }
});

