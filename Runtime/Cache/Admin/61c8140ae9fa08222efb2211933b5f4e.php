<?php if (!defined('THINK_PATH')) exit();?><form id="pagerForm" action="/index.php/Admin/Cart" method="post">
    <input type="hidden" name="pageNum" value="<?php echo ((isset($_REQUEST['pageNum']) && ($_REQUEST['pageNum'] !== ""))?($_REQUEST['pageNum']):1); ?>"/>
    <input type="hidden" name="numPerPage" value="<?php echo ($numPerPage); ?>"/>
    <input type="hidden" name="_order" value="<?php echo ($_REQUEST['_order']); ?>"/>
    <input type="hidden" name="_sort" value="<?php echo ((isset($_REQUEST['_sort']) && ($_REQUEST['_sort'] !== ""))?($_REQUEST['_sort']):'1'); ?>"/>
    <input type="hidden" name="listRows" value="<?php echo ($_REQUEST['listRows']); ?>"/>
    <?php if(is_array($map)): $i = 0; $__LIST__ = $map;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($i % 2 );++$i;?><input type="hidden" name="<?php echo ($key); ?>" value="<?php echo ($_REQUEST[$key]); ?>"/><?php endforeach; endif; else: echo "" ;endif; ?>
</form>


<div class="page">
    <div class="pageHeader">
        <form onsubmit="return navTabSearch(this);" action="/index.php/Admin/Cart" method="post">
            <div class="searchBar">
                <ul class="searchContent">
                    <li>
                        <label>用户ID：</label>
                        <input type="text" name="member_id" value="<?php echo ($_REQUEST["member_id"]); ?>" class="medium" >
                    </li>
                 
                </ul>
                <div class="subBar">
                    <ul>
                       <li><div class="buttonActive"><div class="buttonContent"><button type="submit">查询</button></div></div></li>
 				
                    </ul>
                </div>
            </div>
        </form>
    </div>

    <div class="pageContent">
        <div class="panelBar">
            <ul class="toolBar">
               <!--  <li><a class="edit" href="/index.php/Admin/Cart/edit/id/{sid_node}" target="dialog" mask="true" warn="请选择节点" width="700" height="400"><span>查看</span></a></li> -->
            </ul>
        </div>
        <table class="list" width="100%" layoutH="116">
            <thead>
                <tr>
                     <th width="45">ID</th>
                    <th width="100">用户</th>
                    <th width="250">车型</th>
                    <th width="150">新车上路时间</th>
                    <th width="80">行驶公里数（KM）</th>
                    <th width="80">默认车辆（1：是）</th>
                    <th width="80">车牌号</th>
                    <th width="130">发动机号</th>
                    <th width="130">车架号号</th>
                </tr>
            </thead>
            <tbody>


            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr target="sid_node" rel="<?php echo ($vo['id']); ?>">
                    <td><?php echo ($vo['id']); ?></td>
                    <td><?php echo (getmembername($vo['member_id'])); ?></td>
                    <td><?php echo ($vo['cart_model']); ?></td>
                    <td><?php echo (todate($vo['carttime'])); ?></td>
                     <td><?php echo ($vo['km']); ?></td>
                    <td><?php echo ($vo['default_cart']); ?></td>
                    <td><?php echo ($vo['car_number']); ?></td>
                    <td><?php echo ($vo['engine_number']); ?></td>
                    <td><?php echo ($vo['frame_number']); ?></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>

            </tbody>
        </table>
        <div class="panelBar">
            <div class="pages">
                <span>显示</span>
                <select class="combox" name="numPerPage" onchange="navTabPageBreak({numPerPage: this.value})">
                    <option value="5" <?php if(($numPerPage) == "5"): ?>selected=selected<?php endif; ?>>5</option>
                    <option value="10" <?php if(($numPerPage) == "10"): ?>selected=selected<?php endif; ?>>10</option>
                    <option value="15" <?php if(($numPerPage) == "15"): ?>selected=selected<?php endif; ?>>15</option>
                    <option value="20" <?php if(($numPerPage) == "20"): ?>selected=selected<?php endif; ?>>20</option>
                </select>
                <span>共<?php echo ($totalCount); ?>条</span>

            </div>
            <div class="pagination" targetType="navTab" totalCount="<?php echo ($totalCount); ?>" numPerPage="<?php echo ($numPerPage); ?>" pageNumShown="10" currentPage="<?php echo ($currentPage); ?>"></div>
        </div>
    </div>
</div>