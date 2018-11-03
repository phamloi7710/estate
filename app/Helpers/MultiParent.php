<?php
	function menuMultiInCate($data,$parent_id = 0,$str = "&ensp;",$select = 0)
	{
		foreach($data as $val)
		{
			$id = $val["id"];
			$name = $val["name"];
			if($val["parent_id"]==$parent_id)
			{
				if($select!=0 && $id==$select){
					if($parent_id==0){
						echo '<option value="'.$id.'" selected="selected"><b>'.$str.$name.'</b></option>';
					}else{
						echo '<option value="'.$id.'" selected="selected">'.$str.$name.'</option>';
					}
				}else{
					if($parent_id==0){
						echo '<option value="'.$id.'"><b>'.$str.$name.'</b></option>';
					}else{
						echo '<option value="'.$id.'">'.$str.$name.'</option>';
					}
				}
				menuMultiInCate($data,$id,$str."&ensp;&ensp;",$select);
			}		
		}
	}
	function listCate($data,$parent_id = 0,$str = "")
	{
		foreach($data as $val)
		{
			$id = $val["id"];
			$name = $val["name"];
			$order = $val["order"];
			$status = $val["status"];
			$statusHome = $val["status_home"];
			
			if($status=='active'){
				$valueStatus = '<span class="label label-success"> '.__("general.isView").'</span>';
			}else{
				$valueStatus = '<span class="label label-danger"> '.__("general.notView").'</span>';
			}
			if($statusHome=='active'){
				$valueStatusHome = '<span class="label label-success"> '.__("general.isView").'</span>';
			}else{
				$valueStatusHome = '<span class="label label-danger"> '.__("general.notView").'</span>';
			}
			if($val["parent_id"] == $parent_id)
			{
				echo '
						<tr class="move-item" id="'.$id.'">';
						echo '<td style="text-align: center; width: 5%"><i class="material-icons">compare_arrows</i></td>';
				            if($str == "")
				            {
				            	echo '<td>  <b>'.$str.' '.$name.'</b></td>';
				            	
				            }
				            else
				            {
				            	echo '<td>  '.$str.' '.$name.'</td>';
				            	
				            }
				            echo '<td style="text-align: center;">'.$order.'</td>';
				            echo '<td style="text-align: center;">'.$valueStatus.'</td>';
				            echo '<td style="text-align: center;">'.$valueStatusHome.'</td>';
				            
				            echo'<td class="center">
                                <a href="" class="btn btn-danger btn-xs"><i class="material-icons">delete_forever</i></a>
                                <a href="#" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".token-'.$id.'"><i class="material-icons">mode_edit</i></a>
                            </td>
				        </tr>
			        ';
	        listCate($data,$id,$str. "&ensp;&ensp;");
			}
		}
	}
	function submenu($data, $id)
	{
		foreach ($data as $item) {
			if($item['parent_id'] == $id){
				echo "<div class='dropdown-menu level1'>
			            <div class='dropdown-menu-inner'>
			                <div class='row'>
			                    <div class='mega-col col-sm-12'>
			                        <div class='mega-col-inner'>
					                    <ul>";
					                    foreach ($data as $item) {
					                    	if($item['parent_id'] == $id){
					                        echo "<li class=' no-parent-lv2'>
					                            <a class='nav-lv2' href='https://bigboom.exdomain.net/kinh-mat-nam' title='".$item['name']."'>
					                                <span class=''>".$item['name']."</span>
					                            </a>
				                            </li>";
				                        }}
					                    echo "</ul>
				                    </div>
			                    </div>
			                </div>
			            </div>
			        </div>
			    ";
			}
	    }		
	}
	function cateIndexTab($data, $id)
	{
		foreach ($data as $item) {
			if($item['parent_id'] == $id){
				echo "<li class='li_tab'>
                        <a href='#content-tabb10' class='head-tabs head-tab10' data-src='.head-tab10'>".$item['name']."</a>
                    </li>";
			}
		}
	}
	function cateIndexContent($data, $id)
	{
		foreach ($data as $item) {
			if($item['parent_id'] == $id){
				echo "<div id='content-tabb10' class='content-tab content-tab-proindex' style='display:none'>
			            <div class='row'>
			                <div class='col-xs-6 col-sm-4 col-md-4 col-lg-20 custom-mobile'>
			                    <div class='wrp_item_small product-col'>
			                        <div class='product-box'>
			                            <div class='product-thumbnail'>
			                                <a class='image_link display_flex' href='https://bigboom.exdomain.net/kinh-mat-nam-nba-1150-a01' title='Kính Mát Nam NBA 1150 A01'>
			                                <img src='https://bigboom.exdomain.net/image/cache/catalog/san-pham/a01-228x228.jpg' data-lazyload='https://bigboom.exdomain.net/image/cache/catalog/san-pham/a01-228x228.jpg' alt='Kính Mát Nam NBA 1150 A01'>
			                                </a>
			                                <div class='product-action-grid clearfix'>
			                                    <form class='variants form-nut-grid'>
			                                        <div>
			                                            <button class='btn-cart button_wh_40 left-to' title='Mua ngay' type='button' onclick='window.location.href='https://bigboom.exdomain.net/index.php?route=checkout/cart/add&amp;product_id=220&amp;redirect=true''>Mua ngay</button>
			                                            <!--onclick='cart.add(, 1)'></button>-->
			                                            <a title='Xem' href='https://bigboom.exdomain.net/kinh-mat-nam-nba-1150-a01' class='button_wh_40 btn_view right-to quick-view'>
			                                            <i class='fa fa-eye'></i>
			                                            <span class='style-tooltip'>Xem</span>
			                                            </a>
			                                        </div>
			                                    </form>
			                                </div>
			                            </div>
			                            <div class='product-info effect a-left'>
			                                <div class='info_hhh'>
			                                    <h3 class='product-name '>
			                                        <a href='https://bigboom.exdomain.net/kinh-mat-nam-nba-1150-a01' title='Kính Mát Nam NBA 1150 A01'>Kính Mát Nam NBA 1150 A01</a>
			                                    </h3>
			                                    <div class='reviews-product-grid'>
			                                        <div class='zozoweb-product-reviews-badge'>
			                                            <div class='zozoweb-product-reviews-star' data-score='0' data-number='5' style='color: rgb(255, 190, 0);'>
			                                                <i data-alt='1' class='star-off-png'></i>&nbsp;
			                                                <i data-alt='2' class='star-off-png'></i>&nbsp;
			                                                <i data-alt='3' class='star-off-png'></i>&nbsp;
			                                                <i data-alt='4' class='star-off-png'></i>&nbsp;
			                                                <i data-alt='5' class='star-off-png'></i>&nbsp;
			                                            </div>
			                                        </div>
			                                    </div>
			                                    <div class='price-box clearfix'>
			                                        <span class='price product-price'>1,170,000đ</span>
			                                        <span class='price product-price-old' style='text-decoration: none'>&nbsp;</span>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>";
			}
		}
	}
?>