<?php require_once ('header.php'); ?>
<div class="container">
<form class="form-horizontal">
  <fieldset>
    <div id="legend" class="">
      <legend class="">申请结果</legend>
    </div>
    <div id="guideBar" class="flowstep">
      <ol class="flowstep-5">
        <li class="step-first">
          <div class="step-done">
            <div class="step-name">申请入学</div>
            <div class="step-no">1</div>
          </div>
        </li>
        <li>
          <div class="step-done">
            <div class="step-name">基本条件</div>
            <div class="step-no">2</div>
          </div>
        </li>
        <li>
          <div class="step-done">
            <div class="step-name">就业条件</div>
            <div class="step-no">3</div>
          </div>
        </li>
        <li>
          <div class="step-done">
            <div class="step-name">加分条件</div>
            <div class="step-no">4</div>
          </div>
        </li>
        <li class="step-last">
          <div class="step-cur">
            <div class="step-name">申请结果</div>
            <div class="step-no">5</div>
          </div>
        </li>
      </ol>
    </div>
    <div id="resultBody">
      <?php if($_GET['act'] == 'suc'){?>
      <h1>您的积分：<span>320</span></h1>
      <h3><img src="img/ico_suc.png" width="48"  alt=""/>&nbsp;恭喜，您已通过审核</h3>
      <?php }else if($_GET['act'] == 'failure'){ ?>
      <h1>您的积分：<span>320</span></h1>
      <h3><img src="img/ico_failure.png" width="48"  alt=""/>&nbsp;很遗憾，您未通过审核</h3>
    </div>
    <?php }else{ ?>
    <h1>您的积分：<span>320</span></h1>
    <h4>我们会于xxxx年x月x号公布最终结果，您到时可登陆本系统查询申请结果。<br />
      感谢您对奉贤区教育事业的支持！</h4>
    <?php } ?>
    </div>
  </fieldset>
</form>
</div>
<?php require_once ('footer.php'); ?>