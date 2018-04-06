<ul class="main-menu">
    @foreach($items as $item)
        <li class="@if(count($item->children)) has-sub-menu @endif">
            <a href={{ $item->link() }}>
                <div class="icon-w">
                    <div class="{{ $item->icon_class }}"></div>
                </div>
                <span>{{ $item->title }}</span></a>
            @if(count($item->children))
                <div class="sub-menu-w">
                    <div class="sub-menu-header">
                        {{ $item->title }}
                    </div>
                    <div class="sub-menu-icon">
                        <i class="os-icon os-icon-layers"></i>
                    </div>
                    <div class="sub-menu-i">
                        <ul class="sub-menu">
                            @foreach($item->children as $child)
                                <li>
                                    <a href="{{ $child->link() }}">{{ $child->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
        </li>
    @endforeach
</ul>