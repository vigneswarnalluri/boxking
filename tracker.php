<!doctype html>
<html class="no-js" lang="zxx">

<?php include './partials/head.php'?>

<body>
    <?php include './partials/preloader.php'?>
    <?php include './partials/popup-box.php'?>
    <?php include './partials/sidemenu.php'?>
    <?php include './partials/mobile-menu.php'?>
    <?php include './partials/header.php'?>

    <!--==============================
    Breadcumb Area
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/tracker-bg.png" style="background-color: #15161c; padding: 100px 0; position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content text-center">
                        <h1 class="breadcumb-title text-white">Interactive Build Tracker</h1>
                        <ul class="breadcumb-menu" style="display: flex; justify-content: center; gap: 15px; list-style: none;">
                            <li><a href="index.php" class="text-white"><i class="ri-home-4-fill text-theme"></i> HOME</a></li>
                            <li class="active text-theme">/ BUILD TRACKER</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Tracker Content Area
    ============================== -->
    <section class="space-top space-bottom overflow-hidden" style="padding: 80px 0;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-10">
                    <div class="tracker-wrapper">
                        <div class="title-area text-center mb-35">
                            <span class="sub-title text-theme">REAL-TIME PROGRESS <i class="ri-arrow-right-down-line"></i></span>
                            <h2 class="sec-title">Monitor Your Modular Build</h2>
                            <p class="sec-text">Enter your unique BoxKing Order Tracking Code to view your unit's current progress from raw container selection through steel framing, insulation, interior outfitting, and delivery.</p>
                        </div>

                        <div class="tracker-search-box">
                            <form id="trackerSearchForm">
                                <div class="row align-items-center">
                                    <div class="col-md-8 mb-3 mb-md-0">
                                        <input type="text" class="form-control" id="trackerInput" placeholder="Enter tracking code (e.g. BK-ROYAL-7102, BK-CITADEL-3041...)" required="" style="border: 1px solid rgba(0,0,0,0.12); padding: 15px; background-color: #ffffff; text-transform: uppercase;">
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn w-100" style="padding: 15px 30px;">FIND MY BUILD <i class="ri-search-line ms-1"></i></button>
                                    </div>
                                </div>
                            </form>
                            <div class="text-center mt-3">
                                <span style="font-size: 13px; color: #888888;">Try searching: <strong style="color: #d4af37; cursor: pointer;" class="demo-code">BK-ROYAL-7102</strong>, <strong style="color: #d4af37; cursor: pointer;" class="demo-code">BK-CITADEL-3041</strong>, or <strong style="color: #d4af37; cursor: pointer;" class="demo-code">BK-MONARCH-9820</strong></span>
                            </div>
                        </div>

                        <!-- Build Details Display Area (Hidden initially) -->
                        <div id="trackerDisplay" style="display: none;">
                            <div style="border-bottom: 1px solid rgba(0,0,0,0.08); padding-bottom: 15px; margin-bottom: 25px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
                                <div>
                                    <h4 class="mb-1" id="displayModelName" style="font-weight: 800; color: #15161c;">The Citadel Site Office</h4>
                                    <span style="font-size: 14px; color: #888888;">Tracking Code: <strong id="displayTrackingCode" style="color: #15161c;">BK-CITADEL-3041</strong></span>
                                </div>
                                <div>
                                    <span class="tracker-badge" id="displayStatus">IN PRODUCTION</span>
                                </div>
                            </div>

                            <!-- Stepper Tracker -->
                            <div class="stepper-container">
                                <div class="stepper-line"></div>
                                <div class="stepper-line-active" id="activeProgressLine"></div>
                                <div class="stepper-steps">
                                    <!-- Step 1 -->
                                    <div class="stepper-step" id="step1">
                                        <div class="step-node">1</div>
                                        <div class="step-label">One-Trip Selection</div>
                                        <div class="step-status">Clean Shell Certified</div>
                                    </div>
                                    <!-- Step 2 -->
                                    <div class="stepper-step" id="step2">
                                        <div class="step-node">2</div>
                                        <div class="step-label">Welding &amp; Framing</div>
                                        <div class="step-status">Steel Structural Studs</div>
                                    </div>
                                    <!-- Step 3 -->
                                    <div class="stepper-step" id="step3">
                                        <div class="step-node">3</div>
                                        <div class="step-label">Insulation &amp; Wall linings</div>
                                        <div class="step-status">Thermal Barriers</div>
                                    </div>
                                    <!-- Step 4 -->
                                    <div class="stepper-step" id="step4">
                                        <div class="step-node">4</div>
                                        <div class="step-label">Interior Fit-Out</div>
                                        <div class="step-status">Carpentry &amp; Fixtures</div>
                                    </div>
                                    <!-- Step 5 -->
                                    <div class="stepper-step" id="step5">
                                        <div class="step-node">5</div>
                                        <div class="step-label">QA &amp; Delivery</div>
                                        <div class="step-status">Stamps &amp; Loading</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Detail Card -->
                            <div class="tracker-result-card">
                                <h5 class="mb-2" style="font-weight: 700; color: #15161c;"><i class="ri-focus-3-line text-theme me-2"></i> Current Status Detail</h5>
                                <p class="mb-0" id="displayStatusDetail" style="font-size: 15px; color: #555555;">Heavy-gauge steel frame reinforcements for site office windows are currently being welded by our certified heavy welders.</p>
                            </div>
                        </div>

                        <!-- Error Message Display Area -->
                        <div id="trackerError" style="display: none; background-color: rgba(220, 53, 69, 0.05); border-left: 4px solid #dc3545; padding: 20px; color: #dc3545; font-weight: 600; text-align: center;">
                            <i class="ri-error-warning-fill me-2 fs-5"></i> Tracking Code not found. Please verify the code and try again, or contact BoxKing Customer Support.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include './partials/footer.php'?>
    <?php include './partials/scroll-top.php'?>
    <?php include './partials/script.php'?>

    <!-- Interactive Tracker Logic -->
    <script>
        $(document).ready(function() {
            var mockTrackerDB = {
                "BK-ROYAL-7102": {
                    model: "The Monarch Tiny Cabin",
                    code: "BK-ROYAL-7102",
                    status: "Interior Fit-Out",
                    stage: 4,
                    detail: "Mini-split HVAC units and wood-grain luxury vinyl tile flooring are currently being installed and finished by our master interior carpenters."
                },
                "BK-CITADEL-3041": {
                    model: "The Citadel Commercial Office",
                    code: "BK-CITADEL-3041",
                    status: "Welding & Framing",
                    stage: 2,
                    detail: "Certified heavy welding is underway. Window frames are punched out and steel framing studs are being reinforced."
                },
                "BK-MONARCH-9820": {
                    model: "The Sovereign Custom Estate",
                    code: "BK-MONARCH-9820",
                    status: "Delivered",
                    stage: 5,
                    detail: "Final site installation completed. Premium seals, electrical hooks, plumbing systems, and structural warrantee are successfully activated."
                }
            };

            // Set up click handles on suggested codes
            $('.demo-code').on('click', function() {
                var code = $(this).text();
                $('#trackerInput').val(code);
                $('#trackerSearchForm').submit();
            });

            $('#trackerSearchForm').on('submit', function(e) {
                e.preventDefault();
                var searchVal = $('#trackerInput').val().trim().toUpperCase();

                $('#trackerDisplay').hide();
                $('#trackerError').hide();

                if (mockTrackerDB.hasOwnProperty(searchVal)) {
                    var data = mockTrackerDB[searchVal];
                    
                    // Set textual metadata
                    $('#displayModelName').text(data.model);
                    $('#displayTrackingCode').text(data.code);
                    $('#displayStatus').text(data.status.toUpperCase());
                    $('#displayStatusDetail').text(data.detail);

                    // Adjust Stepper visual states
                    var stage = data.stage;
                    
                    // Stepper line calculations (Stage 1 = 0%, Stage 2 = 25%, Stage 3 = 50%, Stage 4 = 75%, Stage 5 = 100%)
                    var progressWidths = { 1: 0, 2: 25, 3: 50, 4: 75, 5: 100 };
                    $('#activeProgressLine').css('width', progressWidths[stage] + '%');

                    // Style stepper node circles
                    for (var i = 1; i <= 5; i++) {
                        var stepEl = $('#step' + i);
                        stepEl.removeClass('completed active');
                        if (i < stage) {
                            stepEl.addClass('completed');
                        } else if (i === stage) {
                            stepEl.addClass('active');
                        }
                    }

                    // Smooth scroll to display results
                    $('#trackerDisplay').fadeIn(500);
                } else {
                    $('#trackerError').fadeIn(400);
                }
            });
        });
    </script>
</body>

</html>