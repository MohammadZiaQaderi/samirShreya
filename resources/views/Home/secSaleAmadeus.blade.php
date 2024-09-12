@extends('layouts.app')

@section('title')

 @section('content')
    <div class="form-container my-4">
        <h2 class="mb-4">SHREYA SAMIR : AMADEUS SECONDARY SALE DATA ENTRY</h2>
        
        <form name="prdselect">
            <div class="row g-3">
                <!-- SBU -->
                <div class="col-md-3">
                    <label for="sbushow" class="form-label">SBU:</label>
                    <select id="sbushow" name="sbushow" class="form-select" onchange="call()">
                        <option value="AKUBIO">AKUBIO</option>
                        <option value="AMADEUS" selected>AMADEUS</option>
                        <option value="COMMERCIAL">COMMERCIAL</option>
                        <option value="OTHERS">OTHERS</option>
                        <option value="ALL">ALL</option>
                    </select>
                </div>
                
                <!-- Show SQL -->
                <div class="col-md-3">
                    <label for="sqlshow" class="form-label">Show SQL:</label>
                    <select id="sqlshow" name="sqlshow" class="form-select" onchange="call()">
                        <option value="YES" selected>YES</option>
                        <option value="NO">NO</option>
                    </select>
                </div>
                
                <!-- Month -->
                <div class="col-md-3">
                    <label for="msecbillshow" class="form-label">Month:</label>
                    <select id="msecbillshow" name="msecbillshow" class="form-select" onchange="call()">
                        <option value="202408" selected>Aug-24</option>
                    </select>
                </div>
                
                <!-- Zone -->
                <div class="col-md-3">
                    <label for="zoneshow" class="form-label">Zone:</label>
                    <select id="zoneshow" name="zoneshow" class="form-select" onchange="call()">
                        <option value="NORTH">NORTH</option>
                        <option value="EAST">EAST</option>
                        <option value="WEST">WEST</option>
                        <option value="SOUTH" selected>SOUTH</option>
                        <option value="CENTRAL">CENTRAL</option>
                        <option value="ALL">ALL</option>
                    </select>
                </div>
                
                <!-- Depot -->
                <div class="col-md-3">
                    <label for="depotshow" class="form-label">Depot:</label>
                    <select id="depotshow" name="depotshow" class="form-select" onchange="call()">
                        <option value="31">BANGALORE</option>
                        <option value="05">CHENNAI</option>
                        <option value="87">HYDERABAD</option>
                        <option value="95">HYDERABAD-AP</option>
                        <option value="67" selected>KOCHI</option>
                        <option value="91">VIJAYAWADA</option>
                        <option value="ALL">ALL</option>
                    </select>
                </div>
                
                <!-- Stockists -->
                <div class="col-md-9">
                    <label for="awshow" class="form-label">Stockists:</label>
                    <select id="awshow" name="awshow" class="form-select" onchange="call()">
                        <!-- Example options, adjust as needed -->
                        <option value="67671001">A I AGENCIES</option>
                        <option value="6703957">Abin John Baby</option>
                        <option value="6703855">Abuthaleef T M</option>
                        <!-- Add other options here -->
                        <option value="ALL" selected>ALL</option>
                    </select>
                </div>
            </div>

            <!-- Hidden Fields -->
            <input type="hidden" name="IsDataRequested" value="NO">
            <input type="hidden" name="_FormActive" value="MAIN">
            <input type="hidden" name="ShowData" value="0">
        </form>
    </div>
    <div><a href="#"><img src="images/excel.gif" alt=""></a></div>
</div>
@endsection
