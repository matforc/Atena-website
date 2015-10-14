<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="row">
				<div id="hero">
				<embed class="hero-img" type="image/svg+xml" src="<?php bloginfo('template_directory'); ?>/img/svganimation2.svg" />
				</div> <!-- end hero -->
				</div>
				<div id="services" style="display:block; height: 50px;" ></div>
				 <section id="servizi" class="content-1-9 content-block">
			
		<div class="container" id="first-section">
            <div class="underlined-title">
				<div class="title">
	        		<h1>Servizi</h1>
				</div>
				<hr>
				<div class="subtitle">
	        		<h2><span class="accent">ATENA</span> offre soluzioni semplici e di qualità per una <span class="accent2">COMUNICAZIONE</span> vincente</h2>
				</div>
        	</div>

            <div class="row">
                <div class="container first-line">
                <div class="col-md-4 col-sm-12 col-xs-12 pad25">
					<div class="col-xs-2">
						<span class="fa fa-pencil"></span>
					</div>
					<div class="col-xs-10">
						<div class="title-servizi">
							<h3>Branding</h3>
						</div>
						<div class="content-servizi">
							<p>Ogni prodotto o servizio di qualità necessita di un immagine che lo sia altrettanto.
								Atena offre soluzioni grafiche innovative per stare al passo con i tempi.
								Per far si che il tuo logo sia bello ora ma anche fra 20 anni.</br>
							   	Progettazione loghi, biglietti da visita, restyling loghi, ritracciatura loghi in vettoriale, naming,carta intestata e buste, brochure e volantini.
							</p>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-12 col-xs-12 pad25">
					<div class="col-xs-2">
						<span class="fa fa-code"></span>
					</div>
					<div class="col-xs-10">
						<div class="title-servizi">
							<h3>Web Design</h3>
						</div>
						<div class="content-servizi">
							<p>Realizziamo siti web responsive (accessibili da ogni disposivo mobile), statici o diamici.
							 Ad esempio siti e-commerce, blog di ricette, ristoranti, hotels e B&B e data l'eccezionale versatilità utilizziamo Wordpress. 
							 Con Wordpress ogni cliente avrà la possibilità di gestire i contenuti del proprio sito completamente in autonomia.
							 </p>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-12 col-xs-12 pad25">
					<div class="col-xs-2">
						<span class="fa fa-comments-o"></span>
					</div>
					<div class="col-xs-10">
						<div class="title-servizi">
							<h3>Social Media Marketing</h3>
						</div>
						<div class="content-servizi">
							<p>I Social Media come Facebook e Twitter stanno modificando velocemente
							 il modo di comunicare delle aziende con i propri clienti. Saper comunicare ed essere presenti nei social,
							 oggi è importante. Con i nostri servizi puoi iniziare un dialogo cotruttivo e vantaggioso con i tuoi clienti</p>
						</div>
					</div>
				</div>
				</div> <!-- .container fisrt-line -->
				<div class="container">
				<div class="col-md-4 col-sm-12 col-xs-12 pad25">
					<div class="col-xs-2">
						<span class="fa fa-search"></span>
					</div>
					<div class="col-xs-10">
						<div class="title-servizi">
							<h3>SEO</h3>
						</div>
						<div class="content-servizi">
							<p>Se il tuo sito è invisibile su Google oppure se il sito è nuovo o in fase di progettazione e vuoi progettarlo usando la struttura
							migliore. Offriamo servizi mirati al posizionamento del sito sui principali motori di ricerca. Nessuna formula magica, ma un insieme
							di piccoli e meno piccoli accorgimenti che tutti assieme faranno la differenza.</p>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-12 col-xs-12 pad25">
					<div class="col-xs-2">
						<span class="fa fa-camera-retro"></span>
					</div>
					<div class="col-xs-10">
						<div class="title-servizi">
							<h3>Foto e Video</h3>
						</div>
						<div class="content-servizi">
							<p>Distinguersi è un must nel mercato di oggi. </br>L'unico modo efficace per mettere in evidenza
							 le particolarità della propria attività è tramite la realizzazione di contenuti Fotografici e Video ad hoc.
							 Sia che tu voglia semplicemente distinguerti oppure creare tutte le foto e video per il tuo sito e-Commerce,
							 Atena dispone di professionisti fotografi e video makers per valorizzare al massimo il tuo messaggio e il tuo prodotto/servizio.</p>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-12 col-xs-12 pad25">
					<div class="col-xs-2">
						<span class="fa fa-cogs"></span>
					</div>
					<div class="col-xs-10">
						<div class="title-servizi">
							<h3>Risoluzione problemi</h3>
						</div>
						<div class="content-servizi">
							<p>Il tuo sito non funziona come vorresti? Hai problemi tecnici di vario tipo? Vuoi trasferire il tuo dominio? Vuoi creare un dominio? Oppure vuoi effetturare backup periodici del tuo database.
							Hai subito un attacco hacker e hai bisogno di assitenza immediata. Atena offre una vasta gamma di servizi tecnici, cosa aspetti?
							Chiedici informazioni senza impegno.
							</p>
						</div>
					</div>
				</div>
                </div>
            </div><!-- .row -->
        </div><!-- .container -->
    
    </section> <!-- #servizi  -->

    <?php get_template_part( 'portfolio' ); ?> 
<?php get_footer(); ?>