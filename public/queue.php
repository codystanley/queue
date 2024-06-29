<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- Include the custom CSS file -->
    <link href="css/custom.css" rel="stylesheet">

</head>
<body>
    <div class="container-fluid" id="mainContainer">

        <?php include 'navigation.php'; ?>

        <div class="row my-2" id="nurseutilities-row">
            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-primary col-2" data-bs-toggle="modal" data-bs-target="#nurseSignInModal">
                    <i class="bi-alarm mx-1"></i><span>Nurse Sign In</span>
                </button>
                <button type="button" class="btn btn-sm btn-primary col-2" data-bs-toggle="modal" data-bs-target="#nurseInfoModal">
                    <i class="bi-info-circle mx-1"></i><span>Nurse Information</span>
                </button>
                <button type="button" class="btn btn-sm btn-primary col-2" data-bs-toggle="modal" data-bs-target="#queueSortFiltertModal">
                    <i class="bi-laptop mx-1"></i><span>Queue Sort & Filter</span>
                </button>
            </div>
        </div>

        <div class="row" id="queueRow">
            <div class="col" id="queueCol">

            <div class="row row bg-white py-1 mb-1 border-2 border-dark border-top border-bottom align-items-center" id="ticket2">
                    <div class="col-1 border-end border-info">
                        <div class="row">
                            <div class="col text-center" id="ticketSubmitted">
                                <span class="queue-text-xs">Aug 28 2023 12.42 AM EDT</span>
                            </div>
                        </div>

                        <div class="row" id="ticketAgeRow">
                            <div class="col" id="ticketAge">
                                <button class="btn btn-sm btn-outline-primary no-click w-100">00h:07m</button>
                            </div>
                        </div><!-- ticketAgeRow -->
                    </div>

                    <div class="col-1" id="patient">
                        <span class="text-wrap queue-text-md" id="patientName">Abdul Jabbar</span>
                    </div><!-- #patient -->

                    <div class="col-1">
                        <span class="badge bg-warning queue-text-lg" id="patientAge">15 Months F</span>
                    </div>

                    <div class="col-1">
                        <span class="text-wrap queue-text-md" id="patientPractice">Wake Forest Pediatric Specialists</span>
                    </div>

                    <div class="col-md-5" id="compaint">
                        <span class="queue-text-md"><strong>Fell off dresser. Hit head. Large lump.</strong></span>
                    </div><!-- complaint -->

                    <div class="col-1">
                        <button class="btn btn-sm btn-outline-primary no-click w-100" id="patientState">NC</button>
                    </div>

                    <div class="col-1">
                        <button id="ticketPriority" type="button" class="btn btn-sm btn-danger w-100" data-bs-toggle="modal" data-bs-target="#editPriorityModal">
                            21
                        </button>
                    </div>

                    <div class="col-1">
                        <button id="ticketClaim" type="button" class="btn btn-sm btn-success bg-gradient w-100" data-bs-toggle="modal" data-bs-target="#removeNurseModal">
                            Claim
                        </button>
                    </div>

                </div><!-- #ticket2 -->

                <div class="row row bg-light py-1 mb-1 border-2 border-dark border-top border-bottom align-items-center" id="ticket1">
                    <div class="col-1 border-end border-info">
                        <div class="row">
                            <div class="col text-center" id="ticketSubmitted">
                                <span class="queue-text-xs">Aug 28 2023 12.42 AM EDT</span>
                            </div>
                        </div>

                        <div class="row" id="ticketAgeRow">
                            <div class="col" id="ticketAge">
                                <button class="btn btn-sm btn-danger no-click w-100">01h:07m</button>
                            </div>
                        </div><!-- ticketAgeRow -->
                    </div>

                    <div class="col-1" id="patient">
                        <span class="text-wrap queue-text-md" id="patientName">EMMA TSOSIE</span>
                    </div><!-- #patient -->

                    <div class="col-1">
                        <span class="badge bg-primary queue-text-lg" id="patientAge">51 Years F</span>
                    </div>

                    <div class="col-1">
                        <span class="text-wrap queue-text-md" id="patientPractice">UCSF Diabetes and Endocrinology Specialists</span>
                    </div>

                    <div class="col-md-5" id="compaint">
                        <span class="queue-text-md"><strong>PATIENT HAS HAD A SURGERY 10/27/23 A HISTORECTOMY WITH MESH PLACEMENT SOMETHING IS DIS CHARGING FROM VAGINAL AREA CONCERNED IT MAY BE THE MESH BUT ITS CAUSING PAIN WHERE PATIENT CAN NOT SIT UP  , , SRMC Family Medicine, TC</strong></span>                    </div><!-- complaint -->

                    <div class="col-1">
                        <button class="btn btn-sm btn-primary no-click w-100" id="patientState">CA</button>
                    </div>

                    <div class="col-1">
                        <button id="ticketPriority" type="button" class="btn btn-sm btn-warning w-100" data-bs-toggle="modal" data-bs-target="#editPriorityModal">
                            11
                        </button>
                    </div>

                    <div class="col-1">
                        <button id="ticketClaim" type="button" class="btn btn-sm btn-success bg-gradient w-100" data-bs-toggle="modal" data-bs-target="#removeNurseModal">
                            Claim
                        </button>
                    </div>

                </div><!-- #ticket1 -->

            </div><!-- #queueCol -->
        </div><!-- #queueRow -->
        
    </div><!-- #mainContainer -->
<?php
    include 'queueModals.php';
?>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"
        ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="navigation.js" defer></script>
</body>
</html>
