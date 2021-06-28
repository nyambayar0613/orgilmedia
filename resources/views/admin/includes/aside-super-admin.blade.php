<script>
    $(function () {
        $("#aside").removeClass("folded");
    })
</script>
<div id="aside" class="app-aside fade nav-dropdown black">
    <!-- fluid app aside -->
    <div class="navside dk" data-layout="column">
        <div class="navbar no-radius">
            <!-- brand -->
            <a href="/" class="navbar-brand">
                <div data-ui-include="'/img/logo-light.png'"></div>
                <img src="/img/logo-light.png" class="img-fluid" alt="." >
            </a>
            <!-- / brand -->
        </div>
        <div data-flex class="hide-scroll">
            <nav class="scroll nav-stacked nav-stacked-rounded nav-color">

                <ul class="nav" data-ui-nav>
                    <li>
                        <a href="{{ route('admin.slider.list') }}">
                            <span class="nav-icon">
                                <i class="ion-ios-list"></i>
                            </span>
                            <span class="nav-text">Слайдер</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.staff.list') }}">
                            <span class="nav-icon">
                                <i class="ion-ios-contact"></i>
                            </span>
                            <span class="nav-text">Ажилчид</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.article.list') }}">
                            <span class="nav-icon">
                                <i class="ion-ios-list"></i>
                            </span>
                            <span class="nav-text">Нийтлэл</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.portfolio.list') }}">
                            <span class="nav-icon">
                                <i class="ion-ios-list"></i>
                            </span>
                            <span class="nav-text">Бүтээл</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.contact.info') }}">
                            <span class="nav-icon">
                                <i class="ion-ios-list"></i>
                            </span>
                            <span class="nav-text">Холбогдох</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
