
let selectedRequestId = null;

function showDetails(request) {
    selectedRequestId = request.request_id;

    document.getElementById("detailId").textContent = request.request_id || "";
    document.getElementById("detailName").textContent = request.fullname || "";
    document.getElementById("detailBirthdate").textContent = request.birthdate || "";
    document.getElementById("detailSex").textContent = request.sex || "";
    document.getElementById("detailCivilStatus").textContent = request.status || "";
    document.getElementById("detailContact").textContent = request.contact_number || "";
    document.getElementById("detailAddress").textContent = request.address || "";
    document.getElementById("detailPurpose").textContent = request.purpose || "";
    document.getElementById("detailClaimDate").textContent = request.claim_date || "";
    document.getElementById("detailSubmitted").textContent = request.date_submitted || "";
    document.getElementById("requestStatus").value = request.request_status || "Pending";

    document.getElementById("detailsModal").classList.add("active");
}

function closeDetails() {
    document.getElementById("detailsModal").classList.remove("active");
}

function saveStatus() {
    if (!selectedRequestId) return;

    const form = document.createElement("form");
    form.method = "POST";
    form.action = "update_clearance_status.php";

    const idInput = document.createElement("input");
    idInput.type = "hidden";
    idInput.name = "request_id";
    idInput.value = selectedRequestId;

    const statusInput = document.createElement("input");
    statusInput.type = "hidden";
    statusInput.name = "request_status";
    statusInput.value = document.getElementById("requestStatus").value;

    form.appendChild(idInput);
    form.appendChild(statusInput);
    document.body.appendChild(form);
    form.submit();
}

document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("searchInput");

    if (searchInput) {
        searchInput.addEventListener("input", function () {
            const search = this.value.toLowerCase();

            document.querySelectorAll("tbody tr").forEach(row => {
                row.style.display = row.textContent.toLowerCase().includes(search) ? "" : "none";
            });
        });
    }
});


let selectedComplaintId = null;

function showComplaintDetails(complaint) {
    selectedComplaintId = complaint.request_id;

    document.getElementById("complaintId").textContent = complaint.request_id || "";
    document.getElementById("complainantName").textContent = complaint.fullname || "";
    document.getElementById("complainantContact").textContent = complaint.contact_number || "";
    document.getElementById("complainantAddress").textContent = complaint.address || "";

    document.getElementById("respondentName").textContent = complaint.respondent_name || "";
    document.getElementById("respondentAddress").textContent = complaint.respondent_address || "";

    document.getElementById("complaintText").textContent = complaint.complaint || "";
    document.getElementById("incidentDate").textContent = complaint.incident_date || "";
    document.getElementById("incidentTime").textContent = complaint.incident_time || "";
    document.getElementById("incidentLocation").textContent = complaint.location || "";
    document.getElementById("incidentDescription").textContent = complaint.description || "";
    document.getElementById("complaintSubmitted").textContent = complaint.date_submitted || "";

    document.getElementById("complaintStatus").value = complaint.request_status || "Pending";

    document.getElementById("complaintModal").classList.add("active");
}

function closeComplaintDetails() {
    document.getElementById("complaintModal").classList.remove("active");
}

function saveComplaintStatus() {
    if (!selectedComplaintId) return;

    const form = document.createElement("form");
    form.method = "POST";
    form.action = "update_complaint_status.php";

    const idInput = document.createElement("input");
    idInput.type = "hidden";
    idInput.name = "request_id";
    idInput.value = selectedComplaintId;

    const statusInput = document.createElement("input");
    statusInput.type = "hidden";
    statusInput.name = "request_status";
    statusInput.value = document.getElementById("complaintStatus").value;

    form.appendChild(idInput);
    form.appendChild(statusInput);

    document.body.appendChild(form);
    form.submit();
}

document.addEventListener("DOMContentLoaded", function () {
    const complaintSearch = document.getElementById("complaintSearchInput");

    if (complaintSearch) {
        complaintSearch.addEventListener("input", function () {
            const searchValue = this.value.toLowerCase();
            const rows = document.querySelectorAll(
                "#complaintSearchInput"
            );

            const tableRows = complaintSearch
                .closest(".request-section")
                .querySelectorAll("tbody tr");

            tableRows.forEach(function (row) {
                const complainant = row.cells[1]?.textContent.toLowerCase() || "";

                row.style.display = complainant.includes(searchValue)
                    ? ""
                    : "none";
            });
        });
    }
});

