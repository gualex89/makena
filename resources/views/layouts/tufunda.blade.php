<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title>Makena</title>
		<link rel="shortcut icon" href="images/logo/makenaMiniIcon.png">

		<!-- fraimwork - css include -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

		<!-- icon - css include -->
		<link rel="stylesheet" type="text/css" href="css/fontawesome.css">

		<!-- animation - css include -->
		<link rel="stylesheet" type="text/css" href="css/animate.css">

		<!-- nice select - css include -->
		<link rel="stylesheet" type="text/css" href="css/nice-select.css">

		<!-- carousel - css include -->
		<link rel="stylesheet" type="text/css" href="css/slick.css">
		<link rel="stylesheet" type="text/css" href="css/slick-theme.css">

		<!-- popup images & videos - css include -->
		<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

		<!-- jquery ui - css include -->
		<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">

		<!-- custom - css include -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<style>
			.sb_category ul ul {
				display: none;
				list-style: none;
			}
	
			
			.sb_category ul li.active > ul {
				display: block;
			}
			.col-lg-3 {
     			 display: flex;
    		}
		</style>

	</head>


	<body class="home_motorcycle">


		<!-- backtotop - start -->
		<div id="thetop"></div>
		<div class="backtotop bg_carparts_red">
			<a href="#" class="scroll">
				<i class="far fa-arrow-up"></i>
			</a>
		</div>
		<!-- backtotop - end -->

		<!-- preloader - start -->
		<!-- <div id="preloader"></div> -->
		<!-- preloader - end -->


		<!-- header_section - start
		================================================== -->
		<header class="header_section motorcycle_header sticky_header clearfix">
			<div class="header_content_wrap d-flex align-items-center">
				<div class="container-fluid prl_90">
					<div class="row align-items-center">
						<div class="col-lg-2">
							<div class="brand_logo">
								<a class="brand_link" href="index.html">
									<img src="images/logo/logoMakena.png" srcset="images/logo/logoMakena.png 2x" alt="logo_not_found">
								</a>

								<ul class="mh_action_btns ul_li clearfix">
									<li>
										<button type="button" class="search_btn" data-toggle="collapse" data-target="#search_body_collapse" aria-expanded="false" aria-controls="search_body_collapse">
											<i class="fal fa-search"></i>
										</button>
									</li>
									<li>
										<button type="button" class="cart_btn">
											<i class="fal fa-shopping-cart"></i>
											<span class="btn_badge">2</span>
										</button>
									</li>
									<li><button type="button" class="mobile_menu_btn"><i class="far fa-bars"></i></button></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-6">
							<nav class="main_menu clearfix">
								<ul class="ul_li_center clearfix">
									<li class="menu_item_has_child">
										<a href="/">Home</a>
									</li>
									<li class="menu_item_has_child">
										<a href="/catalogo">Catálogo</a>
									</li>
									<li class="menu_item_has_child">
										<a href="/tufunda">Crea tu Funda</a>
									</li>
								</ul>
							</nav>
						</div>

						<div class="col-lg-4">
							<ul class="action_items ul_li_right clearfix">
								<li>
									<form action="#">
										<div class="form_item mb-0">
											<input type="search" name="search" placeholder="search">
											<button type="submit"><i class="fal fa-search"></i></button>
										</div>
									</form>
								</li>
								<li>
									<button type="button" class="cart_btn">CART <small class="btn_badge">0</small></button>
								</li>
								<li>
									<button type="button" class="mobile_menu_btn bg_carparts_red">
										<i class="fas fa-th"></i>
									</button>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div id="search_body_collapse" class="search_body_collapse collapse">
				<div class="search_body">
					<div class="container-fluid prl_90">
						<form action="#">
							<div class="form_item mb-0">
								<input type="search" name="search" placeholder="Type here...">
								<button type="submit"><i class="fal fa-search"></i></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</header>
		<!-- header_section - end
		================================================== -->


		<!-- main body - start
		================================================== -->
		<main>


			<!-- sidebar mobile menu & sidebar cart - start
			================================================== -->
			<div class="sidebar-menu-wrapper">
				<div class="cart_sidebar">
					<button type="button" class="close_btn"><i class="fal fa-times"></i></button>

					<ul class="cart_items_list ul_li_block mb_30 clearfix">
						<li>
							<div class="item_image">
								<img src="images/cart/img_01.jpg" alt="image_not_found">
							</div>
							<div class="item_content">
								<h4 class="item_title">Yellow Blouse</h4>
								<span class="item_price">$30.00</span>
							</div>
							<button type="button" class="remove_btn"><i class="fal fa-trash-alt"></i></button>
						</li>
						<li>
							<div class="item_image">
								<img src="images/cart/img_01.jpg" alt="image_not_found">
							</div>
							<div class="item_content">
								<h4 class="item_title">Yellow Blouse</h4>
								<span class="item_price">$30.00</span>
							</div>
							<button type="button" class="remove_btn"><i class="fal fa-trash-alt"></i></button>
						</li>
						<li>
							<div class="item_image">
								<img src="images/cart/img_01.jpg" alt="image_not_found">
							</div>
							<div class="item_content">
								<h4 class="item_title">Yellow Blouse</h4>
								<span class="item_price">$30.00</span>
							</div>
							<button type="button" class="remove_btn"><i class="fal fa-trash-alt"></i></button>
						</li>
					</ul>

					<ul class="total_price ul_li_block mb_30 clearfix">
						<li>
							<span>Subtotal:</span>
							<span>$90</span>
						</li>
						<li>
							<span>Vat 5%:</span>
							<span>$4.5</span>
						</li>
						<li>
							<span>Discount 20%:</span>
							<span>- $18.9</span>
						</li>
						<li>
							<span>Total:</span>
							<span>$75.6</span>
						</li>
					</ul>

					<ul class="btns_group ul_li_block clearfix">
						<li><a href="shop_cart.html">View Cart</a></li>
						<li><a href="shop_checkout.html">Checkout</a></li>
					</ul>
				</div>

				<div class="sidebar_mobile_menu">
					<button type="button" class="close_btn"><i class="fal fa-times"></i></button>

					<div class="msb_widget brand_logo text-center">
						<a href="index.html">
							<img src="images/logo/logo_25_1x.png" srcset="images/logo/logo_black.png" alt="logo_not_found">
						</a>
					</div>

					<div class="msb_widget mobile_menu_list clearfix">
						<h3 class="title_text mb_15 text-uppercase"><i class="far fa-bars mr-2"></i> Menu</h3>
						<ul class="ul_li_block clearfix">
							<li>
								<a href="/" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
							</li>
							<li>
								<a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catálogo</a>
							</li>
							<li>
								<a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Crea tu Funda</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="overlay"></div>
			</div>
			<!-- sidebar mobile menu & sidebar cart - end
			================================================== -->


			<!-- breadcrumb_section - start
			================================================== -->
			<section class="breadcrumb_section motorcycle_breadcrumb has_overlay text-white text-center d-flex align-items-end clearfix" data-background="images/slider/motorcycle/bg_01.webp">
				<div class="overlay" data-bg-color="#191919"></div>
				
			</section>
			<!-- breadcrumb_section - end
			================================================== -->
			<!-- product_section - start
			================================================== -->
			<section class="product_section sec_ptb_50 clearfix">
    <div class="container maxw_1430">
        <div class="row justify-content-lg-between">
            <div class="col-lg-9 order-last">
                <div class="tab-content">
                    <div id="grid_layout" class="tab-pane active">
                        <div class="row mb-50 justify-content-center text-center"> <!-- Cambiado a text-center -->
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 image-item">
                                <div class="motorcycle_product_grid">
                                    <div class="item_image">
                                        <img id="imagenResultado" src="" alt="Imagen del modelo seleccionado">
                                        <ul class="product_action_btns ul_li_block text-uppercase text-center clearfix">
                                            <li><a href="#!"><span><i class="fas fa-shopping-cart"></i></span> <span>Agregar al Carrito</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="item_content">
                                        <span class="item_price">$9900</span>
                                        <h3 class="item_title" id="codigo_producto">
                                            <a href="#!">Nombre</a>
                                        </h3>
                                        <ul class="rating_star ul_li clearfix">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mx-auto">
                <aside class="motorcycle_sidebar sidebar_section" data-bg-color="#f9f9f9">
                    <div class="sb_widget sb_recent_post seleccionadores">
                        <div class="sb_widget sb_category">
                            <h3 class="sb_widget_title">Selecciona tu modelo</h3>
                            <div class="col1">
                                <select name="marcas" id="marcasDropdown">
                                    <option value="">Seleccione</option>
                                </select>
                            </div>
                            <div class="col2">
                                <select name="modelos" id="modelosDropdown">
                                    <option value="">Seleccione</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="abtn_wrap col3 text-center mt-3" id="div_del_boton" data-animation="fadeInUp" data-delay=".8s">
                        <a id="seleccionarModeloBtn" class="custom_btn bg_carparts_red text-uppercase special_button"  style=" max-width: 200px;">Seleccionar Modelo</a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

			
			<!-- product_section - end
			================================================== -->


			<!-- barnd_section - start
			================================================== -->
			<div class="barnd_section sec_ptb_50 clearfix">
				<div class="container maxw_1430">
					<div class="barnd_carousel clearfix">
						<div class="item">
							<a class="brand_item" href="#!">
								<img src="images/brands/img_37.png" alt="image_not_found">
							</a>
						</div>

						<div class="item">
							<a class="brand_item" href="#!">
								<img src="images/brands/img_38.png" alt="image_not_found">
							</a>
						</div>

						<div class="item">
							<a class="brand_item" href="#!">
								<img src="images/brands/img_39.png" alt="image_not_found">
							</a>
						</div>

						<div class="item">
							<a class="brand_item" href="#!">
								<img src="images/brands/img_40.png" alt="image_not_found">
							</a>
						</div>

						<div class="item">
							<a class="brand_item" href="#!">
								<img src="images/brands/img_41.png" alt="image_not_found">
							</a>
						</div>

						<div class="item">
							<a class="brand_item" href="#!">
								<img src="images/brands/img_42.png" alt="image_not_found">
							</a>
						</div>

						<div class="item">
							<a class="brand_item" href="#!">
								<img src="images/brands/img_37.png" alt="image_not_found">
							</a>
						</div>

						<div class="item">
							<a class="brand_item" href="#!">
								<img src="images/brands/img_38.png" alt="image_not_found">
							</a>
						</div>

						<div class="item">
							<a class="brand_item" href="#!">
								<img src="images/brands/img_39.png" alt="image_not_found">
							</a>
						</div>

						<div class="item">
							<a class="brand_item" href="#!">
								<img src="images/brands/img_40.png" alt="image_not_found">
							</a>
						</div>

						<div class="item">
							<a class="brand_item" href="#!">
								<img src="images/brands/img_41.png" alt="image_not_found">
							</a>
						</div>

						<div class="item">
							<a class="brand_item" href="#!">
								<img src="images/brands/img_42.png" alt="image_not_found">
							</a>
						</div>
					</div>
				</div>
			</div>
			<!-- barnd_section - end
			================================================== -->


		</main>
		<!-- main body - end
		================================================== -->


		<!-- footer_section - start
		================================================== -->
		<footer class="footer_section motorcycle_footer clearfix">
			<div class="footer_widget_area sec_ptb_100 clearfix" data-background="images/backgrounds/bg_18.jpg">
				<div class="container">
					<div class="row justify-content-lg-between">

						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 order-last">
							<div class="footer_widget footer_about">
								<div class="brand_logo mb_30">
									<a href="#!">
										<img src="images/logo/logo_22_1x.png" srcset="images/logo/logo_22_2x.png 2x" alt="logo_not_found">
									</a>
								</div>

								<ul class="footer_contact_info ul_li_block mb_30 clearfix">
									<li><span>Email:</span> jthemes@gmail.com</li>
									<li><span>Phone:</span> 212-962-0125 or 212-962-8217</li>
								</ul>

								<ul class="circle_social_links ul_li clearfix">
									<li><a href="#!"><i class="fab fa-vimeo-v"></i></a></li>
									<li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#!"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="footer_widget footer_useful_links clearfix">
								<h3 class="footer_widget_title text-uppercase">About our company</h3>
								<ul class="ul_li_block">
									<li><a href="#!">About us</a></li>
									<li><a href="#!">Our History</a></li>
									<li><a href="#!">Press</a></li>
									<li><a href="#!">Media</a></li>
									<li><a href="#!">Careers</a></li>
									<li><a href="#!">Video Library</a></li>
									<li><a href="#!">Affiliate Program</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
							<div class="footer_widget footer_useful_links clearfix">
								<h3 class="footer_widget_title text-uppercase">Resources</h3>
								<ul class="ul_li_block">
									<li><a href="#!">Partnets</a></li>
									<li><a href="#!">Customer Service</a></li>
									<li><a href="#!">Video tutorials</a></li>
									<li><a href="#!">Codex</a></li>
									<li><a href="#!">Blog</a></li>
									<li><a href="#!">Privacy policy</a></li>
									<li><a href="#!">Terms & conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
							<div class="footer_widget footer_twitter_feed clearfix">
								<h3 class="footer_widget_title text-uppercase">Twitter Feed</h3>
								<div class="twitter_feed">
									<h4 class="admin_name"><a href="#!">Jthemes Development</a></h4>
									<span class="admin_title">@jthemes</span>
									<p>
										Awesome news! Neoncart theme is already available on themeforest! Click the link to see by yourself www.jthemes.com
									</p>
									<span class="post_time"><i class="fal fa-clock mr-1"></i> 27 Novenber 2020</span>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="footer_bottom text-center" data-bg-color="#151515">
				<div class="container">
					<p class="copyright_text mb-0">
						© All Rights Reserved <a href="#!" class="author_link text-white">jthemes</a>
					</p>
				</div>
			</div>
		</footer>
		<!-- footer_section - end
		================================================== -->

		
		<!-- fraimwork - jquery include -->
		<script src="js/jquery-3.5.1.min.js"></script>
		
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

		<!-- mobile menu - jquery include -->
        <script src="js/mCustomScrollbar.js"></script>

		<!-- google map - jquery include -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&ver=2.1.6"></script>
        <script src="js/gmaps.min.js"></script>

		<!-- animation - jquery include -->
        <script src="js/parallaxie.js"></script>
        <script src="js/wow.min.js"></script>

		<!-- nice select - jquery include -->
        <script src="js/nice-select.min.js"></script>

		<!-- carousel - jquery include -->
        <script src="js/slick.min.js"></script>

		<!-- countdown timer - jquery include -->
        <script src="js/countdown.js"></script>

		<!-- popup images & videos - jquery include -->
        <script src="js/magnific-popup.min.js"></script>

		<!-- filtering & masonry layout - jquery include -->
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/masonry.pkgd.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
			 
		<!-- jquery ui - jquery include -->
        <script src="js/jquery-ui.js"></script>

		
		<!-- custom - jquery include -->
		
		<script src="js/custom.js"></script> 
		<script>
			$(document).ready(function() {
				// Mostrar todas las imágenes al cargar la página
				showImages('all');

				// Manejar el clic en los enlaces de filtrado
				$('a[data-category]').on('click', function(e) {
					e.preventDefault();
					var category = $(this).data('category');
					showImages(category);
				});

				// Función para mostrar/ocultar imágenes según la categoría
				function showImages(category) {
					$('.image-item').hide(); // Ocultar todas las imágenes

					if (category === 'all') {
						$('.image-item').show(); // Mostrar todas las imágenes si la categoría es 'all'
					} else {
						$('.image-item[data-category="' + category + '"]').show(); // Mostrar imágenes de la categoría seleccionada
					}
				}
			});
			document.addEventListener('DOMContentLoaded', function () {
				const parentItems = document.querySelectorAll('.parent');

				parentItems.forEach(item => {
					item.addEventListener('click', function (event) {
						event.preventDefault();
						this.classList.toggle('active');

						// Desactivar todas las categorías
						parentItems.forEach(parent => {
                        	if (parent !== this && parent.classList.contains('active')) {
                            	parent.classList.remove('active');
                        	}
                    	});
						// Activar la categoría seleccionada
						
					});
				});
			});
		</script>
		<script>
			function llenar_cmb2() {
				console.log("llenar_cmb2 se está llamando");
				var cmb1 = document.getElementById("cmb1");
				var cmb2 = document.getElementById("cmb2");
				console.log(cmb2);
				var valor = cmb1.value;
				var opciones_cmb2 = cmb2.options;
				// Limpiar las opciones actuales en cmb2
				opciones_cmb2.length = 1; // Deja el primer elemento "Seleccione"
				
				// Llenar cmb2 según la selección de cmb1
				if (valor === "motorola") {
					console.log("entro a motorola");
					agregarOpcion(cmb2, "moto1", "Moto 1");
					agregarOpcion(cmb2, "moto2", "Moto 2");
					agregarOpcion(cmb2, "moto3", "Moto 3");
					$('#cmb2').niceSelect('update');
				} else if (valor === "apple") {
					// Agregar opciones para la marca Apple
					agregarOpcion(cmb2, "iphone1", "iPhone 1");
					agregarOpcion(cmb2, "iphone2", "iPhone 2");
					$('#cmb2').niceSelect('update');
					// Puedes seguir añadiendo más opciones según sea necesario
				} else if (valor === "samsung") {
					// Agregar opciones para la marca Samsung
					agregarOpcion(cmb2, "galaxy1", "Galaxy 1");
					agregarOpcion(cmb2, "galaxy2", "Galaxy 2");
					$('#cmb2').niceSelect('update');
					// Puedes seguir añadiendo más opciones según sea necesario
				}
				// Puedes agregar más condiciones según las marcas que tengas
			
			}

   			 // Función auxiliar para agregar opciones al select
			function agregarOpcion(select, valor, texto) {
				var opcion = document.createElement("option");
				opcion.value = valor;
				opcion.text = texto;
				select.add(opcion);
			}
		</script>
		<script>
			$(document).ready(function() {
				// Cargar marcas al cargar la página
				$.get('/obtener-marcas', function(data) {
					console.log(data);
					
					data.forEach(function(marca) {
						$('#marcasDropdown').append('<option value="' + marca + '">' + marca + '</option>');
						$('#marcasDropdown').niceSelect('update');
					});
				});
		
				// Manejar cambio en el dropdown de marcas
				$('#marcasDropdown').change(function() {
					var marcaSeleccionada = $(this).val();
		
					// Hacer una solicitud AJAX para obtener modelos según la marca seleccionada
					$.get('/obtener-modelos/' + marcaSeleccionada, function(data) {
						// Limpiar modelos existentes
						$('#modelosDropdown').empty();
		
						// Llenar modelos
						data.forEach(function(modelo) {
							$('#modelosDropdown').append('<option value="' + modelo + '">' + modelo + '</option>');
							$('#modelosDropdown').niceSelect('update');
						});
					});
				});
			});
		</script>
		<script>
			$(document).ready(function() {
				// Manejar clic en el botón "Seleccionar Modelo"
				$('#seleccionarModeloBtn').click(function() {
					// Obtener el modelo seleccionado en el dropdown
					var modeloSeleccionado = $('#modelosDropdown').val();
					console.log(modeloSeleccionado)
					// Hacer una solicitud AJAX para obtener la información de la base de datos
					$.get('/obtener-imagen/' + modeloSeleccionado, function(data) {
						// La respuesta 'data' debería contener la información de la imagen u otro dato que necesitas
						console.log(data);
						var rutaImagen = "storage\\" + data[0]
						console.log(rutaImagen);
						$('#imagenResultado').attr('src', rutaImagen);
						
					});
				});
			});
		</script>
		
		

		
	</body>
</html>