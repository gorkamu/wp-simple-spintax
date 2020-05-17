<div class="container" style="margin-top: 2%;">
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="<?php echo esc_url( plugins_url( '../assets/images/tornado.png', __FILE__ ) ); ?>" alt="" width="72" height="72">
        <h2>Simple Spintax</h2>
        <p class="lead">A simple plugin to spin your <i>{articles|pages}</i>!</p>
    </div>    
    <div class="row">
        <div class="col-md-10 order-md-1 col-md-offset-1">
            <form class="needs-validation" novalidate="" _lpchecked="1">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="kw">Keywords</label>
                        <p style="color:#939393;">Each keyword has to be separated by a comma</p>
                        <textarea class="form-control" id="kw"></textarea>
                    </div>
                    <div class="col-md-12 mb-3" style="margin-top: 2%;">
                        <label for="title">Title</label>
                        <p style="color:#939393;">You can use spintax syntax, use %KW% in the text to replace each keyword</p>
                        <textarea class="form-control" id="title" name="title"></textarea>
                    </div>
                    <div class="col-md-12 mb-3" style="margin-top: 2%;">
                        <label for="spin-template">Body</label>
                        <p style="color:#939393;">You can use spintax syntax, use %KW% in the text to replace each keyword</p>
                        <textarea class="form-control" id="spin-template" name="spin-template" rows="15"></textarea>
                    </div>      
                    <div class="col-md-12 mb-3" style="margin-top: 2%;">
                        <label for="excerpt">Excerpt</label>
                        <p style="color:#939393;">You can use spintax syntax, use %KW% in the text to replace each keyword</p>
                        <textarea class="form-control" id="excerpt" name="excerpt" style="margin-top:0%;"></textarea>
                    </div>                    
                    <div class="col-md-12 mb-3" style="margin-top: 2%;">
                        <label for="excerpt" style="margin-right: 1%;">Type of content:</label>
                        <div class="radio-inline">
                          <input class="form-check-input" type="radio" name="make" id="make_posts" value="posts" checked style="margin-left: -14px;">
                          <label class="form-check-label" for="gridRadios1">Post</label>
                        </div>
                        <div class="radio-inline">
                          <input class="form-check-input" type="radio" name="make" id="make_pages" value="pages" style="margin-left: -14px;">
                          <label class="form-check-label" for="gridRadios2">Pages</label>
                        </div> 
                    </div>
                    <div class="col-md-12 mb-3" style="margin-top: 2%;">
                        <label for="capitalize_kw">Capitalize keyword</label>
                        <input type="checkbox" id="capitalize_kw" value="capitalize" style="margin-left: 1%; margin-bottom: 1%;">      
                    </div>
                    <div class="col-md-12 mb-3" style="margin-top: 2%;">
                        <label for="kwasslug">Use keyword as slug</label>
                        <input type="checkbox" id="kwasslug" value="kwasslug" style="margin-left: 1%; margin-bottom: 1%;">      
                    </div>
                    <div class="col-md-12 mb-3" style="margin-top: 2%;">
                        <label for="ctrsymbol">CTR Symbol</label>
                        <input class="form-control" type="text" id="ctrsymbol" name="ctrsymbol" style="border: 1px solid #ccc;">
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
            <li class="list-inline-item"><a href="https://gitlab.com/gorkamu/wp-simple-spintax" target="_blank">Info</a></li>
            <li class="list-inline-item"><a href="https://gitlab.com/users/gorkamu/projects" target="_blank">Labs</a></li>
            <li class="list-inline-item"><a href="http://gorkamu.com/" target="_blank">Author</a></li>
        </ul>
    </footer>
</div>
<style>
    .simple-loader {
        border: 16px solid #f3f3f3;
        border-top: 16px solid #3498db;
        border-radius: 50%;
        width: 12px;
        height: 12px;
        animation: spin 2s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>