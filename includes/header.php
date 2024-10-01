<header>
    <div class="container-fluid header-top">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-end gap-3">
                    <a href="#" id="aanmelden">Aanmelden</a>
                    <a href="#" id="registreren">Registreren</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid header-main">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <a href="#" class="header-logo gap-3">
                        <img src="<?= $aSite['url'] ?>upload/logo.svg" class="img-fluid">
                        <span>Logo</span>
                    </a>
                </div>
                <div class="col-6 d-none d-sm-flex justify-content-end align-items-center">
                    <div class="form-group">
                        <label for="search" style="visibility: hidden;">Search</label>
                        <input type="search" name="search" id="search" placeholder="Zoeken...">
                    </div>
                </div>
                <div class="col-2 offset-4 d-sm-none">
                    <button id="toggleMenu"></button>
                </div>
            </div>
        </div>
    </div>
    <div class="container d-none d-sm-block">
        <div class="row header-bottom">
            <nav>
                <ul class="col-12 d-flex justify-content-center gap-3 list-unstyled m-0 p-0">
                    <a href="#" class="link">Link 1</a>
                    <a href="#" class="link">Link 2</a>
                    <a href="#" class="link">Link 3</a>
                    <a href="#" class="link">Link 4</a>
                    <a href="#" class="link">Link 5</a>
                </ul>
            </nav>
        </div>
    </div>
</header>
<?php if ($aPreferences['slider']) include_once("includes/swiper.php"); ?>