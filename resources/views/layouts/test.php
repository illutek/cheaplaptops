<li><a href="#"><img src="{{ asset('img/user-icon.gif') }}"
                     alt="{{ auth()->present()->fullName }}"/>
    </a>{{ auth()->present()->fullName }} <img src="{{ asset('img/down-arrow.gif') }}"
                                               alt="{{ auth()->present()->fullName }}">
</li>