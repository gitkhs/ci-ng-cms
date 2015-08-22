<form class="form-horizontal">
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row" style="margin-bottom:5px;">
                    <div class="col-sm-2">1차 메뉴</div>
                    <div class="col-sm-10">
                        <div class="btn-group btn-group-sm">
                            <button type="button" class="btn btn-primary active">Left</button>
                            <button type="button" class="btn btn-primary">Center</button>
                            <button type="button" class="btn btn-primary">Right</button>
                            <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span></button>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-bottom:5px;">
                    <div class="col-sm-2">2차 메뉴</div>
                    <div class="col-sm-10">
                        <div class="btn-group btn-group-sm">
                            <button type="button" class="btn btn-info active">Left</button>
                            <button type="button" class="btn btn-info">Center</button>
                            <button type="button" class="btn btn-info">Right</button>
                            <button type="button" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span></button>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-bottom:5px;">
                    <div class="col-sm-2">3차 메뉴</div>
                    <div class="col-sm-10">
                        <div class="btn-group btn-group-sm">
                            <button type="button" class="btn btn-default">Left</button>
                            <button type="button" class="btn btn-default">Center</button>
                            <button type="button" class="btn btn-default">Right</button>
                            <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span></button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
    
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">기본설정</div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">메뉴명</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="">
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-3 control-label">메뉴권한</label>
                    <div class="col-sm-9">
                        <select class="form-control">
                        <option value="">전체조회</option>
                        <option value="">관리자</option>
                        <option>마스터</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">메뉴순서</label>
                    <div class="col-sm-9">
                        <select class="form-control">
                        <option value="">최상위</option>
                        <option value="">메뉴1</option>
                        <option>메뉴2</option>
                        </select>
                        <p class="help-block">선택한 메뉴 뒤로 옮깁니다.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">모듈 설정</div>
            <div class="panel-body">
                <div class="form-group">
                    <div class="col-sm-3">
                        <label class="radio-inline"><input type="radio" name="mod" value="1" checked="checked"> 기본페이지</label>
                    </div>
                    <div class="col-sm-9">
                        <p class="help-block">기본 페이지로 설정합니다.</p>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-3">
                        <label class="radio-inline"><input type="radio" name="mod" value="1"> 게시판</label>
                    </div>
                    <div class="col-sm-9">
                        <select class="form-control">
                        <option value="">게시판1</option>
                        <option value="">게시판2</option>
                        <option>게시판3</option>
                        </select>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
    
</form>