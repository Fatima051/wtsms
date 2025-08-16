<div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
    <div class="mobile-sidebar-header d-md-none">
        <div class="header-logo">
            <a href="{{ route('dashboard.index') }}"><img src="{{ asset('img/WTS.png') }}"></a>
        </div>
    </div>
    <div class="sidebar-menu-content">
        <ul class="nav nav-sidebar-menu sidebar-toggle-view">
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="{{ route('dashboard.index') }}" class="nav-link"><i
                                class="fas fa-angle-right"></i>Admin</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dashboard.index3') }}" class="nav-link"><i
                                class="fas fa-angle-right"></i>Students</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dashboard.index4') }}" class="nav-link"><i
                                class="fas fa-angle-right"></i>Parents</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('dashboard.index5') }}" class="nav-link"><i
                                class="fas fa-angle-right"></i>Teachers</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Students</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="{{ route('students.all') }}" class="nav-link"><i class="fas fa-angle-right"></i>All
                            Students</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('students.admit') }}" class="nav-link"><i
                                class="fas fa-angle-right"></i>Admission Form</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('students.promotion') }}" class="nav-link"><i
                                class="fas fa-angle-right"></i>Student Promotion</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('students.add') }}" class="nav-link"><i class="fas fa-angle-right"></i>Student
                            Add</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('students.allclasses') }}" class="nav-link"><i
                                class="fas fa-angle-right"></i>All Classes</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i
                        class="flaticon-multiple-users-silhouette"></i><span>Teachers</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="{{ route('teachers.all') }}" class="nav-link"><i class="fas fa-angle-right"></i>All
                            Teachers</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('teachers.details') }}" class="nav-link"><i
                                class="fas fa-angle-right"></i>Teacher Details</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('teachers.create') }}" class="nav-link"><i class="fas fa-angle-right"></i>Add
                            Teacher</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('teachers.payment') }}" class="nav-link"><i
                                class="fas fa-angle-right"></i>Payment</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-couple"></i><span>Parents</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="{{ route('parents.all') }}" class="nav-link"><i class="fas fa-angle-right"></i>All
                            Parents</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('parents.details') }}" class="nav-link"><i
                                class="fas fa-angle-right"></i>Parents Details</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('parents.create') }}" class="nav-link"><i class="fas fa-angle-right"></i>Add
                            Parent</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Admissions</span></a>
    <ul class="nav sub-group-menu">
        <li class="nav-item">
            <a href="{{ route('admissions.all') }}" class="nav-link">
                <i class="fas fa-angle-right"></i>All Admissions
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admissions.add') }}" class="nav-link">
                <i class="fas fa-angle-right"></i>Add Admissions
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admissions.withdraw') }}" class="nav-link">
                <i class="fas fa-angle-right"></i>Withdraw Students
            </a>
        </li>
    </ul>
</li>

            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-technological"></i><span>Account</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="{{ route('fees.all') }}" class="nav-link"><i class="fas fa-angle-right"></i>All
                            Fees Collection</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('expenses.all') }}" class="nav-link"><i
                                class="fas fa-angle-right"></i>Expenses</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('expenses.create') }}" class="nav-link"><i
                                class="fas fa-angle-right"></i>Add Expenses</a>
                    </li>
                </ul>
            </li>


            <li class="nav-item">
                <a href="{{ route('attendance.student') }}" class="nav-link"><i
                        class="flaticon-checklist"></i><span>Attendance</span></a>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-shopping-list"></i><span>Exam</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="{{ route('exams.schedule') }}" class="nav-link"><i
                                class="fas fa-angle-right"></i>Exam Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('exams.grades') }}" class="nav-link"><i
                                class="fas fa-angle-right"></i>Exam Grades</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{ route('transport.index') }}" class="nav-link"><i
                        class="flaticon-bus-side-view"></i><span>Transport</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('hostel.index') }}" class="nav-link"><i
                        class="flaticon-bed"></i><span>Hostel</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('notices.board') }}" class="nav-link"><i
                        class="flaticon-script"></i><span>Notice</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('messages.messaging') }}" class="nav-link"><i
                        class="flaticon-chat"></i><span>Message</span></a>
            </li>
            <li class="nav-item sidebar-nav-item">
                <a href="#" class="nav-link"><i class="flaticon-menu-1"></i><span>UI Elements</span></a>
                <ul class="nav sub-group-menu">
                    <li class="nav-item">
                        <a href="{{ route('ui.notification-alert') }}" class="nav-link"><i
                                class="fas fa-angle-right"></i>Alert</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('ui.buttons') }}" class="nav-link"><i
                                class="fas fa-angle-right"></i>Button</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('ui.grid') }}" class="nav-link"><i class="fas fa-angle-right"></i>Grid</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('ui.modal') }}" class="nav-link"><i
                                class="fas fa-angle-right"></i>Modal</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('ui.progress-bar') }}" class="nav-link"><i
                                class="fas fa-angle-right"></i>Progress Bar</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('ui.ui-tab') }}" class="nav-link"><i
                                class="fas fa-angle-right"></i>Tab</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('ui.ui-widget') }}" class="nav-link"><i
                                class="fas fa-angle-right"></i>Widget</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{ route('pages.map') }}" class="nav-link"><i
                        class="flaticon-planet-earth"></i><span>Map</span></a>
            </li>
            <li class="nav-item">
                <a href="{{ route('pages.account-settings') }}" class="nav-link"><i
                        class="flaticon-settings"></i><span>Account</span></a>
            </li>
        </ul>
    </div>
</div>
