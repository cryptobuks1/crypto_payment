<meta name="title"
      content="{{ $post->title }}">
<meta name="description"
      content="{{ Str::limit($post->content, 30) }}">
<meta property="og:url"
      content="{{ url()->current() }}"/>
<meta property="og:type"
      content="article"/>
<meta property="og:title"
      content="{{ $post->title }}"/>
<meta property="og:description"
      content="{{ Str::limit($post->content, 30) }}"/>
<meta property="og:image"
      content="https://avada.theme-fusion.com/food/wp-content/uploads/sites/118/2019/03/sub-boxed-bg.png"/>
