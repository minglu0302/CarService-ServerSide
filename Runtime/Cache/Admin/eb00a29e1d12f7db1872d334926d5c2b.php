<?php if (!defined('THINK_PATH')) exit();?><div class="page">
    <div class="pageContent">

        <form method="post" action="/index.php/Admin/Answer/replyToAction/navTabId/container.index/callbackType/closeCurrent" class="pageForm required-validate" onsubmit="return validateCallback(this, dialogAjaxDone)">
            <div class="pageFormContent" layoutH="58">
                <div class="unit">
                	<input type="hidden" name="issue_id" value="<?php echo ($id); ?>"/>
                	<input type="hidden" name="pid" value="<?php echo ($pid); ?>"/>
                 	<textarea class="form-control" rows="4" name="context" placeholder="请填写回答" style="width:99%; height:180px;"></textarea>
                </div> 
                <div class="unit">
                    <label>添加时间：</label>
                    <input type="text" class="date "  name="time" dateFmt="yyyy-MM-dd HH:mm:ss" />（置空为当前时间）
                </div>
                <?php if($note): ?><div class="unit" style="color:red">
                   		注意：当前的模拟用户和提问者相同
                </div><?php endif; ?>
            </div>

            <div class="formBar">
                <ul>
                    <li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
                    <li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
                </ul>
            </div>
        </form>

    </div>
</div>