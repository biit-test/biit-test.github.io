<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package biit
 */

get_header();
?>
	<div class="container">
		<div class="breadcrumbs">
			<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
		</div>
	</div>
		<div class="container">
			<div class="undergraduate">
				<div class="section__name">
					<h1 class="entry-title">Бакалавриат</h1>
				</div>
			    <table>
			        <tr class="undergraduate__table--first__line">
			            <td></td>
			            <td>Количество мест Бюджет / Контракт</td>
			            <td>Стоимость обучения</td>
			            <td>Срок обучения</td>
			        </tr>
			        <tr>
			            <td>Бизнес-информатика</td>
			            <td>0/25</td>
			            <td>от 100 т.р</td>
			            <td>4 года</td>
			        </tr>
			        <tr>
			            <td>Прикладная информатика</td>
			            <td>0/25</td>
			            <td>от 100 т.р</td>
			            <td>4 года</td>
			        </tr>
			        <tr>
			            <td>Педагогическое образование</td>
			            <td>0/25</td>
			            <td>от 100 т.р</td>
			            <td>4 года</td>

			        </tr>
			    </table>
			    <div class="undergraduate__info--table">
			    	<div class="undergraduate__image">
			    		<img src="<?php bloginfo('template_directory') ?>/images/mobile-icon-2.png" alt="">
			    	</div>	
			    	<strong>Документы, необходимые при поступлении:</strong> 	
			    	<p>1.оригинал/копия документа, удостоверяющего личность, гражданство;</p>
			    	<p>2. оригинал/копия документа государственного образца об уровне образования;</p>
			    	<p>3. 2 цветных фото размером 3x4</p>
			    </div>
			</div>
			<div class="graduate">
				<div class="section__name">
					<h1 class="entry-title">Магистратура</h1>
				</div>
				<table>
			        <tr class="garduate__table--first__line">
			            <td></td>
			            <td>Количество мест Бюджет / Контракт</td>
			            <td>Стоимость обучения</td>
			            <td>Срок обучения</td>
			        </tr>
			        <tr>
			            <td>Прикладная информатика</td>
			            <td>0/25</td>
			            <td>от 100 т.р</td>
			            <td>2 года</td>
			        </tr>
			        <tr>
			            <td>Педагогическое образование</td>
			            <td>0/25</td>
			            <td>от 100 т.р</td>
			            <td>2 года</td>

			        </tr>
			    </table>
			</div>
			<div class="hostel">
				<div class="section__name">
					<h1 class="entry-title">Общежитие</h1>
				</div>
				<div class="hostel__content">
					<div class="hostel__image">
						<img src="<?php bloginfo('template_directory') ?>/images/phoca_thumb_m_731.jpg" alt="">
					</div>
						<strong>Директор: Григорьев Сергей Николаевич</strong>
						<p>Адрес: пр-т К. Маркса, 50/1</p>
						<p>Телефон: (3519) 20-55-59</p>
						<p>График работы: пн - чт: 8.00 - 17.00, пт: 8.00 - 15.45, обед: 12.00 - 12.45</p>
						<p>В распоряжение иногородних студентов Магнитогорского государственного технического университета им. Г.И.Носова предоставлен студенческий городок, в состав которого входят 15 общежитий.</p>
				</div>
			</div>
		</div>
	</div><!-- #primary -->
	<style>
		  h1.entry-title{
		      text-align: center;
		      font-size: 22px;
		      font-weight: lighter;
		      padding: 15px 0px;
			  position: relative;
		  }
		  .entry-title:before{
		  	content: "";
			position: absolute;
			width: 50px;
			top: 0px;
			left: -205px;
			right: 0;
			margin: 0 auto;
			height: 50px;
		  }
		  .undergraduate .entry-title:before{
			background: url(<?php bloginfo('template_directory') ?>/images/undergarduate.png) no-repeat;
			background-size: contain;
		  }
		  .graduate .entry-title:before{
			background: url(<?php bloginfo('template_directory') ?>/images/garduate.png) no-repeat;
			background-size: contain;
		  }
		  .hostel .entry-title:before{
			background: url(<?php bloginfo('template_directory') ?>/images/home.png) no-repeat;
			background-size: contain;
		  }

		  table{
		    margin-top: 15px;
		  }
		  tr{
		    background-color: #f5f5f5;
		    color: #323c8d;
			}

		  tr,th,td{
		    background-size: cover;
		    font-size: 16px;
		    border-bottom: #fff solid;
		  }
		  tr td{
		    box-sizing: border-box;
		    padding-left: 10px;
		    height: 40px;
		  }
		  tbody tr:hover{
		    cursor: pointer;
		  }
		  table,.undergraduate__info--table{
		  	margin: 0 auto;
		  	overflow: auto;
		  }
		  .undergraduate__info--table{
		  	max-width: 850px;
		  	background-color: #f5f5f5;
		  }
		  .undergraduate__info--table p{
		  	margin: 0;
		  }
		  .undergraduate table tr.undergraduate__table--first__line{
		      color: #fff;
		  }
		 .undergraduate__image{
			float: left;
			height: 70px;
			/* margin-right: 30px; */
			text-align: center;
			width: 110px;
		 }
		 .undergraduate__image img{
		 	margin-top: 22px;
		 }
		 strong{
		 	margin-left: -10px;
		 }
		 tr.undergraduate__table--first__line,.garduate__table--first__line{
		  	background: url(<?php bloginfo('template_directory') ?>/images/abit-table-bg.jpg) no-repeat;
		      -webkit-background-size: cover;
		      background-size: cover;
		      color: #fff;
		  }
		 .undergraduate,.graduate{
		 	overflow: auto;
		 }
		 .graduate,.hostel{
		 	margin-top: 75px;
		 }
		 .hostel__content{
			max-width: 850px;
			margin: 0px auto 50px;
			background: #f5f5f5;
			padding: 10px 5px;
		 }
		 .hostel__content p{
			margin: 0;
		 }
		 .hostel__image{
		 	float: left;
		 	margin-right:45px;
		 }
		@media (max-width: 660px) {
	      h1.entry-title{
	      	font-size: 18px;
	      }
	      .entry-title:before{
	      	width: 40px;
	      	left: -175px;
	      }
	      .undergraduate__image{
	      	display: none;
	      }
	      .undergraduate__info--table{
	      	width: 100%;
		    box-sizing: border-box;
		    padding: 10px 0px 10px 15px;
	      }
		 strong{
		 	margin-left: 0px;
		 }
		 tr, th, td{
		 	font-size: 12px;
		 }
		 .graduate,.hostel{
		 	margin-top: 12px;
		 }
		 tr.undergraduate__table--first__line,.garduate__table--first__line{
		 	background: #333b8e;
		 }
		 .hostel__image{
			width: 100%;
	    	text-align: center;
		 }
		}
	</style>
	
<?php
	get_footer();

