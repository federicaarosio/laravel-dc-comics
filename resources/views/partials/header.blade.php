<header>
    <section class="header-navigation">
        <nav class="navigation">
            <ul class="d-flex gap-4 navigation-menu">
                <li>
                    <a href="{{route('pages.home')}}">
                    Home
                    </a>
                </li>
                <li class="active">
                    <a href="{{route('comics.index')}}">Comics</a>
                </li>
                <li>
                    <a href="{{route('comics.create')}}">Add Comics</a>
                </li>
                <li>
                    <a href="{{route('movies.index')}}">Movies</a>
                </li>
                <li>Tv</li>
                <li>Games</li>
                <li>Collectibles</li>
                <li>Videos</li>
                <li>Fans</li>
                <li>News</li>
                <li>Shop</li>
            </ul>
        </nav>
        <div class="search">
            <input type="text" placeholder="Search">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
    </section>
    <section class="jumbo">
    </section>
</header>