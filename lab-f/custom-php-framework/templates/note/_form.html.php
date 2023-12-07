<?php
/** @var $note ?\App\Model\Note */
?>

<div class="form-group">
    <label for="title">Title</label>
    <input type="text" id="title" name="note[title]" value="<?= $note ? $note->getTitle() : '' ?>">
</div>

<div class="form-group">
    <label for="teacher">Teacher</label>
    <input type="text" id="teacher" name="note[teacher]" value="<?= $note ? $note->getTeacher() : '' ?>">
</div>

<div class="form-group">
    <label for="content">Content</label>
    <input type="text" id="content" name="note[content]" value="<?= $note ? $note->getContent() : '' ?>">
</div>

<div class="form-group">
    <label></label>
    <input type="submit" value="Submit">
</div>