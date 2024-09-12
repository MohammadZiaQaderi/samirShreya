@extends('layouts.app')

@section('title')
    Online Pending Orders Depotwise Corporate View
@endsection

@section('content')
<div class="container my-4">
    <h3 class="mb-4 text-center">SHREYA SAMIR : ONLINE PENDING ORDERS DEPOTWISE CORPORATE VIEW</h3>

    <!-- Form for Filters -->
    <div class="form-container">
        <form name="prdselect" method="POST" action="#">
            @csrf

            <div class="row g-3">
                <!-- Cross Tab -->
                <div class="col-md-3">
                    <label for="ctbshow" class="form-label"><b>Cross Tab:</b></label>
                    <select id="ctbshow" name="ctbshow" class="form-select" onchange="call()">
                        <option value="PRDMONTH">Product X Month</option>
                        <option value="MONTHPRD">Month X Product</option>
                        <option value="PRDDEPOT" selected>Product X Depot</option>
                        <option value="DEPOTPRD">Depot X Product</option>
                        <option value="DEPOTMONTH">Depot X Month</option>
                        <option value="MONTHDEPOT">Month X Depot</option>
                    </select>
                </div>

                <!-- SBU -->
                <div class="col-md-3">
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
                <div class="col-md-3">
                    <label for="tshow" class="form-label"><b>Team:</b></label>
                    <select id="tshow" name="tshow" class="form-select" onchange="call()">
                        <option value="000001" selected>AMADEUS</option>
                        <option value="ALL">ALL</option>
                    </select>
                </div>

                <!-- Show SQL -->
                <div class="col-md-3">
                    <label for="sqlshow" class="form-label"><b>Show SQL:</b></label>
                    <select id="sqlshow" name="sqlshow" class="form-select" onchange="call()">
                        <option value="YES">YES</option>
                        <option value="NO" selected>NO</option>
                    </select>
                </div>

                <!-- Fin Yr -->
                <div class="col-md-3">
                    <label for="finyrshow" class="form-label"><b>Fin Yr:</b></label>
                    <select id="finyrshow" name="finyrshow" class="form-select" onchange="call()">
                        <option value="304">2003-2004</option>
                        <option value="405">2004-2005</option>
                        <option value="506">2005-2006</option>
                        <option value="607">2006-2007</option>
                        <option value="708">2007-2008</option>
                        <option value="809">2008-2009</option>
                        <option value="910">2009-2010</option>
                        <option value="1011">2010-2011</option>
                        <option value="1112">2011-2012</option>
                        <option value="1213">2012-2013</option>
                        <option value="1314">2013-2014</option>
                        <option value="1415">2014-2015</option>
                        <option value="1516">2015-2016</option>
                        <option value="1617">2016-2017</option>
                        <option value="1718">2017-2018</option>
                        <option value="1819">2018-2019</option>
                        <option value="1920">2019-2020</option>
                        <option value="2021">2020-2021</option>
                        <option value="2122">2021-2022</option>
                        <option value="2223">2022-2023</option>
                        <option value="2324">2023-2024</option>
                        <option value="2425" selected>2024-2025</option>
                        <option value="ALL">ALL</option>
                    </select>
                </div>

                <!-- Type -->
                <div class="col-md-3">
                    <label for="prdtypeshow" class="form-label"><b>Type:</b></label>
                    <select id="prdtypeshow" name="prdtypeshow" class="form-select" onchange="call()">
                        <option value="PRD" selected>Products</option>
                    </select>
                </div>

                <!-- Month -->
                <div class="col-md-3">
                    <label for="mshow" class="form-label"><b>Month:</b></label>
                    <select id="mshow" name="mshow" class="form-select" onchange="call()">
                        <!-- Dynamic options should be generated based on the backend logic -->
                    </select>
                </div>

                <!-- Summing -->
                <div class="col-md-3">
                    <label for="sumshow" class="form-label"><b>Summing:</b></label>
                    <select id="sumshow" name="sumshow" class="form-select" onchange="call()">
                        <option value="MTD" selected>MTD</option>
                        <option value="YTD">YTD</option>
                        <option value="QTD">QTD</option>
                    </select>
                </div>

                <!-- Brand -->
                <div class="col-md-3">
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
                <div class="col-md-3">
                    <label for="prdshow" class="form-label"><b>Product:</b></label>
                    <select id="prdshow" name="prdshow" class="form-select" onchange="call()">
                        <option value="ALL" selected>ALL</option>
                        <!-- Dynamic options should be generated based on the backend logic -->
                    </select>
                </div>

                <!-- Field -->
                <div class="col-md-3">
                    <label for="fldshow" class="form-label"><b>Field:</b></label>
                    <select id="fldshow" name="fldshow" class="form-select" onchange="call()">
                        <option value="Qty" selected>Qty</option>
                        <option value="Value">Value</option>
                        <option value="LacVal">Value In Lacs</option>
                    </select>
                </div>

                <!-- Depot -->
                <div class="col-md-3">
                    <label for="depotshow" class="form-label"><b>Depot:</b></label>
                    <select id="depotshow" name="depotshow" class="form-select" onchange="call()">
                        <option value="51">AHMEDABAD</option>
                        <option value="86">AMBALA</option>
                        <option value="80">AURANGABAD</option>
                        <!-- Add more depot options as needed -->
                        <option value="ALL" selected>ALL</option>
                    </select>
                </div>

                <!-- Background Color -->
                <div class="col-md-3">
                    <label for="colorshow" class="form-label"><b>Background Color:</b></label>
                    <select id="colorshow" name="colorshow" class="form-select" onchange="call()">
                        <option value="aliceblue">Alice Blue</option>
                        <option value="aqua">Aqua</option>
                        <option value="beige">Beige</option>
                        <option value="cyan">Cyan</option>
                        <option value="lavender" selected>Lavender</option>
                    </select>
                </div>

                <!-- DataSheet -->
                <div class="col-md-3">
                    <label for="datasheetshow" class="form-label"><b>DataSheet:</b></label>
                    <select id="datasheetshow" name="datasheetshow" class="form-select" onchange="call()">
                        <option value="YES">YES</option>
                        <option value="NO" selected>NO</option>
                    </select>
                </div>

                <!-- Pivot -->
                <div class="col-md-3">
                    <label for="pivotshow" class="form-label"><b>Pivot:</b></label>
                    <select id="pivotshow" name="pivotshow" class="form-select" onchange="call()">
                        <option value="YES">YES</option>
                        <option value="NO" selected>NO</option>
                    </select>
                </div>

                <!-- Depot Type -->
                <div class="col-md-3">
                    <label for="dtypeshow" class="form-label"><b>Depot Type:</b></label>
                    <select id="dtypeshow" name="dtypeshow" class="form-select" onchange="call()">
                        <option value="M">Mother Depot</option>
                        <option value="B">C&F</option>
                        <option value="ALL" selected>ALL</option>
                    </select>
                </div>

                <!-- Zone -->
                <div class="col-md-3">
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
