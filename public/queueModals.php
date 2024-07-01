<?php
?>
<!-- Nurse Sign In Modal -->
<div class="modal fade" id="nurseSignInModal" tabindex="-1" aria-labelledby="nurseModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="nurseModalLabel">Nurse Sign In</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#editNurseModal">
                    Add New
                </button>
                <table class="table small">
                    <thead>
                        <tr>
                            <th scope="col">Role</th>
                            <th scope="col">Nurse Name</th>
                            <th scope="col">Shift</th>
                            <th scope="col">License</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>

                    <tbody id="nurseTable">
                        <tr>
                            <td>Manager On Call</td>
                            <td>Martin</td>
                            <td>24/7</td>
                            <td>N/A</td>
                            <td>904-853-0053</td>
                            <td>
                                <!-- Edit and Remove buttons -->
                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editNurseModal">
                                    Edit
                                </button>
                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#removeNurseModal">
                                    Remove
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>CN</td>
                            <td>Tina Hoffman</td>
                            <td>6am - 10am</td>
                            <td>All</td>
                            <td>757-652-4634</td>
                            <td>
                                <!-- Edit and Remove buttons -->
                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editNurseModal">
                                    Edit
                                </button>
                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#removeNurseModal">
                                    Remove
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div><!-- .modal-body -->

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div><!-- .modal-footer -->

        </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
</div><!-- #nurseSignInModal -->


<!-- Nurse Information Modal -->
<div class="modal fade" id="nurseInfoModal" tabindex="-1" aria-labelledby="nurseInfoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="nurseModalLabel">Nurse Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <!-- Move somewhere
                <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#editNurseModal">
                    Add New
                </button>
                -->

                <div class="row row-cols-3" id="nurseInfoCardsRow">
                    <div class="col">
                        <div class="card">
                            <div class="card-header bg-info">
                                Nurse Forms
                            </div>
                            <div class="card-body">
                                <a href="https://forms.zohopublic.com/triagelogic/form/NurseShiftReportNovember2022/formperma/HPVeYNqXv5ms9aP14BZV4YGvsfpvdWSVcWGOQAmGZ-M" class="btn btn-success">Shift Notes</a>
                                <a href="https://forms.zohopublic.com/triagelogic/form/ShiftSwapForm/formperma/4MY9mtgH4WSLV6y1R_FiLT3N39xbpFyoTfBpYqQ5rr8" class="btn btn-success">Shift Swaps</a>
                            </div>
                        </div><!-- .card -->
                    </div><!-- .col -->

                    <div class="col">
                        <div class="card">
                            <div class="card-header bg-warning">
                                Travelling in CA
                            </div>
                            <div class="card-body">
                                <p class="card-text">If we receive a call from a PhoneRN patient that is TRAVELING in CA and there is a PhoneRN CA licensed nurse on shift (check Nurse Sign In), please triage. Otherwise, the call should be sent to the on call provider after ruling out 911.</p>    
                            </div>
                        </div><!-- .card -->
                    </div><!-- .col -->

                    <div class="col">
                        <div class="card">
                            <div class="card-header bg-info">
                                Interpretter
                            </div>
                            <div class="card-body">
                                <h6 class="card-title">OPI is now Stratus Video 877-746-4674</h6>
                                <pre class="card-text">
Company ID: 5684
Department: Practice name (this is vital to billing)
Before you call: know the language needed, the dial out number, be prepared to brief the interpreter and provide them with a message if the patient does not answer
During the call: Speak in short phrases, pause to allow interpretation, ask questions in the first person
If Stratus is not working then we use Globo 855.218.3758
                                </pre>    
                            </div>
                        </div><!-- .card -->
                    </div><!-- .col -->


                    

                </div><!-- #nurseInfoCardsRow -->
                
            </div><!-- .modal-body -->

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div><!-- .modal-footer -->

        </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
</div><!-- #nurseSignInModal -->

<!-- Filter and Sort Modal -->
<div class="modal fade" id="filterSortModal" tabindex="-1" aria-labelledby="filterSortModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="filterSortModalLabel">Filter & Sort</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="filterSortForm">
                    <div class="mb-3">
                        <label for="filterPatientState" class="form-label">Patient State:</label>
                        <select class="form-select" id="filterPatientState">
                            <option value="">All</option>
                            </select>
                    </div>
                    <div class="mb-3">
                        <label for="sortField" class="form-label">Sort By:</label>
                        <select class="form-select" id="sortField">
                            <option value="submittedDateTime">Submitted Date/Time</option>
                            <option value="patientAge">Patient Age</option>
                            </select>
                    </div>
                    <div class="mb-3">
                        <label for="sortOrder" class="form-label">Order:</label>
                        <select class="form-select" id="sortOrder">
                            <option value="asc">Ascending</option>
                            <option value="desc">Descending</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="applyFilterSort">Apply</button>
            </div>
        </div>
    </div>
</div>

