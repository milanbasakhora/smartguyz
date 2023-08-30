// Reply toggle
$(document).ready(function() {
    // When the "Comment" icon is clicked, toggle the visibility of the comment form
    $(".comment-icon").on("click", function() {
        var commentId = $(this).data("comment-id");
        $(".comment-form[data-comment-id='" + commentId + "']").toggle();
    });

    // Handle the "Reply" button inside the comment form
    $(".comment-form button[type='button']").on("click", function() {
        // Here, you can add the logic to submit the comment form to your server
        // For simplicity, let's just hide the comment form when the "Reply" button is clicked
        $(this).closest(".comment-form").hide();
    });
});


// jQuery code for comment-options dropdown
$(document).ready(function() {
    $(".mai-chevron-down").click(function() {
      $(this).siblings(".comment-options").toggle();
    });

    $(document).click(function(e) {
        const target = $(e.target);
        if (!target.closest(".options").length) {
        $(".comment-options").hide();
        }
    });
});

// Collapse/Expand Toggle
document.addEventListener('DOMContentLoaded', function () {
    // Get all elements with the class "like py-2 pr-2 cursor ml-auto"
    const toggleIcons = document.querySelectorAll('.like.cursor.ml-auto');

    // Add click event listener to each element
    toggleIcons.forEach((toggleIcon) => {
        const addIcon = toggleIcon.querySelector('i.mai-add');
        const removeIcon = toggleIcon.querySelector('i.mai-remove');

        // Add click event listener to the current element
        toggleIcon.addEventListener('click', function () {
            // Toggle the visibility of the icons by adding/removing the "hidden" class
            addIcon.classList.toggle('hidden');
            removeIcon.classList.toggle('hidden');
        });
    });
});

// Comment Edit
function toggleEdit(commentId) {
    const commentTextElement = document.querySelector(`#commentText_${commentId}`);
    const editContainer = document.querySelector(`#editContainer_${commentId}`);

    // Toggle display between comment text and edit container
    if (commentTextElement.style.display === 'none') {
      commentTextElement.style.display = 'block';
      editContainer.style.display = 'none';
    } else {
      commentTextElement.style.display = 'none';
      editContainer.style.display = 'block';
    }
}

function cancelEdit(commentId) {
    const commentTextElement = document.querySelector(`#commentText_${commentId}`);
    const editContainer = document.querySelector(`#editContainer_${commentId}`);

    // Toggle display between comment text and edit container
    commentTextElement.style.display = 'block';
    editContainer.style.display = 'none';
}

// Function to show the delete confirmation popup
function showDeleteConfirmation(commentId) {
    var popup = document.getElementById('deleteConfirmation' + commentId);
    popup.style.display = 'block';
    // Store the comment ID in a data attribute to use later when confirming the delete action
    popup.dataset.commentId = commentId;
}

// Function to hide the delete confirmation popup
function hideDeleteConfirmation(commentId) {
    var popup = document.getElementById('deleteConfirmation' + commentId);
    popup.style.display = 'none';
}






