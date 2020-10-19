<!-- footer -->
<div class="page-footer" id="collapseExample">
    <div class="footer-menu-1st">
        <!-- footer menu 2 -->
        <div class="d-flex top-footer justify-content-between align-items-center">
            <div class="left">
                <div class="btn-1">
                    White
                </div>
                <div class="btn-2">
                    Black
                </div>
            </div>
            <div class="right">
                <div class="btn-2 pr-3">
                    <i class="fa fa-th d-list"></i>
                </div>
                <div class="btn-1">
                    <i class="fa fa-columns d-slide"></i>
                </div>
            </div>
        </div>
        <!-- footer menu 2 -->
    </div>
    <div class="footer-menu-2nd">
        <!-- footer menu -->
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link foo-sec-item f-active" href="{{ route('user.home', $game_id) }}">
                    <img class="sec-foo f-active" src="{{ asset('assets/images/footer-buttons/Home.png') }}" />
                    <span>Home</span>
                </a>
            </li>
            <li class="nav-item px-35 foo-border">
                <a class="nav-link foo-border-right foo-sec-item" href="#">
                    <img class="sec-foo" src="{{ asset('assets/images/footer-buttons/Winner.png') }}" />
                    <span>Winner</span>
                </a>
            </li>
            <li class="nav-item foo-cen-bor-ra">
                <a class="nav-link footer-centre-menu-icons menu-btn" href="#">
                    <img src="{{ asset('assets/images/footer-buttons/Center.png') }}" />
                    <span>Menu</span>
                </a>
            </li>
            <li class="nav-item px-35 foo-border">
                <a class="nav-link foo-border-left foo-sec-item" href="#">
                    <img class="sec-foo" src="{{ asset('assets/images/footer-buttons/Reward.png') }}" />
                    <span>Reward</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link foo-sec-item" href="{{route('user.faq')}}">
                    <img class="sec-foo" src="{{ asset('assets/images/footer-buttons/Faq.png') }}" />
                    <span>FAQ</span>

                </a>
               
               
            </li>
        </ul>
        <!-- footer menu -->
    </div>
</div>
<!-- footer -->
