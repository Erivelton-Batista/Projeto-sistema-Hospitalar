//Js de mascara de senha
		<script>
			function mostrar_senha(){
				var tipo = document.getElementById("senha");

				if (tipo.type == "password") {
					tipo.type = "text";
				}else{
					tipo.type = "password";
				}
			}
		</script>