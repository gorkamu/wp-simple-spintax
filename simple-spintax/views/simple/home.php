<div class="container" style="margin-top: 2%;">
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="<?php echo esc_url( plugins_url( '../assets/images/tornado.png', __FILE__ ) ); ?>" alt="" width="72" height="72">
        <h2>Simple Spintax</h2>
        <p class="lead">A simple plugin to <i>{spin}</i> your articles!</p>
    </div>
    <div class="row">
        <div class="col-md-10 order-md-1 col-md-offset-1">
            <form class="needs-validation" novalidate="" _lpchecked="1">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="original">Original text</label>
                        <textarea class="form-control" id="original" rows="15"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="spinned">Spinned text</label>
                        <textarea class="form-control" id="spinned" rows="15"></textarea>
                    </div>
                </div>
                <br>
                <button class="btn btn-primary btn-lg btn-block btn-go-spin" style="background-color: #00aeff; border-color: #00aeff">Go spin!</button>
            </form>
        </div>
    </div>
    <hr class="mb-4">
    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2018-2019 WP Simple Spintax</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#" target="_blank">Info</a></li>
            <li class="list-inline-item"><a href="https://gitlab.com/users/gorkamu/projects" target="_blank">Labs</a></li>
            <li class="list-inline-item"><a href="http://gorkamu.com/" target="_blank">Author</a></li>
        </ul>
    </footer>
</div>