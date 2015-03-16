<head>
	<link rel='stylesheet' id='jquery-ui-css'  href='http://google-agencia.com/tap/wp-content/themes/tourpackage-v2-00/include/stylesheet/jquery-ui-1.8.16.custom.css?version=<?php echo time()?>' type='text/css' media='all' />
     
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/stylesheet/edward.css?version=<?php echo time()?>"> 
</head>
<!--reservas-->
<div id="reservasfooter">
        <div class="reservas">
        	
            <div class="container">
            	
                <!--reservas-->
                <div class="reservas-header">
                	
                    <!--mitad-->  
                    <div class="mitad">
                        <h1><span>ADQUIERE TUS BOLETOS AQUÍ</span></h1>
                    </div>
                    <!--mitad-->
                    
                    <!--mitad-->
                    <div class="mitad padding-left-25px">
                        <div style="display:inline-block;margin-left:2px"><span class="triangulo "><a href="">FACTURACIÓN ELECTRÓNICA</a></span></div>
                        
                        <div style="display:inline-block;margin-left:2px"><span class="triangulo derecha"><a href="">ACCESO A AGENCIAS</a></span></div>
                        
                        
                        <div style="display:inline-block;margin-left:2px"><span class="triangulo derecha"><a href="">BE TAP</a></span></div>
                        <div class="clearfix"></div>
                    </div>
                    <!--mitad-->
                    
                    <div class="clearfix"></div>
                
                </div>
                <!--reservas-->
                
                <!--reservas-form-->
                <div class="reservas-form">
                		
                    <!--tres-->   
                    <div class="tres">
                    	
                        <!--ckeck-->
                    	<div class="ckeck">
                    		<div class="ckeck-input">
                            	<input type="radio" id="redondo" name="modo">
                            </div>
                            <div class="ckeck-text">
                            	Viaje sencillo
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!--ckeck-->
                        
                        <!--select-->
                        <div class="select">
                        	<?php
							$url = home_url();
							?>
                        	<label>Origen:</label>
                    		<select id="origen">
                            	<option>ORIGEN</option>
                                <option>ANGAMACUTIRO</option>
                                <option>CABORCA</option>
                                <option>CULIACÁN</option>
                                <option>EMPALME</option>
                                <option>GUAD TERMINAL ZAPOPAN</option>
                                <option>GUADALAJARA</option>
                                <option>GUAMÚCHIL</option>
                                <option>GUASAVE</option>
                                <option>GUAYMAS TERMINAL TAP</option>
                                <option>HERMOSILLO</option>
                                <option>HERMOSILLO EL GALLO-SUR</option>
                                <option>HERMOSILLO TERMINAL TAP</option>
                                <option>LA PENAL </option>
                                <option>LA PIEDAD</option>
                                <option>LOS MOCHIS</option>
                                <option>MAZATLÁN</option>
                                <option>MEXICALI</option>
                                <option>MEXICALI PLAZA LAGUNA</option>
                                <option>MÉXICO NORTE</option>
                                <option>MEZCALES </option>
                                <option>MORELIA</option>
                                <option>NAVOJOA</option>
                                <option>NOGALES CENTRAL TAP</option>
                                <option>NUEVO VALLARTA</option>
                                <option>OBREGÓN</option>
                                <option>PENAS</option>
                                <option>PUERTO VALLARTA</option>
                                <option>PURUANDIRO</option>
                                <option>SAN LUIS RÍO COLORADO</option>
                                <option>SANTA ANA</option>
                                <option>SONOYTA</option>
                                <option>TEPIC</option>
                                <option>TEPOTZOTLAN</option>
                                <option>TERMINAL-TLAQUEPAQUE-PERIFÉRICO</option>
                                <option>TIJUANA</option>
                                <option>TIJUANA-INSURGENTES</option>
                                <option>URUAPAN</option>
                                <option>ZAMORA</option>
                            </select>
                        </div>
                        <!--select-->
                        
                        <!--package-search-input-->
                        <div class="package-search-input">                                
                        	<label for="departure-date">Fecha de Salida:</label>
                            	<img src="<?php echo $url?>/wp-content/themes/tourpackage-v2-00/images/fecha.png">
                            <input type="text" id="fecha-salida" class="gdl-date-picker" value="<?php echo date('Y-m-d')?>">
                        	</label>
                        </div>
                        <!--package-search-input-->
                        
                    </div>
                    <!--tres--> 
                    
                    <!--tres-->   
                    <div class="tres">
                    	
                        <!--ckeck-->
                    	<div class="ckeck">
                    		<div class="ckeck-input">
                            	<input type="radio" id="sencillo" name="modo">
                            </div>
                            <div class="ckeck-text">
                            	Viaje Redondo
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!--ckeck-->
                        
                        <!--select-->
                        <div class="select">
                        	<?php
							$url = home_url();
							?>
                        	<label>Destino:</label>
                    		<select id="origen">
                            	<option>DESTINO</option>
                                <option>AGUA PRIETA</option>
                                <option>ALTAR</option>
                                <option>ANGAMACUTIRO</option>
                                <option>CABORCA </option>
                                <option>CANANEA</option>
                                <option>CULIACÁN</option>
                                <option>EMPALME </option>
                                <option>GUADALAJARA</option>
                                <option>GUAD TERMINAL ZAPOPAN</option>
                                <option>GUAMÚCHIL</option>
                                <option>GUASAVE</option>
                                <option>GUAYMAS TERMINAL TAP</option>
                                <option>HERMOSILLO</option>
                                <option>HERMOSILLO EL GALLO-SUR</option>
                                <option>HERMOSILLO TERMINAL TAP</option>
                                <option>MAGDALENA DE QUINO</option>
                                <option>LOS MOCHIS</option>
                                <option>MÉXICO NORTE</option>
                                <option>MORELIA</option>
                                <option>MEXICALI</option>
                                <option>MAZATLÁN</option>
                                <option>NAVOJOA</option>
                                <option>NOGALES CENTRAL TAP</option>
                                <option>NUEVO VALLARTA</option>
                                <option>OBREGÓN</option>
                                <option>LA PIEDAD</option>
                                <option>LA PENAL</option>
                                <option>PENAS</option>
                                <option>PUERTO PEÑASCO</option>
                                <option>PUERTO VALLARTA</option>
                                <option>PURUANDIRO</option>
                                <option>SAN LUIS RÍO COLORADO</option>
                                <option>SANTA ANA</option>
                                <option>SONOYTA</option>
                                <option>TEPIC</option>
                                <option>TEPOTZOTLAN</option>
                                <option>TIJUANA</option>
                                <option>URUAPAN</option>
                                <option>ZAMORA</option>
                            </select>
                        </div>
                        <!--select-->
                        
                        <!--package-search-input-->
                        <div class="package-search-input">                                
                        	<label for="departure-date" class="margin-right-15px">Fecha de Regreso::</label>
                            	<img src="<?php echo $url?>/wp-content/themes/tourpackage-v2-00/images/fecha.png">
                            <input type="text" id="fecha-regreso" class="gdl-date-picker" value="<?php echo date('Y-m-d')?>">
                        	</label>
                        </div>
                        <!--package-search-input-->
                        
                    </div>
                    <!--tres--> 
                    
                    <!--tres-->   
                    <div style="margin-top:10px" class="tres last">
                    	
                        <!--mitad-->
                        <div class="mitad">
                        
                            <!--select-->
                            <div class="select">
                                <label>Adulto:</label>
                                <select id="origen">
                                	<?php for ($i=00; $i<=20; $i++){?>
                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <!--select-->
                            
                            <!--select-->
                            <div class="select">
                                <label>Menor:</label>
                                <select id="origen">
                                    <?php for ($i=00; $i<=20; $i++){?>
                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <!--select-->
                            
                            <!--select-->
                            <div class="select">
                                <label class="largo">Senectud:</label>
                                <select id="origen">
                                    <?php for ($i=00; $i<=20; $i++){?>
                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <!--select-->
                        
                        	<div class="clearix"></div>
                        </div>
                        <!--mitad-->
                        
                        <!--mitad-->
                        <div class="mitad">
                        
                            <!--select-->
                            <div class="select">
                                <label class="estu">Estudiante:</label>
                                <select id="estudiante">
                                	<?php for ($i=00; $i<=20; $i++){?>
                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <!--select-->
                            
                            <!--select-->
                            <div class="select">
                                <label class="largo2">Profesor:</label>
                                <select id="profesor">
                                    <?php for ($i=00; $i<=20; $i++){?>
                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <!--select-->
                            
                            <!--select-->
                            <div class="boton">
                                <input type="button" value="CONTINUAR" class="res-btn">
                            </div>
                            <!--select-->
                        
                        	<div class="clearix"></div>
                        </div>
                        <!--mitad-->
                        
                    </div>
                    <!--tres--> 
                    
                    <div class="clearfix">
                    
                    </div> 
                
                </div>
                <!--reservas-form-->
            
            </div>
        
        </div>
        <!--reservas-->
</div>
		<?php 
			$gdl_show_twitter = (get_option(THEME_SHORT_NAME.'_show_twitter_bar','enable') == 'enable')? true: false; 
			$gdl_homepage_twitter = (get_option(THEME_SHORT_NAME.'_show_twitter_only_homepage','disable') == 'enable')? true: false; 
			
			if( $gdl_show_twitter && ( ($gdl_homepage_twitter && is_front_page()) || !$gdl_homepage_twitter )){
				$twitter_id = get_option(THEME_SHORT_NAME.'_twitter_bar_id'); 
				$num_fetch = get_option(THEME_SHORT_NAME.'_twitter_num_fetch'); 
				$consumer_key = get_option(THEME_SHORT_NAME.'_twitter_bar_consumer_id'); 
				$consumer_secret = get_option(THEME_SHORT_NAME.'_twitter_bar_consumer_secret'); 
				$access_token = get_option(THEME_SHORT_NAME.'_twitter_bar_access_token'); 
				$access_token_secret = get_option(THEME_SHORT_NAME.'_twitter_bar_access_token_secret'); 
				$cache_time = get_option(THEME_SHORT_NAME.'_twitter_bar_cache_time', '1'); 			

				$last_cache_time = get_option(THEME_SHORT_NAME . '_twitter_bar_last_cache_time', 0);
				$diff = time() - $last_cache_time;
				$crt = $cache_time * 3600;		
				if(empty($last_cache_time) || $diff >= $crt){
				
					$connection = getConnectionWithAccessToken($consumer_key, $consumer_secret, $access_token, $access_token_secret);
					$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitter_id."&count=" . $num_fetch) or die('Couldn\'t retrieve tweets! Wrong username?');
					
					if(!empty($tweets->errors)){
						if($tweets->errors[0]->message == 'Invalid or expired token'){
							echo '<strong>'.$tweets->errors[0]->message.'!</strong><br />You\'ll need to regenerate it <a href="https://dev.twitter.com/apps" target="_blank">here</a>!' . $after_widget;
						}else{
							echo '<strong>'.$tweets->errors[0]->message.'</strong>' . $after_widget;
						}
						return;
					}

					$tweets_data = array();
					for($i = 0;$i <= count($tweets); $i++){
						if(!empty($tweets[$i])){
							$tweets_data[$i]['created_at'] = $tweets[$i]->created_at;
							$tweets_data[$i]['text'] = $tweets[$i]->text;			
							$tweets_data[$i]['status_id'] = $tweets[$i]->id_str;			
						}	
					}			
					
					update_option(THEME_SHORT_NAME . '_twitter_bar_tweets',serialize($tweets_data));							
					update_option(THEME_SHORT_NAME . '_twitter_bar_last_cache_time',time());	
				}else{
					$tweets_data = maybe_unserialize(get_option(THEME_SHORT_NAME . '_twitter_bar_tweets'));
				}					
		?>
		<div class="footer-twitter-wrapper boxed-style">
			<div class="container twitter-container">
				<i class="gdl-twitter-icon icon-twitter"></i>
				<div class="gdl-twitter-wrapper">
					<div class="gdl-twitter-navigation">
						<a class="prev icon-angle-left"></a>
						<a class="next icon-angle-right"></a>
					</div>					
					<ul id="gdl-twitter" >
					<?php
						foreach( $tweets_data as $each_tweet ){
							echo '<li>';
							echo '<span>' . convert_links($each_tweet['text']) . '</span>';
							echo '<a class="date" target="_blank" href="http://twitter.com/'.$twitter_id.'/statuses/'.$each_tweet['status_id'].'">'.relative_time($each_tweet['created_at']).'</a>';
							echo '</li>';
						}	
					?>					
					</ul>	
					<script type="text/javascript">
						jQuery(document).ready(function(){
							var twitter_wrapper = jQuery('ul#gdl-twitter');
							twitter_wrapper.each(function(){
						
								var fetch_num = jQuery(this).children().length;
								var twitter_nav = jQuery(this).siblings('div.gdl-twitter-navigation');

								if( fetch_num > 0 ){ 
									gdl_cycle_resize(twitter_wrapper);
									twitter_wrapper.cycle({ fx: 'fade', slideResize: 1, fit: true, width: '100%', timeout: 4000, speed: 1000,
										next: twitter_nav.children('.next'),  prev: twitter_nav.children('.prev') });
								}
							});	

							jQuery(window).resize(function(){ 
								if( twitter_wrapper ){ gdl_cycle_resize(twitter_wrapper); }
							});								
						});	
					</script>				
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<?php 
				wp_deregister_script('jquery-cycle');
				wp_register_script('jquery-cycle', GOODLAYERS_PATH.'/javascript/jquery.cycle.js', false, '1.0', true);
				wp_enqueue_script('jquery-cycle');	
			} // $gdl-show-twitter
		?>		
		
		<div class="footer-wrapper boxed-style">

		<!-- Get Footer Widget -->
		<?php $gdl_show_footer = get_option(THEME_SHORT_NAME.'_show_footer','enable'); ?>
		<?php if( $gdl_show_footer == 'enable' ){ ?>
			<div class="container footer-container">
				<div class="footer-widget-wrapper">
					<div class="row">
						<?php
							$gdl_footer_class = array(
								'footer-style1'=>array('1'=>'three columns', '2'=>'three columns', '3'=>'three columns', '4'=>'three columns'),
								'footer-style2'=>array('1'=>'six columns', '2'=>'three columns', '3'=>'three columns', '4'=>''),
								'footer-style3'=>array('1'=>'three columns', '2'=>'three columns', '3'=>'six columns', '4'=>''),
								'footer-style4'=>array('1'=>'four columns', '2'=>'four columns', '3'=>'four columns', '4'=>''),
								'footer-style5'=>array('1'=>'eight columns', '2'=>'four columns', '3'=>'', '4'=>''),
								'footer-style6'=>array('1'=>'four columns', '2'=>'eight columns', '3'=>'', '4'=>''),
								);
							$gdl_footer_style = get_option(THEME_SHORT_NAME.'_footer_style', 'footer-style1');
						 
							for( $i=1 ; $i<=4; $i++ ){
								$footer_class = $gdl_footer_class[$gdl_footer_style][$i];
									if( !empty($footer_class) ){
									echo '<div class="' . $footer_class . ' gdl-footer-' . $i . ' mb0">';
									dynamic_sidebar('Footer ' . $i);
									echo '</div>';
								}
							}
						?>
						<div class="clear"></div>
					</div> <!-- close row -->
					
					<!-- Get Copyright Text -->
					<?php $gdl_show_copyright = get_option(THEME_SHORT_NAME.'_show_copyright','enable'); ?>
					<?php if( $gdl_show_copyright == 'enable' ){ ?>
						<div class="copyright-wrapper">
							<div class="copyright-border"></div>
							<div class="copyright-left">
								<?php echo do_shortcode( __(get_option(THEME_SHORT_NAME.'_copyright_left_area'), 'gdl_front_end') ); ?>
							</div>
						</div>
					<?php } ?>					
				</div>
			</div> 
		<?php } ?>

		</div><!-- footer wrapper -->
	</div> <!-- body wrapper -->
</div> <!-- body outer wrapper -->
	
<?php wp_footer(); ?>
<?php
$url = home_url();
//echo $url;
?>
<script type='text/javascript' src='<?php echo $url; ?>/wp-includes/js/jquery/ui/jquery.ui.core.min.js?ver=1.10.4'></script>
<script type='text/javascript' src='<?php echo $url; ?>/wp-includes/js/jquery/ui/jquery.ui.datepicker.min.js?ver=1.10.4'></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>

</body>
</html>