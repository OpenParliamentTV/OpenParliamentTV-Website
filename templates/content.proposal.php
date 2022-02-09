<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="utf-8">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="Expires" content="-1">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Project Proposal - Open Parliament TV</title>

	<meta itemprop="name" content="<?php echo L::brand; ?>">
    <meta name="twitter:title" content="Project Proposal - <?php echo L::brand; ?>">
    <meta property="og:title" content="Project Proposal - <?php echo L::brand; ?>">

    <meta name="description" content="<?php echo L::tagline; ?>">
    <meta itemprop="description" content="<?php echo L::tagline; ?>">
    <meta name="twitter:description" content="<?php echo L::tagline; ?>">
    <meta property="og:description" content="<?php echo L::tagline; ?>">

    <meta itemprop="image" content="https://openparliament.tv/client/images/thumbnail.png">
    <meta name="twitter:image" content="https://openparliament.tv/client/images/thumbnail.png">
    <meta property="og:image" content="https://openparliament.tv/client/images/thumbnail.png">

    <meta name="twitter:card" content="summary_large_image">
    <meta property="og:type" content="article">

	<link rel="icon" type="image/png" href="favicon.png" />
	
	<link type="text/css" rel="stylesheet" href="client/css/bootstrap.min.css" media="all" />
	<link type="text/css" rel="stylesheet" href="client/css/Chart.min.css" media="all" />
	<link type="text/css" rel="stylesheet" href="client/css/frametrail-webfont.css" media="all" />
	<link type="text/css" rel="stylesheet" href="client/css/style.css" media="all" />
	<!-- Matomo -->
	<script>
	  var _paq = window._paq = window._paq || [];
	  /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
	  _paq.push(['trackPageView']);
	  _paq.push(['enableLinkTracking']);
	  (function() {
	    var u="//stats.openparliament.tv/";
	    _paq.push(['setTrackerUrl', u+'matomo.php']);
	    _paq.push(['setSiteId', '2']);
	    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
	    g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
	  })();
	</script>
	<!-- End Matomo Code -->
