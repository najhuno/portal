<!DOCTYPE html>
<html lang="zxx">
	<head>
		<!-- Meta Tag -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name='copyright' content='pavilan'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="csrf-token" content="{{ csrf_token() }}" />
		
		<!-- Title Tag  -->
		<title>BANK BKC | PERUMDA BPR Kabupaten Cirebon</title>
		
		<!-- Favicon -->
		<link rel="icon" type="{{ asset('assets/frontend/img/favicon.png') }}" href="{{ asset('assets/frontend/img/favicon.png') }}">
		
		<!-- Web Font -->
		<link href="" rel="stylesheet">
		
			


		<!-- Bizwheel Plugins CSS -->
		<link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/frontend/css/cubeportfolio.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/frontend/css/jquery.fancybox.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/frontend/css/owl-carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/frontend/css/slicknav.min.css') }}">

		<!-- Bizwheel Stylesheet -->  
		<link rel="stylesheet" href="{{ asset('assets/frontend/css/reset.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/frontend/style.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">
		

		{{-- style css  --}}
	
		<link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/frontend/css/font-awesome.min.css') }}">
		<link rel='stylesheet' id='cresta-whatsapp-chat-front-style-css'  href="{{ asset('assets/frontend/chat/cresta-whatsapp-chat-front-css.min.css') }}" type='text/css' media='all' />

		<link rel="stylesheet" href="{{ asset('assets/frontend/chat/layers.css') }}">

		
		<style id='cresta-help-chat-inline-css'>
			.cresta-whatsapp-chat-box, .cresta-whatsapp-chat-button {z-index:1000}
			.cresta-whatsapp-chat-container, .cresta-whatsapp-chat-container-button {z-index:999}
			.cresta-whatsapp-chat-overlay {z-index:998}
		</style>
		<script id='pixel-script-poptin' src='{{ asset('assets/frontend/chat/pixel.js') }}' async='true'></script> 
		<!-- Analytics by WP-Statistics v13.0.8 - https://wp-statistics.com/ -->
		<style>
			.borderchat {
				border-bottom-left-radius:40px;
				border-bottom-right-radius:40px;
			}

			
		ul.menu{
		
		.list{
			font-size: 14px;
			border-bottom:1px solid #324252;
			position: relative;
			width: 100%;
			box-sizing: border-box;
			height: 50px;
			vertical-align: sub;
			background: #3e5165;
			clear: both;
			&:after{
				content: "\f107";
				font-family:FontAwesome;
				position: absolute;
				right: 17px;
				top: 17px;
				padding: 0px 5px;
				color:#fff;
			}
			&:before{
				content: '\f07b';
				font-family:FontAwesome;
				position: absolute;
				left: 17px;
				top: 17px;
				padding: 0px 5px;
				color:#fff;  
			}
			a{
				text-decoration: none;
				color: #fff;
				padding: 17px 0px 17px 45px;
				display: block;
				height: 100%;
				box-sizing: border-box;
				&:hover{
					background-color: #324252;
					transition:  300ms all;
					color: #09fbd2;
				}
			}
			.items{
				height: 0px;
				overflow: hidden;
				a{
					padding:17px;
					&:hover{
					background-color: #3f5d79;
					color:#fff;
					transition:  300ms all;

					}
				}
			}
			&:last-child{
				border-bottom:none;
			}
		}
		.active{
				&:after{
					content: "\f106";
					font-family:FontAwesome;
					position: absolute;
					right: 17px;
					top: 17px;
					padding: 0px 5px;
					color:#fff;
				}
				&:before{
					content: '\f07c';
					font-family:FontAwesome;
					position: absolute;
					left: 17px;
					top: 17px;
					padding: 0px 5px;
					color:#fff;  
				}
				>.items{
					display: block;
					background: #23313f;
					padding: 0px;
					height: auto;
					color:#fff;
					transition-timing-function: cubic-bezier(0.075, 0.82, 0.165, 1);
					transition: all 200ms;
					clear: both;
					float: left;
					width: 100%;
					li{
						padding:0px;
						border-bottom:1px solid #324252;
						list-style: none;
					}
					li:last-child{
						border-color:transparent;
						padding-bottom: 0px;
					}
					.active{
						> .items{
						background-color: #2f4b67;
						}
					}
				}
				> a{
					color:#46efa4;
					text-transform: uppercase;
					font-weight: bold;

				}
				.list{
					background: #697d92;
					a{
						padding: 17px 0px 17px 45px;

					}
				}
			}
		}
		.backgroundDasar{
			position: relative;
			padding: 30px;
			background: #fff;
			text-align: left;
			-webkit-box-shadow: 0 0 15px #1010101f;
			-moz-box-shadow: 0 0 15px #1010101f;
			box-shadow: 0 0 15px #10101036;
			margin: 15px;
		}

		/* scroll in kredit */
		.icon-scroll {
			background-color: #FFF9;
			padding: 10px 15px;
			border-radius: 5px;
			position: absolute;
			top: 93%;
			right: 50%;
			color: #000;
			z-index: 1041;
			
		}
		.icon-scroll i:hover {
			background: #1A9F68;
			color: #fff;
		}

		/* video play company profile */
		.modal-dialog {
			max-width: 800px;
			margin: 30px auto;
		}

		.modal-body {
			position:relative;
			padding:0px;
		}
		.close {
			position:absolute;
			right:-30px;
			top:0;
			z-index:999;
			font-size:2rem;
			font-weight: normal;
			color:#fff;
			opacity:1;
		}

		/* background */
		.call-actions{
			background-size:cover;
			background-position:center;
			padding:50px 0;
		}
		.call-actions.overlays:before {
			opacity: 0.92;
			
		}
		.call-actions .call-inners {
			z-index: 33;
			position: relative;
		}
		.call-actions .call-inners p {
			color: #eee;
			font-size: 15px;
		}

		.call-actions .call-inners h2 {
			font-size: 34px;
			line-height: 35px;
			color: #fff;
			margin-bottom: 15px;
			font-weight: 700;
		}
		
		.call-actions .call-inners:after {
			content: "";
		}
		.overlays::before {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			content: "";
			transition: all 0.4s ease;
			z-index: 1;
		}

		/* scroll berita */
		.ex1 {
			height: 40px;
			width: 200px;
			overflow-y: scroll;
		}


		

		
		</style>
	</head>
<body id="bg" style="font-family: 'Poppins', sans-serif;">

	<!-- Boxed Layout -->
	<div id="page" class="site boxed-layout"> 
	
	<!-- Preloader -->
	<div class="preeloader">
		<div class="preloader-spinner"></div>
	</div>
	<!--/ End Preloader -->

	<!-- Header -->
	<header class="header">