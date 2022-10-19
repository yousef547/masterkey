<div id="left-sidebar" class="sidebar">
    <div class="navbar-brand">
        <a href="index.html"><img src="../assets/images/icon.svg" alt="Oculux Logo" class="img-fluid logo"><span>Oculux</span></a>
        <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
    </div>
    <div class="sidebar-scroll">
        <div class="user-account">
            <div class="user_div">
                <img src="../assets/images/user.png" class="user-photo" alt="User Profile Picture">
            </div>
            <div class="dropdown">
                <span>Welcome,</span>
                <a id="openMune" class="dropdown-toggle user-name"><strong>Louis Pierce</strong></a>
                <ul id="muneList" class="dropdown-menu dropdown-menu-right account vivify flipInY">
                    <li><a href=""><i class="icon-user"></i>My Profile</a></li>
                    <li><a href=""><i class="icon-envelope-open"></i>Messages</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                    <li class="divider"></li>
                    <li><a href=""><i class="icon-power"></i>Logout</a></li>
                </ul>
            </div>
        </div>  
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">
                <li class="header">Main</li>                
                <li class="{{ Request::segment(1) === 'mypage' ? 'active open' : null }}">
                    <a href="#myPage" class="has-arrow"><i class="icon-user"></i><span>Users & Roles</span></a>
                    <ul>
                        <li class="{{ Request::segment(2) === 'role' ? 'active' : null }}" ><a href="{{route('role')}}">Roles</a></li>
                        <li class="{{ Request::segment(2) === 'user' ? 'active' : null }}"><a href="{{route('user')}}">Users</a></li>
                        <!-- <li class="{{ Request::segment(2) === 'index5' ? 'active' : null }}"><a href="">Event Monitoring</a></li>
                        <li class="{{ Request::segment(2) === 'index6' ? 'active' : null }}"><a href="">Finance Performance</a></li>
                        <li class="{{ Request::segment(2) === 'index7' ? 'active' : null }}"><a href="">Sales Monitoring</a></li>
                        <li class="{{ Request::segment(2) === 'index8' ? 'active' : null }}"><a href="">Hospital Management</a></li>
                        <li class="{{ Request::segment(2) === 'index9' ? 'active' : null }}"><a href="">Campaign Monitoring</a></li>
                        <li class="{{ Request::segment(2) === 'index10' ? 'active' : null }}"><a href="">University Analytics</a></li> -->
                    </ul>
                </li>
                <!-- <li class="{{ Request::segment(2) === 'index2' ? 'active open' : null }}"><a href=" dashboard.index2 "><i class="icon-speedometer"></i><span>Dashboard</span></a></li>
                <li class="{{ Request::segment(2) === 'index3' ? 'active open' : null }}"><a href=" dashboard.index3 "><i class="icon-diamond"></i><span>Cryptocurrency</span></a></li>
                <li class="header">HR, Project & Job</li>
                <li class="{{ Request::segment(1) === 'projects' ? 'active open' : null }}">
                    <a href="#Project" class="has-arrow"><i class="icon-flag"></i><span>Project</span></a>
                    <ul>
                        <li class="{{ Request::segment(2) === 'taskboard' ? 'active' : null }}"><a href=" projects.taskboard ">Taskboard</a></li>
                        <li class="{{ Request::segment(2) === 'projectlist' ? 'active' : null }}"><a href=" projects.projectlist ">Project list</a></li>
                        <li class="{{ Request::segment(2) === 'addproject' ? 'active' : null }}"><a href=" projects.addproject ">Add Project</a></li>
                        <li class="{{ Request::segment(2) === 'ticket' ? 'active' : null }}"><a href=" projects.ticket ">Ticket List</a></li>
                        <li class="{{ Request::segment(2) === 'ticketdetails' ? 'active' : null }}"><a href=" projects.ticketdetails ">Ticket Details</a></li>
                        <li class="{{ Request::segment(2) === 'clients' ? 'active' : null }}"><a href=" projects.clients ">Clients</a></li>
                        <li class="{{ Request::segment(2) === 'todo' ? 'active' : null }}"><a href=" projects.todo ">Todo List</a></li>
                    </ul>
                </li>
                <li class="{{ Request::segment(1) === 'hr' ? 'active open' : null }}">
                    <a href="#Project" class="has-arrow"><i class="icon-umbrella"></i><span>HRMS System</span></a>
                    <ul>
                        <li class="{{ Request::segment(2) === 'hrdashboard' ? 'active' : null }}"><a href=" hr.hrdashboard ">Hr Dashboard</a></li>
                        <li class="{{ Request::segment(2) === 'users' ? 'active' : null }}"><a href=" hr.users ">Users</a></li>
                        <li class="{{ Request::segment(2) === 'departments' ? 'active' : null }}"><a href=" hr.departments ">Departments</a></li>
                        <li class="{{ Request::segment(2) === 'employee' ? 'active' : null }}"><a href=" hr.employee ">Employee</a></li>
                        <li class="{{ Request::segment(2) === 'activities' ? 'active' : null }}"><a href=" hr.activities ">Activities</a></li>
                        <li class="{{ Request::segment(2) === 'holidays' ? 'active' : null }}"><a href=" hr.holidays ">Holidays</a></li>
                        <li class="{{ Request::segment(2) === 'events' ? 'active' : null }}"><a href=" hr.events ">Events</a></li>
                        <li class="{{ Request::segment(2) === 'payroll' ? 'active' : null }}"><a href=" hr.payroll ">Payroll</a></li>
                        <li class="{{ Request::segment(2) === 'accounts' ? 'active' : null }}"><a href=" hr.accounts ">Accounts</a></li>
                        <li class="{{ Request::segment(2) === 'report' ? 'active' : null }}"><a href=" hr.report ">Report</a></li>
                    </ul>
                </li>
                <li class="{{ Request::segment(1) === 'job' ? 'active open' : null }}">
                    <a href="#JobPortal" class="has-arrow"><i class="icon-screen-tablet"></i><span>Job Portal</span></a>
                    <ul>
                        <li class="{{ Request::segment(2) === 'jobdashboard' ? 'active' : null }}"><a href=" job.jobdashboard ">Dashboard</a></li>
                        <li class="{{ Request::segment(2) === 'positions' ? 'active' : null }}"><a href=" job.positions ">Positions</a></li>
                        <li class="{{ Request::segment(2) === 'applicants' ? 'active' : null }}"><a href=" job.applicants ">Applicants</a></li>
                        <li class="{{ Request::segment(2) === 'resumes' ? 'active' : null }}"><a href=" job.resumes ">Resumes</a></li>
                        <li class="{{ Request::segment(2) === 'jobsettings' ? 'active' : null }}"><a href=" job.jobsettings ">Job Settings</a></li>
                    </ul>
                </li>
                <li class="header">App</li>
                <li class="{{ Request::segment(1) === 'contact' ? 'active open' : null }}">
                    <a href="#Contact" class="has-arrow"><i class="icon-book-open"></i><span>Contact</span></a>
                    <ul>
                        <li class="{{ Request::segment(2) === 'contact' ? 'active' : null }}"><a href=" contact.contact ">List View</a></li>
                        <li class="{{ Request::segment(2) === 'contact2' ? 'active' : null }}"><a href=" contact.contact2 ">Grid View</a></li>
                    </ul>
                </li>
                <li class="{{ Request::segment(1) === 'email' ? 'active open' : null }}">
                    <a href="#Contact" class="has-arrow"><i class="icon-drawer"></i><span>Email</span></a>
                    <ul>                        
                        <li class="{{ Request::segment(2) === 'inbox' ? 'active' : null }}"><a href=" email.inbox ">Inbox</a></li>
                        <li class="{{ Request::segment(2) === 'compose' ? 'active' : null }}"><a href=" email.compose ">Compose</a></li>
                        <li class="{{ Request::segment(2) === 'inboxdetail' ? 'active' : null }}"><a href=" email.inboxdetail ">Inbox Detail</a></li>
                    </ul>
                </li>
                <li class="{{ Request::segment(2) === 'chat' ? 'active open' : null }}"><a href=" messenger.chat "><i class="icon-bubbles"></i><span>Messenger</span></a></li>
                <li class="{{ Request::segment(2) === 'calendar' ? 'active open' : null }}"><a href=" app.calendar "><i class="icon-calendar"></i><span>Calendar</span></a></li>
                <li class="header">UI Elements</li>
                <li class="{{ Request::segment(2) === 'cards' ? 'active open' : null }}"><a href=" cardlayout.cards "><i class="icon-folder"></i><span>Cards Layout</span></a></li>
                <li class="{{ Request::segment(1) === 'icon' ? 'active open' : null }}">
                    <a href="#uiIcons" class="has-arrow"><i class="icon-tag"></i><span>Icons</span></a>
                    <ul>
                        <li class="{{ Request::segment(2) === 'fontawesome' ? 'active' : null }}"><a href=" icon.fontawesome ">FontAwesome</a></li>
                        <li class="{{ Request::segment(2) === 'iconsline' ? 'active' : null }}"><a href=" icon.iconsline ">Simple Line</a></li>
                        <li class="{{ Request::segment(2) === 'themify' ? 'active' : null }}"><a href=" icon.themify ">Themify Icon</a></li>
                    </ul>
                </li>
                <li class="{{ Request::segment(1) === 'components' ? 'active open' : null }}">
                    <a href="#uiComponents" class="has-arrow"><i class="icon-diamond"></i><span>Components</span></a>
                    <ul>
                        <li class="{{ Request::segment(2) === 'bootstrap' ? 'active' : null }}"><a href=" components.bootstrap ">Bootstrap UI</a></li>
                        <li class="{{ Request::segment(2) === 'typography' ? 'active' : null }}"><a href=" components.typography ">Typography</a></li>
                        <li class="{{ Request::segment(2) === 'colors' ? 'active' : null }}"><a href=" components.colors ">Colors</a></li>
                        <li class="{{ Request::segment(2) === 'buttons' ? 'active' : null }}"><a href=" components.buttons ">Buttons</a></li>
                        <li class="{{ Request::segment(2) === 'tabs' ? 'active' : null }}"><a href=" components.tabs ">Tabs</a></li>
                        <li class="{{ Request::segment(2) === 'progressbars' ? 'active' : null }}"><a href=" components.progressbars ">Progress Bars</a></li>
                        <li class="{{ Request::segment(2) === 'modals' ? 'active' : null }}"><a href=" components.modals ">Modals</a></li>
                        <li class="{{ Request::segment(2) === 'notifications' ? 'active' : null }}"><a href=" components.notifications ">Notifications</a></li>
                        <li class="{{ Request::segment(2) === 'dialogs' ? 'active' : null }}"><a href=" components.dialogs ">Dialogs</a></li>
                        <li class="{{ Request::segment(2) === 'listgroup' ? 'active' : null }}"><a href=" components.listgroup ">List Group</a></li>
                        <li class="{{ Request::segment(2) === 'mediaobject' ? 'active' : null }}"><a href=" components.mediaobject ">Media Object</a></li>
                        <li class="{{ Request::segment(2) === 'nestable' ? 'active' : null }}"><a href=" components.nestable ">Nestable</a></li>
                        <li class="{{ Request::segment(2) === 'rangesliders' ? 'active' : null }}"><a href=" components.rangesliders ">Range Sliders</a></li>
                        <li class="{{ Request::segment(2) === 'helperclass' ? 'active' : null }}"><a href=" components.helperclass ">Helper Classes</a></li>
                    </ul>
                </li>
                <li class="{{ Request::segment(1) === 'forms' ? 'active open' : null }}">
                    <a href="#forms" class="has-arrow"><i class="icon-pencil"></i><span>Forms</span></a>
                    <ul>
                        <li class="{{ Request::segment(2) === 'basic' ? 'active' : null }}"><a href=" forms.basic ">Basic Elements</a></li>
                        <li class="{{ Request::segment(2) === 'advanced' ? 'active' : null }}"><a href=" forms.advanced ">Advanced Elements</a></li>
                        <li class="{{ Request::segment(2) === 'validation' ? 'active' : null }}"><a href=" forms.validation ">Form Validation</a></li>
                        <li class="{{ Request::segment(2) === 'wizard' ? 'active' : null }}"><a href=" forms.wizard ">Form Wizard</a></li>
                        <li class="{{ Request::segment(2) === 'summernote' ? 'active' : null }}"><a href=" forms.summernote ">Summernote</a></li>
                        <li class="{{ Request::segment(2) === 'dragdropupload' ? 'active' : null }}"><a href=" forms.dragdropupload ">Drag &amp; Drop Upload</a></li>
                        <li class="{{ Request::segment(2) === 'editors' ? 'active' : null }}"><a href=" forms.editors ">CKEditor</a></li>
                        <li class="{{ Request::segment(2) === 'markdown' ? 'active' : null }}"><a href=" forms.markdown ">Markdown</a></li>
                        <li class="{{ Request::segment(2) === 'cropping' ? 'active' : null }}"><a href=" forms.cropping ">Image Cropping</a></li>
                    </ul>
                </li>
                <li class="{{ Request::segment(1) === 'tables' ? 'active open' : null }}">
                    <a href="#Tables" class="has-arrow"><i class="icon-layers"></i><span>Tables</span></a>
                    <ul>
                        <li class="{{ Request::segment(2) === 'normal' ? 'active' : null }}"><a href=" tables.normal ">Normal Tables</a></li>
                        <li class="{{ Request::segment(2) === 'color' ? 'active' : null }}"><a href=" tables.color ">Tables Color</a></li>
                        <li class="{{ Request::segment(2) === 'datatable' ? 'active' : null }}"><a href=" tables.datatable ">Jquery Datatables</a></li>
                        <li class="{{ Request::segment(2) === 'editable' ? 'active' : null }}"><a href=" tables.editable ">Editable Tables</a></li>
                        <li class="{{ Request::segment(2) === 'filter' ? 'active' : null }}"><a href=" tables.filter ">Table Filter</a></li>
                        <li class="{{ Request::segment(2) === 'dragger' ? 'active' : null }}"><a href=" tables.dragger ">Table dragger</a></li>
                    </ul>
                </li>
                <li class="{{ Request::segment(1) === 'charts' ? 'active open' : null }}">
                    <a href="#charts" class="has-arrow"><i class="icon-pie-chart"></i><span>Charts</span></a>
                    <ul>
                        <li class="{{ Request::segment(2) === 'c3' ? 'active' : null }}"><a href=" charts.c3 ">C3 Charts</a></li>
                        <li class="{{ Request::segment(2) === 'chartjs' ? 'active' : null }}"><a href=" charts.chartjs ">ChartJS</a></li>
                        <li class="{{ Request::segment(2) === 'morris' ? 'active' : null }}"><a href=" charts.morris ">Morris Charts</a></li>
                        <li class="{{ Request::segment(2) === 'flot' ? 'active' : null }}"><a href=" charts.flot ">Flot Charts</a></li>
                        <li class="{{ Request::segment(2) === 'sparkline' ? 'active' : null }}"><a href=" charts.sparkline ">Sparkline Chart</a></li>
                        <li class="{{ Request::segment(2) === 'knob' ? 'active' : null }}"><a href=" charts.knob ">Jquery Knob</a></li>
                    </ul>
                </li>
                <li class="{{ Request::segment(2) === 'jvectormap' ? 'active open' : null }}"><a href=" maps.jvectormap "><i class="icon-map"></i><span>jVector Map</span></a></li>
                <li class="header">Extra</li>
                <li class="{{ Request::segment(2) === 'settings' ? 'active open' : null }}"><a href=" extra.settings "><i class="icon-settings"></i><span>Settings</span></a></li>
                <li class="{{ Request::segment(2) === 'widgets' ? 'active open' : null }}"><a href=" widget.widgets "><i class="icon-puzzle"></i><span>Widgets</span></a></li>
                <li class="{{ Request::segment(1) === 'authentication' ? 'active open' : null }}">
                    <a href="#Authentication" class="has-arrow"><i class="icon-lock"></i><span>Authentication</span></a>
                    <ul>
                        <li class="{{ Request::segment(2) === 'login' ? 'active' : null }}"><a href=" authentication.login ">Login</a></li>
                        <li class="{{ Request::segment(2) === 'login2' ? 'active' : null }}"><a href=" authentication.login2 ">Login Version2</a></li>
                        <li class="{{ Request::segment(2) === 'register' ? 'active' : null }}"><a href=" authentication.register ">Register</a></li>
                        <li class="{{ Request::segment(2) === 'forgotpassword' ? 'active' : null }}"><a href=" authentication.forgotpassword ">Forgot Password</a></li>
                        <li class="{{ Request::segment(2) === 'page404' ? 'active' : null }}"><a href=" authentication.page404 ">Page 404</a></li>
                        <li class="{{ Request::segment(2) === 'maintenance' ? 'active' : null }}"><a href=" authentication.maintenance ">Maintenance</a></li>
                        <li class="{{ Request::segment(2) === 'comingsoon' ? 'active' : null }}"><a href=" authentication.comingsoon ">Coming Soon</a></li>
                    </ul>
                </li>
                <li class="{{ Request::segment(1) === 'pages' ? 'active open' : null }}">
                    <a href="#Pages" class="has-arrow"><i class="icon-docs"></i><span>Pages</span></a>
                    <ul>
                        <li class="{{ Request::segment(2) === 'blank' ? 'active' : null }}"><a href=" pages.blank ">Blank Page</a></li>
                        <li class="{{ Request::segment(2) === 'profile' ? 'active' : null }}"><a href=" pages.profile ">User Profile</a></li>
                        <li class="{{ Request::segment(2) === 'userlist' ? 'active' : null }}"><a href=" pages.userlist ">User List</a></li>
                        <li class="{{ Request::segment(2) === 'testimonials' ? 'active' : null }}"><a href=" pages.testimonials ">Testimonials</a></li>
                        <li class="{{ Request::segment(2) === 'invoices' ? 'active' : null }}"><a href=" pages.invoices ">Invoices</a></li>
                        <li class="{{ Request::segment(2) === 'timeline' ? 'active' : null }}"><a href=" pages.timeline ">Timeline</a></li>
                        <li class="{{ Request::segment(2) === 'searchresults' ? 'active' : null }}"><a href=" pages.searchresults ">Search Results</a></li>
                        <li class="{{ Request::segment(2) === 'gallery' ? 'active' : null }}"><a href=" pages.gallery ">Image Gallery</a></li>
                        <li class="{{ Request::segment(2) === 'pricing' ? 'active' : null }}"><a href=" pages.pricing ">Pricing</a></li>
                    </ul>
                </li> -->
            </ul>
        </nav>     
    </div>
</div>