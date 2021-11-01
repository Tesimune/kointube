<div class="login-wrapper" id="login-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>Login</h3>
        <form id="loginForm">
            <div class="formErrors"></div>
            <div class="row">
                <label for="username">

                    <input type="text" name="email" id="email" placeholder="EMAIL" required="required" />
                </label>
            </div>

            <div class="row">
                <label for="password">
                    Password:
                    <input type="password" name="password" id="password" placeholder="********************" required="required" />
                </label>
            </div>
            <div class="row">
                <div class="remember">
                    <div>
                        <input type="checkbox" name="remember" value="Remember me"><span>Remember me</span>
                    </div>
                    <a href="#">Forget password ?</a>
                </div>
            </div>
            <div class="row">
                <button type="submit">Login</button>
            </div>
        </form>
        <div class="row">
            <p>Or via social</p>
            <div class="social-btn-2">
                <a class="fb" href="#"><i class="ion-social-facebook"></i>Facebook</a>
                <a class="tw" href="#"><i class="ion-social-twitter"></i>twitter</a>
            </div>
        </div>
    </div>
</div>

<script>
    let form = document.forms.loginForm;
    form.onsubmit = e => {
        e.preventDefault();
        login();

    }

    async function login() {
        let response = await fetch('DB/auth/login.php', {
            method: 'POST',
            body: new FormData(form),
        });

        let data = await response.json();
        if (data.errors) {
            console.log(data.errors)
            let ul = document.createElement('ul');
            ul.className = 'formErrors';
            ul.style.backgroundColor= 'rgba(255, 0, 0, 0.1)';
            ul.style.padding = '15px';
            for (let error in data.errors){
                let li = document.createElement('li');
                li.textContent = data.errors[error];
                li.style.color = 'red';
                ul.append(li);
            }
            document.querySelector('.formErrors').replaceWith(ul);
        }
        else if (data.error){
            let li = document.createElement('li');
            li.textContent = data.error;
            li.className = 'formErrors';
            li.style.color = 'red';
            document.querySelector('.formErrors').replaceWith(li);
        }
        else if(data.message) location.reload();
    }
</script>