<?php require_once ('header.php'); ?>
<div id="indexBody">
<div class="container">
      <div id="indexBox">
        <p>我是首次使用系统, 想要申请入学</p>
        <p><a href="guide.php" class="btn btn-warning btn-large">申请入学 »</a></p>
        <p>我已经申请过入学,想要查看申请结果</p>
        <p><a href="#loginModal" role="button" class="btn btn-warning btn-large" data-toggle="modal">查询结果 »</a>
        
        <div id="loginModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">查询结果</h3>
          </div>
          <div class="modal-body">
            <form class="form-signin">
              <fieldset>
              <h5>用户名为身份证号码，初始密码为密码为您身份证后6位 </h5>
                
                <div class="control-group">
                  <label class="control-label" for="input01">用户名</label>
                  <div class="controls">
                    <input type="text" class="input-xlarge" placeholder="用户名" >
                  </div>
                  <label class="control-label" for="input02">密码</label>
                  <div class="controls">
                    <input type="text" class="input-xlarge" placeholder="密码" >
                  </div>
                  
              </fieldset>
            </form>
          </div>
          <div class="modal-footer"> 
            <a class="btn btn-success" href="result.php?act=suc">查询</a>
          </div>
        </div>
        </p>
      </div>
     
    </div>
    </div>
    
<?php require_once ('footer.php'); ?>