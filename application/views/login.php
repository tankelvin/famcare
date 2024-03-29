<style type="text/css">
  @import url(https://fonts.googleapis.com/css?family=Muli:300,400,700);
* { border-radius:0 !important; }

body {
  background-color: #eaf7f7;
  font-family: "Muli", sans-serif;
}

a {
  text-decoration: none;
  color: #ff8a00;
  -webkit-transition: .5s ease;
  transition: .5s ease;
}
  a:hover, a:focus {
    color: #ffffff;
    text-decoration: none;
  }

.sign-in-up-form {
  background: #206276;
  padding: 40px;
  max-width: 600px;
  margin: 5% auto;
  box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
}

.sign-in-up-form .tab-group {
  list-style: none;
  padding: 0;
  margin: 0 0 40px 0;
}
  .sign-in-up-form .tab-group:after {
    content: "";
    display: table;
    clear: both;
  }

.sign-in-up-form .tab-group li a {
  display: block;
  text-decoration: none;
  padding: 15px;
  background: #ff8a00;
  background: rgba(18, 67, 81, 1);
  color: #ffffff;
  font-size: 20px;
  float: left;
  width: 50%;
  text-align: center;
  cursor: pointer;
  -webkit-transition: .5s ease;
      transition: .5s ease;
}
  .sign-in-up-form .tab-group li a:hover {
    background: #d28218;
    background: rgba(18, 67, 81, 0.8);
    color: #ffffff;
  }

.sign-in-up-form .tab-group .active a {
  background: rgba(255, 138, 0, 1);
  color: #ffffff;
}
  .sign-in-up-form .tab-group .active a:hover {
    background: rgba(255, 138, 0, 0.8);
    color: #ffffff;
  }

.sign-in-up-form .tab-content > div:last-child { display: none; }

.sign-in-up-form h1 {
  text-align: center;
  color: #ffffff;
  font-weight: 300;
  margin: 0 0 40px;
  font-size: 28px;
}

.sign-in-up-form label {
  position: absolute;
  left: 13px;
  color: rgba(255, 255, 255, 0.5);
  font-size: 22px;
  font-weight: 300;
  -webkit-transform: translateY(6px);
      transform: translateY(6px);
  -webkit-transition: all 0.25s ease;
      transition: all 0.25s ease;
  -webkit-backface-visibility: hidden;
  pointer-events: none;
}
  .sign-in-up-form label .req {
    margin: 2px;
    color: #797247;
    font-weight: 700;
  }
  .sign-in-up-form label.active {
    left: 2px;
    font-size: 14px;
    -webkit-transform: translateY(50px);
        transform: translateY(50px);
  }
  .sign-in-up-form label.active .req { opacity: 0; }
  .sign-in-up-form label.highlight { color: #ffffff; }

.sign-in-up-form input, .sign-in-up-form textarea {
  font-size: 22px;
  display: block;
  width: 100%;
  height: 100%;
  padding: 5px 10px;
  background: none;
  background-image: none;
  border: 2px solid #347a8e;
  color: #ffffff;
  -webkit-transition: border-color .25s ease, box-shadow .25s ease;
      transition: border-color .25s ease, box-shadow .25s ease;
}
  .sign-in-up-form input:focus, .sign-in-up-form textarea:focus {
    outline: 0;
    border-color: #124351;
  }

.sign-in-up-form textarea {
  border: 2px solid #a0b3b0;
  resize: vertical;
}

.field-wrap {
  position: relative;
  margin-bottom: 40px;
}

.top-row:after {
  content: "";
  display: table;
  clear: both;
}
  .top-row > div {
    float: left;
    width: 48%;
    margin-right: 4%;
  }
  .top-row > div:last-child { margin: 0; }

.sign-in-up-form .button {
  border: 0;
  outline: none;
  padding: 15px 0;
  font-size: 2rem;
  font-weight: 400;
  background: #206276;
  background: rgba(18, 67, 81, 1);
  color: #ffffff;
  -webkit-transition: all 0.5s ease;
      transition: all 0.5s ease;
  -webkit-appearance: none;
}
  .sign-in-up-form .button:hover, .sign-in-up-form .button:focus {
    background: #144958;
    background: rgba(18, 67, 81, 0.8);
  }

.sign-in-up-form .button-block {
  display: block;
  width: 100%;
}

.forgot {
  margin-top: -20px;
  text-align: right;
}

/* ==========================================================================
   Buttons
   ========================================================================== */
.btn { font-family: "Muli", sans-serif; }
.btn-icon i { margin-right: 4px; }

/* ==========================================================================
   Forms
   ========================================================================== */
.form-control {
    background-color: #fafafa;
    background-image: none;
  border: 2px solid #eeeeee;
    box-shadow: none;
    color: #202b33;
    display: block;
    font-size: 14px;
    height: 35px;
    line-height: 1.4;
    padding: 5px 10px;
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
    width: 100%;
  resize: vertical;
}
  .form-control:focus {
    background-color: #ffffff;
    border-color: #d3e6f3;
    box-shadow: none;
    outline: 0 none;
  }
  .form-control.smallText { font-size: 14px; }

.form-control.hasError { border: 1px solid #e9573f !important; }

.inline-form { display: inline-block; }

label {
    display: inline-block;
    font-weight: 300;
    color: #202b33;
}
</style>


<div id="mylogin" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="sign-in-up-form">
      <div id="login">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
        <h1>Welcome back!</h1>

        <form action="<?php echo site_url('Welcome/cek_login')?>" method="post">
          <div class="field-wrap">
            <input type="email" name="email" id="userEmail" autocomplete="off" placeholder="Email Address *" />
          </div>

          <div class="field-wrap">
            <input type="password" name="password" id="userPass" autocomplete="off" placeholder="Password *" />
          </div>

          <p class="forgot resetPass"><a data-toggle="modal" href="#resetPassword">Don't have an Account?</a></p>
          <button class="button button-block" />Login</button>
        </form>
      </div> 
    </div>
  </div>
</div>

<div class="modal fade" id="resetPassword" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="sign-in-up-form">
      <div id="signup">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
        <h1>Sign Up today!</h1>
          <form action="<?php echo site_url('Welcome/register')?>" method="post">
            <div class="field-wrap">
              <input type="text" name="username" id="signupNickname" autocomplete="off" placeholder="Nickname *" />
            </div>

            <div class="field-wrap">
              <input type="email" name="email" id="signupEmail" autocomplete="off" placeholder="Email Address *" />
            </div>

            <div class="top-row">
              <div class="field-wrap">
                 <input type="password" name="password" id="signupPass" autocomplete="off" placeholder="Password *" />
              </div>

              <div class="field-wrap">
                <input type="password" name="confirm" id="signupPass_r" autocomplete="off" placeholder="Repeat Password *" />
              </div>
            </div>

            <button type="submit" class="button button-block" />Sign Up</button>
          </form>
        </div>
      </div>
    </div>
  </div>
