<div class="offcanvas offcanvas-end custom-box" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Compose Mail Here</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

        <main>
            <form method="post" action="<?= url('/')?>/send">
                @csrf
                <div class="form-row mb-3">
                    <label for="to" class="col-2 col-sm-1 col-form-label">To:</label>
                    <div class="col-10 col-sm-11">
                        <input type="email" name="to" class="form-control" id="to" placeholder="Type email">
                    </div>
                </div>
                <div class="form-row mb-3">
                    <label for="cc" class="col-2 col-sm-1 col-form-label">Subject:</label>
                    <div class="col-10 col-sm-11">
                        <input type="text" name="subject" class="form-control" id="cc" placeholder="Type subject">
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-11 ml-auto">
                        <div class="toolbar" role="toolbar">
                            <div class="btn-group">
                                <button type="button" class="btn btn-light">
                                    <span class="fa fa-bold"></span>
                                </button>
                                <button type="button" class="btn btn-light">
                                    <span class="fa fa-italic"></span>
                                </button>
                                <button type="button" class="btn btn-light">
                                    <span class="fa fa-underline"></span>
                                </button>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-light">
                                    <span class="fa fa-align-left"></span>
                                </button>
                                <button type="button" class="btn btn-light">
                                    <span class="fa fa-align-right"></span>
                                </button>
                                <button type="button" class="btn btn-light">
                                    <span class="fa fa-align-center"></span>
                                </button>
                                <button type="button" class="btn btn-light">
                                    <span class="fa fa-align-justify"></span>
                                </button>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-light">
                                    <span class="fa fa-indent"></span>
                                </button>
                                <button type="button" class="btn btn-light">
                                    <span class="fa fa-outdent"></span>
                                </button>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-light">
                                    <span class="fa fa-list-ul"></span>
                                </button>
                                <button type="button" class="btn btn-light">
                                    <span class="fa fa-list-ol"></span>
                                </button>
                            </div>
                            <button type="button" class="btn btn-light">
                                <span class="fa fa-trash-o"></span>
                            </button>
                            <button type="button" class="btn btn-light">
                                <span class="fa fa-paperclip"></span>
                            </button>
                            <div class="btn-group">
                                <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">
                                    <span class="fa fa-tags"></span>
                                    <span class="caret"></span>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">add label <span class="badge badge-danger">
                                            Home</span></a>
                                    <a class="dropdown-item" href="#">add label <span class="badge badge-info">
                                            Job</span></a>
                                    <a class="dropdown-item" href="#">add label <span class="badge badge-success">
                                            Clients</span></a>
                                    <a class="dropdown-item" href="#">add label <span class="badge badge-warning">
                                            News</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-4">
                            <textarea class="form-control" id="message" name="emailText" rows="12"
                                placeholder="Click here to reply"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send" class="btn btn-success">

                        </div>
                    </div>
            </form>
    </div>
    </main>

</div>
</div>

<style>
.custom-box {
    width: 620px;
}
</style>