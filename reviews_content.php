<?php require 'Includes/header.php'; ?>

<div class="review-form-container">
    <form id="review-form" action="submit_review.php" method="post">
        <label for="project-select">Choose a project to review:</label>
        <select id="project-select" name="project">
            <option value="">--Please choose an option--</option>
            <option value="project1">Neous HM</option>
            <option value="project2">ID info</option>
            <option value="project3">Home Credit</option>
            <option value="project4">Home Credit Web app</option>
            <option value="project5">Azure Data</option>
            <option value="project6">Diet Tracker</option>
        
        </select>

        <label for="name">Your name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name">

        <label for="company">Company:</label>
        <input type="text" id="company" name="company" placeholder="Enter your company">

        <label for="review">Review:</label>
        <textarea id="review" name="review" placeholder="Write your review here..." rows="4"></textarea>

        <div class="form-buttons">
            <button type="button" onclick="resetForm()">Cancel</button>
            <button type="submit">Submit</button>
        </div>
    </form>
</div>

<script>
function resetForm() {
    document.getElementById("review-form").reset();
}
</script>

<?php require 'Includes/footer.php'; ?>
