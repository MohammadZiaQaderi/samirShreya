@extends('layouts.app')

@section('title')
    Shreya Samir : Advanced Cheques Depotwise Corporate View
@endsection

@section('content')
<div class="container my-4">
    <h3 class="mb-4 text-center">SHREYA SAMIR : ADVANCED CHEQUES YET TO BE SUBMITTED DEPOTWISE CORPORATE VIEW</h3>

    <!-- Form for Filters -->
    <div class="form-container">
        <form name="prdselect" method="POST" action="#">
            @csrf

            <div class="row g-3">
                <!-- Cross Tab -->
                <div class="col-md-3">
                    <label for="ctbshow" class="form-label"><b>Cross Tab:</b></label>
                    <select id="ctbshow" name="ctbshow" class="form-select" onchange="call()">
                        <option value="DEPOTDAY" selected>Depot X Day</option>
                        <option value="DEPOTDUEDAY">Depot X Due Day</option>
                        <option value="DAYDEPOT">Day X Depot</option>
                        <option value="DAYDUEDEPOT">Due Day X Depot</option>
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

                <!-- Transaction -->
                <div class="col-md-3">
                    <label for="transhow" class="form-label"><b>Transaction:</b></label>
                    <select id="transhow" name="transhow" class="form-select" onchange="call()">
                        <option value="PAYIN" selected>Pay In (Total)</option>
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

                <!-- Month -->
                <div class="col-md-3">
                    <label for="mshow" class="form-label"><b>Month:</b></label>
                    <select id="mshow" name="mshow" class="form-select" onchange="call()">
                        <option value="201503">Mar-15</option>
                        <option value="201502">Feb-15</option>
                        <option value="201501">Jan-15</option>
                        <option value="201412">Dec-14</option>
                        <option value="201411">Nov-14</option>
                        <option value="201410">Oct-14</option>
                        <option value="201409" selected>Sep-14</option>
                        <option value="201408">Aug-14</option>
                        <option value="201407">Jul-14</option>
                        <option value="201406">Jun-14</option>
                        <option value="201405">May-14</option>
                        <option value="201404">Apr-14</option>
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

                <!-- Field -->
                <div class="col-md-3">
                    <label for="fldshow" class="form-label"><b>Field:</b></label>
                    <select id="fldshow" name="fldshow" class="form-select" onchange="call()">
                        <option value="Value">Value</option>
                        <option value="LacVal" selected>Value In Lacs</option>
                    </select>
                </div>

                <!-- Depot -->
                <div class="col-md-3">
                    <label for="depotshow" class="form-label"><b>Depot:</b></label>
                    <select id="depotshow" name="depotshow" class="form-select" onchange="call()">
                        <option value="51">AHMEDABAD</option>
                        <option value="86">AMBALA</option>
                        <option value="80">AURANGABAD</option>
                        <option value="79">AURANGABAD-EOU</option>
                        <option value="31">BANGALORE</option>
                        <option value="10">BHIVANDI</option>
                        <option value="84">CHANDIGARH</option>
                        <option value="05">CHENNAI</option>
                        <option value="42">CUTTACK</option>
                        <option value="07">DELHI</option>
                        <option value="46">GHAZIABAD BILLING</option>
                        <option value="18">GHAZIABAD MOTHER DEPOT</option>
                        <option value="19">GHAZIBAD B/E DEPOT</option>
                        <option value="62">GUWAHATI</option>
                        <option value="48">HALDWANI</option>
                        <option value="87">HYDERABAD</option>
                        <option value="95">HYDERABAD-AP</option>
                        <option value="78">INDORE</option>
                        <option value="75">INDORE B/E DEPOT</option>
                        <option value="70">INDORE MOTHER DEPOT</option>
                        <option value="12">JAIPUR</option>
                        <option value="67">KOCHI</option>
                        <option value="03">KOLKATA</option>
                        <option value="35">LUCKNOW</option>
                        <option value="08">MOTHER DEPOT</option>
                        <option value="29">NAGPUR</option>
                        <option value="28">PATNA</option>
                        <option value="25">PATNA B/E DEPOT</option>
                        <option value="76">RAIPUR</option>
                        <option value='26'>RANCHI</option>
                        <option value='91'>VIJAYAWADA</option>
                        <option value='85'>ZIRAKPUR</option>
                        <option value='ALL' selected> ALL </option>	
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

@section('scripts')
    <script>
        function call() {
            // This function can be used to trigger actions on form change
            console.log('Form changed.');
            // You might want to add AJAX calls or other logic here
        }
    </script>
@endsection                        