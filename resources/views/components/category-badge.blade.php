@props(['post'])
<a href="/categories/{{$post->category->slug}}"
   class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
>
    {{ $post->category->name}}
</a>
