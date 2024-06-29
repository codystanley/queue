async function createQueueRowsFromDatabase() {
    // 1. Fetch data from the database (replace with your actual database call)
    const databaseData = await fetchDatabaseData(); 

    const queueContainer = document.getElementById("queueContainer"); // Get the container for the rows

    // 2. Iterate through each row of data
    databaseData.forEach(ticket => {
        // 3. Create the row element
        const rowElement = document.createElement("div");
        rowElement.classList.add("row", "row", "bg-light", "py-1", "border-2", "border-dark", "border-top", "border-bottom", "my-2", "align-items-center");
        rowElement.id = `ticket${ticket.id}`; // Set a unique ID

        // 4. Populate the row with data
        rowElement.innerHTML = `
            <div class="col-1 border-end border-info">
                <div class="row">
                    <div class="col" id="ticketSubmitted">
                        <span class="queue-text-sm">${ticket.submittedDateTime}</span>
                    </div>
                </div>
                <div class="row" id="ticketAgeRow">
                    <div class="col" id="ticketAge">
                        <button class="btn btn-sm btn-outline-danger no-click w-100">${ticket.age}</button>
                    </div>
                </div>
            </div>

            <div class="col-1" id="patient">
                <span class="text-wrap queue-text-md" id="patientName">${ticket.patientName}</span>
            </div>

            <div class="col-1">
                <span class="badge bg-primary queue-text-md" id="patientAge">${ticket.patientAge} ${ticket.patientGender}</span>
            </div>

            <div class="col-1">
                <span class="text-wrap queue-text-md" id="patientPractice">${ticket.patientPractice}</span>
            </div>

            <div class="col-md-5" id="complaint">
                <span class="queue-text-md">${ticket.complaint}</span>
            </div>

            <div class="col-1">
                <button class="btn btn-sm btn-secondary no-click w-100" id="patientState">${ticket.patientState}</button>
            </div>

            <div class="col-1">
                <button id="ticketPriority" type="button" class="btn btn-sm btn-warning w-100" data-bs-toggle="modal" data-bs-target="#editPriorityModal">
                    ${ticket.priority}
                </button>
            </div>

            <div class="col-1">
                <button id="ticketClaim" type="button" class="btn btn-sm btn-success bg-gradient w-100" data-bs-toggle="modal" data-bs-target="#removeNurseModal">
                    Claim
                </button>
            </div>
        `;

        // 5. Add the row to the container
        queueContainer.appendChild(rowElement);
    });
}

// Placeholder function to simulate fetching data from your database
async function fetchDatabaseData() {
    // Replace this with your actual database fetching logic
    return [
        { id: 1, submittedDateTime: "Aug 28 2023 12:42 AM EDT", age: "01h:07m", patientName: "EMMA TSOSIE", patientAge: "51 Years", patientGender: "F", patientPractice: "IN FA Diabetes and Endocrinology Specialists", complaint: "PATIENT HAS HAD A SURGERY...", patientState: "Ohio", priority: 11 },
        // ...more ticket data
    ];
}

// Call the function to create the queue rows
createQueueRowsFromDatabase();
