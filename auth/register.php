<div class="login-wrapper" id="signup-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>sign up</h3>
        <form id="registerForm">
            <div class="formErrors"></div>
            <div class="row">
                <label>
                    <input type="text" name="first_name" id="first_name" placeholder="FIRST NAME" />
                </label>
            </div>
            <div class="row">
                <label>
                    <input type="text" name="last_name" id="last_name" placeholder="LAST NAME" />
                </label>
            </div>
            <div class="row">
                <label>
                    <input type="text" name="username" id="username" placeholder="USERNAME" />
                </label>
            </div>
            <div class="row">
                <label>
                    <input type="email" name="email" id="email-2" placeholder="EMAIL ADDRESS" />
                </label>
            </div>

            <div class="row">
                <label>
                    <input type="password" name="password" id="password" placeholder="PASSWORD" />
                </label>
            </div>
            <div class="row">
                <label>
                    <input type="password" name="cpassword" id="repassword-2" placeholder="CONFIRM PASSWORD" />
                </label>
            </div>
            <div class="row">
                <button type="submit">sign up</button>
            </div>
            <br>
            <div class="row">
                <div class="social-btn-2">
                    <a class="fb" href="#"><i class="ion-social-facebook"></i>Facebook</a>
                    <a class="tw" href="#"><i class="ion-social-twitter"></i>twitter</a>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    let registerForm = document.forms.registerForm;
    registerForm.onsubmit = e => {
        e.preventDefault();
        register();
    }

    async function register() {
        let response = await fetch('DB/auth/register.php', {
            method: 'POST',
            body: new FormData(registerForm),
        });

        let result = await response.json();
        if (result.errors) {
            console.log(result.errors)
            let ul = document.createElement('ul');
            ul.className = 'formErrors';
            ul.style.backgroundColor= 'rgba(255, 0, 0, 0.1)';
            ul.style.padding = '15px';
            for (let error in result.errors){
                let li = document.createElement('li');
                li.textContent = result.errors[error];
                li.style.color = 'red';
                ul.append(li);
            }
            document.querySelector('.formErrors').replaceWith(ul);
        }else if(result.message) location.reload();
    }
</script>