<!-- Sidebar Navigation -->
<aside id="default-sidebar" class="absolute z-0 left-0 w-64 h-full transition-transform -translate-x-full sm:translate-x-0 bg-green-500" aria-label="Sidebar" x-data="{ openSubmenu: null }">
    <div class="h-full px-3 py-4 overflow-y-auto bg-green-500 ">
        <ul class="space-y-2 font-medium">
            <li class="nav-item pcoded-menu-caption">
                <label class="text-white">Navigation</label>
            </li>

            @if(Auth::user()->type == 'Admin')
                <li>
                    <a href="{{ route('dashboard') }}" class="flex items-center p-2 text-white rounded-lg hover:bg-green-400">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="ms-3 text-white">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a @click="openSubmenu = openSubmenu === 'courses' ? null : 'courses'" class="flex items-center p-2 text-white rounded-lg hover:bg-green-400">
                        <span class="pcoded-micon"><i class="feather icon-layout"></i></span>
                        <span class="ms-3 text-white">Courses</span>
                        <span class="ml-auto"><i :class="openSubmenu === 'courses' ? 'feather icon-chevron-up' : 'feather icon-chevron-down'"></i></span>
                    </a>
                    <ul x-show="openSubmenu === 'courses'" class="pcoded-submenu bg-amber-400">
                        <li>
                            <a href="{{ route('courses.index') }}" class="flex items-center p-2 text-gray-900 hover:bg-orange-400">List</a>
                        </li>
                        <li>
                            <a href="{{ route('courses.create') }}" class="flex items-center p-2 text-gray-900 hover:bg-orange-400">Create</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a @click="openSubmenu = openSubmenu === 'teachers' ? null : 'teachers'" class="flex items-center p-2 text-white rounded-lg hover:bg-green-400">
                        <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                        <span class="ms-3 text-white">Teacher's</span>
                        <span class="ml-auto"><i :class="openSubmenu === 'teachers' ? 'feather icon-chevron-up' : 'feather icon-chevron-down'"></i></span>
                    </a>
                    <ul x-show="openSubmenu === 'teachers'" class="pcoded-submenu bg-amber-400">
                        <li>
                            <a href="{{ route('teacher.index') }}" class="flex items-center p-2 text-gray-900 hover:bg-orange-400">List</a>
                        </li>
                        <li>
                            <a href="{{ route('teacher.create') }}" class="flex items-center p-2 text-gray-900 hover:bg-orange-400">Create</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('guest.list') }}" class="flex items-center p-2 text-white rounded-lg hover:bg-green-400">
                        <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                        <span class="ms-3">Guest's</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('student.index') }}" class="flex items-center p-2 text-white rounded-lg hover:bg-green-400">
                        <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                        <span class="ms-3">Student's</span>
                    </a>
                </li>
                <li>
                    <a @click="openSubmenu = openSubmenu === 'settings' ? null : 'settings'" class="flex items-center p-2 text-white rounded-lg hover:bg-green-400">
                        <span class="pcoded-micon"><i class="feather icon-layout"></i></span>
                        <span class="ms-3">Settings</span>
                        <span class="ml-auto"><i :class="openSubmenu === 'settings' ? 'feather icon-chevron-up' : 'feather icon-chevron-down'"></i></span>
                    </a>
                    <ul x-show="openSubmenu === 'settings'" class="pcoded-submenu bg-amber-400">
                        <li>
                            <a href="{{ route('requirements.index') }}" class="flex items-center p-2 text-gray-900 hover:bg-orange-400">Requirements</a>
                        </li>
                        <li>
                            <a href="{{ route('tesda.index') }}" class="flex items-center p-2 text-gray-900 hover:bg-orange-400">Forms</a>
                        </li>
                        <li>
                            <a href="{{ route('certificate.index') }}" class="flex items-center p-2 text-gray-900 hover:bg-orange-400">Certificates</a>
                        </li>
                    </ul>
                </li>
                
            @elseif(Auth::user()->type == 'Teacher')
                <li>
                    <a href="{{ route('dashboard') }}" class="flex items-center p-2 text-white rounded-lg hover:bg-green-400">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('requirements.index') }}" class="flex items-center p-2 text-white rounded-lg hover:bg-green-400">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="ms-3">Requirements</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('tesda.index') }}" class="flex items-center p-2 text-white rounded-lg hover:bg-green-400">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="ms-3">Forms</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('student.index') }}" class="flex items-center p-2 text-white rounded-lg hover:bg-green-400">
                        <span class="pcoded-micon"><i class="feather icon-user"></i></span>
                        <span class="ms-3">Student's</span>
                    </a>
                </li>

            @elseif(Auth::user()->type == 'Guest')
                <li>
                    <a href="{{ route('dashboard') }}" class="flex items-center p-2 text-white rounded-lg hover:bg-green-400">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('guest.requirements') }}" class="flex items-center p-2 text-white rounded-lg hover:bg-green-400">
                        <span class="pcoded-micon"><i class="feather icon-file-text"></i></span>
                        <span class="ms-3">Requirements</span>
                    </a>
                </li>

            @else
                <li>
                    <a href="{{ route('dashboard') }}" class="flex items-center p-2 text-white rounded-lg hover:bg-green-400">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('guest.requirements') }}" class="flex items-center p-2 text-white rounded-lg hover:bg-green-400">
                        <span class="pcoded-micon"><i class="feather icon-file-text"></i></span>
                        <span class="ms-3">Requirements</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('certificate.index') }}" class="flex items-center p-2 text-white rounded-lg hover:bg-green-400">
                        <span class="pcoded-micon"><i class="feather icon-file-text"></i></span>
                        <span class="ms-3">Certificates</span>
                    </a>
                </li>
            @endif
        </ul>
    </div>
</aside>
