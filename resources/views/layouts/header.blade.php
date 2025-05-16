<header style="background: #ffffff; padding: :10px;">
    <nav class="container d-flex justify-content-between align-items-center">
        
        <a href="{{ route('index') }}">QA crm</a>
        <a href="{{ route('my_calls') }}">Мої дзвінки</a>
        {{-- 
            <a href="{{ route('#') }}">Звіт по агентам</a>
            <a href="{{ route('#') }}">Звіт Аналітика</a>
            <a href="{{ route('#') }}">Адмінка</a>
            <a href="#">Вийти</a>
        
        --}}
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                Виберіть карту
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('cards.create') }}">Створити карту</a></li>
                {{-- можна додати ще посилання --}}
            </ul>
        </div>
        

    </nav>
</header>