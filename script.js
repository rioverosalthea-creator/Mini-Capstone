const galleryModal = document.getElementById('galleryModal');
const modal = document.getElementById("announcementModal");
const loadingState = document.getElementById('modalLoading');
const galleryContent = document.getElementById('modalGalleryContent');

    function openGalleryModal() {
    if (modal) {
        modal.classList.add("active");
    }
    }

    function closeGalleryModal() {
    if (modal) {
        modal.classList.remove("active");
    }
    }

    window.addEventListener("click", (event) => {
    if (event.target === modal) {
        closeGalleryModal();
    }
    });
    galleryModal.addEventListener('show.bs.modal', () => {
        loadingState.style.display = 'block';
        galleryContent.style.display = 'none';
        setTimeout(() => {
            loadingState.style.display = 'none';
            galleryContent.style.display = 'block';
        }, 1500);
    });



    