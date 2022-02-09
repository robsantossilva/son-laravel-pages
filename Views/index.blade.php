<h1>{{ trans('Page::pages.pages') }}</h1>
<a href="/locale/pt-br">pt-br</a> | <a href="/locale/en">en</a>

<ul>
@foreach ($pages as $p)
    <li>{{ $p->title }}</li>
@endforeach
</ul>
