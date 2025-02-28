<nav class="px-3 py-2 bg-white rounded shadow">
    <i class="ri-menu-line sidebar-toggle me-3 d-block d-md-none"></i>
    <h5 class="fw-bold mb-0 me-auto">Message</h5>
    <div class="dropdown me-3 d-none d-sm-block">
        <div class="cursor-pointer dropdown-toggle navbar-link" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="ri-notification-line"></i>
        </div>
        <div class="dropdown-menu fx-dropdown-menu">
            <h5 class="p-3 bg-indigo text-light">Notification</h5>
            <div class="list-group list-group-flush">
                <a href="#"
                    class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                    <div class="me-auto">
                        <div class="fw-semibold">Subheading</div>
                        <span class="fs-7">Content for list item</span>
                    </div>
                    <span class="badge bg-primary rounded-pill">14</span>
                </a>
            </div>
        </div>
    </div>
    <div class="dropdown">
        <div class="d-flex align-items-center cursor-pointer dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false">
            <span class="me-2 d-none d-sm-block">{{ auth()->user()->name }}</span>
            <img class="navbar-profile-image" src="{{ asset('img/header.png') }}" alt="Image">
        </div>
    </div>
</nav>