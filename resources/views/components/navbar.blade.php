<style>
    nav ul {
        display: flex;
        gap: 20px;
        list-style: none;
        padding: 0;
    }

    nav a {
        text-decoration: none;
        color: #171717;
    }

    nav a:hover {
        color: #4CC9F0;
    }
</style>

<nav>
    <ul>
        <li>
            <a href="{{ route('welcome') }}">Catalogue</a>
        </li>
        <li>
            <a href="{{ route('products.index') }}">Products</a>
        </li>
        <li>
            <a href="{{ route('search') }}">Rechercher</a>
        </li>
        <li>
            <a href="{{ route('course') }}">Course</a>
        </li>
        <li>
            <a href="{{ route('about') }}">About</a>
        </li>
        <li>
            <a href="{{ route('contact') }}">Contact</a>
        </li>
    </ul>
</nav>
