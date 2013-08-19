<?php require_once ('header.php'); ?>
<div class="container">
  <form class="form-horizontal">
    <fieldset>
      <div id="legend" class="">
        <legend class="">申请流程</legend>
      </div>
      <div id="guideBar" class="flowstep">
        <ol class="flowstep-5">
          <li class="step-first">
            <div class="step-cur">
              <div class="step-name">申请入学</div>
              <div class="step-no">1</div>
            </div>
          </li>
          <li>
            <div class="">
              <div class="step-name">基本条件</div>
              <div class="step-no">2</div>
            </div>
          </li>
          <li>
            <div class="">
              <div class="step-name">就业条件</div>
              <div class="step-no">3</div>
            </div>
          </li>
          <li>
            <div class="">
              <div class="step-name">加分条件</div>
              <div class="step-no">4</div>
            </div>
          </li>
          <li class="step-last">
            <div class="">
              <div class="step-name">申请结果</div>
              <div class="step-no">5</div>
            </div>
          </li>
        </ol>
      </div>
      
      <!-- 申请入学 -->
      <div id="appbox1">
        <h4><b>1</b>申请人</h4>
        <div class="control-group">
          <label class="control-label" for="input01">申请人姓名</label>
          <div class="controls">
            <input type="text" placeholder="请输入申请人姓名" class="input-xlarge">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">家庭关系</label>
          <div class="controls">
            <label class="radio inline">
              <input type="radio" value="1" checked="checked" name="relation">
              父亲 </label>
            <label class="radio inline">
              <input type="radio" value="2" name="relation">
              母亲 </label>
          </div>
        </div>
        <h4><b>2</b>户籍信息</h4>
        <ul id="myTab" class="nav nav-pills">
          <li class="active"><a href="#census-local" data-toggle="tab">本市</a></li>
          <li class=""><a href="#census-nolocal" data-toggle="tab">非本市</a></li>
          <li class=""><a href="#census-taiwan" data-toggle="tab">台湾</a></li>
          <li class=""><a href="#census-hangkong" data-toggle="tab">香港</a></li>
          <li class=""><a href="#census-aomeng" data-toggle="tab">澳门</a></li>
        </ul>
        <div id="myTabContent" class="tab-content">
          <div class="tab-pane fade active in" id="census-local">
            <div class="control-group">
              <label class="control-label" for="input01">身份证</label>
              <div class="controls">
                <input type="text" placeholder="请输入身份证号码" class="input-xlarge">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="input01">户口薄</label>
              <div class="controls">
                <input type="text" placeholder="请输入户口薄号码" class="input-xlarge">
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="census-nolocal">
            <div class="control-group">
              <label class="control-label" for="input01">身份证</label>
              <div class="controls">
                <input type="text" placeholder="请输入身份证号码" class="input-xlarge">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="input01">户口薄</label>
              <div class="controls">
                <input type="text" placeholder="请输入户口薄号码" class="input-xlarge">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="input01">居住证</label>
              <div class="controls">
                <input type="text" placeholder="请输入居住证号码" class="input-xlarge">
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="census-taiwan">
            <div class="control-group">
              <label class="control-label" for="input01">台湾居民来往大陆通行证</label>
              <div class="controls">
                <input type="text" placeholder="请输入台湾居民来往大陆通行证号码" class="input-xlarge">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="input01">居留许可证明</label>
              <div class="controls">
                <input type="text" placeholder="请输入居留许可证明号码" class="input-xlarge">
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="census-hangkong">
            <div class="control-group">
              <label class="control-label" for="input01">香港特区身份证明</label>
              <div class="controls">
                <input type="text" placeholder="请输入香港特区身份证明号码" class="input-xlarge">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="input01">居留许可证明</label>
              <div class="controls">
                <input type="text" placeholder="请输入居留许可证明号码" class="input-xlarge">
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="census-aomeng">
            <div class="control-group">
              <label class="control-label" for="input01">澳门特区身份证明</label>
              <div class="controls">
                <input type="text" placeholder="请输入澳门特区身份证明号码" class="input-xlarge">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="input01">居留许可证明</label>
              <div class="controls">
                <input type="text" placeholder="请输入居留许可证明号码" class="input-xlarge">
              </div>
            </div>
          </div>
        </div>
        <h4><b>3</b>联系方式</h4>
        <div class="control-group">
          <label class="control-label" for="input01">有效邮箱</label>
          <div class="controls">
            <input type="text" placeholder="请输入有效邮箱" class="input-xlarge">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="input01">联系电话</label>
          <div class="controls">
            <input type="text" placeholder="请输入联系电话" class="input-xlarge">
          </div>
        </div>
        <h4><b>4</b>子女信息</h4>
        <div class="control-group">
          <label class="control-label" for="input01">子女姓名</label>
          <div class="controls">
            <input type="text" placeholder="请输入子女姓名" class="input-xlarge">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="input01">出生年月</label>
          <div class="controls">
            <input type="text" placeholder="请选择出生年月"  name="btime" id="btime" class="input-xlarge datetimepicker">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="input01">性别</label>
          <div class="controls">
            <label class="radio inline">
              <input type="radio" value="1" checked="checked" name="sex">
              男 </label>
            <label class="radio inline">
              <input type="radio" value="2" name="sex">
              女 </label>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="input01">是否独生子女</label>
          <div class="controls">
            <label class="radio inline">
              <input type="radio" class="controlRadio" value="1" checked="checked" name="ifalone">
              是 </label>
            <label class="radio inline">
              <input type="radio" class="controlRadio" value="2" name="ifalone">
              否 </label>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="input01">独生子女证号</label>
          <div class="controls">
            <input type="text" placeholder="独生子女证号" class="input-xlarge">
          </div>
        </div>
        <div class="form-actions">
          <div id="setp1-next" class="btn btn-warning btn-large">开始申请</div>
        </div>
      </div>
      
      <!-- 基本条件 -->
      <div id="appbox2" style="display:none">
      <div class="control-group">
        <label class="control-label">居住证</label>
        <div class="controls">
          <input type="text" placeholder="请输入居住证号码" class="input-xlarge">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="input01">产权房</label>
        <div class="controls">
          <select id="house" class="input-xlarge">
            <option value="0">有产权房</option>
            <option value="1">无产权房但有合法租赁协议</option>
            <option value="2">无产权房且无合法租赁协议</option>
          </select>
        </div>
      </div>
      <div id="control-house-cq" class="control-group">
        <label class="control-label" for="input01">产权证</label>
        <div class="controls">
          <input type="text" placeholder="请输入产权证号码" class="input-xlarge">
        </div>
      </div>
      <div id="control-house-ht" class="control-group" style="display:none">
        <label class="control-label" for="input01">租赁协议</label>
        <div class="controls">
          <input type="text" placeholder="输入租赁协议号码" class="input-xlarge">
        </div>
      </div>
      <div class="form-actions">
        <div id="setp2-prev" class="btn btn-large">上一步</div>
        <div id="setp2-next" class="btn btn-warning btn-large">下一步</div>
      </div>
