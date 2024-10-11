<!DOCTYPE html>
<html>
<head>
    <title>Page Content Blocks</title>
</head>
<body>
    <h1>{{ $page->title }}</h1>
    <p>{{ $page->description }}</p>

    <h2>Content Blocks</h2>
    <ul>
        @foreach($page->contentBlocks as $block)
            <li>
                @if($block->type == 'text')
                    {{ $block->content }}
                @elseif($block->type == 'image')
                    <img src="{{ asset($block->content) }}" alt="Image">
                @endif
            </li>
        @endforeach
    </ul>

    <h2>Add Content Block</h2>
    <form action="/page/{{ $page->id }}/content-block" method="POST">
        @csrf
        <label>Type:</label>
        <select name="type">
            <option value="text">Text</option>
            <option value="image">Image</option>
        </select>
        <br>
        <label>Content:</label>
        <input type="text" name="content" required>
        <br>
        <button type="submit">Add Block</button>
    </form>
</body>
</html>
