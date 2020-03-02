@foreach($items as $item)
    <?php
    if ($item->hasChildren()){
        if ($item->children()->where('isActive',true)->first() !== null){
            $active = 'active';
        }else{
            $active = '';
        }
    }else{
        $active = '';
    }
    ?>
    <li @lm_attrs($item) @if($item->hasChildren()) class="" @else class="{!! $item->active ? ' active' : '' !!}" @endif @lm_endattrs>
        @if($item->link)
            <a @lm_attrs($item->link)
                @if($item->hasChildren())
                    class="nav-link"
                    data-toggle="collapse" role="button" aria-expanded="{{ $active != '' ? 'true' : 'false' }}"
                @else
                    class="nav-link" @endif @lm_endattrs href="{!! $item->url() !!}">
                {!! $item->title !!}
                @if($item->hasChildren()) <b class="caret mt-2"></b> @endif
            </a>
        @else
            <span class="navbar-text">{!! $item->title !!}</span>
        @endif
        @if($item->hasChildren())
            <div class="collapse p-0 {{ $active != '' ? 'show' : '' }}" id="{!! str_replace('#','',$item->url()) !!}">
                <ul class="nav">
                    @include(config('laravel-menu.views.bootstrap-items'),['items' => $item->children()])
                </ul>
            </div>
        @endif
    </li>
    @if($item->divider)
        <li{!! Lavary\Menu\Builder::attributes($item->divider) !!}></li>
    @endif
@endforeach
