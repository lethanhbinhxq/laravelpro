var exampleModal = document.getElementById('editModal')
exampleModal.addEventListener('show.bs.modal', function (event) {
    // Button that triggered the modal
    var button = event.relatedTarget
    // Extract info from data-bs-* attributes
    var id = button.getAttribute('data-bs-id')
    var name = button.getAttribute('data-bs-name')
    var status = button.getAttribute('data-bs-status');
    // If necessary, you could initiate an AJAX request here
    // and then do the updating in a callback.
    //
    // Update the modal's content.
    var modalName = exampleModal.querySelector('.modal-body #name')
    var modalStatus = exampleModal.querySelector('.modal-body #status')
    var form = exampleModal.querySelector('#editForm')

    modalName.value = name
    modalStatus.value = status
    form.action = "/admin/user/update/" + id
})