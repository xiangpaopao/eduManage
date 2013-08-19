<?php require_once ('header.php'); ?>
<div class="container">
  <div id="guideBar" class="flow-steps-order">
    <ol class="num5">
      <li class="done"> <span class="state">申请入学</span> </li>
      <li class="done"> <span class="state">基本条件</span> </li>
      <li class="done"> <span class="state">就业条件</span> </li>
      <li class="done"> <span class="state">加分条件</span> </li>
      <li class="done current last"> <span class="state">申请结果</span> </li>
    </ol>
  </div>
  <?php if($_GET['act'] == 'suc'){?>
  <div id="resultBody">
    <form class="form-horizontal">
      <fieldset>
        <div id="legend" class="">
          <legend class="">入学分析申请结果</legend>
        </div>
        <h1>您的积分：<span>320</span></h1>
        <h3><img src="img/ico_suc.png" width="48"  alt=""/>&nbsp;恭喜，您已通过审核</h3>
      </fieldset>
    </form>
  </div>
  <?php }else if($_GET['act'] == 'failure'){ ?>
  <div id="resultBody">
    <form class="form-horizontal">
      <fieldset>
        <div id="legend" class="">
          <legend class="">入学分析申请结果</legend>
        </div>
        <h1>您的积分：<span>320</span></h1>
        <h3><img src="img/ico_failure.png" width="48"  alt=""/>&nbsp;很遗憾，您未通过审核</h3>
        </fieldset>
    </form>
  </div>
  <?php }else{ ?>
  <div id="resultBody">
    <form class="form-horizontal">
      <fieldset>
        <div id="legend" class="">
          <legend class="">入学分析申请结果</legend>
        </div>
        <h1>您的积分：<span>320</span></h1>
        <h4>我们会于xxxx年x月x号公布最终结果，您到时可登陆本系统查询申请结果。<br />
          感谢您对奉贤区教育事业的支持！</h4>
      </fieldset>
    </form>
  </div>
  <?php } ?>
</div>
<?php require_once ('footer.php'); ?>