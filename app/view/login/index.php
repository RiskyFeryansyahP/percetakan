<div class="hero is-primary is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-4-tablet is-4-desktop is-4-widescreen">
                    <form action='http://localhost:8888/percetakan/userauthentication/login' class="box" method='POST'>

                        <div class="field has-text-centered">
                            <img src="public/images/percetakan465x145.png" class="image" alt="Percetakan">
                        </div>

                        <div class="field">
                            <label for="" class="label"> Username </label>

                            <div class="control has-icons-left">
                                <input type="text" name="username" class="input" id="" placeholder="e.g admin">
                                <span class="icon">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                        </div>

                        <div class="field">
                            <label for="" class="label"> Password </label>

                            <div class="control has-icons-left">
                                <input type="password" name="password" class="input" id="" placeholder="*******">
                                <span class="icon">
                                    <i class="fa fa-lock"></i>
                                </span>
                            </div>
                        </div>

                        <div class="field">
                            <label for=""  >
                                <div class="control">
                                    <input type="checkbox" name="" id="">
                                    Remember Me
                                </div>
                            </label>
                        </div>

                        <div class="control">
                            <button type="submit" class="button is-success is-fullwidth"> Login </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>