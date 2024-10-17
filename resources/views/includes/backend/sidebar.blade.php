<div class="sidebar-wrapper h-100">
    <nav class="sidebar-main">
        <div id="sidebar-menu">
            <ul class="sidebar-links custom-scrollbar">
                <li class="back-btn">
                    <a href="#">
                        <img class="img-fluid" src="#" alt="">
                    </a>
                    <div class="mobile-back text-right">
                        <span>Back</span>
                        <i class="fa fa-angle-right pl-2" aria-hidden="true"></i>
                    </div>
                </li>

                <li class="sidebar-main-title">
                    <div>
                        <h6>Kelola Data Website</h6>
                        <p>Article & Blog</p>
                    </div>
                </li>


                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                        <i data-feather="edit"></i>
                        <span>Resep & Blog</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{ url('/dashboard/articles') }}">
                                Data Resep dan blog
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/dashboard/articles/create') }}">
                                Tulis & Tambah Resep
                            </a>
                        </li>
                    </ul>
                </li>


            </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </nav>
</div>
