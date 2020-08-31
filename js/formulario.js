const $form = document.querySelector('#formulario')
$form.addEventListener('submit', (event) => {
	event.preventDefault()
	const formData = new FormData(document.getElementById($form))
	debugger
})