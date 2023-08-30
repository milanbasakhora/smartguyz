<div class="py-4">
    <h5 class="fg-primary">Delete Account</h5>
    <p>Once your account is deleted, all of its resources and data will be permanently deleted. Before
        deleting your account, please download any data or information that you wish to retain.</p>
    <button type="button" class="btn btn-danger"
        onclick="showUserDeleteConfirmation('{{ $user->id }}')">Delete</button>

    <!-- The custom popup message -->
    <div id="userdeleteConfirmation" class="popup">
        <div class="popup-content">
            <h4>Are you sure you want to delete your account?</h4>
            <p class="text-grey">Once your account is deleted, all of its resources and data will be permanently deleted.
                Please enter your password to confirm you would like to permanently delete your account.</p>

            <form action="{{ route('profile.destroy') }}" method="POST" id="deleteForm">
                @csrf
                @method('delete')
                <label for="password">
                    <div class="password-input">
                        <input type="password" name="password" id="userdeletepassword" placeholder="Password"
                            class="form-control">
                        <i class="toggle-password mai-eye-off-outline" data-target="userdeletepassword"></i>
                    </div>
                    <div class="pt-2 error text-danger" id="errorMessage" style="display: none;"></div>
                </label>
                <div class="button-group pt-2">
                    <button type="button" class="btn btn-danger btn-sm" id="deleteButton">
                        Yes, Delete
                    </button>
                    <button type="button" class="btn btn-primary btn-sm" id="cancelButton">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function showUserDeleteConfirmation(userId) {
        var popup = document.getElementById('userdeleteConfirmation');
        popup.style.display = 'block';
        popup.dataset.userId = userId;
    }

    document.addEventListener("DOMContentLoaded", function() {
        const deleteButton = document.getElementById("deleteButton");
        const cancelButton = document.getElementById("cancelButton");
        const deleteForm = document.getElementById("deleteForm");
        const errorMessage = document.getElementById("errorMessage");
        const popup = document.getElementById("userdeleteConfirmation");

        function handleDelete() {
            // Use AJAX to submit the form data asynchronously
            fetch(deleteForm.action, {
                    method: "POST",
                    body: new FormData(deleteForm),
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Redirect to a specific URL using PHP controller code
                        var intendedUrl = "{{ route('home') }}";
                        window.location.href = intendedUrl;
                    } else if (data.errors && data.errors.password) {
                        errorMessage.textContent = data.errors.password[0];
                        errorMessage.style.display = "block";
                    }
                });
        }

        deleteButton.addEventListener("click", handleDelete);

        cancelButton.addEventListener("click", function() {
            hideUserDeleteConfirmation();
        });

        document.addEventListener("keypress", function(event) {
            if (event.key === "Enter") {
                if (popup.style.display === "block") {
                    handleDelete();
                    event.preventDefault(); // Prevent form submission
                }
            }
        });

        function hideUserDeleteConfirmation() {
            popup.style.display = 'none';
        }

        function showUserDeleteConfirmation(userId) {
            popup.style.display = 'block';
            popup.dataset.userId = userId;
        }
    });
</script>
