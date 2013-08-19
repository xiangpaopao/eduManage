<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<script src="../js/jquery-1.8.3.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<title>奉贤区招生入学积分管理系统</title>
</head>
<body>
<div class="header">
  <h3><a href="../index.php" target="new"><img src="../img/logo.png" alt="logo" /></a></h3>
</div>
<div class="container">
  <div id="adminBody">
    <div id="legend" class="">
      <legend class="">后台管理</legend>
    </div>
    <div id="adminTopBar">
    <button class="btn btn-warning" type="button">筛选</button>
    <div class="input-prepend input-append" > 
      <div class="input-append">
        <button id="btnCut" class="btn" type="button">-</button>
        <input class="span1" id="appendedInputButton" type="text" value="60">
        <button id="btnAdd" class="btn" type="button">+</button>
      </div>
       </div>&nbsp;分以上
       <span class="fr">共有<em>200</em>人满足条件</span>
       </div>
       <ul class="breadcrumb">
              <li><input id="allPick" type="checkbox" value="1">全选</li>
            <li><a href="#">批量审核通过</a></li>
            <li><a href="#">批量审核失败</a></li>
            </ul>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th width="25%">编号</th>
          <th width="25%">姓名</th>
          <th width="25%">分数</th>
          <th width="25%">操作</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><input type="checkbox" value="1">001</td>
          <td>王和和</td>
          <td>80</td>
          <td><select name="" class=" input-medium">
              <option value="0">审核中</option>
              <option value="1">审核通过</option>
              <option value="2">审核失败</option>
            </select></td>
        </tr>
        <tr>
          <td><input type="checkbox" value="1">002</td>
          <td>王和和</td>
          <td>80</td>
          <td><select name="" class=" input-medium">
              <option value="0">审核中</option>
              <option value="1">审核通过</option>
              <option value="2">审核失败</option>
            </select></td>
        </tr>
        <tr>
          <td><input type="checkbox" value="1">003</td>
          <td>王和和</td>
          <td>80</td>
          <td><select name="" class=" input-medium">
              <option value="0">审核中</option>
              <option value="1">审核通过</option>
              <option value="2">审核失败</option>
            </select></td>
        </tr>
        <tr>
          <td><input type="checkbox" value="1">004</td>
          <td>王和和</td>
          <td>80</td>
          <td><select name="" class=" input-medium">
              <option value="0">审核中</option>
              <option value="1">审核通过</option>
              <option value="2">审核失败</option>
            </select></td>
        </tr>
        <tr>
          <td><input type="checkbox" value="1">005</td>
          <td>王和和</td>
          <td>80</td>
          <td><select name="" class=" input-medium">
              <option value="0">审核中</option>
              <option value="1">审核通过</option>
              <option value="2">审核失败</option>
            </select></td>
        </tr>
      </tbody>
    </table>
    <div class="pagination">
      <ul>
        <li><a href="#">首页</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">末页</a></li>
      </ul>
    </div>
  </div>
</div>
<div id="footer">
  <p><a href="http://www.miibeian.gov.cn/" target="new">沪ICP备10000000号</a>&nbsp; &nbsp; COPYRIGHT 2013-2013 POWERED BY 奉贤区招生办</p>
  <p>All RIGHTS RESERVED 感谢您对奉贤区教育事业的支持</p>
</div>
<script>
$(document).ready(function(e) {
	
	$('#allPick').click(function(){
		if($('#allPick').is(':checked')){
			$('.table input:checkbox').prop('checked', true);
		}else{
			$('.table input:checkbox').prop('checked', false);
		}
	});
	
	
	$('#btnCut').click(function(){
		var val = parseInt($('#appendedInputButton').val());
		if(val>0){
			val-=10;
			$('#appendedInputButton').val(val);
		}
	});
	$('#btnAdd').click(function(){
		var val = parseInt($('#appendedInputButton').val());
		if(val<1000){
			val+=10;
			$('#appendedInputButton').val(val);
		}
	});

	
	
});
</script>
</body>
</html>
