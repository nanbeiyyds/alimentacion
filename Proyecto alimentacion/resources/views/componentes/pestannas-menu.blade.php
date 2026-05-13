<ol id="pestannasMenu">
    @foreach ($items as $item)
        <li><a href="#{{ $item['id'] }}">{{ $item['texto'] }}</a></li>
    @endforeach
</ol>