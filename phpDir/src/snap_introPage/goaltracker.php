<?php include 'header.php' ?>
<div id="container">
    <h1>New Goal</h1>
    <form action="insert_goal.php" method="post">
        <label for="cat">Category</label>
        <select name="cat" id="cat">
            <option value="0">Personal</option>
            <option value="1">Professional</option>
            <option value="2">Other</option>
        </select>
        <label for="text">Goal</label>
        <textarea name="text" id="text"></textarea>
        <label for="goaldate">Date</label>
        <input type="date" id="goaldate" name="goaldate" />
        <label for="complete">Goal Completed</label>
        <input type="checkbox" id="complete" name="complete" value="1" /><br />
        <button type="submit">Submit Goal</button>
    </form>
</div>