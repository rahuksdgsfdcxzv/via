 <div class="sidebar border-right-1px-555 pe-0 ps-0 " id="sidebar">
    <div class="sidebar-inner">
        <li class="border-bottom-1px-555 font-poppins sidebar-list   {{ request()->is('trip-media') ? 'active-item' : '' }}">
            <a href="/trip-media" class="fw-400  clr-555 px-4">Trip Media</a>
        </li>
        <li class="border-bottom-1px-555 font-poppins sidebar-list   {{ request()->is('trip-detail') ? 'active-item' : '' }}">
            <a href="/trip-detail" class="fw-400  clr-555 px-4 " >Trip details</a>
        </li>
        <li class="border-bottom-1px-555 font-poppins sidebar-list  {{ request()->is('pricing') ? 'active-item' : '' }} ">
            <a href="/pricing" class="fw-400 clr-555 px-4">Pricing & Registration</a>
        </li>
        <li class="border-bottom-1px-555 font-poppins sidebar-list {{ request()->is('Installments') ? 'active-item' : '' }} ">
            <a href="/Installments" class="fw-400  clr-555 px-4">Installments</a>
        </li>
        <li class="border-bottom-1px-555 font-poppins sidebar-list {{ request()->is('Additional-Activities') ? 'active-item' : '' }}">
            <a href="/Additional-Activities" class="fw-400  clr-555 px-4">Additional Activities</a>
        </li>
        <li class="border-bottom-1px-555 font-poppins sidebar-list  {{ request()->is('Trip-Plan') ? 'active-item' : '' }}">
            <a href="/Trip-Plan" class="fw-400 clr-555 px-4">Trip plan</a>
        </li>
        <li class="border-bottom-1px-555 font-poppins sidebar-list  {{ request()->is('Itinerary') ? 'active-item' : '' }} ">
            <a href="/Itinerary" class="fw-400  clr-555 px-4 ">Itinerary</a>
        </li>
        <li class="border-bottom-1px-555 font-poppins sidebar-list {{ request()->is('Calculator') ? 'active-item' : '' }} ">
            <a href="/Calculator" class="fw-400  clr-555 px-4 ">Calculator</a>
        </li>

    </div>
    </div>