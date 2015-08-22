<!-- include summernote css/js-->
<link href="<?=$site['r']?>/views/resource/summernote/summernote.css" rel="stylesheet">
<script src="<?=$site['r']?>/views/resource/summernote/summernote.js"></script>
<script src="<?=$site['r']?>/views/resource/summernote/lang/summernote-ko-KR.js"></script>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<style>
.note-editor .col {
    border:1px dashed #aaa;
}
</style>

<form class="form-horizontal">
<div id="summernote"></div>
<input type="hidden" name="bbscontent" value=""/>

<!-- -->
<div class="panel panel-default">
    <div class="panel-body">
        <div class="form-group">
            <label class="col-sm-2 control-label" for="exampleInputEmail1">조회권한</label>
            <div class="col-sm-10">
                <select class="form-control">
                    <option>등급 선택</option>
                    <option>등급 1</option>
                    <option>등급 2</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="exampleInputEmail1">지도 API</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="지도 API">
                <p class="help-block"><a href="//dna.daum.net/examples/maps/MissA/step1.php" target="_blank">다음도구</a>를 이용하여 해당 코드를 입력하세요.</p>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">첨부파일</label>
            <div class="col-sm-10">
                <input type="file" id="exampleInputFile">
                <ul class="list-unstyled">
                    <li>file-name.xls <span class="glyphicon glyphicon-remove"></span></li>
                    <li>file-name.xls <span class="glyphicon glyphicon-remove"></span></li>
                </ul>
            </div>
        </div>

    </div>
</div>
</form>




<script type="text/javascript">
$(document).ready(function() {
    var $summernote = $('#summernote');
  $summernote.summernote({
      lang: 'ko-KR',
      height:300,
      toolbar:[
          ['style', ['bold', 'italic', 'underline', 'clear']],
          ['fontsize', ['fontsize']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['height', ['height']],
          ['insert', ['table', 'link','picture','video']],
          ['misc', ['fullscreen', 'codeview','undo','redo','help']]
      ],
      onBlur: function(e) {
          console.log($summernote.code());
      }
//      onImageUpload: function(files) {
//          $summernote.summernote("insertImage", '/minCMS/pages/bg_iphone.png', 'aaaa'); 
//      }
  });
});

</script>
