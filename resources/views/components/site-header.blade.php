<div class="col-md-4 col-12 ">TẤT CẢ ĐỀU CÓ Ở ĐÂY !!!</div>
<div class="col-md-4 d-md-block d-none">
    <ul>
        <li>
            <i class="fa-solid fa-envelope"></i>
            <a>{{ $config_header->email ?? null }}</a>
        </li>
        <li>
            <i class="fa-solid fa-phone"></i>
            <a>{{ $config_header->phone ?? null }}</a>

        </li>
    </ul>
</div>
<div style="text-transform: uppercase" class="col-md-4 d-md-block d-none float-none">
    {{ $config_header->site_name ?? null }}</div>
