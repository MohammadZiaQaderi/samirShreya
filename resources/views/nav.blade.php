<nav class="navbar navbar-expand-lg navbar-light navbar-custom border py-4 border-0">
    <a class="navbar-brand px-3" href="#">SAMIR : SHREYA INTRANET</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
         <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="homeDropdown" role="button" 
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Home
                </a>
                <ul class="dropdown-menu hoverable" aria-labelledby="crossTabsDropdown">
                    <li class="dropdown-submenu dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#" id="subDropdown" 
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Excel Files
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right-side p-0 border-0" 
                                aria-labelledby="subDropdown">
                                <li class="mt-2 border-0"><a class="dropdown-item text-bg-primary" 
                                href="{{route('excelquery-ui')}}">Excel Query</a></li>
                            </ul>
                    </li>
                    <li><a class="dropdown-item" href="#">Tax Declaration</a></li>
                    <li><a class="dropdown-item" href="{{route('secSaleAmadeus')}}">Sec Sale Amadeus</a></li>
                    <li><a class="dropdown-item"href="{{route('secSaleAmadeus')}}">Sec Sale Akubio</a></li>
                    <li><a class="dropdown-item" href="{{route('consignmentTracking')}}">Consignment Tracking</a></li>
                  

                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="crossTabsDropdown" role="button" 
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Cross Tabs
                </a>
                <ul class="dropdown-menu hoverable" aria-labelledby="crossTabsDropdown">
                    <li><a class="dropdown-item" href="{{route('depotStacks')}}">Depot Stocks </a></li>
                    <li><a class="dropdown-item" href="#">MonthEnd Stocks</a></li>
                    <li><a class="dropdown-item" href="#">Stock Expiry</a></li>
                    <li><a class="dropdown-item" href="#">Depot Deptors</a></li>
                    <li><a class="dropdown-item" href="#">Pending Orders</a></li>
                    <li><a class="dropdown-item" href="#">Depot Collection</a></li>
                    <li><a class="dropdown-item" href="#">Advance Collection</a></li>
                    <li><a class="dropdown-item" href="#">MD Despatches</a></li>
                    <li><a class="dropdown-item" href="#">Sample Despatches</a></li>
                    <li><a class="dropdown-item" href="#">Factory Receipts</a></li>
                    <li class="dropdown-submenu dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#" id="primarySubDropdown" 
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Primary
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right-side p-0 pt-2 border-0" 
                            aria-labelledby="subDropdown">
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">Team</a></li>
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">Depot</a></li>
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">Stockist</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#" id="secondarySubDropdown" 
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Secondary
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right-side p-0 pt-2 border-0" 
                            aria-labelledby="subDropdown">
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">Team</a></li>
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">Depot</a></li>
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">Stockist</a></li>

                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">Region</a></li>
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">ASM</a></li>
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">HQ</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#" id="expensesSubDropdown" 
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                HQ Expenses
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right-side p-0 border-0" 
                                aria-labelledby="subDropdown">
                                <li class="mt-2 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">HQ</a></li>
                            </ul>
                    </li>
                    <li><a class="dropdown-item" href="#">Hq Stockist Credits</a></li>
                    <li><a class="dropdown-item" href="#">Credit Policy</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="multiTabsDropdown" role="button" 
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Multi Tabs
                </a>
                <ul class="dropdown-menu hoverable" aria-labelledby="multiTabsDropdown">
                <li class="dropdown-submenu dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#" id="productBillingSubDropdown" 
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Product billing
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right-side p-0 pt-2 border-0" 
                            aria-labelledby="subDropdown">
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">Team</a></li>
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">Depot</a></li>
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">Stockist</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#" id="primarySubDropdown" 
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Product Budget
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right-side p-0 pt-2 border-0" 
                            aria-labelledby="subDropdown">
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">Team-Credited</a></li>
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">RM</a></li>
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">ASM</a></li>
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">HQ</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#" id="secondaryFlSubDropdown" 
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Secondary FL
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right-side p-0 pt-2 border-0" 
                            aria-labelledby="subDropdown">
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">Team</a></li>
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">Depot</a></li>
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">Stockist</a></li>
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">Team-Credited</a></li>
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">RM</a></li>
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">ASM</a></li>
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">HQ</a></li>
                            </ul>
                        </li>
                    <li><a class="dropdown-item" href="#">MD Desp</a></li>
                    <li><a class="dropdown-item" href="#">PndOrd vs Stock</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="onlineDropdown" role="button" 
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Online
                </a>
                <ul class="dropdown-menu hoverable" aria-labelledby="crossTabsDropdown">
                    <li><a class="dropdown-item" href="#">Upload Status</a></li>
                    <li class="dropdown-submenu dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#" 
                            id="secondaryFlSubDropdown" 
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Budget vs Actual
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right-side p-0 pt-2 border-0" 
                            aria-labelledby="subDropdown">
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">HQ product</a></li>
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">ASM-HQ product</a></li>
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">RM-HQ product</a></li>
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">Crp-HQ product</a></li>
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">HQ Brand</a></li>
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">ASM-HQ Brand</a></li>
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">RM-HQ Brand</a></li>
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">Crp-HQ Brand</a></li>
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">HQ Business</a></li>
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">ASM Business</a></li>
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">RM Business</a></li>
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">Crp Business</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#" 
                            id="secondaryFlSubDropdown" 
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Distribution
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right-side p-0 pt-2 border-0" 
                            aria-labelledby="subDropdown">
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">Transit Consignments</a></li>
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">Consign Hist</a></li>
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">Party Locked</a></li>
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">Batch Tracing</a></li>
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">Batchwise Stocks</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#" 
                            id="productBillingSubDropdown" 
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Online Stocks
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right-side p-0 pt-2 border-0" 
                            aria-labelledby="subDropdown">
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">Product X Depot</a></li>
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">Depot X product</a></li>
                              
                            </ul>
                        </li>
                        <li class="dropdown-submenu dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#" id="productBillingSubDropdown" 
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Online Billing
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right-side p-0 pt-2 border-0" 
                            aria-labelledby="subDropdown">
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">Product X Depot</a></li>
                                <li class="mb-1 border-0"><a class="dropdown-item text-bg-primary" 
                                href="#">Depot X product</a></li>
                              
                            </ul>
                        </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="organogramsDropdown" role="button" 
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Organograms
                </a>
                <ul class="dropdown-menu hoverable" aria-labelledby="crossTabsDropdown">
                    <li><a class="dropdown-item" href="#">Head Quarters</a></li>
                    <li><a class="dropdown-item" href="#">Organogram-1</a></li>
                    <li><a class="dropdown-item" href="#">Organogram-2</a></li>
                    <li><a class="dropdown-item" href="#">Stockist-HQ Credits </a></li>
                </ul>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" 
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person"></i>
                    Badashah Manshaz 
                    <i class="bi bi-chevron-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" 
                aria-labelledby="userDropdown">
                    <li><a class="dropdown-item" href="#logout">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="nav.js">
</script>