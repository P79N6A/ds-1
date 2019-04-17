<div class="transport_shipping_tpl">
<form action="goods_transport.php?act=add_shipping_tpl" method="post" name="shipping_tplForm" enctype="multipart/form-data">
<input type="hidden" name="tid" id="tab_tid" value="<?php echo $this->_var['tid']; ?>">
<input type="hidden" name="shipping_id" id="tab_shipping_id" value="<?php echo $this->_var['shipping_id']; ?>">
<input type="hidden" name="id" value="<?php echo $this->_var['id']; ?>">

<div class="item">
    <div class="label"><?php echo $this->_var['lang']['shipping_id']; ?>：</div>
    <div class="label_value">
        <div class="checkbox_items">
            <div class="checkbox_item">
                <?php echo $this->_var['shipping_info']['shipping_name']; ?>
            </div>
        </div>
    </div>
</div>
<div class="item">
    <div class="label"><?php echo $this->_var['lang']['lab_area_name']; ?>：</div>
    <div class="label_value">
        <div class="checkbox_items">
            <div class="checkbox_item">
                <input type="text" name="tpl_name" value="<?php echo $this->_var['tpl_info']['tpl_name']; ?>" class="text" autocomplete="off"/>
            </div>
        </div>
    </div>
</div>
<?php if ($this->_var['shipping_area']['shipping_code'] == 'ems' || $this->_var['shipping_area']['shipping_code'] == 'yto' || $this->_var['shipping_area']['shipping_code'] == 'zto' || $this->_var['shipping_area']['shipping_code'] == 'sto_express' || $this->_var['shipping_area']['shipping_code'] == 'post_mail' || $this->_var['shipping_area']['shipping_code'] == 'sf_express' || $this->_var['shipping_area']['shipping_code'] == 'post_express'): ?>
<div class="item">
    <div class="label"><?php echo $this->_var['lang']['label_cost_calculation_method']; ?></div>
    <div class="label_value">
        <div class="checkbox_items">
            <div class="checkbox_item">
                <input type="radio" class="ui-radio" id="fee_compute_mode_1" <?php if ($this->_var['fee_compute_mode'] != 'by_number'): ?>checked="true"<?php endif; ?> onclick="compute_mode('<?php echo $this->_var['shipping_area']['shipping_code']; ?>','weight')" name="fee_compute_mode" value="by_weight"/>
                <label for="fee_compute_mode_1" class="ui-radio-label"><?php echo $this->_var['lang']['by_weight']; ?></label>
            </div>
            <div class="checkbox_item">
                <input type="radio" class="ui-radio" id="fee_compute_mode_0" <?php if ($this->_var['fee_compute_mode'] == 'by_number'): ?>checked="true"<?php endif; ?>  onclick="compute_mode('<?php echo $this->_var['shipping_area']['shipping_code']; ?>','number')" name="fee_compute_mode" value="by_number"/>
                <label for="fee_compute_mode_0" class="ui-radio-label"><?php echo $this->_var['lang']['by_goods_number']; ?></label>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<!--<?php if ($this->_var['shipping_area']['shipping_code'] != 'cac'): ?>-->
<?php $_from = $this->_var['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field');if (count($_from)):
    foreach ($_from AS $this->_var['field']):
?>
<!--<?php if ($this->_var['fee_compute_mode'] == 'by_number'): ?>-->
    <!--<?php if ($this->_var['field']['name'] == 'item_fee' || $this->_var['field']['name'] == 'free_money' || $this->_var['field']['name'] == 'pay_fee'): ?>-->
        <div class="item" id="<?php echo $this->_var['field']['name']; ?>" <?php if ($this->_var['field']['name'] == 'pay_fee'): ?>style="display:none"<?php endif; ?>>
            <div class="label"><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['field']['label']; ?>：</div>
            <div class="label_value">
                <input type="text" name="<?php echo $this->_var['field']['name']; ?>" value="<?php echo $this->_var['field']['value']; ?>" class="text" autocomplete="off"/>
                <div class="form_prompt"></div>
            </div>
        </div>
    <!--<?php else: ?>-->
        <div class="item" id="<?php echo $this->_var['field']['name']; ?>" style="display:none">
            <div class="label"><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['field']['label']; ?>：</div>
            <div class="label_value">
                <input type="text" name="<?php echo $this->_var['field']['name']; ?>" value="<?php echo $this->_var['field']['value']; ?>" class="text" autocomplete="off"/>
                <div class="form_prompt"></div>
            </div>
        </div>
    <!--<?php endif; ?>-->
