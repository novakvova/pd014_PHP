<div class="modal" id="cropperModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Редагування фото</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-9">
                        <div>
                            <img src="images/select.png"
                                 id="imgCropper"
                                 width="100%"
                                 alt="Фото для обрізки" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div id="imgPrev"
                             class="preview">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnLeft" class="btn btn-success">Left</button>
                <button type="button" id="btnRight" class="btn btn-success">Right</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрити</button>
                <button type="button" id="btnAdd" class="btn btn-primary">Обрізати</button>
            </div>
        </div>
    </div>
</div>