<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">

    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-header">EXAMPLES</li>
        <li class="nav-item">
            <a href="calendar.html" class="nav-link ">
            <i class="nav-icon far fa-calendar-alt"></i>
            <p>
                Календарь

            </p>
            </a>
    </li>
    <li class="nav-item">
        <a href={{route('categoty.index')}} class="nav-link ">
            <i class="fa fa-list-alt" aria-hidden="true"></i>
            <p>
                Категория
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href={{route('tags.index')}} class="nav-link ">
            <i class="fas fa-tags"></i>
        <p>
            Теги

        </p>
    </a>
</li>
<li class="nav-item">
    <a href={{route('posts.index')}} class="nav-link ">
        <i class="fa-regular fa-paste"></i>
    <p>
        Посты

    </p>
</a>
</li>
<li class="nav-item">
    <a href={{route('users.index')}} class="nav-link ">
        <i class="fa-solid fa-hashtag"></i>
    <p>
        Пользователи
    </p>
</a>
</li>
    </ul>
    <!-- /.sidebar -->
</aside>