</head>
<body>
	<?php include_once('header.php'); ?>
	<main style="margin-top: 40px;">
		<div class="row m-0" style="position: relative; z-index: 1">
			<div class="container text-center">
				<h1 style="font-size: 30px;">Open Parliament TV</h1>
				<h2>An Open Source<sup>*</sup> Project Proposal</h2>
			</div>
		</div>
		<section id="introduction" style="padding-top: 40px;">
			<div class="container">
			<div class="row">
			  <div class="col-lg-10 mx-auto">
				<div class="alert alert-warning text-center"><?php echo L::messageProposalOutdated; ?> <br><?php echo L::comingSoon; ?></div>
				<div class="row" style="margin-bottom: 20px;">
				  <div class="col-lg-12 mx-auto">
					<h4>TL;DR</h4>
					<p>We want to open up parliamentary debates by making the speeches more accessible and understandable.</p>
					<p>Our first step is to build up a community of people from various backgrounds (journalists, coders, political activists, social -and political scientists, librarians and archivists), who share the goal to fundamentally change the way we interact with video-based publications of political speeches.</p>
					<p>This proposal is meant to serve as a common starting point to trigger discussions and kick off collaborations. It is by no means finished and meant to be enhanced, remixed and adapted, depending on different contexts (academic research, open goverment advocacy, civic tech) or specific funding schemes. Our wish is to continue this as an openly licensed (<a href="http://creativecommons.org/publicdomain/zero/1.0/" target="_blank">CC0</a>) project proposal, so everyone can benefit from future work. </p>
					<p>Like many other great ideas, this effort was kicked off at <a href="https://mozillafestival.org/" target="_blank">Mozilla Festival</a> in London!</p>
				  </div>
				</div>
				<hr style="margin-bottom: 40px;">
				<h2>Introduction</h2>
				<p class="lead"></p>
				<div class="row">
				  <div class="col-lg-6 mx-auto">
					<p class="lead">Transparent, accessible and participatory democratic processes are key to (re-)establishing trust in democracy itself. </p>
					<p>Plenary debates - be that in national parliaments, the American Congress or on EU parliament level - are the publicly visible outcome of controversial internal debates, hearings, negotiations and analyses. Videos of the respective speeches are the “spectacular” parts of politics, which find their way into newsrooms, social media feeds and Late Night Shows. </p>
					<p>The way video contents are currently published is largely based upon sharing short, spectacular moments, with a clear lack of contextual information (full speech, relevant original documents, additional materials, other speeches on the same subject, public discourse, analyses, fact checks, etc.). This leaves us in a situation where video clips are used to share short moments, but as soon as the speeches are used for in-depth analyses, fact checks, learning or longform reporting, we rely solely on the text-based transcripts and quotes. Additionally, current video formats lack means of participation in the form of content-related discussions (based on specific scenes) or direct feedback channels between citizens and their elected politicians. </p>
				  </div>
				  <div class="col-lg-6 mx-auto">
					<p>In this project, we aim to build the workflows, tools and user interfaces required to facilitate new ways of experiencing political speeches. We want to enrich the video recordings with time-based transcripts (click on a sentence → point of time in the video), context-related annotations (display relevant documents at certain points of time) and means of participation (discuss, cite and share specific video segments). This is not about yet another platform. All components are meant to be dynamically extendable and interoperable with different ecosystems. </p>
					<p>The goal of this project is to fundamentally change the way people interact with video-based publications of parliamentary debates. It is based on existing approaches in several countries, with a focus on generic open source solutions, which can be integrated in different jurisdictions, languages, countries, parliamentary systems and technological environments.
					</p>
					<p>This is both a collaborative project proposal and a call for action. A consortium for this project needs to include a diverse set of players ranging from academic institutions, advocacy organisations, news labs, citizen initiatives and, wherever possible, the parliamentary administrations themselves.
					</p>
				  </div>
				</div>
			  </div>
			</div>
			</div>
			</section>

			<section id="background" class="bg-light">
			<div class="container">
			<div class="row">
			  <div class="col-lg-8 mx-auto">
				<h2>Background</h2>
				<p>Almost every parliament publishes video recordings as well as text-based transcripts or protocols of parliamentary speeches, along with other documents like bills, laws, analyses or party standpoints. </p>
				<p>In many countries these publications are required by law and in some cases the materials are even in the public domain. But despite comparable structures and similar country-specific workflows, parliamentary proceedings are published in various, non-interoperable formats and the parliament tv infrastructures are not accessible beyond the boundaries of specific platforms. </p>
				<p>There are however many promising approaches to developing generic, inter-parliamentary document standards, ontologies and description models for parliamentary proceedings and legislative processes. Parliamentary administrations are in some cases actively involved in the standardization process, like the <a href="https://pds.blog.parliament.uk/" target="_blank">Parliamentary Digital Service</a> in the UK, which is a main driver in designing <a href="https://ukparliament.github.io/ontologies/" target="_blank">parliamentary data models, APIs and ontologies</a>. The respective specifications are openly discussed in the <a href="https://www.w3.org/community/opengov/" target="_blank">W3C Open Government Community Group</a>, namely <a href="http://www.popoloproject.com/" target="_blank">Popolo</a>, <a href="https://github.com/OpenGovLD/specs" target="_blank">OpenGovLD</a>, and <a href="https://github.com/argu-co/popolo-ori" target="_blank">Popolo-ORI</a>, as well as an <a href="https://github.com/schemaorg/schemaorg/issues/1743" target="_blank">extension of the schema.org vocabularies</a>. In the <a href="https://history.blogs.sas.ac.uk/tag/digging-into-linked-parliamentary-data/" target="_blank">DiLiPaD</a> (Digging into Linked Parliamentary Data) project, some of these principles have been applied to parliamentary proceedings in order to build a common search engine for proceedings of the Netherlands, the UK and Canada, based on Linked Open Data and Semantic Web technologies. The <a href="http://www.talkofeurope.eu/" target="_blank">Talk of Europe</a> project built upon the same principles, but with a focus on EU parliament proceedings. The Talk of Europe partners also employed additional means of analyzing the proceedings regarding media coverage of debates and identified subjects. With regards to parliamentary proceedings data, the CLARIN ERIC research infrastructure offers access to a comprehensive <a href="https://www.clarin.eu/resource-families/parliamentary-corpora" target="_blank">list of publicly accessible parliamentary corpora</a>. Within the CLARIN ERIC framework, there are efforts to implement <a href="https://github.com/clarin-eric/parla-clarin" target="_blank">document standards for parliamentary proceedings based on the TEI XML Schema</a>. With a focus on the German Bundestag and the United Nations General Assembly, the <a href="https://polmine.github.io/about/" target="_blank">PolMine</a> project resulted in sets of tools and document parsers to transcode respective parliamentary proceedings and legislative processes. These efforts were also discussed in two ParlaCLARIN workshops at <a href="https://www.clarin.eu/ParlaCLARIN" target="_blank">LREC2018</a> and most recently at <a href="https://www.clarin.eu/ParlaCLARIN-II" target="_blank">LREC2020</a>.</p>
				<p>Within the realm of civil society and parliamentary monitoring organisations, proceedings have also been opened up in community-driven efforts, like "OffenesParlament" in <a href="https://offenesparlament.de/" target="_blank">Germany</a> and <a href="https://offenesparlament.at/" target="_blank">Austria</a>, <a href="https://www.theyworkforyou.com/debates/" target="_blank">TheyWorkForYou Debates</a> in the UK, <a href="https://www.nosdeputes.fr/" target="_blank">NosDéputés</a> in France, <a href="https://parlameter.si/" target="_blank">Parlameter</a> in Slovenia or <a href="https://k.blog.hu/2017/12/05/the_language_of_the_hungarian_parliament_1990" target="_blank">Parliamentary Debates Open</a> in Hungary. </p>
				<p class="lead">But despite the availability of the corresponding audiovisual recordings, such efforts have - with very few exceptions - been purely text-based. </p>
				<p>On the level of national parliaments, several projects explored ways of aligning parliamentary proceedings (and other types of text transcripts) with the video recordings of speeches in order to create a searchable index of time-based transcripts, like <a href="http://www.polimedia.nl/about?lang=en" target="_blank">PoliMedia</a> in the Netherlands or the <a href="https://archive.org/details/us_congress_archive" target="_blank">TV News Archive</a> platform in the US. <br>
				The UK-based platform TheyWorkForYou previously attempted to <a href="https://www.theyworkforyou.com/video/" target="_blank">align parliamentary proceedings with video recordings</a> of the UK House of Commons debates in a manual and community-driven effort. </p>
				<p>The development of inter-parliamentary exchange formats, ontologies and vocabularies still requires more work, but the general availability of parliamentary proceedings as open data is progressing in many European countries, as well as on EU parliament level. </p>
				<p>More problematic is the usability of video recordings. While most countries provide video streams of parliamentary debates online, the systems and platforms are mostly proprietary, do not contain appropriate APIs and often come with strict copyright restrictions on the audiovisual material (eg. in the <a href="https://www.parliament.uk/site-information/copyright-parliament/pru-licence-agreements/downloading--sharing-terms--conditions/" target="_blank">UK</a> and <a href="http://www.cpac.ca/en/terms-of-use/" target="_blank">Canada</a>). </p>
				<p class="lead">In order to open up the debates, the parliament tv archives need to be more accessible and need to be handled with the same openness and transparency aspirations as other parliamentary data.</p>
				<p>Video recordings of parliamentary debates </p>
				<ul>
					<li>need to be published under <a href="https://creativecommons.org/licenses/" target="_blank">Creative Commons</a> licenses if they are not already in the public domain</li>
					<li>should be accessible and downloadable via persistent identifiers</li>
				</ul> 
				<p>Organisations like <a href="https://okfn.org/" target="_blank">Open Knowledge International</a>, the <a href="https://wikimediafoundation.org/" target="_blank">Wikimedia Foundation</a> or <a href="https://creativecommons.org/about/" target="_blank">Creative Commons</a> need to take part in an advocacy effort towards opening up parliamentary audio and video materials. Multi-stakeholder forums like the <a href="https://www.opengovpartnership.org/" target="_blank">Open Government Partnership</a>, <a href="https://openingparliament.org/declaration/" target="_blank">OpeningParliament.org</a> (Declaration on Parliamentary Openness) and the <a href="https://parliament.watch/" target="_blank">Parliamentwatch Network</a> should be actively involved in this process. </p>
				<p class="lead">This project will only be successful, if advocacy organisations team up with research institutions, parliaments and open data activists to develop a common set of simple, reusable, openly licensed and well documented components. </p>
			  </div>
			</div>
			</div>
			</section>

			<section id="innovationpotential">
			<div class="container">
			<div class="row">
			  <div class="col-lg-10 mx-auto">
				<h2>Innovation Potential</h2>
				<div class="row">
				  <div class="col-lg-6 mx-auto">
					<p>Beyond standardized parliamentary proceedings and accessible video recordings, there is a clear lack of open tools which cover the (semi-)automated alignment (synchronisation) of parliamentary speeches, as well as the platform-independent publication of respective audiovisual formats. </p>
					<p>In order to analyze, visualize and contextualize speeches held in different parliaments, a generic set of interoperable components is needed, suitable for more than one specific parliamentary architecture. This includes the design of a standardized exchange format, which can reflect transcripts, content descriptions, enrichments and annotations in the context of video recordings. </p>
					<p>Internally developed parliamentary infrastructure alone will not fulfill these requirements. Neither will a purely academic research context. The pace of innovation within public administrations and the project-centric nature of academic research are not likely to provide an environment in which the project will successfully and permanently change how citizens engage with parliamentary debates. As this is one of the declared goals, the consortium also needs to include more permanently involved entities with an already active user base and community. </p>
				  </div>
				  <div class="col-lg-6 mx-auto">
				  	<p>The core challenges are </p>
					<ul>
					  <li>designing inter-parliamentary workflows for both textual and audiovisual data</li>
					  <li>developing a set of small, simple and interoperable components</li>
					  <li>developing a generic API for different parliament tv environments, based on the parliamentary proceedings / protocols</li>
					  <li>designing innovative user interfaces for context-related audiovisual annotations</li>
					</ul>
				  	<p>By joining forces in an unconventional consortium and focusing on simple technological components, we will be able to implement the proposed workflows, tools and user interfaces in a shorter time frame and with a smaller budget than in a more traditional institutional setting.</p>
					<p class="lead">Instead of aiming for maximum exactness of an automated process or dealing with specific peculiarities of one parliamentary administration, we focus on the broad applicability and reusability of the developed components. </p>
				  </div>
				</div>
			  </div>
			</div>
			</div>
			</section>

			<section id="researchpotential" class="bg-light">
			<div class="container">
			<div class="row">
			  <div class="col-lg-8 mx-auto">
				<h2>Research Potential</h2>
				<p class="lead">Work in progress</p>
				<!--
				<p>Specific potential for innovation lies in the development of an exchange format for audiovisual contents plus annotations, which builds upon existing Linked Open Data schemes and is thus compatible with previously developed inter-parliamentary data models and ontologies. In the  GLAM sector (Galleries, Libraries, Archives, Museums), the <a href="https://iiif.io/community/consortium/" target="_blank">IIIF consortium</a> aims to define common standards and APIs around the presentation of image-based contents. The <a href="https://iiif.io/community/groups/av/" target="_blank">IIIF A/V Technical Specification Group</a> is working on an extension of these standards towards the <a href="https://iiif.io/api/presentation/3.0/" target="_blank">presentation of audiovisual contents and annotations</a>. These efforts are <a href="https://openhypervideo.github.io/iiif-interactive-transcript/" target="_blank">directly related to the presentation of parliamentary speeches</a> and currently have the potential to become a de facto standard far beyond the humanities domain. An interdisciplinary collaboration on respective implementations could be a direct benefit for research infrastructures like <a href="https://www.clarin.eu/" target="_blank">CLARIN</a> and <a href="https://www.dariah.eu/" target="_blank">DARIAH</a>, research communities around interactive broadcasting and online video experiences like <a href="https://tvx.acm.org/" target="_blank">ACM TVX</a>, the <a href="https://www.w3.org/2013/data/" target="_blank">Semantic Web community</a> and the international community of technology-focused open government initiatives like the <a href="https://www.w3.org/community/opengov/" target="_blank">W3C Open Government Community Group</a>. </p>
				-->
				<p>[...]</p>
				<p>Besides an interdisciplinary academic collaboration, the inclusion of multi-stakeholder open government advocacy groups and parliamentary monitoring organisations allows us to employ permanent workflows (as opposed to project-specific “datasets”), facilitates an early community building process and enables the integration of selected components as parts of existing platforms. The goal to change how citizens engage with parliamentary debates can in fact not be reached without these partners. </p>
			  </div>
			</div>
			</div>
			</section>

			<section id="researchpotential" class="">
			<div class="container">
			<div class="row">
			  <div class="col-lg-10 mx-auto">
				<h2>Component Ecosystem</h2>
				<p class="lead">Work in progress</p>
				<a href="client/images/component-system.png">
					<img style="width: 100%;" src="client/images/component-system.png">
				</a>
			  </div>
			</div>
			</div>
			</section>

			<section id="getinvolved" class="bg-light">
			<div class="container">
			  <div class="row" style="margin-bottom: 20px;">
				<div class="col-lg-10 mx-auto">
				  <h2>Get involved</h2>
				  <p style="margin-top: 20px;">Several research institutions, parliamentary monitoring organisations, civic tech communities and individuals are already part of  this process. As soon as we can, we'll publish those here. Until that happens, please contact us to learn more or get involved.</p>
				</div>
			  </div>
			  <hr style="margin-bottom: 40px;">
			  <div class="row">
				<div class="col-lg-10 mx-auto">
				  <p>For any questions or collaboration ideas, contact us via </p>
				  <p>joscha.jaeger [at] openparliament.tv <br><br>or ping us via Twitter: <a href="http://twitter.com/OpenParlTV">@OpenParlTV</a></p>
				</div>
			  </div>
			</div>
			</section>

			<!-- Footer -->
			<div style="background-color: var(--primary-fg-color); padding: 30px 0;">
			<div class="container">
			<p class="m-0 text-center text-white"><sup>*</sup> This proposal including all ideas, texts and graphics is published under a <a style="color: #fff; font-weight: bold;" rel="license"
			href="http://creativecommons.org/publicdomain/zero/1.0/">CC0 license</a> (public domain dedication). <br>Take it, remix it, share it, translate it and use it for funding applications. The point is to get it done.<br>
			<br>Collaborators: Joscha Jaeger, Liliana Melgar Estrada, Kaspar Beelen, Philo van Kemenade, Alexa Steinbrück
				</p>
			</div>
			<!-- /.container -->
			</div>
	</main>
	<script type="text/javascript" src="client/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="client/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="client/js/Chart.min.js"></script>
	<script type="text/javascript" src="client/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="client/js/index.js"></script>
</body>