</div>

<!-- 就业条件 -->
<div id="appbox3" style="display:none">
    <div class="control-group">
      <label class="control-label" for="input01">就业情况</label>
      <div class="controls">
        <select id="work" class="input-xlarge">
          <option value="0">有社保缴费记录</option>
          <option value="1">无社保缴费记录但办理了灵活就业登记</option>
          <option value="2">未办理灵活就业登记但在奉贤连续工作满一年</option>
          <option value="3">未办理灵活就业登记且在奉贤连续工作未满一年</option>
        </select>
      </div>
    </div>
    <div id="control-work-1" class="control-group">
      <label class="control-label" for="input01">社保账号</label>
      <div class="controls">
        <input type="text" placeholder="请输入社保账号" class="input-xlarge">
      </div>
    </div>
    <div id="control-work-2" class="control-group" style="display:none">
      <label class="control-label" for="input01">灵活就业登记号码</label>
      <div class="controls">
        <input type="text" placeholder="请输入灵活就业登记号码" class="input-xlarge">
      </div>
    </div>
    <div id="control-work-3" class="control-group" style="display:none">
      <label class="control-label" for="input01">证明号码</label>
      <div class="controls">
        <input type="text" placeholder="输入证明号码" class="input-xlarge">
      </div>
    </div>
    <div class="form-actions">
      <div id="setp3-prev" class="btn btn-large">上一步</div>
      <div id="setp3-next" class="btn btn-warning btn-large">下一步</div>
    </div>
    </div>
    
    <!-- 加分条件 -->
    <div id="appbox4" style="display:none">
    <div class="control-group">
      <label class="control-label">学历或者职称</label>
      <div class="controls">
        <select class="input-xlarge">
          <option value="0">大学本科及以上学历</option>
          <option value="1">高级技术职称</option>
          <option value="2">大学专科学历</option>
          <option value="3">中级技术职称</option>
          <option value="4">初级技术职称</option>
        </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="input01">学历证明</label>
      <div class="controls">
        <input type="text" placeholder="请输入学历证明编号" class="input-xlarge">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label">表彰奖励</label>
      <div class="controls">
        <select id="award" class="input-xlarge">
          <option value="0">暂无表彰奖励</option>
          <option value="1">国家表彰奖励</option>
          <option value="2">上海市表彰奖励</option>
          <option value="3">奉贤区区级表彰</option>
          <option value="4">区内相关部门表彰</option>
        </select>
      </div>
    </div>
    <div id="control-award-id" class="control-group" style="display:none">
      <label class="control-label" for="input01">奖励编号</label>
      <div class="controls">
        <input type="text" placeholder="请输入奖励编号" class="input-xlarge">
      </div>
    </div>
    <div id="control-award-pic" class="control-group" style="display:none">
      <label class="control-label">上传证书图片</label>
      
      <!-- File Upload -->
      <div class="controls">
        <input class="input-file" id="fileInput" type="file">
      </div>
    </div>
    <div class="form-actions">
      <div id="setp4-prev" class="btn btn-large">上一步</div>
      <a id="setp4-next" href="result.php" class="btn btn-warning btn-large">提交申请</a> </div>
  </fieldset>
