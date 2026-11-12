window.openPhotoGalleryModal = function() {
    const modal = document.getElementById('uniqueGalleryModal');
    if (modal) {
        modal.classList.add('active');
    } else {
        console.error("");
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

    window.openGalleryModal = function() {
        if (announcementModal) announcementModal.classList.add("active");
    };

    window.closeGalleryModal = function() {
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

     function updateCounts() {

            const rows = document.querySelectorAll("#clearanceTable tr");

            let pending = 0;
            let approved = 0;

            rows.forEach(row => {

                const status = row.querySelector(".status-badge");

                if (status.classList.contains("pending")) {
                    pending++;
                }

                if (status.classList.contains("approved")) {
                    approved++;
                }

            });

            document.getElementById("pendingCount").textContent = pending;
            document.getElementById("approvedCount").textContent = approved;
            document.getElementById("totalCount").textContent = rows.length;

        }


        function approveRequest(button) {

            const confirmation = confirm(
                "Are you sure you want to approve this clearance request?"
            );

            if (!confirmation) {
                return;
            }

            const row = button.closest("tr");
            const status = row.querySelector(".status-badge");

            status.textContent = "Approved";
            status.classList.remove("pending");
            status.classList.add("approved");

            button.innerHTML =
                '<i class="fa-solid fa-check-double"></i> Approved';

            button.classList.remove("approve-btn");
            button.classList.add("approved-btn");
            button.disabled = true;

            updateCounts();

        }

        document.getElementById("searchInput").addEventListener("input", function() {

            const searchValue = this.value.toLowerCase();

            const rows = document.querySelectorAll("#clearanceTable tr");

            let visibleRows = 0;

            rows.forEach(row => {

                const residentName = row.cells[1].textContent.toLowerCase();
                const requestID = row.cells[0].textContent.toLowerCase();

                if (
                    residentName.includes(searchValue) ||
                    requestID.includes(searchValue)
                ) {
                    row.style.display = "";
                    visibleRows++;
                } else {
                    row.style.display = "none";
                }

            });

            document.getElementById("emptyMessage").style.display =
                visibleRows === 0 ? "block" : "none";

        });

        updateCounts();

        const navLinks = document.querySelectorAll(".nav-link");
const sections = document.querySelectorAll(".content-section");
const modal = document.getElementById("detailsModal");
let activeRow = null;

navLinks.forEach(link => {
    link.addEventListener("click", () => {
        navLinks.forEach(item => item.classList.remove("active"));
        sections.forEach(section => section.classList.remove("active-section"));
        link.classList.add("active");
        document.getElementById(link.dataset.target).classList.add("active-section");
    });
});


document.querySelectorAll(".table-search").forEach(search => {
    search.addEventListener("input", () => {
        const section = search.closest(".content-section");
        const query = search.value.toLowerCase();
        section.querySelectorAll("tbody tr").forEach(row => {
            row.style.display = row.innerText.toLowerCase().includes(query) ? "" : "none";
        });
    });
});

document.querySelectorAll(".view-btn").forEach(button => {
    button.addEventListener("click", () => {
        activeRow = button.closest("tr");
        document.getElementById("modalTitle").textContent = button.dataset.type;
        document.getElementById("detailName").textContent = button.dataset.name;
        document.getElementById("detailType").textContent = button.dataset.type;
        document.getElementById("detailPurpose").textContent = button.dataset.purpose;
        document.getElementById("detailDate").textContent = button.dataset.date;
        document.getElementById("statusSelect").value = button.dataset.status;
        modal.classList.add("show");
    });
});

function closeModal() {
    modal.classList.remove("show");
    activeRow = null;
}
document.getElementById("closeModal").addEventListener("click", closeModal);
modal.addEventListener("click", event => {
    if (event.target === modal) closeModal();
});
document.addEventListener("keydown", event => {
    if (event.key === "Escape") closeModal();
});

document.getElementById("saveStatus").addEventListener("click", () => {
    if (!activeRow) return;
    const newStatus = document.getElementById("statusSelect").value;
    const badge = activeRow.querySelector(".status");
    badge.textContent = newStatus;
    badge.className = "status " + ({
        "Pending": "pending",
        "Approved": "approved",
        "Rejected": "rejected",
        "In Progress": "progress",
        "Resolved": "resolved",
        "Completed": "completed"
    }[newStatus] || "pending");
    activeRow.querySelector(".view-btn").dataset.status = newStatus;
    closeModal();
});


document.addEventListener("DOMContentLoaded", function () {

    const calendarDays = document.getElementById("calendarDays");

    if (!calendarDays) {
        return;
    }

    let currentDate = new Date();

    const monthYear = document.getElementById("monthYear");
    const prevMonth = document.getElementById("prevMonth");
    const nextMonth = document.getElementById("nextMonth");
    const todayBtn = document.getElementById("todayBtn");

    function renderCalendar() {

        const year = currentDate.getFullYear();
        const month = currentDate.getMonth();

        const today = new Date();

        monthYear.textContent = currentDate.toLocaleDateString("en-US", {
            month: "long",
            year: "numeric"
        });

        const firstDay = new Date(year, month, 1).getDay();
        const lastDate = new Date(year, month + 1, 0).getDate();

        calendarDays.innerHTML = "";

        for (let i = 0; i < firstDay; i++) {

            const empty = document.createElement("div");

            empty.className = "calendar-day empty";

            calendarDays.appendChild(empty);
        }

        for (let day = 1; day <= lastDate; day++) {

            const cell = document.createElement("div");

            cell.className = "calendar-day";
            const isToday =
                day === today.getDate() &&
                month === today.getMonth() &&
                year === today.getFullYear();

            if (isToday) {
                cell.classList.add("today");
            }
            cell.innerHTML = `
                <span class="calendar-day-number">${day}</span>
                ${isToday ? '<span class="today-label">TODAY</span>' : ''}
            `;
            calendarDays.appendChild(cell);
        }
    }

    if (prevMonth) {
        prevMonth.addEventListener("click", function () {
            currentDate.setMonth(currentDate.getMonth() - 1);
            renderCalendar();
        });
    }

    if (nextMonth) {
        nextMonth.addEventListener("click", function () {
            currentDate.setMonth(currentDate.getMonth() + 1);
            renderCalendar();
        });
    }

    if (todayBtn) {
        todayBtn.addEventListener("click", function () {
            currentDate = new Date();
            renderCalendar();
        });
    }
    renderCalendar();

});

});