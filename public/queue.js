fetch('ticket_data.php')
    .then(response => response.json())

    .then(tickets => { 
        const queueContainer = document.getElementById("queueCol"); 
        
        tickets.forEach(ticket => {

            if (tickets.length === 0) {
            // Handle the empty array case
            queueContainer.innerHTML = '<p>No tickets found.</p>';
            } else {
            
                // Populate the state filter dropdown (similar to your previous code)
                const patientStates = new Set();
                tickets.forEach(ticket => patientStates.add(ticket.state));
                const filterStateSelect = document.getElementById("filterPatientState");
                patientStates.forEach(state => {
                    const option = document.createElement("option");
                    option.value = state;
                    option.text = state;
                    filterStateSelect.add(option);
                });
                
                queueCol.innerHTML = ''; // Clear existing rows

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
                        <span class="text-wrap queue-text-md" id="patientName">${ticket.patient_fname} ${ticket.patient_lname}</span>
                    </div>

                    <div class="col-1">
                        <span class="badge bg-primary queue-text-md" id="patientAge">${ticket.patientAge} ${ticket.sex}</span>
                    </div>

                    <div class="col-1">
                        <span class="text-wrap queue-text-md" id="patientPractice">${ticket.prac_id}</span>
                    </div>

                    <div class="col-md-5" id="complaint">
                        <span class="queue-text-md">${ticket.complaint}</span>
                    </div>

                    <div class="col-1">
                        <button class="btn btn-sm btn-secondary no-click w-100" id="patientState">${ticket.state}</button>
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
                queueCol.appendChild(rowElement);

            }
        });

// Sort and Filter Logic for the Modal
document.getElementById("applyFilterSort").addEventListener("click", () => {
    const filterState = document.getElementById("filterPatientState").value;
    const sortField = document.getElementById("sortField").value;
    const sortOrder = document.getElementById("sortOrder").value;

    const rows = queueContainer.querySelectorAll(".row");

    rows.forEach(row => {
        // Filtering logic
        const patientState = row.querySelector("#patientState").textContent;
        if (filterState && patientState !== filterState) {
            row.style.display = "none";
            return; // Skip to the next row if filtered out
        } else {
            row.style.display = ""; // Show if not filtered
        }

        // ...more filtering conditions (if applicable)
    });

    // Sorting logic (using Array.from for better manipulation)
    Array.from(rows).sort((rowA, rowB) => {
        const valueA = rowA.querySelector(`#${sortField}`).textContent;
        const valueB = rowB.querySelector(`#${sortField}`).textContent;
        return (sortOrder === "asc" ? 1 : -1) * valueA.localeCompare(valueB); // Handle different data types (date, string, etc.)
    }).forEach(row => queueContainer.appendChild(row)); 

    $('#filterSortModal').modal('hide');
});
            });
