@extends('layouts.app')

@section('title')
    Online Stock Expirywise Depotwise Corporate View
@endsection

@section('content')
<div class="container my-4">
    <h3 class="mb-4 text-center">SHREYA SAMIR : ONLINE STOCK EXPIRYWISE (NEXT ONE YEAR) DEPOTWISE CORPORATE VIEW</h3>

    <!-- Form for Filters -->
    <div class="form-container">
        <form name="prdselect" method="POST" action="#">
            @csrf

            <div class="row g-3">
                <!-- Cross Tab -->
                <div class="col-md-4">
                    <label for="ctbshow" class="form-label"><b>Cross Tab:</b></label>
                    <select id="ctbshow" name="ctbshow" class="form-select" onchange="call()">
                        <option value="ZONEMONTH">ZONE X Month</option>
                        <option value="EXPMTHPRD">Expiry Month X Product</option>
                        <option value="PRDEXPMTH" selected>Product X Expiry Month</option>
                        <option value="DEPOTMONTH">Depot X Month</option>
                        <option value="MONTHDEPOT">Month X Depot</option>
                        <option value="MONTHZONE">Month X ZONE</option>
                    </select>
                </div>

                <!-- SBU -->
                <div class="col-md-4">
                    <label for="sbushow" class="form-label"><b>SBU:</b></label>
                    <select id="sbushow" name="sbushow" class="form-select" onchange="call()">
                        <option value="AKUBIO">AKUBIO</option>
                        <option value="AMADEUS" selected>AMADEUS</option>
                        <option value="COMMERCIAL">COMMERCIAL</option>
                        <option value="OTHERS">OTHERS</option>
                        <option value="ALL">ALL</option>
                    </select>
                </div>

                <!-- Team -->
                <div class="col-md-4">
                    <label for="tshow" class="form-label"><b>Team:</b></label>
                    <select id="tshow" name="tshow" class="form-select" onchange="call()">
                        <option value="000001" selected>AMADEUS</option>
                        <option value="ALL">ALL</option>
                    </select>
                </div>

                <!-- Bin -->
                <div class="col-md-4">
                    <label for="stkbinshow" class="form-label"><b>Bin:</b></label>
                    <select id="stkbinshow" name="stkbinshow" class="form-select" onchange="call()">
                        <option value="BEXP">BEXP</option>
                        <option value="BLOK">BLOK</option>
                        <option value="DMGD">DMGD</option>
                        <option value="EXPD">EXPD</option>
                        <option value="GOOD">GOOD</option>
                        <option value="LTBEXP">LTBEXP</option>
                        <option value="LTDMGD">LTDMGD</option>
                        <option value="LTGOOD">LTGOOD</option>
                        <option value="LTNEXP">LTNEXP</option>
                        <option value="LTQLTY">LTQLTY</option>
                        <option value="LTSMPL">LTSMPL</option>
                        <option value="NEXP">NEXP</option>
                        <option value="QLTY">QLTY</option>
                        <option value="SMPL">SMPL</option>
                        <option value="TRBEXP">TRBEXP</option>
                        <option value="TRDMGD">TRDMGD</option>
                        <option value="TREXPD">TREXPD</option>
                        <option value="TRGOOD">TRGOOD</option>
                        <option value="TRNEXP">TRNEXP</option>
                        <option value="TRQLTY">TRQLTY</option>
                        <option value="TRSMPL">TRSMPL</option>
                        <option value="ALL" selected>ALL Valued</option>
                    </select>
                </div>

                <!-- Stock Quality -->
                <div class="col-md-4">
                    <label for="sqshow" class="form-label"><b>Stock Quality:</b></label>
                    <select id="sqshow" name="sqshow" class="form-select" onchange="call()">
                        <option value="GD">Good In Depots</option>
                        <option value="GT">Good In Transit</option>
                        <option value="RS">Good Reserved</option>
                        <option value="TG">Good (Depot + Transit)</option>
                        <option value="AG">Good (Depot + Transit + Reserved)</option>
                        <option value="ND">Near Expiry In Depots</option>
                        <option value="NT">Near Expiry In Transit</option>
                        <option value="AN">Near Expiry (Depot + Transit)</option>
                        <option value="BD">Billable In Depots</option>
                        <option value="BT">Billable In Transit</option>
                        <option value="AB">Billable (Depot + Transit + Reserved)</option>
                        <option value="QD">Quality Problem In Depots</option>
                        <option value="QT">Quality Problem In Transit</option>
                        <option value="AQ">Quality Problem (Depot + Transit)</option>
                        <option value="ALL" selected>ALL</option>
                    </select>
                </div>

                <!-- Type -->
                <div class="col-md-4">
                    <label for="prdtypeshow" class="form-label"><b>Type:</b></label>
                    <select id="prdtypeshow" name="prdtypeshow" class="form-select" onchange="call()">
                        <option value="PRD" selected>Products</option>
                        <option value="SMP">Samples</option>
                    </select>
                </div>

                <!-- Brand -->
                <div class="col-md-4">
                    <label for="brandshow" class="form-label"><b>Brand:</b></label>
                    <select id="brandshow" name="brandshow" class="form-select" onchange="call()">
                        <option value="ALL" selected>ALL</option>
                        <option value="APTIMUM">APTIMUM</option>
                        <option value="APTIPLEX">APTIPLEX</option>
                        <option value="AZON">AZON</option>
                        <!-- Add more brand options as needed -->
                    </select>
                </div>

                <!-- Product -->
                <div class="col-md-4">
                    <label for="prdshow" class="form-label"><b>Product:</b></label>
                    <select id="prdshow" name="prdshow" class="form-select" onchange="call()">
                        <option value="ALL" selected>ALL</option>
                        <!-- Dynamic options should be generated based on the backend logic -->
                    </select>
                </div>

                <!-- Field -->
                <div class="col-md-4">
                    <label for="fldshow" class="form-label"><b>Field:</b></label>
                    <select id="fldshow" name="fldshow" class="form-select" onchange="call()">
                        <option value="Qty" selected>Qty</option>
                        <option value="Value">Value</option>
                        <option value="LacVal">Value In Lacs</option>
                    </select>
                </div>

                <!-- Depot Type -->
                <div class="col-md-4">
                    <label for="dtypeshow" class="form-label"><b>Depot Type:</b></label>
                    <select id="dtypeshow" name="dtypeshow" class="form-select" onchange="call()">
                        <option value="M">Mother Depot</option>
                        <option value="B">C&F</option>
                        <option value="ALL" selected>ALL</option>
                    </select>
                </div>

                <!-- Zone -->
                <div class="col-md-4">
                    <label for="zoneshow" class="form-label"><b>Zone:</b></label>
                    <select id="zoneshow" name="zoneshow" class="form-select" onchange="call()">
                        <option value="NORTH">NORTH</option>
                        <option value="EAST">EAST</option>
                        <option value="WEST">WEST</option>
                        <option value="SOUTH">SOUTH</option>
                        <option value="CENTRAL">CENTRAL</option>
                        <option value="ALL" selected>ALL</option>
                    </select>
                </div>

                <!-- Depot -->
                <div class="col-md-4">
                    <label for="depotshow" class="form-label"><b>Depot:</b></label>
                    <select id="depotshow" name="depotshow" class="form-select" onchange="call()">
                        <option value="ALL" selected>ALL</option>
                        <!-- Dynamic options should be generated based on the backend logic -->
                    </select>
                </div>

                <!-- Background Color -->
                <div class="col-md-4">
                    <label for="colorshow" class="form-label"><b>Background Color:</b></label>
                    <select id="colorshow" name="colorshow" class="form-select" onchange="call()">
                        <option value="aliceblue">Alice Blue</option>
                        <option value="aqua">Aqua</option>
                        <option value="beige">Beige</option>
                        <option value="cyan">Cyan</option>
                        <option value="lavender" selected>Lavender</option>
                    </select>
                </div>

                <!-- Show SQL -->
                <div class="col-md-4">
                    <label for="sqlshow" class="form-label"><b>Show SQL:</b></label>
                    <select id="sqlshow" name="sqlshow" class="form-select" onchange="call()">
                        <option value="YES">YES</option>
                        <option value="NO" selected>NO</option>
                    </select>
                </div>

                <!-- Pivot -->
                <div class="col-md-4">
                    <label for="pivotshow" class="form-label"><b>Pivot:</b></label>
                    <select id="pivotshow" name="pivotshow" class="form-select" onchange="call()">
                        <option value="YES">YES</option>
                        <option value="NO" selected>NO</option>
                    </select>
                </div>

                <!-- DataSheet -->
                <div class="col-md-4">
                    <label for="datasheetshow" class="form-label"><b>DataSheet:</b></label>
                    <select id="datasheetshow" name="datasheetshow" class="form-select" onchange="call()">
                        <option value="YES">YES</option>
                        <option value="NO" selected>NO</option>
                    </select>
                </div>
            </div>

            <!-- Hidden Inputs -->
            <input type="hidden" name="IsDataRequested" value="NO">
            <input type="hidden" name="_FormActive" value="MAIN">
            <input type="hidden" name="ShowData" value="0">

            <!-- Submit Button -->
            <div class="d-flex justify-content-center my-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