</form>
</div>
</div>
<script>
$(document).ready(function(e) {
	var $allBox = $('#appbox1,#appbox2,#appbox3,#appbox4');
	var $setp = $('#guideBar ol li').children('div');
	
	$('#setp2-prev').click(function(){
			$allBox.hide();
			$setp.eq(0).removeClass('step-done');
			$setp.eq(0).addClass('step-cur');
			$setp.eq(1).removeClass('step-cur');
			$('#appbox1').show();
	});
	$('#setp1-next,#setp3-prev').click(function(){
			$allBox.hide();
			$setp.eq(0).removeClass('step-cur');
			$setp.eq(0).addClass('step-done');
			$setp.eq(1).addClass('step-cur');
			$setp.eq(1).removeClass('step-done');
			$setp.eq(2).removeClass('step-cur');
			$('#appbox2').show();
	});
	$('#setp2-next,#setp4-prev').click(function(){
			$allBox.hide();
			$setp.eq(1).removeClass('step-cur');
			$setp.eq(1).addClass('step-done');
			$setp.eq(2).addClass('step-cur');
			$setp.eq(2).removeClass('step-done');
			$setp.eq(3).removeClass('step-cur');
			$('#appbox3').show();
	});
	$('#setp3-next').click(function(){
			$allBox.hide();
			$setp.eq(2).removeClass('step-cur');
			$setp.eq(2).addClass('step-done');
			$setp.eq(3).addClass('step-cur');
			$setp.eq(3).removeClass('step-done');
			$setp.eq(4).removeClass('step-cur');
			$('#appbox4').show();
	});
	
	
	$('.controlRadio').click(function(){
		if($(this).val() == 1){
			$(this).parent().parent().parent().next().show();
		}else if($(this).val() == 2){
			$(this).parent().parent().parent().next().hide();
		}
	});
	
	$('#award').change(function(){
		if( $('#award').val() == 0){
			$('#control-award-pic').hide();
			$('#control-award-id').hide();
		}else if($('#award').val() == 4){
			$('#control-award-id').hide();
			$('#control-award-pic').show();
		}else{
			$('#control-award-pic').hide();
			$('#control-award-id').show();
		}
	});
	
	$('#house').change(function(){
		if( $('#house').val() == 0){
			$('#control-house-ht').hide();
			$('#control-house-cq').show();
		}else if($('#house').val() == 1){
			$('#control-house-ht').show();
			$('#control-house-cq').hide();
		}else{
			$('#control-house-ht').hide();
			$('#control-house-cq').hide();
		}
	});
	
	$('#work').change(function(){
		if( $('#work').val() == 0){
			$('#control-work-1').show();
			$('#control-work-2').hide();
			$('#control-work-3').hide();
		}else if($('#work').val() == 1){
			$('#control-work-1').hide();
			$('#control-work-2').show();
			$('#control-work-3').hide();
		}else if($('#work').val() == 2){
			$('#control-work-1').hide();
			$('#control-work-2').hide();
			$('#control-work-3').show();
		}else{
			$('#control-work-1').hide();
			$('#control-work-2').hide();
			$('#control-work-3').hide();
		}
	});
	
	$('.datetimepicker').datetimepicker({
      format: 'yyyy-mm',
    language:  'zh-CN',
    minView: 3,
      autoclose: 1,
      todayHighlight: 1,
      startView: 4,
      forceParse: 0,
    showMeridian: 1
});
});
</script>
<?php require_once ('footer.php'); ?>