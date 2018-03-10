{{ extends('layouts.auth') }}

#set[content]

<section class="login">
    <div class="login_wrapper">
        <form action="{{ url('/login') }}" method="post" class="form login_form">
            <div class="loginbox">
                <div class="site_info">
                    <div class="site__logo">
                        <img src="{{ asset('img/man.png') }}" alt="logo">
                    </div>
                    <div class="site__meta">
                        <div class="site___name">Tayyab Hanif</div>
                        <div class="site___tagline">UI / UX Designer</div>
                    </div>
                </div>
                <div class="form-item">
                    <label>Email</label>
                    <input type="email" name="user-email" class="user-email">
                </div>
                <div class="form-item">
                    <label>Password</label>
                    <input type="password" name="user-password" class="user-email">
                    <input type="submit" name="submut" value="Log In" class="button submit primary">
                </div>
            </div>
        </form>
    </div>
</section>


#end
