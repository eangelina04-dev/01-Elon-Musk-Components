<x-layout>
    title="Home-Elon Musk"
    
    <section class="text-center">
        <h1>Elon Musk</h1>
        <h2>Entrepreneur, Engineer, Visionary</h2>
        <p> Elon Musk adalah pengusaha dan insinyur 
            kelahiran Afrika Selatan yang dikenal lewat 
            perusahaan-perusahaan di bidang kendaraan listrik, 
            penerbangan luar angkasa, kecerdasan buatan, 
            dan teknologi otak. Visinya adalah membuat manusia 
            bisa hidup di planet lain dan mempercepat peralihan 
            dunia ke energi berkelanjutan.</p>
    </section>

    <section class="text-justify card-body py-10 container mx-auto">
        <h2>Perusahaan</h2>
        @foreach ($companies as $company) 
            <article class="mb-4">
                <h3>{{ $company['name'] }}</h3>
                <p>{{ $company['description'] }}</p>
            </article>
        @endforeach
    </section>
</x-layout>
