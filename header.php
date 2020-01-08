<header>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-home bg-<?php echo esc_html(get_post_type_object(get_post_type())->name); ?> fixed-top" style="box-shadow: 0px 2px 5px rgba(0,0,0,0.15);">
    <a class="navbar-brand" href="<?php echo home_url(); ?>">DAi Site</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
        aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo home_url("about"); ?>"><i class="fas fa-info-circle mr-1"></i>About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo home_url("works"); ?>"><i class="fas fa-infinity mr-1"></i>Works</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo home_url("note"); ?>"><i class="fas fa-book-open mr-1"></i>Note</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo home_url("thought"); ?>"><i class="fas fa-th mr-1"></i>Thought</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo home_url("review"); ?>"><i class="fas fa-eye mr-1"></i>Review</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo home_url("link"); ?>"><i class="fas fa-project-diagram mr-1"></i>Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo home_url("contact"); ?>"><i class="fas fa-reply mr-1"></i>Contact</a>
            </li>
        </ul>
        <ul class="navbar-nav">        
            <li class="nav-item">
                <a class="nav-link" href="https://twitter.com/pg_dai/"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://github.com/pg-dai"><i class="fab fa-github"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://facebook.com/daichisugiyama.jp"><i class="fab fa-facebook"></i></a>
            </li>
        </ul>
    </div>
</nav>
</header>
