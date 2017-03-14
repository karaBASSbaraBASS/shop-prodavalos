		<div id="home">
			<div class="home-bg">
				<div class="center">
					<a href="/" class="home-link right">&nbsp;</a>
					<h2 class="title-home">
						SHOP - <?php echo $data['title']?>
					</h2>
					<ul class="breadcrumbs clearfix">
						<li>
							<a href="/">Home</a>
							<span class="sp">&raquo;</span>
						</li>
						<li>
							<a href="/cd">CD's</a>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
		<div class="sorting center">
            <ul class="s-category clearfix">
                <li class="active"><a href="/cd">all</a></li>
                <li><a href="/rock">rock</a></li>
                <li><a href="#">pop</a></li>
                <li><a href="#">metal</a></li>
                <li><a href="#">danse</a></li>
                <li><a href="#">classical</a></li>
            </ul>
            
            <div class="s-list right">
                <a href="#" class="s-block">&nbsp;</a>
                <a href="#" class="s-list active">&nbsp;</a>
            </div>

            <div class="sel-sorting right">
                <span>Sort by: </span>
                <select name="" id="" style="width: 110px;">
                    <option value="Alphabetically">Alphabetically</option>
                    <option value="Random">Random</option>
                    <option value="Last added">Last added</option>
                    <option value="Popular">Popular</option>
                </select>
            </div>
        </div>
        <!-- контент -->
        <div class="middle clearfix center">
            <div class="sidebar right">
                <h4 class="s-title">price filter<span class="s-title-br"></span></h4>
                
                <div class="s-slider">
                    <div id="slider-range"></div>
                    <p>
                        <label for="amount">Price range:</label>
                        <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                        <button class="btn-bl">Filter</button>
                    </p>
                </div>

                <h4 class="s-title">best sellers<span class="s-title-br"></span></h4>
                <div class="s-products">
                    <div class="s-products-item clearfix">
                        <div class="s-products-img">
                            <a href="#">
                                <img src="<?php echo url::get_template_path();?>assets/img/item2.jpg" alt="">
                            </a>
                        </div>
                        <div class="s-product-info">
                            <h6><a href="">Aqualung</a></h6>

                            <div class="rate">
                                <div style="width: 80%;"></div>
                            </div>
                            <span><i class="ic-comment"></i> 12 comments</span>
                        </div>
                    </div>

                    <div class="s-products-item clearfix">
                        <div class="s-products-img">
                            <a href="#">
                                <img src="<?php echo url::get_template_path();?>assets/img/item5.jpg" alt="">
                            </a>
                        </div>
                        <div class="s-product-info">
                            <h6><a href="">Aqualung</a></h6>

                            <div class="rate">
                                <div style="width: 80%;"></div>
                            </div>
                            <span><i class="ic-comment"></i> 12 comments</span>
                        </div>
                    </div>
                </div>
                <h4 class="s-title">our categories<span class="s-title-br"></span></h4>
			
			
                <ul class="cat-list">
	                <?php foreach($data['categories'] as $singleItem): ?>
	                    <li><a href="#"><?php echo($singleItem['category'])?></a><span>(<?php echo($singleItem['cnt'])?>)</span></li>
					<?php endforeach; ?>
				</ul>
                <h4 class="s-title">search our albums<span class="s-title-br"></span></h4>

                <form action="#" class="s-search">
                    <input type="text" placeholder="Search..."/>
                    <input type="submit" value=""/>
                </form>

            </div>
            <div class="content">
                <div class="product-catalog clearfix">
					

					<!-- Тестирование -->
					<?php 
						//print_r($data['products']);
					?>
					<!-- // Тестирование -->

					<!-- Цыкл создания обертки для каждого товара -->
					<?php foreach($data['products'] as $singleItem): ?>
                	
                		<figure class="product" data="<?= $singleItem['id']; ?>">
		                	<!-- продукт -->
		                    <div class="products">
		                        <div class="p-img">
		                            <span class="sale">sale</span>
		                            <a href="#">
		                                <img src="<?php echo Product::getImage($singleItem['id']); ?>" alt="">
		                            </a>
		                        </div>
		                        <div class="p-footer">
		                            <h6><a href=""><?php echo $singleItem['name']?></a> <span><?php echo $singleItem['brand']?></span></h6>

		                            <div class="rate">
		                                <div style="width:<?php echo ($singleItem['is_recommended'])?>%;"></div>
		                            </div>

		                            <p><?php echo Product::getPrewText($singleItem['description']); ?></p>

		                            <div class="p-footer-price clearfix">

		                           
										<span class="price">
		                                    <?php echo $singleItem['price'] ?>&nbspгрн
		                                </span>
		                                <span class="price-new">
		                                    <?php echo round($singleItem['price'] * 70 / 100)?>&nbspгрн
		                                </span>
									
										<!-- <span class="price-lg">
		                                    <?php //echo $singleItem['price'] ?>&nbspгрн
		                                </span> -->
									
		                                
		                                <a href="#" class="add-cart right">add to cart</a>
		                            </div>
		                        </div>
		                    </div>
                    	
                	
					</figure>
                    <!-- // Цыкл создания обертки для каждого товара -->
                    <?php endforeach; ?>
					
					<!-- // продукт -->
                    
                </div>

                <!-- пагинация -->
                <div class="pagination middle">
                	<?php echo $data['pagination']->get();?>
            	</div>

                <!-- <div class="pagination sorting">
                    <ul class="clearfix">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div> -->
            </div>
        </div>
        <!-- // контент -->