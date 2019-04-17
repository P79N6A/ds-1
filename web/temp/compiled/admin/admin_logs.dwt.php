<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><a href="javascript:;" ectype="goback" class="s-back"><?php echo $this->_var['lang']['back']; ?></a><?php echo $this->_var['lang']['10_priv_admin']; ?>-<?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['log']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['log']['1']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
            	<!--商品分类列表-->
                <div class="common-head">
                    <div class="refresh ml0">
                    	<div class="refresh_tit" title="<?php echo $this->_var['lang']['refresh_data']; ?>"><i class="icon icon-refresh"></i></div>
                    	<div class="refresh_span"><?php echo $this->_var['lang']['refresh_common']; ?><?php echo $this->_var['record_count']; ?><?php echo $this->_var['lang']['record']; ?></div>
                    </div>
                    
                    <div class="search">
                        <form action="javascript:;" name="searchForm" onSubmit="searchGoodsname(this);">
                        <div class="input">
                            <input type="text" name="keywords" class="text nofocus" placeholder="<?php echo $this->_var['lang']['admin_name']; ?>" autocomplete="off" />
                            <input type="submit" class="btn" name="secrch_btn" ectype="secrch_btn" value="" />
                        </div>
                        </form>
                    </div>
                </div>
                <div class="common-content">
                    <form method="POST" action="admin_logs.php?act=batch_drop" name="listForm">
                	<div class="list-div" id="listDiv">
                        <?php endif; ?>
                    	<table cellpadding="0" cellspacing="0" border="0">
                            <thead>
                            	<tr>
                                    <th width="3%" class="sign"><div class="tDiv"><input type="checkbox" name="all_list" class="checkbox" id="all_list" /><label for="all_list" class="checkbox_stars"></label></div></th>
                                    <th width="5%"><div class="tDiv"><a href="javascript:listTable.sort('log_id');"><?php echo $this->_var['lang']['log_id']; ?></a></div></th>
                                    <th width="15%"><div class="tDiv"><a href="javascript:listTable.sort('user_id');"><?php echo $this->_var['lang']['user_id']; ?></a></div></th>
                                    <th width="15%"><div class="tDiv"><a href="javascript:listTable.sort('log_time');"><?php echo $this->_var['lang']['log_time']; ?></a></div></th>
                                    <th width="15%"><div class="tDiv"><a href="javascript:listTable.sort('ip_address');"><?php echo $this->_var['lang']['ip_address']; ?></a></div></th>
                                    <th width="47%"><div class="tDiv"><?php echo $this->_var['lang']['log_info']; ?></div></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $_from = $this->_var['log_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                            	<tr>
                                    <td class="sign"><div class="tDiv"><input type="checkbox" name="checkboxes[]" value="<?php echo $this->_var['list']['log_id']; ?>" class="checkbox" id="checkbox_<?php echo $this->_var['list']['log_id']; ?>" /><label for="checkbox_<?php echo $this->_var['list']['log_id']; ?>" class="checkbox_stars"></label></div></td>
                                    <td><div class="tDiv"><?php echo htmlspecialchars($this->_var['list']['log_id']); ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['list']['user_name']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['list']['log_time']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['list']['ip_address']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['list']['log_info']; ?></div></td>
                                </tr>
                                <?php endforeach; else: ?>
                                    <tr><td class="no-records" colspan="12"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
                                <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </tbody>
                            <tfoot>
                            	<tr>
                                    <td colspan="12">
                                        <div class="tDiv">
                                        	<div class="tfoot_btninfo">
                                            	<input type="submit" ectype="btnSubmit" value="<?php echo $this->_var['lang']['drop_logs']; ?>" class="btn btn_disabled" disabled />
                                            </div>
                                            <div class="list-page">
                                                <?php echo $this->fetch('library/page.lbi'); ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                        <?php if ($this->_var['full_page']): ?>
                    </div>
                    </form>
                </div>
                <!--商品分类列表end-->
            </div>
            <div class="gj_search">
                <div class="search-gao-list" id="searchBarOpen">
                    <i class="icon icon-zoom-in"></i><?php echo $this->_var['lang']['advanced_handler']; ?>
                </div>
                <div class="search-gao-bar">
                    <div class="handle-btn" id="searchBarClose"><i class="icon icon-zoom-out"></i><?php echo $this->_var['lang']['pack_up']; ?></div>
                    <div class="title"><h3><?php echo $this->_var['lang']['advanced_handler']; ?></h3></div>
                        <div class="searchContent">
                            <div class="layout-box">
                                <form name="theForm" method="POST" action="admin_logs.php">
                                    <dl>
                                        <dt><?php echo $this->_var['lang']['view_ip']; ?></dt>
                                        <dd>
                                            <div id="ip_list" class="select_w145 imitate_select">
                                              <div class="cite"><?php echo $this->_var['lang']['select_ip']; ?></div>
                                              <ul>
                                                <li><a href="javascript:;" data-value="0"><?php echo $this->_var['lang']['select_ip']; ?></a></li>
                                                 <?php $_from = $this->_var['ip_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['k'] => $this->_var['item']):
?>
                                                 <li><a href="javascript:;" data-value="<?php echo $this->_var['k']; ?>"><?php echo $this->_var['item']; ?></a></li>
                                                 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                              </ul>
                                               <input name="ip" type="hidden" value="0" id="ip_list_val">
                                            </div>
                                        </dd>
                                        <input type="submit" class="btn btn30 red_btn mt10" name="tj_search" value="<?php echo $this->_var['lang']['button_inquire']; ?>" />
                                    </dl>
                                </form>
                                <form name="Form2" action="admin_logs.php?act=batch_drop" method="POST">
                                    <dl>
                                        <dt><?php echo $this->_var['lang']['drop_logs']; ?></dt>
                                        <dd>
                                            <div class="select_w145 imitate_select">
                                                <div class="cite"><?php echo $this->_var['lang']['select_date']; ?></div>
                                                <ul>
                                                   <li><a href="javascript:;" data-value="0"><?php echo $this->_var['lang']['select_date']; ?></a></li>
                                                   <li><a href="javascript:;" data-value="1"><?php echo $this->_var['lang']['week_date']; ?></a></li>
                                                   <li><a href="javascript:;" data-value="2"><?php echo $this->_var['lang']['month_date']; ?></a></li>
                                                   <li><a href="javascript:;" data-value="3"><?php echo $this->_var['lang']['three_month']; ?></a></li>
                                                   <li><a href="javascript:;" data-value="4"><?php echo $this->_var['lang']['six_month']; ?></a></li>
                                                   <li><a href="javascript:;" data-value="5"><?php echo $this->_var['lang']['a_yaer']; ?></a></li>
                                                </ul>
                                                <input name="log_date" type="hidden" value="0" >
                                            </div>
                                        </dd>
                                        <dt><input type="submit" class="btn btn30 red_btn mt10" name="drop_type_date" value="<?php echo $this->_var['lang']['drop_logs']; ?>" /></dt>
                                    </dl>
                                </form>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    	</div>
	</div>
 	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
    <script type="text/javascript">
		listTable.recordCount = <?php echo empty($this->_var['record_count']) ? '0' : $this->_var['record_count']; ?>;
		listTable.pageCount = <?php echo empty($this->_var['page_count']) ? '1' : $this->_var['page_count']; ?>;
		<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
		listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		$.gjSearch("-240px");  //高级搜索
    </script>
</body>
</html>
<?php endif; ?>