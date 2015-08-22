<style>
    html,
    body {
        height: 100%;
    }
    
    #content {
        margin: 0;
        padding-top:25%;
        width: 100%;
        min-height: 100%;
        background-color: #110022;
    }
    
    .panel-default, .panel-default>.panel-heading, .panel-default>.panel-footer {
        background-color:transparent;
        background:url(<?=$site['r']?>/<?=$site['img']?>/rgba-fff5.png);
    }
    @media (max-width: 768px) {
        #content {
            padding-top:30%;
        }
    }
</style>


<div class="container-full">

    <form class="form-horizontal">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default ">
            <div class="panel-heading">
                <h2 class="panel-title">로 그 인</h2>
            </div>
            <div class="panel-body">
  <div class="form-group">
    <label class="col-sm-2 control-label" for="formGroupInputLarge">ID</label>
    <div class="col-sm-10">
      <input class="form-control" type="text" id="formGroupInputLarge" placeholder="아이디 또는 이메일">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label" for="formGroupInputLarge">PWD</label>
    <div class="col-sm-10">
      <input class="form-control" type="text" id="formGroupInputLarge" placeholder="비밀번호">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      <label class="checkbox-inline"><input type="checkbox" value="1"> 비밀번호 저장</label>
    </div>
  </div>
            </div>
            <div class="panel-footer">
                <div class="text-left">
                    
                </div>
                <div class="text-right">
<!--                    <button type="submit" class="btn btn-primary" href="<?=$site['r']?>/pages/main">로그인</button>-->
                    <a class="btn btn-primary" href="<?=$site['r']?>/pages/main">로그인</a>
                </div>
            </div>
        </div>
    </div>
    </form>

</div>
