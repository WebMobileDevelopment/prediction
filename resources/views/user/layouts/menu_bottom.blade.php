<!-- footer -->
<div class="page-footer" id="collapseExample">
    <div class="footer-menu-1st">
        <!-- footer menu 2 -->
        <div class="d-flex top-footer justify-content-between align-items-center">
            <div class="left">
                <div class="btn-1">
                    Cash
                </div>
                <div class="btn-2">
                    Fun
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
                <a class="nav-link foo-sec-item f-active" href="index.html">
                    <img class="sec-foo f-active" src="{{ asset('assets/images/front/footer-icons/Home.png') }}" />
                    <span>Home</span>
                </a>
            </li>
            <li class="nav-item px-35 foo-border">
                <a class="nav-link foo-border-right foo-sec-item" href="#">
                    <img class="sec-foo" src="{{ asset('assets/images/front/footer-centre-menu-icons/Winners.png') }}" />
                    <span>Winner</span>
                </a>
            </li>
            <li class="nav-item foo-cen-bor-ra">
                <a class="nav-link footer-centre-menu-icons" href="#" id="menu-btn" onclick="pop()">
                    <img src="{{ asset('assets/images/front/footer-centre-menu-icons/Footer-menu-centre.png') }}" />
                    <span>Menu</span>
                </a>
            </li>
            <li class="nav-item px-35 foo-border">
                <a class="nav-link foo-border-left foo-sec-item" href="#">
                    <img class="sec-foo" src="{{ asset('assets/images/front/footer-icons/Rewards.png') }}" />
                    <span>Reward</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link foo-sec-item" href="#">
                    <img class="sec-foo" src="{{ asset('assets/images/front/footer-icons/faq-circular-filled-button.png') }}" />
                    <span>FAQ</span>
                </a>
            </li>
            <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST"> @csrf <button type="submit"
                    class="btn btn-ghost-dark btn-block">Logout</button></form>
            </li>
        </ul>
        <!-- footer menu -->
    </div>
</div>
<!-- footer -->
