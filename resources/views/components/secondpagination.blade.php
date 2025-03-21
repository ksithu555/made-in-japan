@if ($second_ttlpage > 0)
<!-- Pagination -->
<div style="bottom:28px">
    <nav class="custom-pagination">
        <ul class="pagination justify-content-center">
            @php
                if(empty($_GET['second_page'])) $_GET['second_page'] = 1;
                $set = ceil($_GET['second_page'] / 5);
                $page = $_GET['second_page'];
                $ppage = $_GET['second_page'] - 1;
                $npage = $_GET['second_page'] + 1;
                // $activeTab = request()->query('tab', 'list'); // Default to 'list' if 'tab' is not set
                if($page < 3) {
                    $k = 0;
                } elseif($page > ($second_ttlpage - 2)) {
                    $k = $second_ttlpage - 5;
                } else {
                    $k = $page - 3;
                }
                if($k < 0) {
                    $k = 0;
                }
            @endphp

            <li @if($page < 3) style="display: none" @endif class="page-item">
                <a class="page-link" href="{{ request()->fullUrlWithQuery(['second_page' => 1, 'tab' => 'second']) }}">
                    <i class="fa-solid fa-angles-left"></i>
                </a>
            </li>
            <li @if($page < 2) style="display: none" @endif class="page-item">
                <a class="page-link" href="{{ request()->fullUrlWithQuery(['second_page' => $ppage, 'tab' => 'second']) }}">
                    <i class="fa-solid fa-angle-left"></i>
                </a>
            </li>

            @for ($i = $k + 1; $i <= $k + 6; $i++)
                @if($i <= $second_ttlpage)
                    <li class="page-item @if($page == $i) active @endif">
                        <a class="page-link" href="{{ request()->fullUrlWithQuery(['second_page' => $i, 'tab' => 'second']) }}">
                            {{ $i }}
                        </a>
                    </li>
                @endif
            @endfor

            <li @if($page == $second_ttlpage) style="display: none" @endif class="page-item">
                <a class="page-link" href="{{ request()->fullUrlWithQuery(['second_page' => $npage, 'tab' => 'second']) }}">
                    <i class="fa-solid fa-angle-right"></i>
                </a>
            </li>
            <li @if($page == $second_ttlpage || $page + 1 == $second_ttlpage) style="display: none" @endif class="page-item">
                <a class="page-link" href="{{ request()->fullUrlWithQuery(['second_page' => $second_ttlpage, 'tab' => 'second']) }}">
                    <i class="fa-solid fa-angles-right"></i>
                </a>
            </li>
        </ul>
    </nav>
</div>
@endif