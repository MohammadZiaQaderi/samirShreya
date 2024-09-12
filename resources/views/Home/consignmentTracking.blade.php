@extends('layouts.app')

@section('title')

 @section('content')

        <!-- Form Container -->
        <div class="form-container my-4">
            <h2 class="mb-4">SHREYA SAMIR : AMADEUS SECONDARY SALE DATA ENTRY</h2>
            
            <form name="prdselect">
                <div class="row g-3 bg-custom p-3 rounded">
                    <!-- From Depot -->
                    <div class="col-md-3">
                        <label for="fromDepot" class="form-label"><b>From Depot:</b></label>
                        <select id="fromDepot" name="FromDepotshow" class="form-select" onchange="call()">
                            <option value="ALL" selected>ALL</option>
                            <!-- Add options here as needed -->
                        </select>
                    </div>

                    <!-- To Depot -->
                    <div class="col-md-3">
                        <label for="toDepot" class="form-label"><b>To Depot:</b></label>
                        <select id="toDepot" name="ToDepotshow" class="form-select" onchange="call()">
                            <option value="ALL" selected>ALL</option>
                            <!-- Add options here as needed -->
                        </select>
                    </div>

                    <!-- Financial Year -->
                    <div class="col-md-2">
                        <label for="finYr" class="form-label"><b>Fin Yr:</b></label>
                        <select id="finYr" name="finyrshow" class="form-select" onchange="call()">
                            <option value="ALL" selected>ALL</option>
                            <!-- Add options here as needed -->
                        </select>
                    </div>

                    <!-- Month -->
                    <div class="col-md-2">
                        <label for="month" class="form-label"><b>Month:</b></label>
                        <select id="month" name="mbisbillshow" class="form-select" onchange="call()">
                            <option value="ALL" selected>ALL</option>
                            <!-- Add options here as needed -->
                        </select>
                    </div>

                    <!-- From Date -->
                    <div class="col-md-2">
                        <label for="fromDate" class="form-label"><b>From Date:</b></label>
                        <select id="fromDate" name="FromDateshow" class="form-select" onchange="call()">
                            <option value="ALL" selected>ALL</option>
                            <!-- Add options here as needed -->
                        </select>
                    </div>

                    <!-- To Date -->
                    <div class="col-md-2">
                        <label for="toDate" class="form-label"><b>To Date:</b></label>
                        <select id="toDate" name="ToDateshow" class="form-select" onchange="call()">
                            <option value="ALL" selected>ALL</option>
                            <!-- Add options here as needed -->
                        </select>
                    </div>

                    <!-- Type -->
                    <div class="col-md-2">
                        <label for="type" class="form-label"><b>Type:</b></label>
                        <select id="type" name="prdtypeshow" class="form-select" onchange="call()">
                            <option value="ALL" selected>ALL</option>
                            <!-- Add options here as needed -->
                        </select>
                    </div>

                    <!-- Transporter -->
                    <div class="col-md-2">
                        <label for="transporter" class="form-label"><b>Transporter:</b></label>
                        <select id="transporter" name="Trnsshow" class="form-select" onchange="call()">
                            <option value="ALL" selected>ALL</option>
                            <!-- Add options here as needed -->
                        </select>
                    </div>

                    <!-- Trans Mode -->
                    <div class="col-md-2">
                        <label for="transMode" class="form-label"><b>Trans Mode:</b></label>
                        <select id="transMode" name="TransModeshow" class="form-select" onchange="call()">
                            <option value="ALL" selected>ALL</option>
                            <!-- Add options here as needed -->
                        </select>
                    </div>

                    <!-- Consignment Type -->
                    <div class="col-md-2">
                        <label for="consignmentType" class="form-label"><b>Consignment Type:</b></label>
                        <select id="consignmentType" name="ConsignTypeshow" class="form-select" onchange="call()">
                            <option value="ALL" selected>ALL</option>
                            <!-- Add options here as needed -->
                        </select>
                    </div>

                    <!-- Show Details -->
                    <div class="col-md-2">
                        <label for="showDetails" class="form-label"><b>Show Details:</b></label>
                        <select id="showDetails" name="ShowDetailsshow" class="form-select" onchange="call()">
                            <option value="ALL" selected>ALL</option>
                            <!-- Add options here as needed -->
                        </select>
                    </div>

                    <!-- Consignment Reached -->
                    <div class="col-md-2">
                        <label for="consignmentReached" class="form-label"><b>Consignment Reached:</b></label>
                        <select id="consignmentReached" name="Reachedshow" class="form-select" onchange="call()">
                            <option value="ALL" selected>ALL</option>
                            <!-- Add options here as needed -->
                        </select>
                    </div>

                    <!-- Full Reached -->
                    <div class="col-md-2">
                        <label for="fullReached" class="form-label"><b>Full Reached:</b></label>
                        <select id="fullReached" name="FullReachedshow" class="form-select" onchange="call()">
                            <option value="ALL" selected>ALL</option>
                            <!-- Add options here as needed -->
                        </select>
                    </div>

                    <!-- Stop Tracking -->
                    <div class="col-md-2">
                        <label for="stopTracking" class="form-label"><b>Stop Tracking:</b></label>
                        <select id="stopTracking" name="NoTrackshow" class="form-select" onchange="call()">
                            <option value="ALL" selected>ALL</option>
                            <!-- Add options here as needed -->
                        </select>
                    </div>

                    <!-- Cold Chain -->
                    <div class="col-md-2">
                        <label for="coldChain" class="form-label"><b>Cold Chain:</b></label>
                        <select id="coldChain" name="ColdChainshow" class="form-select" onchange="call()">
                            <option value="ALL" selected>ALL</option>
                            <!-- Add options here as needed -->
                        </select>
                    </div>

                    <!-- SBU -->
                    <div class="col-md-2">
                        <label for="sbu" class="form-label"><b>SBU:</b></label>
                        <select id="sbu" name="sbushow" class="form-select" onchange="call()">
                            <option value="ALL" selected>ALL</option>
                            <!-- Add options here as needed -->
                        </select>
                    </div>

                    <!-- Show SQL -->
                    <div class="col-md-2">
                        <label for="showSQL" class="form-label"><b>Show SQL:</b></label>
                        <select id="showSQL" name="sqlshow" class="form-select" onchange="call()">
                            <option value="NO" selected>NO</option>
                            <option value="YES">YES</option>
                        </select>
                    </div>
                </div>

                <!-- Hidden Fields -->
                <input type="hidden" name="IsDataRequested" value="NO">
                <input type="hidden" name="_FormActive" value="MAIN">
                <input type="hidden" name="ShowData" value="0">
                <div class="d-flex justify-content-center">
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </div>
            </form>
        </div>
        
<!--         
        <div class="form-container">
            <div class="bg-custom p-3 rounded">
                <form name="dataselect" method="POST">
                    <div class="d-flex justify-content-center">
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </div>
                    <input type="hidden" name="IsDataRequested" value="YES">
                    <input type="hidden" name="ShowData" value="0">
                    <input type="hidden" name="htmlshow" value="5">
                </form>
            </div>
        </div> -->
        <div><a href="#"><img src="images/excel.gif" alt=""></a></div>
    </div>
@endsection
