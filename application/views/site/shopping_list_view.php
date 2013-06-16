<?php 
echo doctype();
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php $meta = array(
    array('name' => 'robots', 'content' => 'no-cache'),
    array('name' => 'description', 'content' =>  $this->config->item('Site_description')),
    array('name' => 'keywords', 'content' =>  $this->config->item('Site_keywords')),
    array('name' => 'robots', 'content' => 'no-cache'),
    array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')         
                            );
	echo meta($meta); ?>
    <title><?php echo $this->config->item('Site_title');?></title>
<?php echo link_tag('public/css/reset.css'); ?>
    
<?php echo link_tag('public/css/site.css'); ?>
 
 
                
</head>
           
                  	
	           
           
    
                    <body>
                 
   
                        
                             
                        <div class="header">
                            <div class="menu">
                                <ul>
                                    
                                    <li><?php echo anchor(base_url(),'Home')?></li>
                                    <li><?php echo anchor(base_url('shopping_list/add'),'+Add list')?></li>
                                    <li><?php echo anchor(base_url('logout'),'Logout')?></li>
                                </ul>
                                
                            </div>
                            
                        </div>
                        
                        <div id="main_container">
                            <div class="content_p">
                                
                                
                                <div class="cont">
                                    <div class="head_title">
                                        <h1>Details shopping list</h1> 
                                </div>
                                    
                                    <div id="shop_list">
                                    <h1 class="list_name"><?php echo @$shopping_list[0]['list_name'];?></h1>
                                    <?php $sh_id = @$shopping_list[0]['id'];?>
                                    <ul class="items">
                                    <?php 
                                    
                                    if(is_array($shopping_list))
                                    {
                                    foreach ($shopping_list as $items)
                                    {?>
                                        <li><?php echo $items['item_name'];?> </li>
                                    <?php }
                                    }
                                    ?>
                                
                                    </ul>
                                    </div>
                                
                            </div>
                            
                        </div>
                        </div>
                       
                        
                      
                    </body>
                </html>