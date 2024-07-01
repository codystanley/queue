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
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#filterSortModal"">
                    <i class="bi-laptop mx-1"></i><span>Queue Sort & Filter</span>
                </button>
            </div>
        </div>

        <div class="row" id="queueRow">
            <div class="col" id="queueCol">
            
                <!-- queue.js content -->

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
    <script src="queue.js" defer></script>
</body>
</html>
