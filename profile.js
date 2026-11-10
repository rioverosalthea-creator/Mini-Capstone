document.addEventListener("DOMContentLoaded", function () {

    const profileModal = document.getElementById("editProfileModal");
    const profileForm = document.getElementById("editProfileForm");

    window.openEditProfile = function () {
        if (profileModal) {
            profileModal.classList.add("active");
        }
    };

    window.closeEditProfile = function () {
        if (profileModal) {
            profileModal.classList.remove("active");
        }
    };

    if (profileModal) {
        profileModal.addEventListener("click", function (event) {
            if (event.target === profileModal) {
                window.closeEditProfile();
            }
        });
    }

    if (profileForm) {
        profileForm.addEventListener("submit", function (event) {
            event.preventDefault();
            alert("Profile form submitted successfully!");
            window.closeEditProfile();
        });
    }

});