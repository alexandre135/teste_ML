<section class="second d-flex flex-column flex-md-row justify-content-center">
	<div id="blue_box" data-toggle="modal" data-target="#youtubeModal">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blue_box.png">
	</div>
	<article class="align-self-center">
		<header>
			<h2 class="mb-4 mt-4 mt-md-0">Assuma agora o  <span>controle dos gastos</span> variáveis da sua empresa</h2>
		</header>
		<p>
			O BPP Corp é uma solução única para a administração de gastos corporativos que conta com uma conta digital empresarial grátis, cartões VISA pré-pagos para controle total das despesas e um aplicativo sem custos adicionais para tornar seu controle financeiro mais simples e prático! 
		</p>
	</article>
</section>
<section class="modal fade" id="youtubeModal">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	<div id="dialogModal" class="modal-dialog modal-dialog-centered">
	    <div class="modal-content">
	      <div class="modal-body" style="padding:0">
	      </div>
	    </div>
	</div>
</section>
<script>
	
	const loadIframe = () =>{
		const isMobile = screen.width
		const bodyModal = document.querySelector('.modal-body')
		const iframe = document.createElement('iframe')
		const dialogModal = document.getElementById("dialogModal")
		let widthScreen
		let heightScreen
		
		if(isMobile < 768){
			widthScreen = `${isMobile - 20}px`
			heightScreen = '250px'
				dialogModal.classList.add("modal-sm")
		} else{
			widthScreen = '798px'
			heightScreen = '512px'
			dialogModal.classList.add("modal-lg")
		}

		iframe.setAttribute("src", "https://www.youtube.com/embed/lpfRmbr4_Sk")
		iframe.setAttribute("frameborder", "0")
		iframe.style.width = widthScreen;
    	iframe.style.height = heightScreen;
		bodyModal.appendChild(iframe)

	}
	const removeIframe = () =>{
		const bodyModal = document.querySelector('.modal-body')
		const iframe = bodyModal.querySelector('iframe')
		bodyModal.removeChild(iframe)		
	}

	const handler = document.getElementById('blue_box')
	handler.addEventListener('click', loadIframe)

	$('#youtubeModal').on('hidden.bs.modal', removeIframe)

</script>