
@if ($sent_ttlpage > 0)
<!-- Pagination -->
<div style="bottom:28px">
    <nav class="custom-pagination">
        <ul class="pagination justify-content-center">
            @php
                if(empty($_GET['sent_page'])) $_GET['sent_page'] = 1;
                $set = ceil($_GET['sent_page'] / 5);
                $page = $_GET['sent_page'];
                $ppage = $_GET['sent_page'] - 1;
                $npage = $_GET['sent_page'] + 1;
                // $activeTab = request()->query('tab', 'sent'); // Default to 'list' if 'tab' is not set
                if($page < 3) {
                    $k = 0;
                } elseif($page > ($sent_ttlpage - 2)) {
                    $k = $sent_ttlpage - 5;
                } else {
                    $k = $page - 3;
                }
                if($k < 0) {
                    $k = 0;
                }
            @endphp

            <li @if($page < 3) style="display: none" @endif class="page-item">
                <a class="page-link" href="{{ request()->fullUrlWithQuery(['sent_page' => 1, 'tab' => 'sent']) }}">
                    <i class="fa-solid fa-angles-left"></i>
                </a>
            </li>
            <li @if($page < 2) style="display: none" @endif class="page-item">
                <a class="page-link" href="{{ request()->fullUrlWithQuery(['sent_page' => $ppage, 'tab' => 'sent']) }}">
                    <i class="fa-solid fa-angle-left"></i>
                </a>
            </li>

            @for ($i = $k + 1; $i <= $k + 6; $i++)
                @if($i <= $sent_ttlpage)
                    <li class="page-item @if($page == $i) active @endif">
                        <a class="page-link" href="{{ request()->fullUrlWithQuery(['sent_page' => $i, 'tab' => 'sent']) }}">
                            {{ $i }}
                        </a>
                    </li>
                @endif
            @endfor

            <li @if($page == $sent_ttlpage) style="display: none" @endif class="page-item">
                <a class="page-link" href="{{ request()->fullUrlWithQuery(['sent_page' => $npage, 'tab' => 'sent']) }}">
                    <i class="fa-solid fa-angle-right"></i>
                </a>
            </li>
            <li @if($page == $sent_ttlpage || $page + 1 == $sent_ttlpage) style="display: none" @endif class="page-item">
                <a class="page-link" href="{{ request()->fullUrlWithQuery(['sent_page' => $sent_ttlpage, 'tab' => 'sent']) }}">
                    <i class="fa-solid fa-angles-right"></i>
                </a>
            </li>
        </ul>
    </nav>
</div>
@endif