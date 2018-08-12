<div class="modal fade" id="addnews" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close"
                        data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h3 class="modal-title" id="myModalLabel">
                    Добавить запись
                </h3>
            </div>

            <div class="modal-body">

                <form class="form-horizontal" role="form" enctype="multipart/form-data">
                    <input type="hidden" name="new" value="1" />
                    <div class="form-group">
                        <label  class="col-sm-2 control-label"
                                for="postTitle">Название</label>
                        <div class="col-sm-10">
                            <input required="required" type="text" class="form-control"
                                   id="postTitle" name="postTitle" placeholder="Название"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"
                               for="postImage" >Картинка</label>
                        <div class="col-sm-10">
                            <input type="file" accept="image/*" name="postImage" id="postImage" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"
                               for="postDesc" >Вступление</label>
                        <div class="col-sm-10">
                            <textarea required="required" name="postDesc" class="form-control" placeholder="Вступление"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"
                               for="postCont" >Текст</label>
                        <div class="col-sm-10">
                            <textarea required="required" name="postCont" class="form-control" placeholder="Текст записи"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-success">Добавить</button>
                        </div>
                    </div>
                </form>

            </div>

            <!-- Modal Footer -->
        </div>
    </div>
</div>

<div class="modal fade" id="editnews" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close"
                        data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h3 class="modal-title" id="myModalLabel1">
                    Редактировать запись
                </h3>
            </div>

            <div class="modal-body">
                <form class="form-horizontal" role="form" enctype="multipart/form-data">
                    <input name="postID" type="hidden" />
                    <input type="hidden" name="editpost" value="1" />
                    <div class="form-group">
                        <label  class="col-sm-2 control-label"
                                for="postTitle">Название</label>
                        <div class="col-sm-10">
                            <input required="required" type="text" class="form-control"
                                   id="postTitle" name="postTitle" placeholder="Название"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"
                               for="postImage" >Картинка</label>
                        <div class="col-sm-10">
                            <input type="file" accept="image/*" name="postImage" id="postImage" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"
                               for="postDesc" >Вступление</label>
                        <div class="col-sm-10">
                            <textarea required="required" name="postDesc" class="form-control" placeholder="Вступление"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label"
                               for="postCont" >Текст</label>
                        <div class="col-sm-10">
                            <textarea required="required" name="postCont" class="form-control" placeholder="Текст записи"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="reset" value="Reset" class="btn btn-primary">Очистить</button>
                            <button type="submit" class="btn btn-success pull-right">Изменить</button>
                        </div>
                    </div>
                </form>

            </div>

            <!-- Modal Footer -->
        </div>
    </div>
</div>