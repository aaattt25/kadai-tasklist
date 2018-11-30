<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-success">
        <a class="navbar-brand" href="/">TaskList</a>

        <button type="button" class="navbar-toggler"data-toglle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                <li>{!! link_to_route('tasks.create','新規タスクの投稿', null, ['class' => 'btn btn-secondary'])  !!}</li>
            </ul>
        </div>
    </nav>
</header>