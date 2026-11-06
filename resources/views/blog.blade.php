<x-layout class="bg-white dark:bg-neutral-950">
    <strong>Blog-Elon Musk</strong>

    <section class="text-center">
        <h1>Blog</h1>
        <h2>Insights and Updates</h2>
        <p>Welcome to the blog section where we share insights, updates, and stories about Elon Musk's ventures and innovations.</p>
    </section>

    <section class="text-justify card-body py-10 container mx-auto">
        <h2>Latest Posts</h2>
        @foreach ($posts as $post)
                <article class="mb-4">
                    <h3>{{ $post['title'] }}</h3>
                    <p>{{ $post['description'] }}</p>
                </article>
        @endforeach
    </section>

</x-layout>