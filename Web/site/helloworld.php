<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=Assests("/")?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Hello World</title>
</head>

<style>
    body{
        padding-top:20px;
        background: #131f43;
    }


@media only screen and (min-width: 768px){
body:not(.layout-admin) .section, body:not(.layout-admin) section {
    padding: 100px 0;
}
}

.d-middle {
    align-items: center;
    display: flex;
    justify-content: center;
}

.opacity-8,.overlay-opacity-8:after {
    opacity: .8
}

opacity-8, .overlay-opacity-8:after {
    opacity: .8;
}
.overlay-dark-hover:hover:after, .overlay-dark:after {
    background: #131f43;
}
.overlay-dark-hover:after, .overlay-dark:after, .overlay-light-hover:after, .overlay-light:after {
    bottom: 0;
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    width: 100%;
    z-index: 0;
}

.bg-theme-color-light {
    background: #131f43!important;
}
.bg-cover {
    background-position: 50%!important;
    background-repeat: no-repeat!important;
    background-size: cover!important;
}
.overlay-dark, .overlay-dark-hover, .overlay-light, .overlay-light-hover {
    position: relative;
}
#overlay-default, .overlay-dark, .overlay-dark-hover:after, .overlay-default, .overlay-light, .overlay-light-hover:after {
    transition: all .2s ease;
}
.section, section {
    position: relative;
    word-break: break-word;
}

.overlay-dark>*, .overlay-light>* {
    position: relative;
    z-index: 1;
}
</style>
<body>

<div class="section bg-theme-color-light overlay-dark overlay-opacity-8 bg-cover lazy" >
    			
				<div class="container"> 

					<div class="row text-center-md text-center-xs d-middle justify-content-start">
						
						<div class="col-12 col-lg-6 mb-5 text-white aos-init aos-animate" data-aos="fade-in" data-aos-delay="0" data-aos-offset="0">

							<!-- main title -->
							<h1 class="display-4 fw-bold mb-0">
								<span class="d-inline-block">

									<span class="text-danger">Hello</span> Hello
								</span>
							</h1>
							
							<!-- slogan -->
							<p class="h3 fw-normal mb-0">
								Bem vindo ao meu mini framework PHP
							</p>

						</div>


					</div>

				</div>

			</div>
    
</body>
</html>