<!--<?php else: ?>-->
    <!--<?php if ($this->_var['field']['name'] != 'item_fee'): ?>-->
        <div class="item" id="<?php echo $this->_var['field']['name']; ?>" <?php if ($this->_var['field']['name'] == 'pay_fee'): ?>style="display:none"<?php endif; ?>>
            <div class="label"><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['field']['label']; ?>：</div>
            <div class="label_value">
                <input type="text" name="<?php echo $this->_var['field']['name']; ?>" value="<?php echo $this->_var['field']['value']; ?>" class="text" autocomplete="off"/>
                <div class="form_prompt"></div>
            </div>
        </div>
    <!--<?php else: ?>-->
    <div class="item" id="<?php echo $this->_var['field']['name']; ?>" style="display:none">
        <div class="label"><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['field']['label']; ?>：</div>
        <div class="label_value">
            <input type="text" name="<?php echo $this->_var['field']['name']; ?>" value="<?php echo $this->_var['field']['value']; ?>" class="text" autocomplete="off"/>
            <div class="form_prompt"></div>
        </div>
    </div>
    <!--<?php endif; ?>-->
<!--<?php endif; ?>-->
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<!--<?php endif; ?>-->
<div class="item mb0">
    <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['label_arrive_termini']; ?></div>
    <div class="label_value">
        <div class="level_linkage">
            <div class="fl">
                <div class="ui-dropdown smartdropdown alien">
                    <input type="hidden" value="0" name="province" id="selProvinces">
                    <div class="txt"><?php echo $this->_var['lang']['province_alt']; ?></div>
                    <i class="down u-dropdown-icon"></i>
                    <div class="options clearfix" style="max-height:300px;">
                        <span class="liv" data-text="<?php echo $this->_var['lang']['whole_country']; ?>" data-type="0"  data-value="-1"><?php echo $this->_var['lang']['whole_country']; ?></span>
                        <?php $_from = $this->_var['Province_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                        <span class="liv" data-text="<?php echo $this->_var['list']['region_name']; ?>" data-type="2"  data-value="<?php echo $this->_var['list']['region_id']; ?>"><?php echo $this->_var['list']['region_name']; ?></span>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </div>
                </div>
                <div id="dlCity" class="ui-dropdown smartdropdown alien">
                    <input type="hidden" value="0" name="city" id="selCities">
                    <div class="txt"><?php echo $this->_var['lang']['city']; ?></div>
                    <i class="down u-dropdown-icon"></i>
                    <div class="options clearfix" style="max-height:300px;">
                        <span class="liv hide" data-text="<?php echo $this->_var['lang']['city']; ?>" data-value="0"><?php echo $this->_var['lang']['city']; ?></span>
                    </div>
                </div>
                <div id="dlRegion" class="ui-dropdown smartdropdown alien">
                    <input type="hidden" value="0" name="district" id="selDistricts">
                    <div class="txt"><?php echo $this->_var['lang']['area_alt']; ?></div>
                    <i class="down u-dropdown-icon"></i>
                    <div class="options clearfix" style="max-height:300px;">
                        <span class="liv hide" data-text="<?php echo $this->_var['lang']['area_alt']; ?>" data-value="0"><?php echo $this->_var['lang']['area_alt']; ?></span>
                    </div>
                </div>
                <div id="dlStreet" class="ui-dropdown smartdropdown alien">
                    <input type="hidden" value="0" name="street" id="selStreet">
                    <div class="txt"><?php echo $this->_var['lang']['street']; ?></div>
                    <i class="down u-dropdown-icon"></i>
                    <div class="options clearfix" style="max-height:300px;">
                        <span class="liv hide" data-text="<?php echo $this->_var['lang']['street']; ?>" data-value="0"><?php echo $this->_var['lang']['street']; ?></span>
                    </div>
                </div>
            </div>
            <?php if ($this->_var['shipping_area']['shipping_code'] != 'cac'): ?><a href="javascript:void(0);" class="btn red_btn btn32 fl" ectype="addPrivilege"><i class="sc_icon sc_icon_warehouse"></i><?php echo $this->_var['lang']['add_area']; ?></a><?php endif; ?>
            <div class="checkbox-item">
            	<input type="checkbox" name="deleteArea" id="deleteArea" class="ui-checkbox" checked />
                <label class="ui-label" for="deleteArea"><?php echo $this->_var['lang']['remove_selected_area']; ?></label>
            </div>
            <div class="notic bf100 mt5"><?php echo $this->_var['lang']['no_selected_area_all']; ?></div>
        </div>
    </div>
</div>
<div class="item">
    <div class="label">&nbsp;</div>
    <div class="label_value">
        <!--<?php if ($this->_var['shipping_area']['shipping_code'] != 'cac'): ?>-->
        <div class="checkbox_items" id="regionCell">
            <?php $_from = $this->_var['regions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('id', 'region');if (count($_from)):
    foreach ($_from AS $this->_var['id'] => $this->_var['region']):
?>
            <div class="checkbox_item">
                <input type="checkbox" value="<?php echo $this->_var['id']; ?>" name="regions[]" class="ui-checkbox" id="region_<?php echo $this->_var['id']; ?>" checked="true"/>
                <label for="region_<?php echo $this->_var['id']; ?>" class="ui-label"><?php echo $this->_var['region']; ?></label>
            </div>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
        <!--<?php endif; ?>-->
    </div>
</div>
</form>
</div>
<script type="text/javascript" src="js/region.js"></script>
<script type="text/javascript">
	$.levelLink();//地区三级联动
	/*添加管辖地区*/
	$("a[ectype='addPrivilege']").on("click",function(){
		var selProvince = $('#selProvinces');
		var selCity     = $('#selCities');
		var selDistrict = $('#selDistricts');
		var regionCell  = $('#regionCell');
		var regionId = 0;
		var regionName = '';
		
		var tid = $("#tab_tid").val();
		var shipping_id = $("#tab_shipping_id").val();
		
		if (selDistrict.val() > 0)
		{
			regionId = selDistrict.val();
			regionName = selDistrict.next(".txt").text();
		}else{
			if(selCity.val() > 0){
				regionId = selCity.val();
				regionName = selCity.next(".txt").text();
			}else{
				if(selProvince.val() > 0){
					regionId = selProvince.val();
					regionName = selProvince.next(".txt").text();
				}else{
					the_national(tid, shipping_id)			
					return false;	
				}
			}
		}
		
		//检查该地区是否已经存在
		exists = false;
		$('input:checkbox[type="checkbox"]').each(function()
		{
			if($(this).attr("name") == 'regions[]'){
				if($(this).val()  == regionId){
					exists = true;
					return false;
				}
			}
		});
		
		//检查该地区是否已经存在运费模板 start
		var area_erorr = 0;
		regionId = Number(regionId);
		if(regionId > 0){
			$.ajax({
				type:"get",
				url:"goods_transport.php?act=select_area",
				data:'tid=' + tid + "&shipping_id=" + shipping_id + "&region_id=" + regionId,
				dataType: 'json',
				async : false, //设置为同步操作就可以给全局变量赋值成功
				success:function(result){
					area_erorr = result.error;
				}
			});
		}

		if(area_erorr == 1){
			exists = true;
		}
		//检查该地区是否已经存在运费模板 end
					
		//创建checkbox
		if (exists == false)
		{
		  regionCell.append('<div class="checkbox_item"><input type="checkbox" value="'+regionId+'" name="regions[]" class="ui-checkbox" id="region_'+regionId+'" checked="true" /><label for="region_'+regionId+'" class="ui-label">'+regionName+'</label></div>');
		}else{
			alert(jl_this_area_existed);
		}
	});
	
	$("input[name='deleteArea']").click(function(){
		if($(this).prop("checked") == true){
			$("#regionCell").find("input[type='checkbox']").prop("checked",true);
		}else{
			$("#regionCell").find("input[type='checkbox']").prop("checked",false);
		}
	});
			
	//配送费用计算方式
	function compute_mode(shipping_code,mode)
	{
		var base_fee  = $("#base_fee");
		var step_fee  = $("#step_fee");
		var item_fee  = $("#item_fee");
		if(shipping_code == 'post_mail' || shipping_code == 'post_express')
		{
		 var step_fee1  = $("#step_fee1");
		}
	
		if(mode == 'number')
		{
		  item_fee.css('display','');
		  base_fee.css('display','none');
		  step_fee.css('display','none');
		  if(shipping_code == 'post_mail' || shipping_code == 'post_express')
		  {
			  step_fee1.css('display','none');
		  }
		}
		else
		{
			item_fee.css('display','none');
			base_fee.css('display','');
			step_fee.css('display','');
		  if(shipping_code == 'post_mail' || shipping_code == 'post_express')
		  {
			  step_fee1.css('display','');
		  }
		}
	}
	
</script>