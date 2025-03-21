
@if ($notice_ttlpage > 0)
<!-- Pagination -->
<div style="bottom:28px">
    <nav class="custom-pagination">
        <ul class="pagination justify-content-center">
            @php
                if(empty($_GET['notice_page'])) $_GET['notice_page'] = 1;
                $set = ceil($_GET['notice_page'] / 5);
                $page = $_GET['notice_page'];
                $ppage = $_GET['notice_page'] - 1;
                $npage = $_GET['notice_page'] + 1;
                // $activeTab = request()->query('tab', 'notice'); // Default to 'list' if 'tab' is not set
                if($page < 3) {
                    $k = 0;
                } elseif($page > ($notice_ttlpage - 2)) {
                    $k = $notice_ttlpage - 5;
                } else {
                    $k = $page - 3;
                }
                if($k < 0) {
                    $k = 0;
                }
            @endphp

            <li @if($page < 3) style="display: none" @endif class="page-item">
                <a class="page-link" href="{{ request()->fullUrlWithQuery(['notice_page' => 1, 'tab' => 'notice']) }}">
                    <i class="fa-solid fa-angles-left"></i>
                </a>
            </li>
            <li @if($page < 2) style="display: none" @endif class="page-item">
                <a class="page-link" href="{{ request()->fullUrlWithQuery(['notice_page' => $ppage, 'tab' => 'notice']) }}">
                    <i class="fa-solid fa-angle-left"></i>
                </a>
            </li>

            @for ($i = $k + 1; $i <= $k + 6; $i++)
                @if($i <= $notice_ttlpage)
                    <li class="page-item @if($page == $i) active @endif">
                        <a class="page-link" href="{{ request()->fullUrlWithQuery(['notice_page' => $i, 'tab' => 'notice']) }}">
                            {{ $i }}
                        </a>
                    </li>
                @endif
            @endfor

            <li @if($page == $notice_ttlpage) style="display: none" @endif class="page-item">
                <a class="page-link" href="{{ request()->fullUrlWithQuery(['notice_page' => $npage, 'tab' => 'notice']) }}">
                    <i class="fa-solid fa-angle-right"></i>
                </a>
            </li>
            <li @if($page == $notice_ttlpage || $page + 1 == $notice_ttlpage) style="display: none" @endif class="page-item">
                <a class="page-link" href="{{ request()->fullUrlWithQuery(['notice_page' => $notice_ttlpage, 'tab' => 'notice']) }}">
                    <i class="fa-solid fa-angles-right"></i>
                </a>
            </li>
        </ul>
    </nav>
</div>
@endif