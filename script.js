window.openPhotoGalleryModal = function() {
    const modal = document.getElementById('uniqueGalleryModal');
    if (modal) {
        modal.classList.add('active');
    } else {
        console.error("Hindi makita ang element na may ID na 'uniqueGalleryModal'");
    }
};

window.closePhotoGalleryModal = function() {
    const modal = document.getElementById('uniqueGalleryModal');
    if (modal) {
        modal.classList.remove('active');
    }
};

window.previewUgImage = function(imgElement) {
    const previewModal = document.getElementById('ugPreviewModal');
    const previewImg = document.getElementById('ugPreviewImg');
    if (previewModal && previewImg) {
        previewImg.src = imgElement.src;
        previewModal.classList.add('active');
    }
};

window.closeUgPreview = function() {
    const previewModal = document.getElementById('ugPreviewModal');
    if (previewModal) {
        previewModal.classList.remove('active');
    }
};

window.addUgComment = function(event) {
    event.preventDefault();
    const input = document.getElementById('ugCommentInput');
    const commentText = input ? input.value.trim() : "";
    
    if (commentText !== "") {
        const commentsList = document.getElementById('ugCommentsList');
        if (commentsList) {
            const newComment = document.createElement('div');
            newComment.className = 'ug-comment-item';
            newComment.innerHTML = `<strong>You:</strong> ${commentText}`;
            commentsList.appendChild(newComment);
            input.value = "";
            commentsList.scrollTop = commentsList.scrollHeight;
        }
    }
};

document.addEventListener("DOMContentLoaded", function () {

    const galleryModal = document.getElementById("galleryModal");
    const loadingState = document.getElementById("modalLoading");
    const galleryContent = document.getElementById("modalGalleryContent");

    if (galleryModal) {
        galleryModal.addEventListener("show.bs.modal", function () {
            if (loadingState) loadingState.style.display = "block";
            if (galleryContent) galleryContent.style.display = "none";

            setTimeout(function () {
                if (loadingState) loadingState.style.display = "none";
                if (galleryContent) galleryContent.style.display = "block";
            }, 1500);
        });
    }

    const announcementModal = document.getElementById("announcementModal");

    window.openAnnouncementModal = function() {
        if (announcementModal) announcementModal.classList.add("active");
    };

    window.closeAnnouncementModal = function() {
        if (announcementModal) announcementModal.classList.remove("active");
    };

    window.openModal = function(modalId) {
        const selectedModal = document.getElementById(modalId);
        if (selectedModal) selectedModal.classList.add("active");
    };

    window.closeModal = function(modalId) {
        const selectedModal = document.getElementById(modalId);
        if (selectedModal) selectedModal.classList.remove("active");
    };

    function updateClock() {
        const now = new Date();
        const time = now.toLocaleTimeString('en-US', {
            hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: true
        });
        const date = now.toLocaleDateString('en-US', {
            weekday: 'short', month: 'short', day: '2-digit', year: 'numeric'
        });

        const currentTime = document.getElementById("currentTime");
        const currentDate = document.getElementById("currentDate");

        if (currentTime && currentDate) {
            currentTime.textContent = time;
            currentDate.textContent = date;
        }
    }
    updateClock();
    setInterval(updateClock, 1000);

    window.toggleProfile = function () {
        const menu = document.getElementById("profileMenu");
        if (menu) menu.classList.toggle("show");
    };

    document.addEventListener("click", function(event) {
        const profile = document.querySelector(".profile-dropdown");
        const menu = document.getElementById("profileMenu");
        if (profile && menu && !profile.contains(event.target)) {
            menu.classList.remove("show");
        }
    });

});