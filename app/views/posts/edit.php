<?php require APPROOT . '/views/inc/header.php'; ?>
<a href="<?php echo URLROOT ?>/posts" class="btn btn-primary"><i class="fa fa-pencil"></i>Back</a>
<div class="card card-body bg-light mt-5">
    <h2>Edit Post</h2>
    <p>Create a post with this form</p>
    <form action="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['id']; ?>" method="POST">
        <div class="form-group">
            <label for="title">Title: <sup>*</sup></label>
            <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['title']; ?>">
            <span class="invalid-feedback"><?php echo $data['title_error']; ?> </span>
        </div>
        <div class="form-group">
            <label for="body">Body: <sup>*</sup></label>
            <textarea name="body" class="form-control form-control-lg <?php echo (!empty($data['body_error'])) ? 'is-invalid' : ''; ?>" <?php $data['body'] ?>><?php echo $data['body']; ?></textarea>
            <span class="invalid-feedback"><?php echo $data['body_error']; ?> </span>
        </div>
        <input type="submit" class="btn btn-success" value="submit" />
    </form>

    <?php require APPROOT . '/views/inc/footer.php'; ?>