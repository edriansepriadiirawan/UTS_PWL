<div class="d-flex h-100">
    <!-- Vertical Nav di kiri Content -->
    <div class="nav flex-column nav-pills me-3 border-end w-25" style="min-width: 200px; max-width: 250px;">
        <h6 class="px-3 py-2 text-muted text-uppercase small">MENU CONTENT</h6>
        <a href="/courses" class="nav-link {{ ($menu == 'courses') ? 'active' : '' }} px-3">
            <i class="bi bi-book me-2"></i> Courses
        </a>
        <a href="/students" class="nav-link {{ ($menu == 'students') ? 'active' : '' }} px-3">
            <i class="bi bi-people me-2"></i> Students
        </a>
        <a href="/grades" class="nav-link {{ ($menu == 'grades') ? 'active' : '' }} px-3">
            <i class="bi bi-award me-2"></i> Grades
        </a>
        <a href="/assignments" class="nav-link {{ ($menu == 'assignments') ? 'active' : '' }} px-3">
            <i class="bi bi-list-task me-2"></i> Assignments
        </a>
    </div>

    <!-- Konten Utama di sebelah kanan Vertical Nav -->
    <div class="flex-grow-1 p-4 overflow-auto">
        @yield('child-content')
    </div>
</div>